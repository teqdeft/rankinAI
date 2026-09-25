<?php
/**
 * IT consultancies and managed service providers
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Seventh industry page on the new
 * shape. Two industries are still on the old one and render as they did.
 *
 * ONE TEMPLATE ADDITION: a block can carry a `lead` line before its question
 * set. On this page the certifications sentence is what the four questions are
 * about, so it has to come first. Everywhere else the questions open the block.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. Studio Ubique stays,
 * disclosed as our partner, openly not an MSP, with the metric pending after
 * the +58% sweep. See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for IT consultancies and MSPs | RankinAI';
$page_desc  = 'Be the IT partner they are ready to trust. Search visibility, service content, case studies, websites and client follow-up for IT consultancies and managed service providers.';

$INDUSTRY = [

  'label' => 'Digital marketing for IT consultancies and MSPs',
  'h1'    => 'Be the IT partner they&rsquo;re ready to trust.',
  'sub'   => 'Your team understands the systems. Your next client needs to understand the difference you could make to their business.',
  'sub2'  => 'We help IT consultancies and managed service providers become easier to discover, demonstrate their expertise and attract relevant sales conversations.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'A business is making an IT decision. Give them a clear reason to include you.',
    'paras' => [
      'They may be reviewing their support contract, planning a migration or looking for expertise their internal team needs.',
      'Some will arrive with a detailed brief. Others will know what needs to improve without knowing how to describe the solution. Your marketing should help both understand where you fit.',
      'We turn your services, experience and delivery approach into information buyers can use to assess your business and start a relevant conversation.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right clients',
    'title'   => 'Which opportunities suit your team best?',
    'paras' => [
      'A managed support contract is different from a cloud project, a specialist assessment or an ongoing consulting relationship.',
    ],
    'listLead' => 'We start by defining the work you want to grow',
    'list' => [
      'Your priority services and technical capabilities.',
      'The sectors and business sizes you support.',
      'The locations and delivery models you cover.',
      'Your preferred contract or project scope.',
      'The environments and systems your team knows well.',
      'Your capacity to onboard and deliver.',
    ],
    'tail' => 'That direction helps us attract opportunities your team is equipped to handle.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the buyer',
    'title'   => 'Make the business case clear. Give technical buyers the detail they need.',
    'items' => [
      ['Business owners and operational leaders',
       'They want to understand what your support would change, what it includes and who will take responsibility. Clear explanations of the service, costs and working relationship help them assess the offer.'],
      ['Internal IT teams',
       'They need to evaluate your relevant experience, technical approach and ability to work with their existing environment. Your content should give them enough substance to decide whether a deeper discussion is worthwhile.'],
      ['Procurement and project teams',
       'They may be comparing providers against a defined requirement. Accessible service information, relevant case studies and a clear account of your responsibilities help them evaluate the fit.'],
    ],
    'tail' => 'We organise the content so each audience can find the information it needs.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your capabilities easier to discover and assess.',
    'items' => [
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be found for the services you want to grow.',
       'We research searches connected to your specialisms, sectors and locations. We improve priority pages and monitor selected AI questions relevant to your market, with attention to searches that indicate a potential business requirement.'],
      ['pencil', 'Content', '/content/',
       'Explain the expertise through the decisions it supports.',
       'We create service pages, practical guides and project stories that connect technical work with the client&rsquo;s situation. The content gives business buyers a clear explanation and provides appropriate detail for technical reviewers.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help prospects understand where you fit.',
       'We organise your services, sector experience, team and proof around the questions buyers bring. Enquiry routes distinguish prospective clients from existing support requests and collect useful context for the first conversation.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients describe the working relationship.',
       'Approved feedback can help prospects understand your communication, responsiveness and approach to delivery. We help collect genuine reviews and place relevant testimonials alongside the services they support.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep opportunities moving through evaluation.',
       'An IT decision may involve several people, a renewal date or a planned budget cycle. We help record that context, assign ownership and support follow-up around the next agreed step.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined service and audience.',
       'We develop campaigns around selected offers, locations and client profiles. The message and destination page explain who the service suits, helping your team distinguish relevant opportunities from general technical enquiries.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Show the work',
      'title'   => 'Explain what your team made possible.',
      'paras' => [
        'Your team may have coordinated a migration, improved a support process or delivered specialist expertise during a complex project.',
        'A useful case study explains the work in terms a prospective client can assess.',
      ],
      'items' => [
        ['The starting point',
         'The client&rsquo;s environment, requirement and reasons for seeking support.'],
        ['The constraints',
         'The dependencies, timing and practical considerations that shaped the project.'],
        ['Your contribution',
         'What your team was responsible for and how the work was approached.'],
        ['The outcome',
         'The changes achieved, supported by approved evidence and a clearly defined measurement period.'],
      ],
      'tail' => 'Where technical details are sensitive, we agree what can be published before writing.',
    ],

    [
      'eyebrow' => 'The switching question',
      'title'   => 'Make changing providers easier to understand.',
      'paras' => [
        'A prospect may like your offer and still hesitate because the transition feels uncertain.',
      ],
      'listLead' => 'We help explain your actual process',
      'list' => [
        'How you assess the current environment.',
        'What information and access are needed.',
        'How responsibilities are divided.',
        'What affects the transition schedule.',
        'How communication and escalation work.',
        'What ongoing support looks like after onboarding.',
      ],
      'tail' => 'The content should reflect your delivery model and the commitments you can support. That gives the buyer a clearer basis for discussing the move.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Build a credible offer',
      'title'   => 'Put the evidence beside the promise.',
      'lead'    => 'Certifications, partner relationships and service commitments can help buyers evaluate your business. We make them useful by explaining their relevance.',
      'quotes' => [
        'Which capabilities do they support?',
        'What does the service include?',
        'How are response expectations defined?',
        'Which completed projects demonstrate comparable experience?',
      ],
      'paras' => [
        'We work with claims your team can evidence, giving prospective clients a clear picture of your capabilities and responsibilities.',
      ],
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the services. Clarify the value. Reach the right buyers.',
  'moves' => [
    ['Define the opportunity.',
     'We agree the services, sectors and client profiles you want to prioritise, alongside your delivery capacity.'],
    ['Review the current journey.',
     'We examine how prospects discover you, what the website communicates and how new-business enquiries reach your team.'],
    ['Prioritise the work.',
     'We identify the service pages, technical explanations, case studies and follow-up improvements that would help buyers assess the offer.'],
    ['Deliver and refine.',
     'We put the plan into action and review the suitability of the opportunities with your team. Feedback from sales and technical conversations helps us improve the message and focus.'],
  ],

  /* Real, our partner, disclosed, openly not an MSP, and running without a
     figure. The +58% came off 25 Sep 2026: invented during copywriting and
     never published. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when the value became clearer?',
    'name'     => 'Studio Ubique',
    'meta'     => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    'text'     => 'Not an MSP. Studio Ubique are a digital agency in Zwolle, and our founder is a partner there, so weigh this one differently from the others on this site. They are a technical services business whose clients were happy and whose reputation existed almost entirely inside existing relationships. Nothing a prospective client could check said anything at all, because nobody had ever asked a satisfied client to put it in writing. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; Studio Ubique, Zwolle',
    'photoSrc' => 'case-studio-ubique',
    'photoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'     => '/success-stories/studio-ubique/',
    'linkText' => 'Read the Studio Ubique story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are we creating opportunities your team wants to pursue?',
  'report' => [
    ['Client fit',
     'Do enquiries match your services, supported environments, business sizes and locations?'],
    ['Requirement fit',
     'Does the prospect need the type and level of expertise you provide?'],
    ['Sales progress',
     'Which enquiries move into discovery, assessment or a proposal?'],
    ['Work won',
     'Where your records allow, which opportunities become projects or recurring contracts?'],
  ],
  'reportTail' => 'We distinguish those service models so the report reflects the way your business earns revenue.',

  'qs' => [
    ['We win most of our work through referrals. How does this fit?', [
      'The marketing can support those introductions and help buyers outside your network discover your business.',
      'Relevant service pages and case studies also give existing contacts useful material to share when recommending you.',
    ]],
    ['Can you help us attract businesses of a particular size?', [
      'Yes. Your preferred client profile shapes the targeting, service descriptions and enquiry questions.',
      'We can clarify the organisation sizes, environments and support requirements your offer is designed for.',
    ]],
    ['We provide both managed services and project consulting. Can the website support both?', [
      'Yes. We give each a clear route and explain how the working arrangements differ.',
      'That helps buyers understand whether they need ongoing support, a defined project or specialist capacity alongside their own team.',
    ]],
    ['Will you understand the technical detail?', [
      'We work with your specialists and source material.',
      'Our role is to ask useful questions, structure the explanation and adapt the detail to the audience. Your team reviews technical claims before publication.',
    ]],
    ['Can you help us market cybersecurity services?', [
      'We can help explain a defined service using evidence your team can substantiate.',
      'That includes relevant qualifications, delivery processes and approved examples. Claims about protection, outcomes and service commitments are reviewed with your specialists.',
    ]],
    ['Our projects are confidential. How can we demonstrate experience?', [
      'An approved anonymised case study may still explain the client context, challenge, your role and the outcome.',
      'We establish the publication boundaries first and use only the details you authorise.',
    ]],
    ['We already have a sales team. Will this support their work?', [
      'Yes. Their conversations help shape the content and qualification approach.',
      'The plan can give them relevant material for introductions, follow-up and proposals, while making marketing enquiries easier to assess.',
    ]],
    ['Can you work with our existing CRM and website?', [
      'Yes, subject to reviewing the setup and available access.',
      'We identify what can be improved within the existing systems. Substantial development, migrations or custom integrations receive a separate scope.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
