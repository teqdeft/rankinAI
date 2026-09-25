<?php
/**
 * How we work
 * -----------------------------------------------------------------------------
 * REBUILT 25 Sep 2026 to Kulwant's copy, to the rules the home, about and
 * pricing pages were settled on: no uppercase, no em-dashes, no semicolons, no
 * <br> in a heading, one eyebrow per section head, heading and note both free
 * inside the 1024px measure, one button per section with the second action as
 * a quiet link, alternating light and dark bands, and the shared close from
 * includes/close.php.
 *
 * NO PRICES ON THIS PAGE. It describes setup and ongoing delivery as two
 * scopes and says both are explained before you commit. The numbers live on
 * /pricing/ and they live there only, so there is one place to change them.
 * Do not add a figure here without reconciling it with that page first.
 *
 * THE PROCESS SECTION reuses .steps4, which the previous version of this page
 * introduced. Four cards, each with a label, a name, a lead, a paragraph and a
 * list of what the step produces. It is the right shape for this copy, so it
 * stayed while everything around it was rewritten.
 *
 * WordPress: rename to page-how-we-work.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'How we work, the right work in the right order | RankinAI';
$page_desc  = 'Where we begin, what the free audit covers, the four steps, your first month, how progress is measured, and what we need from your team.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>How we work</span></p>

    <h1 class="hero__title">The right work. In the right order.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">Your marketing should have a clear connection to the business you want to build.<span class="hero__sub2">We start with the clients and projects you want more of, find what&rsquo;s standing in the way, and put a practical plan into action. You know what we&rsquo;re doing, why it matters, and what happens next.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     02 — WHERE WE BEGIN, AND THE FIRST STEP

     One section, not two. They were the same beat told twice: we ask before
     we recommend, and the first concrete thing is the free audit. Two bands,
     two headings and two sets of padding for one idea is where the page went
     baggy.

     Questions on the left, the audit on the right, so the section says what
     we want to know and what we do about it on one screen.

     The four questions are set in the display face with a mono number each.
     That is what keeps this readable without a picture: they are four things
     to answer, and they look like it.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>Where we begin</span></p>
        <h2 class="stories__title">Before we recommend a channel, we ask about the business.</h2>
        <p class="packages__note">Your answers shape the plan. They help us decide where to focus, what needs fixing, and which opportunities are worth pursuing.</p>
      </div>
    </div>

    <div class="begin">

      <div class="begin__ask">
        <p class="label label--clay">What we ask first</p>
        <ol class="qset" role="list">
          <li><span class="qset__n">01</span><span class="qset__q">Which work is most valuable to you?</span></li>
          <li><span class="qset__n">02</span><span class="qset__q">What makes someone a good client?</span></li>
          <li><span class="qset__n">03</span><span class="qset__q">Where do your strongest enquiries come from today?</span></li>
          <li><span class="qset__n">04</span><span class="qset__q">And if more opportunities arrived, which ones would you actually want?</span></li>
        </ol>
      </div>

      <div class="begin__step">
        <p class="label label--clay">The first step</p>
        <p class="begin__lead">Start with a clearer picture.</p>
        <p class="begin__text">Your free growth audit is a focused review of how a prospective client discovers, understands and contacts your business. We look at your public website, your search presence, your business profiles and your enquiry journey, and you receive the clearest findings and suggested priorities in writing.</p>
        <p class="begin__text">Some questions need a closer look at your accounts or sales process. We identify those separately, so observations and assumptions stay clear.</p>

        <div class="firststep__act">
          <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
          <a class="link-quiet link-quiet--onforest" href="<?= url('/call/') ?>">Book a 20-minute call</a>
        </div>

        <p class="begin__note">Read the audit, discuss it with your team, or talk it through with us. There&rsquo;s no obligation to continue.</p>
      </div>

    </div>

  </div>
</section>



<!-- ==========================================================================
     03 — THE PROCESS

     A full-bleed slider on a light band. One card fills the reading width and
     the next shows its first third, which is the whole trick: a half-visible
     card is what tells a reader there is more to the right without a caption
     saying so.

     The track starts at the container's left gutter so card one lines up with
     the heading above it, and runs off the right edge of the screen. The
     section clips it.

     Native scroll-snap, so it works with a trackpad, a touchscreen and the
     keyboard whether or not the script runs. The two buttons only nudge it
     along and hide themselves when everything already fits, which is the same
     driver the home page's commitments use.

     Each card names what the step decides or produces. A process section that
     only describes activity gives a reader nothing to hold anyone to.
     ========================================================================== -->
<section class="band band--light pslider">
  <div class="container">

    <div class="questions__head">
      <div>
        <p class="eyebrow"><span>The process</span></p>
        <h2 class="questions__title">Four steps. One connected plan.</h2>
      </div>
    </div>

  </div>

  <?php
  $STEPS = [
    ['chat', '01', 'Understand', 'Define the work you want to win.',
     'We begin with a conversation about your goals, services and ideal clients. We want to understand what makes your business valuable, how buyers make their decisions, and what happens between an enquiry arriving and a client saying yes.',
     'We also look at your capacity. A plan to attract larger projects can require different work from a plan to increase enquiry volume.',
     'We agree', [
       'The services and markets to prioritise.',
       'What makes an enquiry relevant.',
       'Your commercial goals and delivery capacity.',
       'Who needs to be involved on your side.',
     ]],
    ['search', '02', 'Investigate', 'Find where the opportunity is being lost.',
     'If we work together, we build on the initial audit with the access and information needed for a deeper review. That may include your analytics, search performance, advertising, website content and follow-up process, depending on the agreed scope.',
     'We trace the journey from discovery to enquiry, and, where your data allows, through to the work won.',
     'You get', [
       'A baseline of the available performance data.',
       'The gaps affecting visibility, trust or conversion.',
       'Tracking issues that need attention.',
       'A prioritised view of what to improve.',
     ]],
    ['clipboard', '03', 'Plan', 'Give every activity a reason to be there.',
     'We turn the findings into a delivery plan. It explains what we recommend, the order of work, who is responsible, and how progress will be assessed. You can see how the activities connect to your goals.',
     'Some priorities may be straightforward: a clearer service page, a better enquiry form, or more consistent follow-up. Others require sustained work, such as building visibility in a competitive market.',
     'Before delivery begins, we agree', [
       'The scope, fees and separate costs.',
       'The initial priorities and delivery schedule.',
       'The information and approvals we need.',
       'The measures and review points.',
     ]],
    ['sliders', '04', 'Deliver', 'Put the plan to work. Learn from what happens.',
     'Our specialists carry out the agreed work across search, content, advertising, your website, reputation and follow-up. The mix depends on your plan and priorities.',
     'We review performance, bring you the findings, and recommend the next actions. As the evidence develops, we refine where the effort goes.',
     'You stay informed through', [
       'Updates on completed and upcoming work.',
       'Clear requests for input or approval.',
       'Reports at the cadence included in your plan.',
       'Reviews that lead to decisions.',
     ]],
  ];
  ?>
  <div class="pslider__rail" data-slider>
    <ul class="ptrack" role="list" data-slider-track>
<?php foreach ($STEPS as [$icon, $n, $name, $lead, $text, $more, $getsLabel, $gets]): ?>
      <li class="pcard">
        <div class="pcard__top">
          <span class="pcard__icon"><?= svc_icon_svg($icon) ?></span>
          <span class="pcard__n"><?= $n ?></span>
        </div>
        <h3 class="pcard__name"><?= $name ?></h3>
        <p class="pcard__lead"><?= $lead ?></p>
        <p class="pcard__text"><?= $text ?></p>
        <p class="pcard__text"><?= $more ?></p>
        <div class="pcard__gets">
          <p class="label label--clay"><?= $getsLabel ?></p>
          <ul class="deliv__list" role="list">
<?php foreach ($gets as $g): ?>
            <li><?= $g ?></li>
<?php endforeach; ?>
          </ul>
        </div>
      </li>
<?php endforeach; ?>
    </ul>

    <div class="container">
      <div class="teamnav">
        <button class="teamnav__btn" type="button" data-slider-prev aria-label="Previous step">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M14.5 8H4M7.4 4.6 4 8l3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <button class="teamnav__btn" type="button" data-slider-next aria-label="Next step">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M1.5 8H12M8.6 4.6 12 8l-3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>



<!-- ==========================================================================
     REMOVED 25 Sep 2026, at Kulwant’s instruction: "Your first month",
     which described the kickoff, the initial setup scope and the ongoing
     delivery scope. Not required. The setup fee and what it covers are on
     /pricing/, which is the one place a figure for either lives.
     ========================================================================== -->



<!-- ==========================================================================
     04 — HOW WE MEASURE PROGRESS

     Four stages of the same journey rather than four metrics. The last one is
     the only one that depends on the client's own data, and it says so.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>How we measure progress</span></p>
        <h2 class="stories__title">Follow the journey from being found to winning work.</h2>
      </div>
    </div>

    <?php
    $MEASURES = [
      ['eye',   'Visibility',
       'Are you appearing for relevant searches, locations and buyer questions? Is the right audience reaching your business?'],
      ['mail',  'Enquiries',
       'Are more suitable prospects contacting you? Which pages and channels contribute to those conversations?'],
      ['split', 'Opportunities',
       'Which enquiries move forward? Where are prospects dropping out, and what can we learn from that?'],
      ['star',  'Clients won',
       'Where your sales data allows, we connect marketing activity with signed work and acquisition costs.'],
    ];
    ?>
    <?php /* --journey draws a clay chevron in each gap. The four are stages
             of one route, not four separate measures, and four cards in a row
             say nothing about order on their own. */ ?>
    <div class="wcards wcards--journey">
<?php foreach ($MEASURES as $i => [$icon, $name, $text]): ?>
      <div class="wcard">
        <span class="wcard__icon"><?= svc_icon_svg($icon) ?></span>
        <span class="wcard__n"><?= sprintf('%02d', $i + 1) ?></span>
        <h3 class="wcard__name"><?= $name ?></h3>
        <p class="wcard__text"><?= $text ?></p>
      </div>
<?php endforeach; ?>
    </div>

    <p class="aftercards aftercards--onforest">We explain what the data shows, what remains uncertain, and what we recommend doing next.</p>

  </div>
</section>


<!-- ==========================================================================
     REMOVED 25 Sep 2026, at Kulwant’s instruction: "Working together",
     which set out what the client brings at the start, during delivery and
     at review points. Not required.
     ========================================================================== -->



<!-- ==========================================================================
     05 — QUESTIONS

     The accordion from /questions/, so the site has one way of asking and
     answering rather than two.
     ========================================================================== -->
<section class="band band--light qbody">
  <div class="container">

    <div class="qgroup">
      <div class="qgroup__head">
        <p class="eyebrow"><span>Frequently asked questions</span></p>
        <h2 class="qgroup__title">What happens after we get in touch?</h2>
      </div>

      <?php
      $FAQ = [
        ['Can we start with the audit alone?',
         'Yes. The free audit gives you an initial view of the opportunities. You can decide whether a conversation or further work would be useful after reading it.'],
        ['How much time will you need from us?',
         'We agree that during scoping. Expect a kickoff conversation, access to relevant information, and scheduled input for content and approvals. Your delivery plan makes those requirements clear.'],
        ['Will you need access to everything?',
         'We request the access needed for the agreed work. The initial public audit does not require account access; deeper analysis and delivery usually do. Your accounts remain under your control.'],
        ['What if our priorities change?',
         'Tell us. We review the effect on the plan and agree any changes to delivery, timing or scope before proceeding.'],
        ['How soon should we expect progress?',
         'Different activities move at different speeds. Website and follow-up improvements may be implemented early. Search visibility and a stronger content presence require sustained work. Your plan sets realistic milestones for each.'],
        ['What if something isn&rsquo;t working?',
         'We examine the evidence, explain what we&rsquo;re seeing, and recommend a response. That could involve improving the execution, revising an assumption or shifting effort to another priority.'],
      ];
      ?>
      <div class="qa qa--wide">
<?php foreach ($FAQ as $i => [$q, $a]): ?>
        <details class="qi">
          <summary class="qi__q">
            <span class="qi__n"><?= sprintf('%02d', $i + 1) ?></span>
            <span class="qi__text"><?= $q ?></span>
            <span class="qi__mark" aria-hidden="true"></span>
          </summary>
          <div class="qi__a">
            <p><?= $a ?></p>
          </div>
        </details>
<?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
