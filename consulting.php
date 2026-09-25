<?php
/**
 * Business consultancies
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. The ninth and last industry page on
 * the new shape. All nine now share one structure, and the old shape is no
 * longer used by any file, though the template still carries it.
 *
 * No new template keys. Four blocks on one page is the most so far, and the
 * bands alternate the whole way down without a repeat.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. SweetRush stays, and this
 * is the one industry page where the client is the same kind of business as the
 * reader, which the write-up says in its first clause. The metric is pending
 * after the 3.2x sweep. A semicolon in the old write-up became a full stop.
 * See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for business consultancies | RankinAI';
$page_desc  = 'Let your thinking open the next client conversation. Search visibility, expert content, case studies, websites and proposal follow-up for business consultancies.';

$INDUSTRY = [

  'label' => 'Digital marketing for business consultancies',
  'h1'    => 'Let your thinking open the next client conversation.',
  'sub'   => 'Your expertise becomes valuable when a client can see how it applies to their situation.',
  'sub2'  => 'We help consultancies make that connection through clear positioning, useful content, credible engagement stories and a stronger presence where prospective clients look for help.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'Give prospective clients a way to experience your thinking.',
    'paras' => [
      'In a good discovery conversation, you ask a question that changes the discussion.',
      'You recognise a pattern, explain a trade-off or help someone understand why their current approach is falling short.',
      'Your content can begin doing that work before you meet. We help turn your perspective and experience into material that shows prospective clients how you think, and why a conversation with your team could be useful.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right engagements',
    'title'   => 'What do you want your consultancy to be known for?',
    'paras' => [
      'You may want to grow a specific advisory service, develop a sector position or reach decision-makers beyond the founder&rsquo;s network.',
    ],
    'listLead' => 'We start by defining',
    'list' => [
      'The business problems you are best equipped to address.',
      'Your priority sectors and organisation sizes.',
      'The people involved in buying your services.',
      'The engagement types you want to grow.',
      'The experience and evidence supporting your offer.',
      'Your capacity to take on additional work.',
    ],
    'tail' => 'That direction shapes the message, audience and content plan.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the buyer',
    'title'   => 'Help them connect their problem with your expertise.',
    'paras' => [
      'A prospective client may already know they need a consultant. Or they may still be working out what kind of help the situation requires.',
    ],
    'items' => [
      ['Where you can contribute',
       'The problems, decisions and circumstances your team works on.'],
      ['Why your perspective is relevant',
       'The experience and reasoning behind your approach.'],
      ['What working together involves',
       'The scope, people, stages and responsibilities.'],
      ['How to begin',
       'A clear first step that fits the decision they are ready to make.'],
    ],
    'tail' => 'We organise your website and content around those questions.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your expertise easier to discover and assess.',
    'items' => [
      ['pencil', 'Content', '/content/',
       'Give your perspective something people can read and share.',
       'We develop articles, service pages and engagement stories from your team&rsquo;s knowledge. The focus is on useful arguments, relevant examples and clear explanations that help prospective clients understand your thinking.'],
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable around the needs you address.',
       'We research how buyers explore the problems, services and specialisms connected to your work. We improve priority pages and monitor selected AI questions relevant to your field, helping identify gaps in how your expertise is represented.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Make the offer easier to understand.',
       'We clarify the situations you support, who the work suits and how an engagement begins. Relevant experience, named specialists and clear service descriptions help visitors assess whether a conversation would be worthwhile.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep the context when a decision takes time.',
       'A promising discussion may pause while a client secures budget, aligns stakeholders or revisits priorities. We help record the next step and support follow-up that reflects the conversation, so your team can reconnect with something relevant to say.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let approved client experience support the decision.',
       'We help present genuine feedback and maintain accurate professional profiles. Where public reviews are unsuitable, approved testimonials and engagement stories may provide useful evidence of the working relationship.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a focused offer and audience.',
       'We assess whether a campaign could help reach the decision-makers relevant to a specific service. The offer, targeting and destination page need to give that audience a credible reason to engage.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Your point of view',
      'title'   => 'What do you find yourself explaining in every important meeting?',
      'quotes' => [
        'The assumption clients keep making.',
        'The trade-off they underestimate.',
        'The question that should be asked earlier.',
        'The decision that looks straightforward until someone examines it closely.',
      ],
      'paras' => [
        'These can be starting points for useful content.',
        'We help draw out your perspective, develop the reasoning and support it with examples you can publish.',
      ],
      'tail' => 'The result should sound like your team has something considered to contribute, and give the reader something worth thinking about.',
    ],

    [
      'eyebrow' => 'Your engagement stories',
      'title'   => 'Show how the thinking became useful.',
      'paras' => [
        'A prospective client needs to understand how your expertise translates into work.',
        'We help structure approved engagement stories around the situation, the challenge, your contribution and the outcome.',
      ],
      'items' => [
        ['The situation',
         'What prompted the client to seek support.'],
        ['The challenge',
         'The decisions, constraints or uncertainties involved.'],
        ['Your contribution',
         'What your team investigated, recommended or helped implement.'],
        ['The outcome',
         'What changed, supported by evidence and an appropriate timeframe.'],
      ],
      'tail' => 'We distinguish your contribution from the client&rsquo;s implementation and other factors affecting the result. Where outcomes are qualitative, the story can still explain what became clearer, what decision was made or how the organisation moved forward.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Supporting the buying decision',
      'title'   => 'Give your contact something useful to take into the next meeting.',
      'paras' => [
        'The person speaking with you may need support from colleagues before an engagement can proceed.',
      ],
      'listLead' => 'Clear material can help them explain',
      'list' => [
        'Why the issue deserves attention.',
        'What your proposed work would cover.',
        'Why your experience is relevant.',
        'What their organisation would need to contribute.',
        'What the first stage is intended to produce.',
      ],
      'tail' => 'We plan content with those conversations in mind, so your website and sales material support the people evaluating your offer.',
    ],

    [
      'eyebrow' => 'Make the first step clear',
      'title'   => 'Help a suitable client understand how to engage you.',
      'paras' => [
        'Your service pages should explain the starting point. Depending on your model, that could be an initial discussion, a diagnostic assessment, a workshop or a defined first phase.',
        'We help communicate what that step involves, who should participate and what information is needed.',
      ],
      'tail' => 'Where appropriate, we also explain typical engagement scope or investment factors, helping prospective clients approach the conversation with realistic expectations.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Find the substance. Make it clear. Put it in front of the right people.',
  'moves' => [
    ['Define the commercial direction.',
     'We agree the problems, services and client profiles you want to prioritise.'],
    ['Explore the expertise.',
     'We interview your team and review existing material, looking for useful perspectives, relevant experience and evidence.'],
    ['Build the priorities.',
     'We identify the pages, content, search opportunities and follow-up improvements that support your goals.'],
    ['Deliver and refine.',
     'We put the plan into action and review the conversations it supports. Feedback from your sales and delivery teams helps sharpen the message and decide what to develop next.'],
  ],

  /* Real, and the closest fit on the site: a consultancy on a consultancy page.
     Running without a figure. The 3.2x came off 25 Sep 2026: invented during
     copywriting and never published. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when the expertise became easier to assess?',
    'name'     => 'SweetRush',
    'meta'     => ['San Francisco, USA', 'Learning &amp; development consultancy'],
    'text'     => 'A consultancy, which makes this the closest fit on the site. SweetRush have advised learning and development buyers for twenty years. The buyers who had worked with them knew what they were worth. To everyone else the website read like a much smaller firm&rsquo;s brochure. The thinking was all in the room and none of it was on the page. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; SweetRush',
    'photoSrc' => 'case-sweetrush',
    'photoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',
    'href'     => '/success-stories/sweetrush/',
    'linkText' => 'Read the SweetRush story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are the right conversations developing?',
  'report' => [
    ['Client fit',
     'Do enquiries come from the organisations and decision-makers you want to reach?'],
    ['Problem fit',
     'Are they seeking help with work your team is equipped to undertake?'],
    ['Engagement progress',
     'Which conversations move into scoping, stakeholder discussions or proposals?'],
    ['Work commissioned',
     'Where your records allow, which opportunities become engagements and what can be learned from the journey?'],
  ],
  'reportTail' => 'We assess those stages in the context of your sales cycle and capacity.',

  'qs' => [
    ['Most of our work comes through the founder&rsquo;s network. How does this help?', [
      'The marketing can support those relationships and help people beyond the existing network discover your expertise.',
      'Useful content also gives contacts something relevant to share when introducing or recommending you.',
    ]],
    ['Will publishing our thinking give too much away?', [
      'We agree the boundaries with you.',
      'Content can demonstrate how you approach a problem without publishing confidential methods or engagement-specific recommendations. The aim is to help readers understand the value of applying your expertise to their situation.',
    ]],
    ['We don&rsquo;t have a clearly defined point of view. Where would you start?', [
      'We begin with the conversations your team already has.',
      'The questions you challenge, patterns you recognise and advice you repeatedly explain can reveal a perspective worth developing. We help make it clear and support it with evidence.',
    ]],
    ['Our engagements are confidential. Can we still demonstrate experience?', [
      'Often, an approved anonymised account can explain the context, your role and the outcome.',
      'Where a story cannot be published, we can use other formats to demonstrate your understanding of the problem.',
    ]],
    ['Can you help us attract larger engagements?', [
      'We can help clarify the scope and level of work your team is equipped to deliver.',
      'The positioning needs relevant evidence behind it. We assess that before recommending how to present a larger engagement offer.',
    ]],
    ['Our consultants don&rsquo;t have time to write.', [
      'We organise focused interviews and prepare the drafts.',
      'Your team contributes the expertise, checks the substance and approves publication. The content schedule makes those responsibilities clear.',
    ]],
    ['Can this support our existing business development activity?', [
      'Yes. We can plan content around introductions, follow-up, scoping conversations and proposals.',
      'Your team&rsquo;s feedback helps identify the material that would be most useful.',
    ]],
    ['What if clients take several months to decide?', [
      'We account for that in the reporting and follow-up process.',
      'The aim is to stay relevant to the client&rsquo;s situation, keep track of agreed next steps and understand how opportunities progress over time.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
