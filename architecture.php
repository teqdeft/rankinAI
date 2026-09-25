<?php
/**
 * Architecture practices
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Third industry page on the new
 * shape, after /interior-design/ and /construction/. Six industries are still
 * on the old one and render exactly as they did.
 *
 * TWO GRIDS THE TEMPLATE GAINED HERE: a block with five cards renders five
 * across rather than four, and a strip of six phrases goes three and three
 * rather than leaving a five plus one orphan.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair and object image, the
 * channel audit, the market data section and its calculation, the mid-page CTA,
 * the shelved levers block, closeText, and the team section. Same list as the
 * two industry pages before it.
 *
 * THE STORY KEEPS ITS FIGURE, AND ITS DISCLAIMER. Kulwant's copy brackets the
 * whole block. Pine Tree Lane are not an architecture practice, which the
 * write-up says in its first three words. The 4x is the published organic
 * figure and is labelled as organic. See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for architecture practices | RankinAI';
$page_desc  = 'Get known for the work you want to do next. Search visibility, project stories, websites, content and enquiry follow-up for architecture practices.';

$INDUSTRY = [

  'label' => 'Digital marketing for architecture practices',
  'h1'    => 'Get known for the work you want to do next.',
  'sub'   => 'Your projects show what you can design. Your marketing should help the right clients understand what you could bring to theirs.',
  'sub2'  => 'We help architecture practices become easier to discover, communicate their expertise and attract enquiries that fit their ambitions.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'They admire the building. Help them understand the architect.',
    'quotes' => [
      'Have you handled a site like theirs?',
      'How do you approach constraints?',
      'What would the first stage involve?',
      'How do your services and fees work?',
    ],
    'paras' => [
      'A prospective client may respond to your work without knowing how to assess the practice behind it.',
      'Your website can begin answering those questions.',
      'We help you explain the thinking, experience and working relationship behind the architecture, giving someone a clearer basis for starting a conversation.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with your direction',
    'title'   => 'Which commissions would move your practice forward?',
    'paras' => [
      'You may want more work in a particular building type, a stronger presence in a region or clients who involve your team earlier.',
      'We start by understanding that direction.',
    ],
    'listLead' => 'Together, we define',
    'list' => [
      'The sectors and project types you want to pursue.',
      'The services and project stages you undertake.',
      'Your relevant experience and design approach.',
      'The locations you serve.',
      'The scale of work and capacity that suit your practice.',
    ],
    'tail' => 'That shapes the audiences we focus on, the work we feature and the questions your content needs to answer.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the client',
    'title'   => 'The same portfolio can raise different questions.',
    'items' => [
      ['Homeowners and private clients',
       'They may be commissioning an architect for the first time. They need to understand the process, your role, how decisions are made and the relationship between design fees and the wider project budget.'],
      ['Developers and commercial clients',
       'They need relevant evidence of your experience, an understanding of your capabilities and clarity about where your practice can contribute. Your project stories should make that information easy to assess.'],
      ['Organisations and project teams',
       'They may be comparing practices against a defined brief, delivery structure or procurement process. Clear service information, team experience and relevant project records help support that evaluation.'],
    ],
    'tail' => 'We build the message around the clients you want to reach.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make the thinking behind your work easier to find.',
    'items' => [
      ['pencil', 'Content', '/content/',
       'Explain the decisions that shaped the design.',
       'We develop project stories around the brief, site, constraints and your architectural response. Service pages and practical guides answer the questions prospective clients ask before they are ready to commission a practice.'],
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for your relevant expertise.',
       'We build the search plan around your services, project types and locations. That includes improving priority pages and monitoring selected AI questions connected to the work you want to be considered for.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Give prospective clients a useful way into the portfolio.',
       'We organise the website so visitors can explore relevant projects, understand your services and see who they would work with. The next step should feel clear whether they have a developed brief or an early question.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients describe the experience of working with you.',
       'Approved feedback can help explain your communication, collaboration and approach to the project. We help collect genuine reviews and place relevant testimonials alongside your services and work.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep track of a commission before it becomes a project.',
       'An enquiry may pause while a client secures a site, funding or internal approval. We help record the context, assign responsibility and follow up at appropriate points, so your team can pick up the conversation with an understanding of what came before.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a focused opportunity.',
       'Where appropriate, we develop campaigns around a defined service, building type or location. The scope reflects the audience you want to reach, the evidence available and the budget needed to assess the approach.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Your project stories',
      'title'   => 'The image captures the result. The explanation reveals your contribution.',
      'paras' => [
        'A photograph can communicate atmosphere, material and form.',
        'The story can explain why the building took that shape, and what your practice contributed to getting it there.',
      ],
      'items' => [
        ['The brief',
         'What the client needed and what the project was intended to achieve.'],
        ['The context',
         'The site, existing building and constraints that influenced the design.'],
        ['The architectural response',
         'The choices your team made and the reasoning behind them.'],
        ['Your role',
         'The services and stages your practice delivered, with collaborators acknowledged appropriately.'],
        ['The status and outcome',
         'Whether the project is a concept, in development, under construction or completed, supported by the information you can publish.'],
      ],
      'tail' => 'This gives prospective clients a richer understanding of your work without asking them to interpret the images alone.',
    ],

    [
      'eyebrow' => 'A more useful first conversation',
      'title'   => 'Help clients arrive with clearer expectations.',
      'listLead' => 'Your website can explain the fundamentals before someone sends an enquiry',
      'list' => [
        'The types of work your practice undertakes.',
        'What an initial consultation or feasibility stage involves.',
        'How your architectural services are structured.',
        'How fees are approached.',
        'What information helps you assess a potential project.',
        'What happens after someone gets in touch.',
      ],
      'tail' => 'That makes it easier for a suitable client to begin, and gives your team a more useful starting point.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the practice. Connect the work with the audience.',
  'moves' => [
    ['Define the ambition.',
     'We discuss the commissions you want, your capacity and what distinguishes your approach.'],
    ['Review the current picture.',
     'We examine your visibility, portfolio, service information and enquiry journey. We look at what a prospective client can understand today and where more context would help.'],
    ['Prioritise the work.',
     'We identify the project stories, pages, search opportunities and follow-up improvements that best support your direction.'],
    ['Deliver and refine.',
     'We put the plan into action, then review the enquiries it supports with your team. Feedback about project suitability helps us refine the audience, message and priorities.'],
  ],

  /* Real, published, and openly not a practice. The first three words of the
     write-up say so. */
  'story' => [
    'title'     => 'What changed when the practice became easier to understand?',
    'name'      => 'Pine Tree Lane',
    'meta'      => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'metric'    => '4&times;',
    'metricKey' => 'organic traffic in three months',
    'text'      => 'Not a practice. Pine Tree Lane design and build bespoke joinery in Dubai, and their problem is the one we find in almost every practice we audit: the work was excellent and the website said nothing a buyer could use. We rebuilt the pages around what they actually make, and wrote up three projects with the brief, the budget and the timeline attached.',
    'photo'     => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc'  => 'case-pine-tree-lane',
    'photoAlt'  => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'      => '/success-stories/pine-tree-lane/',
    'linkText'  => 'Read the Pine Tree Lane story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are the right conversations developing?',
  'report' => [
    ['Project fit',
     'Do enquiries align with your sectors, services, locations and preferred scale?'],
    ['Readiness',
     'What stage has the prospective client reached, and what help do they need now?'],
    ['Progress towards a commission',
     'Which enquiries move into consultations, feasibility work or fee proposals?'],
    ['Work appointed',
     'Where your records allow, which opportunities become commissions and what contributed to the decision?'],
  ],
  'reportTail' => 'We assess those stages in context, including the time a client may need before proceeding.',

  'qs' => [
    ['Will the marketing preserve the character of our practice?', [
      'Your design approach and visual identity are central to the brief.',
      'We work with that character while helping prospective clients understand your services, thinking and experience.',
    ]],
    ['Our portfolio photography is already strong. What would you improve?', [
      'We look at the information around it.',
      'A project may benefit from a clearer brief, an explanation of your role or a description of the decisions that shaped the outcome. We also review how easily visitors can find work relevant to their own project.',
    ]],
    ['Do we have to publish our fees?', [
      'You can explain the fee structure without publishing a fixed price.',
      'We discuss what guidance would help a prospective client understand the commitment, including what an initial stage covers and which factors affect the scope.',
    ]],
    ['Most of our work comes through professional relationships. Why add marketing?', [
      'Your network remains valuable.',
      'A stronger online presence supports introductions and gives people outside that network a way to discover and assess your practice. It also makes your experience easier for others to share.',
    ]],
    ['Can you help us move into a new sector?', [
      'We start by reviewing the relevant experience and capabilities you can demonstrate.',
      'The plan may involve presenting transferable expertise more clearly and developing content around the new audience&rsquo;s needs. We distinguish demonstrated experience from future ambition.',
    ]],
    ['Can we feature projects that haven&rsquo;t been built?', [
      'Yes, where you have permission to publish them.',
      'The project status, your role and the nature of the work should be clear. Concepts, competition entries and completed buildings each need appropriate context.',
    ]],
    ['Some projects are confidential. How do you handle that?', [
      'We agree what can be shared before writing.',
      'An anonymised account may still explain the brief, constraints and design response. Your team approves the details and supporting material before publication.',
    ]],
    ['We have limited time for marketing. What would you need from us?', [
      'We organise focused conversations around your priority projects and services, then prepare the drafts.',
      'Your team provides the source material, checks the specialist details and approves publication. The schedule makes those responsibilities clear.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
