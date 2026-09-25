<?php
/**
 * Book a 20-minute call — the softer of the two conversion endpoints
 * -----------------------------------------------------------------------------
 * Linked from the site header on every page, from both mega panels, and from
 * the close on every page built so far. It catches the visitor who is not
 * ready to hand over a website address to a stranger.
 *
 * RULES THAT MUST SURVIVE ANY REDESIGN
 * · The times are visible without scrolling, the same way the audit form is.
 * · "Twenty minutes" is a promise about their time, not a slot length. Every
 *   place it appears it is qualified — held to twenty, no deck, no prep.
 * · Section 03 exists because "you get the founder, not an SDR" is the only
 *   claim on this page a large agency cannot copy. It stays.
 * · The close sends people to the audit, not back to the calendar. Someone
 *   who reached the bottom without booking wants to read, not talk.
 *
 * WordPress: rename to page-call.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Book a 20-minute call | RankinAI';
$page_desc  = 'Twenty minutes with the person who would run the work. No deck, no pitch team, nothing to prepare. Bring the problem and we will tell you what we would do about it.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO, WITH THE BOOKER IN IT
     ========================================================================== -->
<section class="hero hero--page hero--audit">
  <div class="hero__inner container audit-lede">

    <div class="audit-lede__copy">

      <h1 class="hero__title hero__title--audit">Twenty minutes. No deck, no pitch team.</h1>

      <p class="hero__sub audit-lede__sub">Bring the problem you actually have &mdash; enquiries drying up, a site that doesn&rsquo;t convert, an agency you&rsquo;re no longer sure is working. We&rsquo;ll tell you what we&rsquo;d do about it, and whether it needs us at all.</p>
    </div>

    <ul class="ticks" role="list">
      <li>Twenty minutes, and held to twenty</li>
      <li>You speak to the person who&rsquo;d run the work</li>
      <li>Nothing to read or prepare beforehand</li>
      <li>No proposal afterwards unless you ask for one</li>
    </ul>

    <div class="booker" id="book">
      <p class="label">Pick a time</p>

      <!-- Scheduler GOES HERE.
           Drop the Cal.com or Calendly embed inside this div and delete the
           placeholder. Everything below it is the fallback and should stay —
           embeds are blocked by more corporate networks than people expect,
           and this page is where that costs the most. -->
      <div class="booker__embed" data-scheduler>
        <p class="calendar__note">Scheduler</p>
      </div>

      <div class="booker__alt">
        <p class="booker__alt-title">Or book it without the calendar</p>
        <p class="booker__alt-text">Email <a href="mailto:<?= e($SITE['email']) ?>"><?= e($SITE['email']) ?></a> with two or three times that suit you and we&rsquo;ll confirm one. If it&rsquo;s quicker to talk now, call <a href="tel:<?= e(preg_replace('/\s+/', '', $SITE['phone'])) ?>"><?= e($SITE['phone']) ?></a>.</p>
      </div>

      <p class="auditform__note"><?= e($SITE['hours']) ?>. Outside those hours, say when suits you and we&rsquo;ll work around it &mdash; our clients are in three countries and none of them are in ours.</p>
    </div>

  </div>

  <div class="hero__proof">
    <div class="stat">
      <span class="stat__n">2009</span>
      <span class="stat__k">Working with businesses since</span>
    </div>
    <div class="stat">
      <span class="stat__n">200+</span>
      <span class="stat__k">Clients served</span>
    </div>
  </div>
</section>


<!-- ==========================================================================
     02 — WHAT THE TWENTY MINUTES COVERS
     ========================================================================== -->
<section class="band band--forest band--tuck">
  <div class="container">

    <div class="stories__head">
      <div>
        <h2 class="stories__title">What we cover</h2>
        <p class="packages__note">Twenty minutes is enough for four things if nobody is presenting. Nobody will be presenting.</p>
      </div>
    </div>

    <div class="terms__grid">
      <div class="term">
        <p class="term__name">Where the work comes from now</p>
        <p class="term__text">Which channels are actually producing enquiries, which ones you believe are, and how you&rsquo;d tell the difference if you had to.</p>
      </div>
      <div class="term">
        <p class="term__name">What&rsquo;s in the way</p>
        <p class="term__text">The one thing standing between you and more of the work you want. In our experience it is rarely the thing people book the call about.</p>
      </div>
      <div class="term">
        <p class="term__name">What we&rsquo;d do first</p>
        <p class="term__text">If we worked together: the first thing we&rsquo;d change, roughly what it would cost, and roughly when you&rsquo;d see it move.</p>
      </div>
      <div class="term">
        <p class="term__name">Whether it should be us</p>
        <p class="term__text">Sometimes the answer is a hire, a different agency, or nothing at all this quarter. You&rsquo;ll hear that on the call, not in a proposal three weeks later.</p>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     03 — WHO YOU'RE SPEAKING TO
     The only claim on this page a fifty-person agency cannot make.
     ========================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
        <h2 class="questions__title">Who you&rsquo;ll speak to</h2>
      </div>
    </div>

    <div class="who">
      <div class="who__photo case__photo">
        <span>Kulwant Singh, founder</span>
      </div>

      <div class="who__copy">
        <p class="who__lead">Kulwant Singh has been running digital marketing for service businesses since 2009, through Teqdeft, for more than two hundred clients. RankinAI is the same work, aimed squarely at firms that sell expertise.</p>

        <p class="who__text">There is no SDR, no qualification call before the real call, and nobody on the line who has to check with someone else and come back to you. If the work starts, the person you spoke to stays on it.</p>

        <div class="who__facts">
          <p class="who__fact"><span class="label">Since</span><b>2009</b></p>
          <p class="who__fact"><span class="label">Clients served</span><b>200+</b></p>
          <p class="who__fact"><span class="label">Offices</span><b><?= e($SITE['offices']) ?></b></p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     04 — QUESTIONS
     ========================================================================== -->
<section class="questions">
  <div class="container">
    <div class="questions__head">
      <div>
        <h2 class="questions__title">Frequently asked questions</h2>
      </div>
      <a class="link-quiet link-quiet--bold" href="<?= url('/questions/') ?>">Every question, answered in full</a>
    </div>

    <div class="questions__body">
      <div class="fqs">
        <button class="fq" type="button" data-fq="0" aria-selected="true">
          <span class="fq__n">01</span>
          <span class="fq__q">Is this a sales call?</span>
        </button>
        <button class="fq" type="button" data-fq="1" aria-selected="false">
          <span class="fq__n">02</span>
          <span class="fq__q">Do I need to prepare anything?</span>
        </button>
        <button class="fq" type="button" data-fq="2" aria-selected="false">
          <span class="fq__n">03</span>
          <span class="fq__q">I&rsquo;d rather see something in writing first.</span>
        </button>
        <button class="fq" type="button" data-fq="3" aria-selected="false">
          <span class="fq__n">04</span>
          <span class="fq__q">Will you send a proposal afterwards?</span>
        </button>
      </div>
      <div class="answers">
        <div class="answer" data-fa="0"><p>It&rsquo;s a call with the person who would do the work. We&rsquo;ll tell you what we&rsquo;d do about your situation whether or not you ever hire us. Whether you want us to do it is a different conversation, and we won&rsquo;t fold it into this one.</p></div>
        <div class="answer" data-fa="1"><p class="answer__fact"><span class="label">To prepare</span><b>Nothing at all</b></p><p>Not your analytics, not your numbers, not a brief. If you have them to hand it makes the call sharper. If you don&rsquo;t, we ask four questions and get to the same place.</p></div>
        <div class="answer" data-fa="2"><p>Then start with the growth audit instead &mdash; free, back within a working day, and written rather than spoken. You can book a call after reading it, or not. Plenty of people don&rsquo;t, and that&rsquo;s a fine outcome.</p></div>
        <div class="answer" data-fa="3"><p>Only if you ask for one. Sending an unrequested proposal is how an agency fills its own pipeline; it is not how anyone actually makes a decision. If you want one, say so on the call and it comes with the numbers it was built from.</p></div>
      </div>
    </div>
  </div>
</section>

<?php
/* The shared close, with one change: the standard second link goes to /call/,
   which is this page. It points at the booker above instead. Copy, card and
   layout are untouched. See includes/close.php. */
$close_link = ['Or pick a time above', '#book'];
require __DIR__ . '/includes/footer.php';
?>
