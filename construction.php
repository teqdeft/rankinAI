<?php
/**
 * Construction companies
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Second industry page on the new
 * shape, after /interior-design/. Seven industries are still on the old one and
 * render exactly as they did.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair and hero object image, the
 * two-column channel audit, the market data section with its three sourced
 * figures and worked calculation, the mid-page CTA, the shelved levers block,
 * closeText, and the team section. Same list as /interior-design/, and the same
 * note in CLAIMS.md about the sourced market figures.
 *
 * THE STORY KEEPS ITS FIGURE, AND ITS DISCLAIMER. Kulwant's copy brackets the
 * whole block. Pine Tree Lane are not a contractor, which the write-up says in
 * its first three words, and that honesty is the reason the block works on this
 * page at all. The 4x is the published organic figure and is labelled as
 * organic. See CLAIMS.md.
 *
 * ONE COPY EDIT, FOR THE PHOTOGRAPHY RULE. The draft answer ends "photography is
 * commissioned separately", which does not say by whom. We are in India and the
 * clients are not. Same fix as /interior-design/ and /content/.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for construction companies | RankinAI';
$page_desc  = 'Make your track record work for your next project. Search visibility, project case studies, websites, advertising and enquiry follow-up for construction companies and specialist contractors.';

$INDUSTRY = [

  'label' => 'Digital marketing for construction companies',
  'h1'    => 'Make your track record work for your next project.',
  'sub'   => 'You have completed projects, practical experience and a team capable of delivering.',
  'sub2'  => 'We help prospective clients, developers and project teams discover those strengths, and understand where your company fits their next build.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'Before they ask you to price the work, give them a reason to consider you.',
    'quotes' => [
      'Have you delivered something comparable?',
      'Can you handle the scale?',
      'What does your team take responsibility for?',
      'Where do you operate?',
    ],
    'paras' => [
      'A prospective client needs to understand more than the services you list.',
      'Your completed work can help answer those questions.',
      'We make that experience easier to find and assess, so someone who has never worked with you can begin to understand why your company belongs on their shortlist.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right work',
    'title'   => 'Which projects would make the best use of your team?',
    'paras' => [
      'A larger number of enquiries can create more estimating work without improving the pipeline.',
    ],
    'listLead' => 'We start by defining the opportunities you actually want to pursue',
    'list' => [
      'The project and building types you specialise in.',
      'Your preferred scope and contract-value range.',
      'The locations you can serve effectively.',
      'Your capacity and preferred start dates.',
      'The clients and professional relationships you want to develop.',
    ],
    'tail' => 'That direction shapes the searches we target, the projects we feature and the information we collect when someone gets in touch.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the buyer',
    'title'   => 'Different projects begin with different questions.',
    'items' => [
      ['Residential construction',
       'A homeowner may need help understanding your experience, process, likely investment and what working with your team will involve. Your website should help them approach the first conversation with useful context.'],
      ['Commercial construction and fit-out',
       'Developers, occupiers and project teams need evidence relevant to the building type, scale and delivery requirements. Project records, team experience and clear capabilities help them assess whether to take the conversation further.'],
      ['Specialist contracting',
       'Buyers need to understand the particular work you undertake, where it fits within a wider project and what experience supports your capability. The marketing should make that specialism easy to recognise.'],
    ],
    'tail' => 'We agree which audience matters to your business and build the plan around it.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your experience easier to find, and easier to assess.',
    'items' => [
      ['pencil', 'Content', '/content/',
       'Give completed projects a useful record.',
       'We write up selected projects with the brief, scope, scale, constraints and your contribution. Where approved, we include value bands, programmes, project-team details and client feedback. The result gives a prospective buyer more to evaluate than a gallery alone.'],
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for the work you undertake.',
       'We build the search plan around relevant services, project types and locations. That includes improving priority pages, addressing technical barriers and monitoring selected AI questions connected to your market.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help visitors assess the fit.',
       'We organise your capabilities and projects so buyers can find relevant experience. The enquiry journey collects useful context about the project, location, stage and timing, with a clear explanation of what happens next.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients explain the working relationship.',
       'Genuine feedback can help prospective clients understand your communication, coordination and approach to delivery. We establish a consistent review-request process and help place approved feedback alongside relevant work.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep track of the opportunities worth pursuing.',
       'We help organise incoming enquiries, assign responsibility and schedule follow-up. Your team can see which opportunities need information, which are being priced and which are awaiting a decision.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined service or market opportunity.',
       'Where demand and budget make it appropriate, we develop campaigns for selected services and locations. The targeting, message and landing page are designed around the project profile you want to attract.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Your project experience',
      'title'   => 'A finished building shows the outcome. The story shows your capability.',
      'paras' => [
        'The photographs matter. So do the decisions and delivery work behind them.',
        'Perhaps the project involved an occupied site, restricted access, a phased handover or coordination between several specialist teams. Those details can demonstrate experience relevant to the next buyer&rsquo;s situation.',
      ],
      'items' => [
        ['The requirement',
         'What the client needed and the scope your company undertook.'],
        ['The constraints',
         'The practical challenges that shaped the work.'],
        ['Your approach',
         'How your team planned, coordinated and delivered its responsibilities.'],
        ['The outcome',
         'What was completed, supported by approved evidence and feedback.'],
      ],
      'tail' => 'We distinguish your contribution clearly, including where the work was delivered alongside other contractors or project partners.',
    ],

    [
      'eyebrow' => 'Better enquiries',
      'title'   => 'Give the estimating team a better starting point.',
      'paras' => [
        'Your marketing and enquiry process should help establish whether an opportunity fits before substantial time goes into pricing it.',
      ],
      'listLead' => 'We help make the important boundaries clear',
      'list' => [
        'The work you undertake.',
        'The areas you cover.',
        'The scale of projects you are equipped for.',
        'The information needed for an initial assessment.',
        'The next step once an enquiry arrives.',
      ],
      'tail' => 'An early enquiry may still be incomplete. The process should help your team identify what is missing and decide how to move it forward.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the company. Focus the opportunity. Put the evidence to work.',
  'moves' => [
    ['Define the target projects.',
     'We discuss the work you want more of, the projects you can evidence and your delivery capacity.'],
    ['Review the current position.',
     'We examine how buyers discover you, what the website communicates and how incoming opportunities are handled.'],
    ['Agree the priorities.',
     'We identify the project stories, capability pages, visibility improvements and enquiry-process changes that deserve attention first.'],
    ['Deliver and review.',
     'We put the plan into action and assess the opportunities it supports, using feedback from your estimating and commercial team to refine the work.'],
  ],

  /* Real, published, and openly not a contractor. The first three words of the
     write-up say so, which is what makes the block usable on this page. */
  'story' => [
    'title'     => 'What changed when the capabilities became clearer?',
    'name'      => 'Pine Tree Lane',
    'meta'      => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'metric'    => '4&times;',
    'metricKey' => 'organic traffic in three months',
    'text'      => 'Not a contractor. Pine Tree Lane run their own joinery factory in Dubai, and the problem will be familiar to anyone who employs their own trades: the firms winning the searches were the ones who subcontract everything. We rebuilt the pages around what they actually make, wrote up three projects with budgets and timelines, and fixed what was stopping Google reading the site.',
    'photo'     => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc'  => 'case-pine-tree-lane',
    'photoAlt'  => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'      => '/success-stories/pine-tree-lane/',
    'linkText'  => 'Read the Pine Tree Lane story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are the enquiries moving towards the work you want?',
  'report' => [
    ['Project suitability',
     'Do the opportunities match your services, geography, scale and capacity?'],
    ['Enquiry completeness',
     'Does your team have enough information to decide on a useful next step?'],
    ['Commercial progress',
     'Which enquiries move into discussions, site visits, pricing or tender invitations?'],
    ['Work secured',
     'Where your records allow, which opportunities become contracts and what can be learned from the process?'],
  ],
  'reportTail' => 'We report these stages in context, recognising that construction opportunities can take time to develop.',

  'qs' => [
    ['Most of our work comes through architects, developers and existing clients. Why invest in marketing?', [
      'Those relationships remain valuable.',
      'A clearer online presence supports introductions and helps people outside your current network assess your company. It also gives existing contacts relevant project evidence to share when recommending you.',
    ]],
    ['We&rsquo;re already busy. Is there a reason to start now?', [
      'The answer depends on your future capacity and the work you want next.',
      'If the current workload is healthy, the priority may be documenting completed projects and building visibility for a future service or location. We plan around when you can realistically take on more work.',
    ]],
    ['Can you help us attract larger projects?', [
      'We can help present the experience and capabilities that support that ambition.',
      'The target needs to be credible for your business. We review your project record, team and delivery scope before recommending how to position the company.',
    ]],
    ['Do you manage tenders?', [
      'This service supports discovery, qualification and the presentation of your capabilities.',
      'We can create relevant project stories and marketing material for your team to use. Tender management, estimating and bid writing would require a separately defined scope.',
    ]],
    ['What if we can&rsquo;t publish client names or project values?', [
      'We work with the information you have permission to share.',
      'Building type, approximate scale, scope and delivery challenges can still help explain your experience. Any anonymised account is reviewed before publication.',
    ]],
    ['Do we need professional photography?', [
      'We review your existing material first.',
      'Some project records may already provide useful images. Where additional photography would strengthen the presentation, we can help define what is needed. We do not shoot. Our team is in India and our clients are not, so photography is commissioned locally by you.',
    ]],
    ['Can you work with our business development team?', [
      'Yes. Their knowledge helps define the right opportunities and the evidence buyers need.',
      'We agree how marketing enquiries are handed over and how sales feedback returns to the campaign and content plan.',
    ]],
    ['Can we focus on one service or region first?', [
      'Yes. A focused starting point can make the scope and measurement clearer.',
      'We choose it based on your priorities, available evidence, demand and capacity.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
