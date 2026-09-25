<?php
/**
 * Paid advertising
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy, and the second service page in the
 * new shape after /ai-visibility/.
 *
 * ONE SECTION IS NEW TO THE TEMPLATE AND ONLY THIS PAGE HAS IT: 'channels',
 * where we advertise. Four alternatives rather than four steps, so they carry
 * an icon and no number, and they sit on cream directly under the section that
 * decides which enquiries are worth buying. Two light bands in a row is a case
 * style.css already handles.
 *
 * THE STORY IS NOT THE COPY'S, AND THE FIGURE CAME OFF. Kulwant's draft has
 * bracketed placeholders there. Those do not go on a page. Pine Tree Lane is a
 * real client whose ads we run, so the engagement stays, but the 4x organic
 * traffic figure does not: on a paid advertising page a reader would take it
 * for something the advertising produced, whatever the label under it says. It
 * stays on /ai-visibility/, where it belongs. The block renders with the
 * pending metric until the client releases an advertising number. See
 * CLAIMS.md.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the mid-page CTA, the
 * "doing nothing, a freelancer, or us" table with its unsourced salary
 * benchmark, the closeText (the close is shared now), and the dead fitHead /
 * fitYes / fitNo arrays the removed "is this the right next step" section used.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Paid advertising for service businesses | RankinAI';
$page_desc  = 'More of the right enquiries, and a clearer view of what they cost. Google, LinkedIn and Meta campaigns joined up with landing pages, conversion tracking and lead quality feedback.';

$SERVICE = [

  'label'    => 'Paid advertising for service businesses',
  'h1'       => 'More of the right enquiries. A clearer view of what they cost.',
  'sub'      => 'Put your business in front of people who could become your next clients.',
  /* 'heroNote' removed 25 Sep 2026 at Kulwant's instruction. It listed the
     four channels, which the "where we advertise" section covers properly a
     screen further down. The key is still supported by the template. */
  'sub2'     => 'We connect campaign strategy, persuasive ads, relevant landing pages and conversion tracking, so your budget has a clear job to do and you can see how it is performing.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'You&rsquo;re paying for the introduction. Make what happens next count.',
    'paras' => [
      'Someone searches for your service, notices your advert or returns after an earlier visit.',
      'The click gives you an opportunity. What follows determines whether it becomes a useful enquiry.',
      'Does the page match what caught their attention? Can they see that you understand their situation? Is there a clear reason to contact you?',
      'We work across those connected steps, helping your advertising bring suitable prospects into a conversation your team can develop.',
    ],
    'items' => [
      ['Reach the right audience.',
       'Focus the budget on relevant services, locations and buyer needs.'],
      ['Give them a reason to respond.',
       'Connect a clear offer with evidence that your business can help.'],
      ['Learn from the enquiries.',
       'Use lead quality and sales feedback to improve where the next round of budget goes.'],
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the business',
    'title'   => 'Which enquiries would make the investment worthwhile?',
    'paras' => [
      'Before we build a campaign, we need to understand what a good opportunity looks like.',
      'A consultation for a high-value project has different economics from an enquiry for a small, one-off job. A national consultancy needs a different approach from a local design studio.',
    ],
    'listLead' => 'We establish',
    'list' => [
      'The services and offers you want to promote.',
      'The people and businesses you want to reach.',
      'Your delivery area and capacity.',
      'What makes an enquiry commercially relevant.',
      'Your available budget and typical sales cycle.',
    ],
    'tail' => 'Those answers shape the campaign, the message and how performance will be judged.',
  ],

  'channels' => [
    'eyebrow' => 'Where we advertise',
    'title'   => 'Choose the channel around the opportunity.',
    'items' => [
      ['search', 'Google Search Ads',
       'Reach people actively looking for help.',
       'Build campaigns around relevant services, problems and locations. Connect those searches with ads and pages that answer the buyer&rsquo;s immediate need.'],
      ['linkedin', 'LinkedIn Ads',
       'Put your expertise in front of relevant business audiences.',
       'Develop campaigns for the professional audiences and accounts you want to reach, supported by an offer that gives them a useful reason to engage.'],
      ['people', 'Meta Ads',
       'Make your work worth stopping for.',
       'Use project examples, client stories and clear offers to introduce your business to relevant audiences and encourage the next step.'],
      ['refresh', 'Retargeting',
       'Give interested prospects a reason to return.',
       'Follow an earlier visit with relevant proof, a useful answer or a clearer invitation to enquire. We consider the message, timing and frequency together.'],
    ],
    'tail' => 'The channels and campaign limits are defined in your proposal. LinkedIn, Meta and broader combinations of channels are scoped where appropriate.',
  ],

  'doHead' => [
    'What we manage',
    'The campaign and the journey around it.',
    '',
  ],

  'do' => [
    ['clipboard', 'Account review and campaign strategy',
     'Understand where the budget should go.',
     'For existing campaigns, we review the available account history, targeting, search terms, tracking and results. For a new account, we build the initial plan around demand, competition, your offer and the budget available for learning.'],
    ['target', 'Targeting and account structure',
     'Give different opportunities the attention they need.',
     'We organise campaigns around relevant services and audiences, with appropriate location settings, exclusions and budget allocation. For search campaigns, we review the queries triggering your ads and refine the targeting as evidence develops.'],
    ['pencil', 'Ads and creative',
     'Make the value clear enough to act on.',
     'We develop messages around the buyer&rsquo;s situation, your offer and credible reasons to choose you. Different messages are tested to understand which attract relevant interest and support better enquiries.'],
    ['page', 'Landing pages',
     'Continue the conversation the advert started.',
     'We review the destination page for relevance, clarity, proof and ease of enquiry. Where changes or new pages are needed, the copy, design and development requirements are agreed as part of the scope.'],
    ['chart', 'Tracking and lead quality',
     'Know what happened after the click.',
     'We set up or review tracking for agreed actions, such as forms, calls and bookings. Where your systems support it, we connect those actions with qualification and sales outcomes, giving campaign decisions better information.'],
    ['sliders', 'Ongoing improvement',
     'Put each round of learning to work.',
     'We review performance, test selected changes and adjust targeting, messages, landing pages and budgets. Decisions account for the amount of data available and the time it takes your prospects to become clients.'],
  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Check the path before increasing the spend.',
  'moves' => [
    ['Understand the opportunity.',
     'We agree the priority service, audience, offer and definition of a useful enquiry.'],
    ['Prepare the campaign.',
     'We review the account, tracking, ads and destination pages. Any essential changes are identified before launch.'],
    ['Launch with a focused plan.',
     'We start with a defined budget and a manageable set of campaigns. Early results help us check targeting, enquiry quality and the path from click to contact.'],
    ['Improve, then consider expansion.',
     'As reliable evidence develops, we refine the work and discuss where additional budget could be justified.'],
  ],
  'movesTail' => 'Any increase in advertising spend is agreed with you.',

  /* Real, named with their agreement, and running before its number does. See
     the note at the top of this file for why there is no figure on it here. */
  'story' => [
    'title'    => 'What did the advertising contribute?',
    'name'     => 'Pine Tree Lane',
    'meta'     => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'text'     => 'Pine Tree Lane have their own factory, a ten-year warranty and a showroom in Dubai. We already run their search work, and the ads sit alongside it on the same searches, reaching the buyers who are ready this month rather than the ones who will be ready in three. Every enquiry is tracked back to the campaign that produced it. The advertising numbers are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc' => 'case-pine-tree-lane',
    'photoAlt' => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'     => '/success-stories/pine-tree-lane/',
    /* Their story, not this campaign's. The published one is about the search
       work, so the label says whose story it is rather than promising the
       advertising figures behind the link. */
    'linkText' => 'Read the Pine Tree Lane story',
  ],

  'reportEyebrow' => 'Measuring performance',
  'reportTitle'   => 'A cheaper enquiry only helps if it&rsquo;s worth having.',
  'reportNote'    => 'Your report follows the journey from advertising spend to commercial opportunity.',
  'report' => [
    ['Spend and enquiries',
     'What was spent, how many tracked enquiries arrived, and the cost per enquiry.'],
    ['Enquiry quality',
     'Which enquiries matched your services, location and client criteria.'],
    ['Sales progress',
     'Which became useful conversations, proposals or other defined opportunities.'],
    ['Clients won',
     'Where your sales data allows, which opportunities converted and what it cost to acquire those clients.'],
  ],
  'reportTail' => 'Clicks and engagement help us understand campaign behaviour. Your business outcomes help us judge its value.',

  /* 'feedback' (your team's part) removed 25 Sep 2026 at Kulwant's
     instruction, with the template section and its two CSS rules. The point it
     made survives in the copy: lead quality is named in the opportunity items,
     in the tracking card under "what we manage", and it is the second stage of
     the report. */

  'qs' => [
    ['How much advertising budget do we need?', [
      'We recommend a starting budget after reviewing your market, priority services and goals.',
      'It needs to support a useful period of testing and learning. We explain the assumptions and tell you if the available budget is unlikely to support the proposed approach.',
    ]],
    ['Is advertising spend included in your fee?', [
      'No. Our fee covers the agreed management and delivery work.',
      'Advertising spend is separate and paid through your own accounts. Your proposal also identifies any additional creative, development or software costs.',
    ]],
    ['How quickly can campaigns generate enquiries?', [
      'Campaigns can begin reaching people once they are approved and live. The timing and quality of enquiries depend on demand, competition, budget, the offer and the destination page.',
      'We distinguish early activity from enough evidence to assess performance.',
    ]],
    ['We tried ads before and the leads were poor. What would you check?', [
      'We would examine the targeting, search terms or audiences, ad message, landing page and the actions recorded as conversions.',
      'We also want examples of unsuitable enquiries. Those conversations often reveal gaps that account metrics alone cannot explain.',
    ]],
    ['Can you take over an existing account?', [
      'Yes. We review the account and available history before recommending changes.',
      'Your account remains yours, and we explain the proposed transition so you understand what will continue and what needs attention.',
    ]],
    ['Do we need a new landing page?', [
      'Sometimes. An existing page may work well if it matches the campaign and supports a clear next step.',
      'If a new page is justified, we explain the purpose and agree its scope before building it.',
    ]],
    ['What if a campaign isn&rsquo;t profitable?', [
      'We review the available evidence against your sales cycle and objectives.',
      'That may lead to changes in targeting, the offer, the page or the follow-up, or a recommendation to pause the campaign. We explain the reasoning and agree the next action with you.',
    ]],
    ['Can the free growth audit assess our existing campaigns?', [
      'The free audit reviews your public website, visibility and enquiry journey.',
      'A reliable diagnosis of campaign spending and performance requires account access. We agree the scope of that review separately.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
