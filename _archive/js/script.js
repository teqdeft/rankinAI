/* ==========================================================================
   RankinAI — script.js

   Behaviour ported from the "Homepage v3" design canvas. Two deliberate
   departures, both improvements on a real page:

   1. The canvas pins the header with a JS transform on every animation
      frame, because its host scrolls by transforming a wrapper and CSS
      sticky has no scroll range there. Here the header is position:sticky,
      so that code is gone entirely — same result, no work per frame.

   2. Panels open on hover on the desktop, exactly as designed, but they
      also open on click and on keyboard focus. Hover alone locks out
      anyone using a keyboard or a touchscreen.
   ========================================================================== */

(function () {
  'use strict';

  var DESKTOP = '(min-width: 901px)';
  var CLOSE_DELAY = 140;   /* matches the canvas */

  var body        = document.body;
  var navToggle   = document.querySelector('[data-nav-toggle]');
  var nav         = document.querySelector('[data-nav]');
  var triggers    = Array.prototype.slice.call(document.querySelectorAll('[data-panel-trigger]'));
  var closeTimer  = null;

  function isDesktop() {
    return window.matchMedia(DESKTOP).matches;
  }

  function panelFor(trigger) {
    var id = trigger.getAttribute('aria-controls');
    return id ? document.getElementById(id) : null;
  }

  /* ------------------------------------------------------------------------
     Panels
     ------------------------------------------------------------------------ */
  function closeAll(except) {
    triggers.forEach(function (t) {
      if (t === except) return;
      var panel = panelFor(t);
      if (panel) panel.classList.remove('is-open');
      t.setAttribute('aria-expanded', 'false');
    });
  }

  function openPanel(trigger) {
    var panel = panelFor(trigger);
    if (!panel) return;
    closeAll(trigger);
    panel.classList.add('is-open');
    trigger.setAttribute('aria-expanded', 'true');
  }

  function closePanel(trigger) {
    var panel = panelFor(trigger);
    if (panel) panel.classList.remove('is-open');
    trigger.setAttribute('aria-expanded', 'false');
  }

  function togglePanel(trigger) {
    if (trigger.getAttribute('aria-expanded') === 'true') {
      closePanel(trigger);
    } else {
      openPanel(trigger);
    }
  }

  function arm()    { window.clearTimeout(closeTimer); }
  function disarm() {
    window.clearTimeout(closeTimer);
    closeTimer = window.setTimeout(function () { closeAll(); }, CLOSE_DELAY);
  }

  triggers.forEach(function (trigger) {
    var panel = panelFor(trigger);

    /* Desktop: hover opens, and the panel keeps itself open underneath */
    trigger.addEventListener('mouseenter', function () {
      if (!isDesktop()) return;
      arm();
      openPanel(trigger);
    });
    trigger.addEventListener('mouseleave', function () {
      if (!isDesktop()) return;
      disarm();
    });

    if (panel) {
      panel.addEventListener('mouseenter', function () { if (isDesktop()) arm(); });
      panel.addEventListener('mouseleave', function () { if (isDesktop()) disarm(); });
    }

    /* Click works everywhere — the accordion on small screens, and a
       keyboard or touch route into the panels on large ones */
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      arm();
      togglePanel(trigger);
    });

    /* Keyboard: opening on focus would be hostile while tabbing past, so
       the panel closes when focus leaves it entirely instead */
    if (panel) {
      panel.addEventListener('focusin',  function () { arm(); openPanel(trigger); });
      panel.addEventListener('focusout', function (e) {
        if (!panel.contains(e.relatedTarget) && e.relatedTarget !== trigger) {
          closePanel(trigger);
        }
      });
    }
  });

  /* Click outside, or Escape, closes everything */
  document.addEventListener('click', function (e) {
    if (!e.target.closest('[data-panel-trigger]') && !e.target.closest('[data-panel]')) {
      closeAll();
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') return;

    var open = triggers.filter(function (t) {
      return t.getAttribute('aria-expanded') === 'true';
    });
    if (open.length) {
      closeAll();
      open[0].focus();
      return;
    }
    if (nav && nav.classList.contains('is-open')) closeSheet();
  });

  /* ------------------------------------------------------------------------
     The mobile sheet
     ------------------------------------------------------------------------ */
  function openSheet() {
    nav.classList.add('is-open');
    navToggle.setAttribute('aria-expanded', 'true');
    body.classList.add('nav-locked');
    document.dispatchEvent(new CustomEvent('rankinai:scroll-lock'));
  }

  function closeSheet() {
    nav.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    body.classList.remove('nav-locked');
    closeAll();
    navToggle.focus();
    document.dispatchEvent(new CustomEvent('rankinai:scroll-unlock'));
  }

  if (navToggle && nav) {
    navToggle.addEventListener('click', function () {
      if (nav.classList.contains('is-open')) {
        closeSheet();
      } else {
        openSheet();
      }
    });

    /* Following a link should not leave the sheet hanging open behind it */
    nav.addEventListener('click', function (e) {
      var link = e.target.closest('a');
      if (link && !isDesktop()) closeSheet();
    });
  }

  /* Crossing the breakpoint with the sheet open would strand it ----------- */
  var mq = window.matchMedia(DESKTOP);
  var onChange = function () {
    closeAll();
    if (nav) nav.classList.remove('is-open');
    if (navToggle) navToggle.setAttribute('aria-expanded', 'false');
    body.classList.remove('nav-locked');
  };
  if (mq.addEventListener) {
    mq.addEventListener('change', onChange);
  } else if (mq.addListener) {
    mq.addListener(onChange);
  }
})();


/* ==========================================================================
   RankinAI — section behaviour
   Ported from the design canvas, with the same three interactions:
     · the services list drives the pinned column beside it
     · the four-step method swaps its schematic and its copy
     · the questions list drives the answer beside it
   Plus the two team rows drifting in opposite directions.
   ========================================================================== */

(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ------------------------------------------------------------------------
     Services — the reading line
     A service becomes active the moment its top rule crosses a line just
     under the pinned column's verb, and stays active until the next one
     does. Same order the eye reads in.
     ------------------------------------------------------------------------ */
  var rows   = [].slice.call(document.querySelectorAll('[data-svc]'));
  var shots  = [].slice.call(document.querySelectorAll('[data-img]'));
  var verbs  = [].slice.call(document.querySelectorAll('[data-verb]'));
  var active = -1;
  var queued = false;

  function readServices() {
    if (!rows.length) return;

    var anchor = Math.min(window.innerHeight * 0.4, 340);
    var best = 0;

    rows.forEach(function (row, i) {
      if (row.getBoundingClientRect().top <= anchor) best = i;
    });
    if (best === active) return;
    active = best;

    rows.forEach(function (row, i)  { row.classList.toggle('is-active', i === best); });
    shots.forEach(function (shot)   {
      shot.style.opacity = Number(shot.getAttribute('data-img')) === best ? '1' : '0';
    });

    /* The verb swaps once the list crosses into "Get booked." */
    var job = best < 3 ? 0 : 1;
    verbs.forEach(function (v) {
      v.style.opacity = Number(v.getAttribute('data-verb')) === job ? '1' : '0';
    });
  }

  function onScroll() {
    if (queued) return;
    queued = true;
    window.requestAnimationFrame(function () {
      queued = false;
      readServices();
    });
  }

  if (rows.length) {
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    readServices();
  }

  /* ------------------------------------------------------------------------
     A small tab controller — used by both the method steps and the questions
     ------------------------------------------------------------------------ */
  function tabs(triggerSel, panelSel, panelAttr, autoMs) {
    var buttons = [].slice.call(document.querySelectorAll(triggerSel));
    var panels  = [].slice.call(document.querySelectorAll(panelSel));
    if (!buttons.length) return;

    var timer = null;
    var current = 0;

    function show(n) {
      current = n;
      buttons.forEach(function (b, i) {
        b.setAttribute('aria-selected', i === n ? 'true' : 'false');
      });
      panels.forEach(function (p) {
        p.classList.toggle('is-on', Number(p.getAttribute(panelAttr)) === n);
      });
    }

    function stop() {
      if (timer) { window.clearInterval(timer); timer = null; }
    }

    buttons.forEach(function (b, i) {
      b.addEventListener('mouseenter', function () { stop(); show(i); });
      b.addEventListener('focus',      function () { stop(); show(i); });
      b.addEventListener('click',      function () { stop(); show(i); });
    });

    show(0);

    /* Auto-advance, but never against someone who asked for less motion */
    if (autoMs && !reduced) {
      timer = window.setInterval(function () {
        show((current + 1) % buttons.length);
      }, autoMs);
    }
  }

  tabs('[data-step]', '[data-panel]', 'data-panel', 4200);
  tabs('[data-step]', '[data-copy]',  'data-copy',  0);
  tabs('[data-fq]',   '[data-fa]',    'data-fa',    0);

  /* Keep the method copy in step with the schematic when it auto-advances */
  var stepBtns = [].slice.call(document.querySelectorAll('[data-step]'));
  var copies   = [].slice.call(document.querySelectorAll('[data-copy]'));
  if (stepBtns.length && copies.length) {
    new MutationObserver(function () {
      stepBtns.forEach(function (b, i) {
        if (b.getAttribute('aria-selected') !== 'true') return;
        copies.forEach(function (c) {
          c.classList.toggle('is-on', Number(c.getAttribute('data-copy')) === i);
        });
      });
    }).observe(stepBtns[0].parentNode, {
      subtree: true, attributes: true, attributeFilter: ['aria-selected']
    });
  }

  /* ------------------------------------------------------------------------
     Team — two rows drifting in opposite directions, paused under the cursor.
     The track holds the tile set twice, so the animation can run from one
     set-width to zero and loop without a visible seam.
     ------------------------------------------------------------------------ */
  if (!reduced) {
    [].slice.call(document.querySelectorAll('[data-marquee]')).forEach(function (row) {
      var track = row.querySelector('[data-track]');
      if (!track || !track.animate) return;

      var kids = [].slice.call(track.children);
      var gap  = 20;
      var half = kids.length / 2;
      var setW = gap * half;

      kids.slice(0, half).forEach(function (k) {
        setW += k.getBoundingClientRect().width;
      });

      var right = row.getAttribute('data-marquee') === 'right';
      var from  = right ? -setW : 0;
      var to    = right ? 0 : -setW;

      var anim = track.animate(
        [{ transform: 'translateX(' + from + 'px)' },
         { transform: 'translateX(' + to + 'px)' }],
        { duration: (setW / 42) * 1000, iterations: Infinity, easing: 'linear' }
      );

      row.addEventListener('mouseenter', function () { anim.pause(); });
      row.addEventListener('mouseleave', function () { anim.play(); });
    });
  }
})();


/* ==========================================================================
   RankinAI — motion

   Restraint is the brand, so the whole vocabulary here is three moves:
   a short rise, a fade, and a rule drawing itself. Nothing flies, nothing
   bounces, nothing scales. Distances are 12–24px and durations 0.6–1.0s.

   TWO RULES THAT KEEP THIS SAFE

   1. Never animate opacity on anything whose opacity is already state.
      .svc, .step and .fq are dimmed and lit by the sections above; the
      answers, schematic panels and service shots are cross-faded. Touching
      their opacity here would fight that and leave elements stuck. Those
      get position only.

   2. Only the first screen is pre-hidden in CSS. Everything else is
      revealed with gsap.from(), which needs no initial state — so if this
      file or the CDN fails, the page is simply static rather than blank.
   ========================================================================== */

(function () {
  'use strict';

  var root    = document.documentElement;
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Failsafe: if GSAP has not arrived, un-hide the first screen and stop. */
  if (reduced || typeof window.gsap === 'undefined') {
    root.classList.remove('anim');
    return;
  }

  var gsap = window.gsap;
  var ST   = window.ScrollTrigger;
  if (ST) gsap.registerPlugin(ST);

  var EASE = 'power3.out';
  var RISE = 20;

  /* Reveal defaults. "top 82%" means a section starts as its top third
     enters the viewport — early enough that nothing is ever caught
     mid-animation, late enough to read as a response to scrolling. */
  function reveal(targets, opts) {
    opts = opts || {};
    if (!targets || (targets.length === 0)) return;

    var vars = {
      y: opts.y === undefined ? RISE : opts.y,
      duration: opts.duration || 0.8,
      ease: EASE,
      stagger: opts.stagger || 0,
      scrollTrigger: ST ? {
        trigger: opts.trigger || targets[0] || targets,
        start: opts.start || 'top 82%',
        once: true
      } : undefined
    };

    /* opts.fade === false for anything whose opacity is already state */
    if (opts.fade !== false) vars.opacity = 0;

    gsap.from(targets, vars);
  }

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return [].slice.call((ctx || document).querySelectorAll(sel)); }

  /* ------------------------------------------------------------------------
     The eyebrow rule draws itself as its section arrives
     ------------------------------------------------------------------------ */
  $$('.eyebrow').forEach(function (el, i) {
    if (!ST) { el.classList.add('is-in'); return; }
    ST.create({
      trigger: el,
      start: 'top 88%',
      once: true,
      onEnter: function () {
        gsap.delayedCall(i === 0 ? 0.35 : 0.1, function () { el.classList.add('is-in'); });
      }
    });
  });

  /* ------------------------------------------------------------------------
     Hero — the only sequence on the page that runs on load
     ------------------------------------------------------------------------ */
  var tl = gsap.timeline({ defaults: { ease: EASE, duration: 0.9 } });

  tl.to('.site-header__panel', { opacity: 1, duration: 0.6 })
    .from('.site-header__panel', { y: -10, duration: 0.6 }, '<')
    .to('.hero .eyebrow', { opacity: 1, duration: 0.7 }, 0.15)
    .from('.hero .eyebrow', { y: 12, duration: 0.7 }, '<')
    .to('.hero__title', { opacity: 1 }, 0.28)
    .from('.hero__title', { y: 24 }, '<')
    .to('.hero__meta', { opacity: 1, duration: 0.8 }, 0.46)
    .from('.hero__meta', { y: 16, duration: 0.8 }, '<')
    .to('.hero__proof', { opacity: 1, duration: 0.8 }, 0.58)
    .from('.hero__proof', { y: 16, duration: 0.8 }, '<');

  /* ------------------------------------------------------------------------
     Success stories
     ------------------------------------------------------------------------ */
  reveal($$('.stories__title, .stories__head .link-mono'), { stagger: 0.06 });
  reveal($$('.case'), { y: 28, stagger: 0.09, trigger: $('.stories__grid') });

  /* ------------------------------------------------------------------------
     What we do
     The rows carry their own opacity, so these rise without fading.
     ------------------------------------------------------------------------ */
  reveal($$('.services__title'));
  reveal($$('.svc'), { fade: false, y: 18, stagger: 0.05, trigger: $('.services__band') });
  reveal($$('.svc-media__frame'), { y: 24, duration: 1 });

  /* ------------------------------------------------------------------------
     How we do it
     Steps rise only — their opacity is the selected state.
     ------------------------------------------------------------------------ */
  reveal($$('.method__title'));
  reveal($$('.step'), { fade: false, y: 14, stagger: 0.06, trigger: $('.steps') });
  reveal($$('.schematic'), { y: 20, duration: 0.9 });

  /* The two rules above Foundation Fix and Ongoing draw themselves. The rule
     is a background gradient rather than a border, so it can be widened
     without scaling the text underneath it. */
  if ($('.parts')) {
    var drawParts = function () {
      $$('.part').forEach(function (part, i) {
        gsap.delayedCall(i * 0.12, function () { part.classList.add('is-in'); });
      });
    };
    if (ST) {
      ST.create({ trigger: $('.parts'), start: 'top 85%', once: true, onEnter: drawParts });
    } else {
      drawParts();
    }
  }

  reveal($$('.part__name, .part__text'), { y: 12, stagger: 0.05, trigger: $('.parts') });

  /* ------------------------------------------------------------------------
     Team, questions, close, footer
     ------------------------------------------------------------------------ */
  reveal($$('.team__title, .team__lead'), { stagger: 0.08 });
  reveal($$('.marquee'), { y: 24, stagger: 0.1, duration: 1, trigger: $('.marquees') });

  reveal($$('.questions__title, .questions__head .link-quiet'), { stagger: 0.06 });
  reveal($$('.fq'), { fade: false, y: 12, stagger: 0.04, trigger: $('.fqs') });
  reveal($$('.answers'), { y: 16 });

  reveal($$('.close__tagline'), { y: 24, duration: 1 });
  reveal($$('.close__card'), { y: 24, duration: 1 });

  reveal($$('.footer__col'), { y: 16, stagger: 0.06, trigger: $('.footer__cols') });
  reveal($$('.ind'), { y: 12, stagger: 0.06, trigger: $('.footer__industries') });
  reveal($$('.footer__ask'), { y: 16 });

  /* ------------------------------------------------------------------------
     The services list resizes its own trigger points as images settle
     ------------------------------------------------------------------------ */
  if (ST) {
    window.addEventListener('load', function () { ST.refresh(); });
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(function () { ST.refresh(); });
    }
  }
})();


/* ==========================================================================
   RankinAI — smooth scrolling

   Lenis, driving the real window scroll. That choice matters: a smooth-scroll
   library that transforms a wrapper would break position:sticky, and two
   things on this page depend on it — the header, and the pinned column beside
   the services list.

   Off entirely for reduced motion. Off on touch, where the operating system's
   own momentum is better than anything JavaScript can imitate.
   ========================================================================== */

(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduced || typeof window.Lenis === 'undefined') return;

  var gsap = window.gsap;
  var ST   = window.ScrollTrigger;

  var lenis = new window.Lenis({
    duration: 0.9,                 /* 1.2 is the default and feels floaty */
    easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
    smoothWheel: true,
    syncTouch: false,              /* native momentum on phones and tablets */
    wheelMultiplier: 1,
    touchMultiplier: 1.6
  });

  /* One ticker for the whole page. Running Lenis on GSAP's ticker rather than
     its own rAF keeps scroll position and ScrollTrigger in the same frame —
     without it, reveals fire a frame late and appear to lag the scroll. */
  if (gsap) {
    gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
    gsap.ticker.lagSmoothing(0);
  } else {
    var raf = function (time) { lenis.raf(time); requestAnimationFrame(raf); };
    requestAnimationFrame(raf);
  }

  if (ST) {
    lenis.on('scroll', ST.update);
    ST.refresh();
  }

  /* The mobile sheet scrolls itself. Lenis stops while it is open. */
  document.addEventListener('rankinai:scroll-lock',   function () { lenis.stop(); });
  document.addEventListener('rankinai:scroll-unlock', function () { lenis.start(); });

  /* ------------------------------------------------------------------------
     In-page anchors
     Routed through Lenis so they ease rather than jump, and offset by the
     sticky header so the target is not hidden underneath it.

     The skip link is deliberately excluded — someone using it is navigating
     by keyboard and wants to arrive immediately, not watch a second of easing.
     ------------------------------------------------------------------------ */
  function headerOffset() {
    var panel = document.querySelector('.site-header__panel');
    return panel ? panel.getBoundingClientRect().height + 16 : 0;
  }

  document.addEventListener('click', function (e) {
    var link = e.target.closest('a[href^="#"]');
    if (!link || link.classList.contains('skip-link')) return;

    var id = link.getAttribute('href');
    if (!id || id === '#') return;

    var target = document.querySelector(id);
    if (!target) return;

    e.preventDefault();
    lenis.scrollTo(target, { offset: -headerOffset(), duration: 1 });
    history.pushState(null, '', id);
  });

  /* Land on the right place when arriving with a hash already in the URL */
  if (window.location.hash) {
    var initial = document.querySelector(window.location.hash);
    if (initial) {
      window.setTimeout(function () {
        lenis.scrollTo(initial, { offset: -headerOffset(), immediate: true });
      }, 0);
    }
  }

  window.addEventListener('load', function () { lenis.resize(); });
})();


/* ==========================================================================
   RankinAI — pricing page

   The deliverables tabs. Panels use [hidden] rather than opacity, because
   each one is a different height and stacking four full lists in a grid
   would leave the section as tall as the longest package on every tab.
   ========================================================================== */

(function () {
  'use strict';

  var tabs = [].slice.call(document.querySelectorAll('[data-pkg-tab]'));
  if (!tabs.length) return;

  var panels = [].slice.call(document.querySelectorAll('[data-pkg-panel]'));

  function show(key) {
    tabs.forEach(function (t) {
      t.setAttribute('aria-selected', t.getAttribute('data-pkg-tab') === key ? 'true' : 'false');
    });
    panels.forEach(function (p) {
      p.hidden = p.getAttribute('data-pkg-panel') !== key;
    });

    /* The section changed height, so every trigger below it has moved */
    if (window.ScrollTrigger) window.ScrollTrigger.refresh();
  }

  tabs.forEach(function (t) {
    t.addEventListener('click', function () { show(t.getAttribute('data-pkg-tab')); });
  });

  /* Arrow keys move between tabs, as a tablist should */
  tabs.forEach(function (t, i) {
    t.addEventListener('keydown', function (e) {
      var next = e.key === 'ArrowRight' ? i + 1 : e.key === 'ArrowLeft' ? i - 1 : null;
      if (next === null) return;
      e.preventDefault();
      var target = tabs[(next + tabs.length) % tabs.length];
      target.focus();
      show(target.getAttribute('data-pkg-tab'));
    });
  });
})();
