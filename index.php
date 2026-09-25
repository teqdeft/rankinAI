<?php
/**
 * Home
 * -----------------------------------------------------------------------------
 * WordPress: rename to front-page.php, swap the two requires for get_header()
 * and get_footer(), and the section markup below moves unchanged.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'RankinAI — Digital marketing for firms that sell expertise';
$page_desc  = 'We help design and construction firms, recruitment and HR businesses and professional service firms attract relevant enquiries and turn more of them into opportunities. Search, content, advertising, websites, reputation and follow-up.';

/* Scopes the centred, smaller section headings below to this page only.
   Every other page keeps its left-aligned heading with a note beside it. */
$body_class = 'home';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO                                                    Section type A

     THE FOUR SLOTS. A visitor who reads only this screen must leave knowing
     four things, and each one has exactly one home. Four ideas crammed into
     the headline is four ideas nobody reads.

         eyebrow    who we are, and who it is for
         h1         what we do
         subhead    how we do it
         proof bar  how long we have been doing it

     RULES THAT MUST SURVIVE DESIGN:
     · The eyebrow is load-bearing. It is the only place the first screen says
       what we are and who we serve. If it clutters a layout, fix the layout.
     · The proof bar sits directly beneath. No gap, no section break.
     · One button. The call is a quiet text link beside it, never a second
       button; two buttons of equal weight is no decision at all.
     · Button and link sit in a row beneath the subhead, button first. That
       is the .hero__meta--home modifier; the inner-page heroes keep their
       two-column layout because their note has to sit under the button.
     · Two stats, both real. Never padded to three or four to square off a
       grid — a made-up number sitting beside a true one devalues both.
     · The subhead is three sentences and a story: demand already exists,
       we make it find you and then contact you, and we keep doing it so the
       owner stops being the rainmaker. That last clause is the original
       hero's whole idea ("grow without being the one who finds the work")
       said in a way a reader gets on the first pass. Kulwant chose this
       version over four alternatives that named the services; the services
       are named in the section directly beneath, so nothing is lost.
     · Both halves of the nav survive in it: "find you" is get found, "get in
       touch" is get booked. Do not cut either clause to shorten it.
     · "Searching" carries the whole search-and-assistants idea without saying
       AI, which is what keeps the no-AI-above-the-fold rule payable.
     · The headline owns "leads" and "revenue". The subhead uses neither. If a
       later edit puts either word back in here, the two lines start echoing
       and both get weaker.
     · "Build and run" and "with your team, not around them" are not in the
       hero. They live in the FAQ answer lower on this page, on /about/, and
       on every industry page. Do not put them back to make the subhead feel
       fuller; it has been through that once already.
     · AI does not appear in the first screen. Deliberate.
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">


    <?php /* The one line on the first screen that says what we are and who we
             serve. Eyebrows were stripped from every other page; this one earns
             its place because the headline is a promise rather than a
             description, so without it the category is never stated. */ ?>
    <p class="eyebrow"><span>Digital marketing for firms that sell expertise</span></p>

    <h1 class="hero__title">Be the firm they find. And the one they choose.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">You&rsquo;ve built a business on doing good work. We help more of the right people discover it, understand why you&rsquo;re worth choosing, and get in touch.<span class="hero__sub2">Search, content, advertising, your website and follow-up, working together to bring you better business.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     02 — SUCCESS STORIES
     ========================================================================== -->
<section class="stories">
  <div class="container">
    <div class="stories__head">
      <div>
        <h2 class="stories__title">What changed when more people could see the value.</h2>
        <p class="stories__note">Behind every result is a business with something worth choosing. Our job is to help the right buyers see it, and make their next step easier.</p>
      </div>
    </div>
    <div class="stories__grid">
      <article class="case case--lead">
        <div class="case__photo"><img src="<?= asset('images/case-pine-tree-lane.webp') ?>" alt="Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa" width="1200" height="580" loading="lazy" decoding="async"></div>
        <div class="case__head">
          <h3 class="case__name">Pine Tree Lane</h3>
          <p class="case__meta"><span>Interior design and bespoke joinery</span><span>UAE</span></p>
        </div>
        <div class="case__body">
          <p class="case__metric"><b>4&times;</b><span>organic traffic in three months</span></p>
          <p class="case__text">A factory, a showroom and a ten-year warranty that almost nobody could find. Rebuilding the pages around what buyers actually search for put their work in front of them.</p>
          <a class="link-quiet link-quiet--bold" href="<?= url('/success-stories/') ?>">Read their story</a>
        </div>
      </article>
      <article class="case">
        <div class="case__photo"><img src="<?= asset('images/case-sweetrush.webp') ?>" alt="Two SweetRush colleagues working through a problem on a laptop" width="1200" height="580" loading="lazy" decoding="async"></div>
        <div class="case__head">
          <h3 class="case__name">SweetRush</h3>
          <p class="case__meta"><span>Learning and development</span><span>USA</span></p>
        </div>
        <div class="case__body">
          <?php /* The 3.2x came off 25 Sep 2026: invented during copywriting and
                   never published. See CLAIMS.md. */ ?>
          <p class="case__metric case__metric--pending"><b>&mdash;</b><span>Figure with the client for sign-off</span></p>
          <p class="case__text">Twenty years of standing among learning and development buyers, behind a website that read like a much smaller firm. Making the expertise visible changed who got in touch.</p>
          <a class="link-quiet link-quiet--bold" href="<?= url('/success-stories/') ?>">Read their story</a>
        </div>
      </article>
      <article class="case">
        <div class="case__photo"><img src="<?= asset('images/case-studio-ubique.webp') ?>" alt="Three Studio Ubique team members with coffee in the Zwolle office" width="1200" height="580" loading="lazy" decoding="async"></div>
        <div class="case__head">
          <h3 class="case__name">Studio Ubique</h3>
          <p class="case__meta"><span>Digital agency</span><span>Netherlands</span><span>Our partner</span></p>
        </div>
        <div class="case__body">
          <?php /* The +58% came off 25 Sep 2026: invented during copywriting and
                   never published. See CLAIMS.md. */ ?>
          <p class="case__metric case__metric--pending"><b>&mdash;</b><span>Figure with the client for sign-off</span></p>
          <p class="case__text">Strong work with no public record a prospect could check. Publishing the proof gave people outside their network a reason to make contact.</p>
          <a class="link-quiet link-quiet--bold" href="<?= url('/success-stories/') ?>">Read their story</a>
        </div>
      </article>
    </div>

    <?php /* Was beside the heading, where it competed with it. After the
             three cards it is the next thing to do once you have read them. */ ?>
    <p class="stories__more">
      <a class="link-quiet link-quiet--onforest" href="<?= url('/success-stories/') ?>">Explore our success stories</a>
    </p>
  </div>
</section>


<!-- ==========================================================================
     03 — THE OPPORTUNITY

     The argument the rest of the page rests on: referrals built the business,
     and everything below is about the buyers referrals never reach. Three
     questions rather than three claims, because a reader can answer a
     question about their own firm and cannot argue with it.
     ========================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
        <h2 class="questions__title">Your next client won&rsquo;t always come through someone you know.</h2>
      </div>
      <div class="oppo__intro">
        <p>Referrals have helped build your business. A stronger online presence gives people outside that network a way to find you, and a reason to trust you. They might search for a specialist, ask AI for recommendations, or compare a few firms before making contact.</p>
      </div>
    </div>

    <p class="oppo__lead">At each step, there&rsquo;s a question to answer.</p>

    <?php
    $OPPO = [
      ['search', 'Can they find you?',
       'Show up for the services, problems and locations that matter to your business.'],
      ['eye',    'Can they see why you&rsquo;re right for them?',
       'Make your experience, approach and results easy to understand.'],
      ['chat',   'Can they take the next step?',
       'Give them a clear route to enquire, followed by a response that keeps the conversation moving.'],
    ];
    ?>
    <div class="beliefs beliefs--icons beliefs--light beliefs--n<?= count($OPPO) ?>">
<?php foreach ($OPPO as [$icon, $name, $text]): ?>
      <div class="how">
        <p class="how__mark"><?= svc_icon_svg($icon) ?></p>
        <p class="how__name"><?= $name ?></p>
        <p class="how__text"><?= $text ?></p>
      </div>
<?php endforeach; ?>
    </div>

    <p class="oppo__close">That&rsquo;s the journey we work on.</p>

  </div>
</section>


<!-- ==========================================================================
     04 — WHAT WE DO
     The left column is pinned while the six services scroll past it. The verb
     swaps from "Get found." to "Get booked." at service four.
     ========================================================================== -->
<section class="services">
  <div class="container services__head">
    <h2 class="services__title">Give every step a job to do.</h2>
    <p class="services__note">Six connected specialisms, brought together around the work you want to win.</p>
  </div>

  <!-- The picture for each service appears twice: once in the pinned column
       (desktop, cross-faded as you scroll the list) and once inside each row
       (below 900px, where there is no room to pin anything). CSS shows one or
       the other, never both. Both are decorative — alt is empty on purpose,
       or a screen reader would meet the same description twice. -->
  <div class="container services__band" data-band>
    <div class="svc-media" data-pin>
      <div class="svc-media__verbs">
        <span class="svc-media__verb" data-verb="0">Get found.</span>
        <span class="svc-media__verb" data-verb="1">Get booked.</span>
      </div>
      <div class="svc-media__frame">
        <div class="svc-media__shot" data-img="0"><img src="<?= asset('images/service-search.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
        <div class="svc-media__shot" data-img="1"><img src="<?= asset('images/service-paid.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
        <div class="svc-media__shot" data-img="2"><img src="<?= asset('images/service-content.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
        <div class="svc-media__shot" data-img="3"><img src="<?= asset('images/service-web.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
        <div class="svc-media__shot" data-img="4"><img src="<?= asset('images/service-reputation.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
        <div class="svc-media__shot" data-img="5"><img src="<?= asset('images/service-crm.webp') ?>" alt="" aria-hidden="true" width="1040" height="1040" loading="lazy" decoding="async"></div>
      </div>
    </div>
    <div class="services__list">
      <article class="svc" data-svc="0">
        <p class="svc__n">01</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-search.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">AI and search visibility</p>
          <h3 class="svc__title">Be there when the search begins.</h3>
          <p class="svc__lead">Help buyers discover your firm on Google, Maps and AI search. We improve the pages, business information and supporting evidence that make your expertise easier to find.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/ai-visibility/') ?>">Explore AI and search visibility</a>
        </div>
      </article>
      <article class="svc" data-svc="1">
        <p class="svc__n">02</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-paid.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">Paid advertising</p>
          <h3 class="svc__title">Reach people ready to take a closer look.</h3>
          <p class="svc__lead">Put your offer in front of relevant buyers, with campaigns and landing pages built around a clear next step. Track which enquiries become worthwhile sales conversations.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/paid-advertising/') ?>">Explore paid advertising</a>
        </div>
      </article>
      <article class="svc" data-svc="2">
        <p class="svc__n">03</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-content.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">Content</p>
          <h3 class="svc__title">Give buyers a reason to put you on the shortlist.</h3>
          <p class="svc__lead">Turn your team&rsquo;s knowledge and completed work into persuasive service pages, useful answers and credible case studies. Help prospects understand what makes your firm right for their situation.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/content/') ?>">Explore content</a>
        </div>
      </article>
      <article class="svc" data-svc="3">
        <p class="svc__n">04</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-web.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">Website and conversion</p>
          <h3 class="svc__title">Make your website easier to say yes to.</h3>
          <p class="svc__lead">Help visitors find the information they need, see the value in your work, and enquire with confidence. We identify what needs improving and build what&rsquo;s missing.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/website-conversion/') ?>">Explore website and conversion</a>
        </div>
      </article>
      <article class="svc" data-svc="4">
        <p class="svc__n">05</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-reputation.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">Reviews and reputation</p>
          <h3 class="svc__title">Let your clients&rsquo; experience support the decision.</h3>
          <p class="svc__lead">Make it easier to collect genuine reviews, keep business profiles accurate, and put relevant client feedback where prospects are deciding whether to contact you.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/reputation/') ?>">Explore reviews and reputation</a>
        </div>
      </article>
      <article class="svc" data-svc="5">
        <p class="svc__n">06</p>
        <div class="svc__body">
          <div class="svc__shot" aria-hidden="true"><img src="<?= asset('images/service-crm.webp') ?>" alt="" width="1040" height="1040" loading="lazy" decoding="async"></div>
          <p class="svc__kicker">CRM and automation</p>
          <h3 class="svc__title">Keep a promising enquiry moving.</h3>
          <p class="svc__lead">Give every enquiry an owner and a next step. Connect your forms, CRM, reminders and follow-up so your team can spend more time having useful conversations.</p>
          <a class="link-quiet link-quiet--onforest svc__more" href="<?= url('/crm/') ?>">Explore CRM and automation</a>
        </div>
      </article>
    </div>
  </div>
</section>


<!-- ==========================================================================
     05 — HOW WE START
     Steps 01–03 are Foundation Fix, step 04 is the retainer. The bar beneath
     draws that, which explains the pricing structure without a sentence.
     ========================================================================== -->
<section class="method">
  <div class="container">
    <div class="method__head">
      <h2 class="method__title">A clear plan starts with understanding your business.</h2>
    </div>

    <div class="method__body">
      <div class="steps">
        <button class="step" type="button" data-step="0" aria-selected="true">
          <span class="step__n">01</span>
          <span class="step__name">Understand</span>
          <span class="step__bar" aria-hidden="true"></span>
        </button>
        <button class="step" type="button" data-step="1" aria-selected="false">
          <span class="step__n">02</span>
          <span class="step__name">Find the gaps</span>
          <span class="step__bar" aria-hidden="true"></span>
        </button>
        <button class="step" type="button" data-step="2" aria-selected="false">
          <span class="step__n">03</span>
          <span class="step__name">Agree priorities</span>
          <span class="step__bar" aria-hidden="true"></span>
        </button>
        <button class="step" type="button" data-step="3" aria-selected="false">
          <span class="step__n">04</span>
          <span class="step__name">Deliver and improve</span>
          <span class="step__bar" aria-hidden="true"></span>
        </button>
      </div>

      <div class="method__panel">
        <div class="schematic">
          <!-- Step 01, Learn: the four questions type themselves in, one after
               another, each with a rule drawing under it and a clay dot when it
               is captured. script.js runs it; without script this is simply the
               four questions, written. The words are the step's own copy. -->
          <div class="sch sch--ask" data-panel="0" data-ask>
            <p class="ask"><span class="ask__q">Which services you want to grow</span><i class="ask__dot"></i><span class="ask__line"></span></p>
            <p class="ask"><span class="ask__q">What makes an enquiry worth pursuing</span><i class="ask__dot"></i><span class="ask__line"></span></p>
            <p class="ask"><span class="ask__q">How you win that work today</span><i class="ask__dot"></i><span class="ask__line"></span></p>
            <p class="ask"><span class="ask__q">How much more you could take on</span><i class="ask__dot"></i><span class="ask__line"></span></p>
          </div>
          <!-- Step 02, Audit: the sweep. Twenty-four tiles — the pages, the
               checks. A clay line passes down through them; as it goes, most
               settle to green and five turn clay: the problems found. The
               markup carries the finished state so that without script this
               is simply the result of an audit. -->
          <div class="sch sch--sweep" data-panel="1" data-sweep aria-hidden="true">
            <div class="sweep__grid"><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-bad" data-r="bad"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-bad" data-r="bad"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-bad" data-r="bad"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-bad" data-r="bad"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-ok" data-r="ok"></i><i class="is-bad" data-r="bad"></i><i class="is-ok" data-r="ok"></i></div>
            <span class="sweep__line"></span>
          </div>
          <!-- Step 03, Strategy: in order. A rail draws across; four numbered
               nodes land on it one at a time and a block rises at each — the
               thing that part produces. The fourth is clay: the ongoing one.
               Heights are shape, not data; there are no figures here. -->
          <div class="sch sch--order" data-panel="2" data-order>
            <div class="order">
              <span class="order__rail"></span>
              <div class="order__node" style="--h:36px"><i class="order__block"></i><b class="order__dot"></b><span class="order__n">01</span></div>
              <div class="order__node" style="--h:50px"><i class="order__block"></i><b class="order__dot"></b><span class="order__n">02</span></div>
              <div class="order__node" style="--h:62px"><i class="order__block"></i><b class="order__dot"></b><span class="order__n">03</span></div>
              <div class="order__node order__node--clay" style="--h:74px"><i class="order__block"></i><b class="order__dot"></b><span class="order__n">04</span></div>
            </div>
          </div>
          <!-- Step 04, Execute: the monthly loop. Run, measure, revise, on a
               ring. A clay marker travels it and stops at each; the word lights
               as it arrives; the arc behind it fills the month. Round and round —
               the opposite of step 03's line, deliberately. -->
          <div class="sch sch--loop" data-panel="3" data-loop>
            <svg class="loop" viewBox="0 0 420 200" aria-hidden="true">
              <circle class="loop__ring" cx="100" cy="100" r="68"/>
              <circle class="loop__arc"  cx="100" cy="100" r="68" transform="rotate(-90 100 100)"/>
              <circle class="loop__node is-on" cx="100.0" cy="32.0" r="5" data-i="0"/>
              <circle class="loop__node" cx="158.9" cy="134.0" r="5" data-i="1"/>
              <circle class="loop__node" cx="41.1" cy="134.0" r="5" data-i="2"/>
              <g class="loop__arm" data-arm><circle class="loop__marker" cx="100.0" cy="32.0" r="7"/></g>
              <text class="loop__label is-on" x="222" y="66"  data-i="0">Run</text>
              <text class="loop__label"       x="222" y="108" data-i="1">Measure</text>
              <text class="loop__label"       x="222" y="150" data-i="2">Revise</text>
              <text class="loop__every" x="222" y="182">every month</text>
            </svg>
          </div>
        </div>

        <div class="method__copy">
          <p class="stepcopy" data-copy="0"><b>Understand the work you want to win.</b> We start with your goals, ideal clients and capacity. Which services do you want to grow? What makes an enquiry worth pursuing? How do you win that work today?</p>
          <p class="stepcopy" data-copy="1"><b>Find the gaps.</b> We review your visibility, messaging and enquiry journey. Where access is available, we also examine performance data and follow-up to understand what needs attention.</p>
          <p class="stepcopy" data-copy="2"><b>Agree the priorities.</b> You get a plan with a defined scope, fee and measures of progress. We agree what to fix first, what to build next, and where each channel fits.</p>
          <p class="stepcopy" data-copy="3"><b>Deliver, measure and improve.</b> We put the plan into action, review the results and adjust the work as we learn. You see what has been delivered, what is changing, and what happens next.</p>
        </div>
      </div>
    </div>

    <?php /* Replaced the old Foundation Fix / Ongoing pair, which described a
             two-part price the pricing page stopped using when it moved to
             four packages. */ ?>
    <?php /* The three claims are the point of the block, so they are set as
             three marks rather than run together in one line with the body
             pushed off to the right of it. A panel, because this closes the
             section and carries the two routes onward. */ ?>
    <div class="plan">
      <ul class="plan__marks" role="list">
        <li>One plan</li>
        <li>Connected expertise</li>
        <li>Clear priorities</li>
      </ul>

      <div class="plan__body">
        <p>Your monthly plan draws on the six specialisms above. The mix and level of work are agreed around your goals, budget and starting point.</p>
        <p>Any initial setup work and ongoing fees are explained before you commit.</p>
      </div>

      <div class="plan__actions">
        <a class="btn btn--primary" href="<?= url('/how-we-work/') ?>">Explore our approach <?= btn_arrow() ?></a>
        <a class="btn btn--outline" href="<?= url('/pricing/') ?>">View packages</a>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     06 — OUR TEAM
     Lives in includes/team.php: the service pages carry the same section,
     and the photo list should exist in one place.
     ========================================================================== -->
<?php
$team_title = 'You bring the expertise. We help it reach further.';
/* One paragraph, not four. The two lines that followed covered the named
   contact and working alongside an in-house marketer, both of which the
   how-we-work page sets out properly. */
$team_lead  = '<p>You know your clients, your work and the questions that come up before someone buys, and we turn that knowledge into marketing your business can use: clearer pages, stronger proof, relevant campaigns and a better path from first visit to first conversation.</p>'
            . '<p class="team__more"><a class="link-quiet link-quiet--onforest" href="' . url('/about/') . '">Meet the people behind RankinAI</a></p>';
require __DIR__ . '/includes/team.php';
?>


<!-- ==========================================================================
     07 — OUR COMMITMENTS

     Four things a client can hold us to. The test for each: could it be
     broken, and would the client know? Anything that fails both is a
     sentiment and belongs somewhere else.
     ========================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
        <h2 class="questions__title">Know what you&rsquo;re paying for. Know how it&rsquo;s going.</h2>
      </div>
    </div>

    <?php
    $COMMITMENTS = [
      ['clipboard', 'A defined scope',
       'We agree the work, responsibilities, fees and any separate costs before starting. Additional work is discussed before it is added.'],
      ['shield',    'Accounts under your control',
       'Your website, advertising and analytics accounts stay under your ownership. Access and handover arrangements are clear from the outset.'],
      ['chart',     'Reporting that connects to the business',
       'We track relevant enquiries and, where your sales data allows, the opportunities and clients they produce. Gaps in measurement are explained.'],
      ['chat',      'Straight conversations about progress',
       'You&rsquo;ll hear what is working, what needs attention, and what we recommend changing. Reviews lead to decisions about the next round of work.'],
    ];
    ?>
    <?php /* A slider rather than a grid. Four cards wrapped to three and one,
             which left a single box stranded on the second row. */ ?>
    <div class="cardslider" data-slider>
      <ul class="cardtrack" role="list" data-slider-track>
<?php foreach ($COMMITMENTS as [$icon, $name, $text]): ?>
        <li class="how how--card">
          <p class="how__mark"><?= svc_icon_svg($icon) ?></p>
          <p class="how__name"><?= $name ?></p>
          <p class="how__text"><?= $text ?></p>
        </li>
<?php endforeach; ?>
      </ul>
      <div class="teamnav">
        <button class="teamnav__btn" type="button" data-slider-prev aria-label="Previous">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M14.5 8H4M7.4 4.6 4 8l3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <button class="teamnav__btn" type="button" data-slider-next aria-label="Next">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M1.5 8H12M8.6 4.6 12 8l-3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     08 — QUESTIONS

     Same accordion as the service, industry and how-we-work pages: native
     <details>, so it opens without JavaScript, every answer is in the DOM for
     an assistant to read, and Ctrl+F finds text inside a closed one. It
     replaced a two-column list-drives-the-answer layout, which needed JS,
     hid seven answers from find-on-page, and collapsed awkwardly on a phone.

     Held as an array rather than eight blocks of markup so a question can be
     reworded in one place. Answers carry their own <p> tags because some of
     them lead with a fact row.

     No FAQPage structured data here on purpose: these eight are a subset of
     /questions/, which already publishes the full set with its own schema.
     The same questions marked up twice on two URLs is the duplication Google
     asks you not to do.
     ========================================================================== -->
<?php
$HOME_QS = [
  ['What does the free growth audit include?',
   '<p>A focused review of your website, search presence and the path a prospect takes to enquire. We highlight the clearest opportunities and suggest where to start. Findings that need access to your accounts are identified separately.</p>'],

  ['Do we need all six services?',
   '<p>Your business may need more attention in some areas than others. We agree the priorities and level of work within your plan, with a clear explanation of what is included.</p>'],

  ['How much does it cost?',
   '<p>The investment depends on your starting point, goals and the scope of work. Our packages provide a starting point, and your proposal confirms the setup and monthly fees. Advertising spend and any additional software costs are identified separately.</p>'],

  ['How soon can we expect results?',
   '<p>It depends on what needs improving. Some website and follow-up changes can be implemented early; building search visibility takes sustained work. We agree realistic milestones and review progress against them.</p>'],

  ['Can you work with our existing marketing team or agency?',
   '<p>Yes. We can support the areas where you need additional expertise. Responsibilities, approvals and reporting are agreed so everyone knows who is doing what.</p>'],

  ['What commitment are we making?',
   '<p>Requesting an audit creates no obligation to hire us. If we work together, the proposal sets out the scope, term, review points and cancellation arrangements before you agree.</p>'],
];
?>
<section class="questions">
  <div class="container">
    <div class="questions__head">
      <div>
        <h2 class="questions__title">A few things you may be wondering.</h2>
      </div>
      <a class="link-quiet link-quiet--bold" href="<?= url('/questions/') ?>">Every question, answered in full</a>
    </div>

    <div class="qa qa--wide">
<?php foreach ($HOME_QS as $i => [$q, $ans]): ?>
      <details class="qi">
        <summary class="qi__q">
          <span class="qi__n"><?= sprintf('%02d', $i + 1) ?></span>
          <span class="qi__text"><?= $q ?></span>
          <span class="qi__mark" aria-hidden="true"></span>
        </summary>
        <div class="qi__a"><?= $ans ?></div>
      </details>
<?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     09 — THE CLOSE
     ========================================================================== -->
<?php /* The card used to carry two paragraphs, a rule, a button, a link and
         a note: six things, in the one box whose only job is to get the
         click. The prose moved out to sit under the question where prose
         belongs, and the card became the offer itself, in the four lines
         the growth audit page already promises.

         Nothing here is a new claim. All four reassurances are lifted from
         /growth-audit/, word for word, so the two pages cannot drift. */ ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
