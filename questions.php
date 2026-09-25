<?php
/**
 * Questions
 * -----------------------------------------------------------------------------
 * REBUILT 25 Sep 2026 to Kulwant's copy, to the rules the home, about, pricing
 * and how-we-work pages were settled on: no uppercase, no em-dashes, no
 * semicolons, no <br> in a heading, one eyebrow per section head, heading and
 * note both free inside the 1024px measure, and the shared close from
 * includes/close.php.
 *
 * ONE DOCUMENT, NOT SIX BANDS. Twenty-eight answers across six alternating
 * dark and light sections would be exhausting to read. This is a reference
 * page and it is shaped like one: a single light band, the groups separated
 * by their own headings, and a jump list in the hero for anyone who arrived
 * looking for one answer.
 *
 * THE PRICES HERE MUST MATCH /pricing/. Foundation $750, Growth $1,250,
 * Accelerate $1,750, Custom from $2,500, setup $500 waived on a six-month
 * commitment. This is the only other page on the site that prints them.
 * Change one, change both, in the same commit.
 *
 * THE CURRENCY IS STATED HERE. "All prices are in USD" came off the pricing
 * hero on Kulwant's instruction and this is now the only place the site says
 * it. Worth knowing before editing the pricing group.
 *
 * WordPress: rename to page-questions.php. The groups become a `question`
 * post type with a taxonomy for the group.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Questions, answered straight | RankinAI';
$page_desc  = 'What it costs, what you will need to give us, what happens if the plan changes, who owns the accounts, and how long you are committed for.';

/* -----------------------------------------------------------------------------
 * THE QUESTIONS
 *
 * Held as data rather than markup so the jump list, the headings and the
 * answers cannot drift apart: the nav is built from the same array that
 * renders the groups.
 *
 * An answer is an array of paragraphs. A paragraph that is itself an array is
 * rendered as a list, which only the pricing question needs.
 * -------------------------------------------------------------------------- */
$GROUPS = [
  [
    'id' => 'getting-started', 'label' => 'Getting started',
    'eyebrow' => 'Getting started',
    'title' => 'Before you decide.',
    'qs' => [
      ['What does RankinAI actually do?', [
        'We help service businesses attract relevant enquiries and improve the journey from first interest to a sales conversation.',
        'Our work brings together search and AI visibility, content, paid advertising, website improvements, reputation and follow-up. Your plan determines the priorities and level of support.',
      ]],
      ['Who do you work with?', [
        'Our focus is on design and construction, recruitment and HR, and professional services.',
        'These businesses sell expertise, often through a considered buying process. Their prospects need to understand the experience, people and evidence behind the offer before choosing a firm.',
      ]],
      ['What is included in the free growth audit?', [
        'A focused review of your public website, search presence, business profiles and enquiry journey.',
        'We highlight the clearest opportunities and suggest where to start. Findings that require analytics, advertising or CRM access are identified separately.',
      ]],
      ['Do we have to book a call to receive the audit?', [
        'No. You receive the findings in writing. If you&rsquo;d like to discuss them, you can book a 20-minute call.',
        'Requesting the audit creates no obligation to work with us.',
      ]],
      ['We already get enquiries. Can you help us attract better ones?', [
        'That can be a useful starting point.',
        'We look at which services you promote, how you describe your ideal clients, what your pages promise, and how enquiries are qualified. The goal is to give suitable prospects stronger reasons to contact you while making your fit clearer to everyone else.',
      ]],
      ['What if we only need one service?', [
        'We can propose a focused engagement around a specific need, such as search, advertising or website conversion.',
        'Our packages suit businesses that want coordinated ongoing support. We&rsquo;ll explain which arrangement fits the work you need.',
      ]],
    ],
  ],

  [
    'id' => 'pricing', 'label' => 'Pricing',
    'eyebrow' => 'Pricing',
    'title' => 'Understand the investment.',
    'qs' => [
      ['How much does it cost?', [
        'Our monthly plans are:',
        ['Foundation: $750', 'Growth: $1,250', 'Accelerate: $1,750', 'Custom: from $2,500'],
        'All prices are in USD. Your proposal confirms the deliverables, fees, separate costs and any applicable taxes.',
      ]],
      ['Is there a setup fee?', [
        'Foundation, Growth and Accelerate have a one-time $500 setup fee.',
        'This covers the agreed kickoff, baseline, standard tracking setup or corrections, and initial action plan. Substantial website repairs, CRM migrations and custom integrations are quoted separately.',
        'Custom-plan setup is scoped individually.',
      ]],
      ['Can the setup fee be waived?', [
        'Yes. We waive the $500 setup fee when you choose a six-month initial commitment.',
        'Alternatively, you can pay the setup fee and start on a monthly arrangement with 30 days&rsquo; notice. Both options are explained before you choose.',
      ]],
      ['Does the monthly fee include advertising spend?', [
        'No. The fee covers our work. Your advertising budget is separate, stays in your account, and is agreed before campaigns launch.',
        'We also identify any required software subscriptions, messaging charges or other third-party costs.',
      ]],
      ['Does every package mean all six services run every month?', [
        'The work follows the priorities agreed for your business.',
        'Some activities happen during setup, some run regularly, and others become relevant later. Your proposal explains what is included, and the delivery plan shows where the effort goes.',
      ]],
      ['Will we be charged for work outside the package?', [
        'Only after the additional work and its price have been discussed and approved.',
        'If a request changes the scope, we explain the impact before proceeding.',
      ]],
    ],
  ],

  [
    'id' => 'results', 'label' => 'Results',
    'eyebrow' => 'Results',
    'title' => 'What progress looks like.',
    'qs' => [
      ['How soon should we expect results?', [
        'It depends on your starting point and the work involved.',
        'Some website, tracking and follow-up improvements can be implemented early. Search visibility and a stronger content presence take sustained effort.',
        'We agree milestones for the activities in your plan and review progress against them. Implementation dates and commercial results are tracked separately.',
      ]],
      ['Do you guarantee leads, rankings or revenue?', [
        'We commit to the agreed delivery, measurement and review process.',
        'Results also depend on your market, offer, budget, competition and sales process. We set objectives with those factors in mind and explain the assumptions behind them.',
      ]],
      ['How will we know whether the work is paying off?', [
        'We track relevant enquiries and how they move through your sales process.',
        'Where your data allows, we connect those enquiries with opportunities, clients won and acquisition costs. We also monitor the earlier indicators that help explain performance, such as search visibility and website conversion.',
        'Any gaps in measurement are made clear.',
      ]],
      ['What happens if a channel underperforms?', [
        'We investigate before deciding what to change.',
        'The issue could be the targeting, message, page, offer, follow-up or an assumption in the plan. We share the findings and recommend the next action.',
        'If the ongoing scope changes materially, we review the fee with you.',
      ]],
      ['Can you get our business recommended by AI assistants?', [
        'We work on making your business and expertise easier to discover and understand, then monitor an agreed set of relevant buyer questions.',
        'We report where your firm appears and what changes over time. Inclusion in an AI answer cannot be guaranteed by anyone.',
      ]],
    ],
  ],

  [
    'id' => 'working-together', 'label' => 'Working together',
    'eyebrow' => 'Working together',
    'title' => 'How we fit into your team.',
    'qs' => [
      ['We already have a marketing manager. Where do they fit?', [
        'They remain central to the work.',
        'We agree priorities, responsibilities and reporting with them, then add the specialist capacity the plan needs. They have a named contact and visibility into delivery.',
      ]],
      ['Can you work with our existing agency or developer?', [
        'Yes. We define the responsibilities and dependencies together.',
        'For example, we may handle search strategy and content while your developer implements website changes. Everyone should understand who owns each task and how its outcome will be measured.',
      ]],
      ['How much time will you need from us?', [
        'We need your business knowledge, access to relevant information, and timely decisions.',
        'At the start, that means a kickoff conversation and gathering the necessary materials. During delivery, it means scheduled interviews, reviews and approvals.',
        'We explain the expected involvement when scoping the work.',
      ]],
      ['Who writes the content?', [
        'We turn your team&rsquo;s knowledge into drafts, then work through your feedback.',
        'You review factual and technical claims before publication. For regulated or specialist subjects, we agree who on your side is responsible for the necessary review.',
      ]],
      ['Do you use AI tools?', [
        'We may use tools to support research, organisation, analysis and drafting.',
        'Our team remains responsible for checking facts, shaping the message and reviewing the finished work. Content follows the agreed approval process before publication.',
      ]],
      ['Will we need a new website?', [
        'We assess that before recommending one.',
        'Your existing site may support the improvements you need. If a rebuild is justified, we explain why and provide a separate scope and price.',
      ]],
      ['What if our priorities change?', [
        'Tell us as early as you can.',
        'We review the effect on the plan and agree any changes to scope, timing or fees. The work should stay connected to the direction of your business.',
      ]],
    ],
  ],

  [
    'id' => 'ownership', 'label' => 'Ownership and commitment',
    'eyebrow' => 'Ownership and commitment',
    'title' => 'Know where you stand.',
    'qs' => [
      ['Who controls our accounts?', [
        'You retain control of your business accounts, including advertising, analytics and your website.',
        'We request the access needed for delivery. Responsibilities for commissioned assets, documentation and handover are recorded in the proposal.',
      ]],
      ['How long are we committing for?', [
        'With the standard monthly arrangement, cancellation requires 30 days&rsquo; notice.',
        'If you choose the setup-fee waiver, you commit to an initial six months. After that, the arrangement continues monthly with 30 days&rsquo; notice.',
        'Your agreement confirms the dates and notice process.',
      ]],
      ['What happens if we stop working together?', [
        'We arrange the handover of agreed files, documentation and access, and confirm the status of outstanding work.',
        'Your business accounts remain under your control. Any continuing third-party subscriptions or costs are identified during handover.',
      ]],
      ['Will you work with a competitor?', [
        'We discuss potential conflicts before starting.',
        'If exclusivity matters to your business, raise it during the initial conversation. Any exclusivity arrangement needs a clearly defined service area, market and duration, recorded in the agreement.',
      ]],
    ],
  ],
];

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO

     The jump list is part of the hero rather than a section of its own. A
     reference page is often arrived at from a search result with one question
     in mind, and making that reader scroll past a band to find the list is
     the wrong kind of tidy.
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>Your questions, answered</span></p>

    <h1 class="hero__title">Good questions. Straight answers.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">What does it cost? What will you need from us? What happens if the plan needs to change?<span class="hero__sub2">Here&rsquo;s what to expect before we start, and while we&rsquo;re working together.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>
  </div>

  <nav class="jumpto" aria-label="Jump to a section">
    <p class="label">Jump to</p>
    <ul role="list">
<?php foreach ($GROUPS as $g): ?>
      <li><a href="#<?= e($g['id']) ?>"><?= $g['label'] ?></a></li>
<?php endforeach; ?>
    </ul>
  </nav>
</section>


<!-- ==========================================================================
     02 — THE ANSWERS

     One band. See the note at the top of this file: twenty-eight answers
     across six alternating grounds would be exhausting to read, and this is a
     document rather than a pitch.
     ========================================================================== -->
<section class="band band--light qbody">
  <div class="container">

<?php foreach ($GROUPS as $g): ?>
    <div class="qgroup" id="<?= e($g['id']) ?>">
      <div class="qgroup__head">
        <p class="eyebrow"><span><?= $g['eyebrow'] ?></span></p>
        <h2 class="qgroup__title"><?= $g['title'] ?></h2>
      </div>

      <div class="qa">
<?php foreach ($g['qs'] as $i => [$q, $answer]): ?>
        <details class="qi">
          <summary class="qi__q">
            <span class="qi__n"><?= sprintf('%02d', $i + 1) ?></span>
            <span class="qi__text"><?= $q ?></span>
            <span class="qi__mark" aria-hidden="true"></span>
          </summary>
          <div class="qi__a">
<?php foreach ($answer as $part): ?>
<?php   if (is_array($part)): ?>
            <ul class="deliv__list" role="list">
<?php     foreach ($part as $line): ?>
              <li><?= $line ?></li>
<?php     endforeach; ?>
            </ul>
<?php   else: ?>
            <p><?= $part ?></p>
<?php   endif; ?>
<?php endforeach; ?>
          </div>
        </details>
<?php endforeach; ?>
      </div>
    </div>
<?php endforeach; ?>

    <?php /* Not a form. The point of the line is that a person reads the
             inbox, and a form would say the opposite. */ ?>
    <div class="notthis askit">
      <p class="label label--clay">Still have a question?</p>
      <p class="notthis__text">Ask us directly. Email <a href="mailto:<?= e($SITE['email']) ?>"><?= e($SITE['email']) ?></a> with what you&rsquo;d like to know. If it helps us understand your question, include your website and a little context about your business.</p>
    </div>

  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
