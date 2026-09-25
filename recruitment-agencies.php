<?php
/**
 * Recruitment and staffing agencies
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Fourth industry page on the new
 * shape. Five industries are still on the old one and render as they did.
 *
 * TWO THINGS THE TEMPLATE GAINED HERE: the journey section takes paragraphs
 * before its cards, and a block takes a question set. The four questions under
 * "show your specialism" are the consultants' own, so they are set as type the
 * way the buyer's questions are in an opportunity section, rather than run
 * together into a paragraph.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. Studio Ubique stays,
 * disclosed as our partner, openly not a recruitment agency, and with the
 * metric pending: the +58% came off earlier today with the other eight places
 * it was live. See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for recruitment and staffing agencies | RankinAI';
$page_desc  = 'Get found by employers who need the people you place. Employer-focused search, sector content, placement stories, websites and client follow-up for recruitment and staffing agencies.';

$INDUSTRY = [

  'label' => 'Digital marketing for recruitment and staffing agencies',
  'h1'    => 'Get found by employers who need the people you place.',
  'sub'   => 'Your consultants know the market, understand the roles and have experience solving difficult hiring challenges.',
  'sub2'  => 'We help employers discover that expertise, and see why your agency is worth briefing.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'You know why you&rsquo;re the right agency. Help the hiring manager see it.',
    'paras' => [
      'A prospective client may know very little about your agency when they first arrive.',
      'They need to understand whether you recruit for their roles, know their sector and can support the kind of hiring challenge they face. Your website and content should make those answers easy to find.',
      'We help turn the knowledge inside your recruitment team into a clearer reason for employers to start a conversation.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right briefs',
    'title'   => 'Which hiring needs do you want to be known for?',
    'paras' => [
      'Your agency may cover several sectors, but the next stage of growth usually needs a more specific direction.',
    ],
    'listLead' => 'We start by understanding',
    'list' => [
      'Your priority sectors and job functions.',
      'The employer sizes and locations you serve.',
      'Your permanent, contract or temporary staffing model.',
      'The roles and assignments your team is best equipped to deliver.',
      'The client relationships you want to develop.',
      'Your capacity to support additional briefs.',
    ],
    'tail' => 'That helps us focus the marketing on opportunities your consultants actually want to pursue.',
  ],

  'journey' => [
    'eyebrow' => 'Two audiences',
    'title'   => 'A candidate wants an opportunity. An employer wants confidence you can deliver.',
    'paras' => [
      'Both need a useful experience on your website.',
    ],
    'items' => [
      ['Candidates',
       'They need clear routes to relevant roles and information about working with your agency.'],
      ['Employers',
       'They need sector expertise, an understandable process and evidence that your team can handle their hiring requirements.'],
    ],
    'tail' => 'We help make those journeys distinct, so a hiring manager can quickly find the information they need without having to navigate through a candidate-focused experience.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Turn recruitment expertise into reasons to get in touch.',
    'items' => [
      ['pencil', 'Content', '/content/',
       'Give employers something specific to judge you on.',
       'We create sector pages, placement stories and useful hiring content based on your consultants&rsquo; experience. The material can answer employer questions, explain your approach and give your business development team something relevant to share.'],
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for your specialism.',
       'We research searches connected to your sectors, roles and locations, with particular attention to employer intent. We improve relevant pages and monitor selected AI questions that employers might ask when looking for recruitment support.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Give employers a clear route to your team.',
       'We develop the employer-facing journey around your capabilities, process and proof. Enquiry forms collect useful information about the hiring requirement, then direct it to the appropriate person.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients explain what working with you was like.',
       'Employer feedback can help demonstrate how your team understood a brief, communicated and supported the hiring process. We help collect genuine reviews and use approved testimonials alongside relevant services and sectors.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep useful client conversations moving.',
       'We help organise employer enquiries, assign responsibility and support follow-up around agreed next steps. Where appropriate, that can include reconnecting with previous clients when their hiring needs change.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined sector or service opportunity.',
       'We develop campaigns around relevant employer audiences and a clear reason to respond. The targeting, offer and landing page should work together to distinguish new-business opportunities from candidate enquiries.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Show your specialism',
      'title'   => '&ldquo;We understand your sector&rdquo; is the starting point. Show employers what that understanding looks like.',
      'quotes' => [
        'Which roles are difficult to fill, and why?',
        'What makes a brief realistic?',
        'Where do hiring processes lose suitable candidates?',
        'What should an employer clarify before approaching the market?',
      ],
      'paras' => [
        'Your consultants have useful perspectives on these questions.',
        'We help turn that experience into content that demonstrates judgment and makes a conversation with your team feel worthwhile.',
      ],
      'tail' => 'Where market figures or salary information are used, the source, scope and date should be clear.',
    ],

    [
      'eyebrow' => 'Placement stories',
      'title'   => 'Explain the work behind the placement.',
      'paras' => [
        'A successful placement can demonstrate more than the fact that a role was filled.',
        'We help structure approved stories around the requirement, the approach, the judgment and the outcome.',
      ],
      'items' => [
        ['The requirement',
         'The role, employer context and challenge behind the brief.'],
        ['The approach',
         'How your team understood the requirement and organised the search.'],
        ['The judgment',
         'The decisions that helped address the difficult parts of the assignment.'],
        ['The outcome',
         'What happened, supported by information you can evidence and publish.'],
      ],
      'tail' => 'Relevant measures might include time to shortlist, time to hire or repeat work. Each needs a clear definition and context, and client and candidate details are included only where publication has been approved.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Supporting business development',
      'title'   => 'Give your consultants something worth sending.',
      'paras' => [
        'A useful sector page can make an introduction more relevant. A placement story can answer a prospect&rsquo;s question about experience. A practical hiring guide can give an existing client a reason to reconnect.',
        'We plan content around those real conversations, so the work supports your website and the people developing employer relationships.',
      ],
      'tail' => 'Your team&rsquo;s feedback helps us understand what gets used and which questions still need a better answer.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Choose the market. Make the expertise visible. Follow the right opportunities.',
  'moves' => [
    ['Define the employer opportunity.',
     'We agree the sectors, roles and client profiles you want to prioritise, alongside your delivery capacity.'],
    ['Review the current journey.',
     'We examine how employers discover you, what they find on the website and how their enquiries reach the right consultant.'],
    ['Build the priorities.',
     'We identify the sector pages, proof, search opportunities and follow-up improvements that deserve attention first.'],
    ['Deliver and review.',
     'We put the plan into action and review the quality of the employer conversations it supports. Feedback from your consultants helps refine the audience, message and next round of work.'],
  ],

  /* Real, our partner, disclosed, openly not a recruitment agency, and running
     without a figure. The +58% came off 25 Sep 2026: invented during
     copywriting and never published. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when employers could see the specialism?',
    'name'     => 'Studio Ubique',
    'meta'     => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    'text'     => 'Not an agency. Studio Ubique are a digital agency in Zwolle, and our founder is a partner there, so weigh this one differently from the others on this site. Their new business arrived by recommendation, which is the highest-quality channel there is and the one nobody can schedule. Every consultant reading this knows what that feels like in a quiet month. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; Studio Ubique, Zwolle',
    'photoSrc' => 'case-studio-ubique',
    'photoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'     => '/success-stories/studio-ubique/',
    'linkText' => 'Read the Studio Ubique story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are we creating opportunities your agency can deliver on?',
  'report' => [
    ['Employer enquiries',
     'Which responses come from businesses seeking recruitment support?'],
    ['Client fit',
     'Do those employers match your sectors, locations, size and service model?'],
    ['Qualified briefs',
     'Which conversations develop into requirements your team is equipped to handle?'],
    ['Commercial outcomes',
     'Where your records allow, which opportunities lead to placements, assignments, repeat bookings or fees?'],
  ],
  'reportTail' => 'Candidate activity is measured separately, so it does not inflate the picture of employer acquisition.',

  'qs' => [
    ['Is this focused on winning clients or attracting candidates?', [
      'This service page focuses on employer acquisition and client development.',
      'Candidate attraction can be scoped separately. Where both are required, we distinguish the audiences, campaigns, journeys and measures of success.',
    ]],
    ['Our consultants already use LinkedIn and outbound calling. How does this fit?', [
      'The work can support those activities.',
      'Relevant content gives consultants useful material to share, while search and the employer-facing website give prospects another way to discover and assess your agency.',
    ]],
    ['Can you help us grow a particular desk?', [
      'Yes. We can focus the plan on a defined sector, role family or location.',
      'We first review the opportunity, your experience in that market and the team&rsquo;s capacity to deliver additional work.',
    ]],
    ['Our consultants don&rsquo;t have time to write articles.', [
      'We organise focused interviews and prepare the drafts.',
      'Your consultants contribute their knowledge, check the specialist details and approve the content. The schedule makes those inputs clear.',
    ]],
    ['We can&rsquo;t name clients or candidates. Can we still publish case studies?', [
      'Often, an approved anonymised account can explain the requirement, approach and outcome.',
      'We agree the publishable details before writing and avoid information that would undermine confidentiality.',
    ]],
    ['Can you work with our ATS or recruitment CRM?', [
      'We review the system and available integrations before proposing changes.',
      'The focus is the employer-enquiry and client-development process. Any wider system migration or custom development receives a separate scope.',
    ]],
    ['We receive plenty of candidate traffic. Can that help us win employers?', [
      'We assess the employer journey separately.',
      'A busy job section does not tell us whether hiring managers can find your sector expertise or understand why to brief you. We review the pages, sources and enquiry routes relevant to that audience.',
    ]],
    ['Can you help us reconnect with previous clients?', [
      'Yes, where appropriate.',
      'We can help segment relevant business contacts and develop follow-up around their relationship with your agency. The message and timing should give them a useful reason to respond.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
