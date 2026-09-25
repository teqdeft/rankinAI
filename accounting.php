<?php
/**
 * Accounting and tax practices
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Sixth industry page on the new
 * shape. Three industries are still on the old one and render as they did.
 *
 * ONE TEMPLATE ADDITION: a strip of four phrases takes four columns rather than
 * leaving a gap where the fifth would be. The grid picker is now a small helper
 * shared by the approach section and the blocks.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. SweetRush stays, openly
 * not a practice, with the metric pending after the 3.2x sweep. See CLAIMS.md.
 *
 * ONE COPY EDIT: "We organise the interview and drafting; your team reviews the
 * substance" became two sentences. The site does not use semicolons.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for accounting and tax practices | RankinAI';
$page_desc  = 'Grow your practice around the clients you want to keep. Search visibility, service content, websites, client proof and enquiry follow-up for accounting and tax practices.';

$INDUSTRY = [

  'label' => 'Digital marketing for accounting and tax practices',
  'h1'    => 'Grow your practice around the clients you want to keep.',
  'sub'   => 'Your best clients value your advice, respect your expertise and see your firm as part of their future.',
  'sub2'  => 'We help more people like them discover your practice, understand where you can help, and feel confident starting a conversation.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'They can see the services. Help them see the value of working with you.',
    'quotes' => [
      'Do you know their sector?',
      'Can you support their next stage?',
      'Who will they speak to?',
      'What does the fee cover?',
    ],
    'paras' => [
      'Accounts. Tax. Bookkeeping. Payroll. Advisory.',
      'A service list tells a prospective client what you offer. They also need to understand how your firm fits their situation.',
      'We help your website and content answer those questions, giving people clearer reasons to choose your practice.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right clients',
    'title'   => 'What would a stronger client base look like?',
    'paras' => [
      'Perhaps you want to develop a sector specialism, grow your advisory work or attract businesses at a particular stage.',
      'You may also want a better balance between recurring services and one-off assignments.',
    ],
    'listLead' => 'We start by understanding',
    'list' => [
      'The services you want to grow.',
      'Your ideal client profiles and sectors.',
      'The business sizes or personal tax needs you support.',
      'Your geographic reach.',
      'The scope and value of relationships that suit the practice.',
      'Your capacity to onboard and serve new clients.',
    ],
    'tail' => 'That direction shapes the audience, message and enquiry process.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the buyer',
    'title'   => 'People arrive with a situation to solve.',
    'items' => [
      ['Starting or becoming more established',
       'A new business owner may need help understanding what support they require and how working with an accountant will fit into running the business. Clear explanations make the first conversation easier.'],
      ['Growing or becoming more complex',
       'A business may need broader reporting, specialist tax support or more useful financial insight. Your content should help the buyer recognise the relevant expertise within your practice.'],
      ['Reviewing their current arrangement',
       'A prospective client may want a different level of communication, support or service. They need to understand what you offer and what moving to your practice would involve.'],
      ['Facing a specific requirement',
       'A transaction, restructuring, tax question or other event may prompt someone to seek specialist help. Relevant service pages should explain the situations you handle and how to begin.'],
    ],
    'tail' => 'We prioritise the needs that fit your actual capabilities and commercial goals.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your expertise easier to understand and choose.',
    'items' => [
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for the support you provide.',
       'We research searches connected to your services, specialisms and locations. We improve relevant pages and monitor selected AI questions that prospective clients may ask when looking for accounting or tax support.'],
      ['pencil', 'Content', '/content/',
       'Answer the questions behind the enquiry.',
       'We create service pages, sector content and practical explanations based on your team&rsquo;s expertise. Technical material is reviewed by your designated specialist before publication, with its audience and context made clear.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help prospective clients recognise the fit.',
       'We clarify your services, ideal clients, team and working process. The enquiry journey collects enough information to direct someone appropriately and explains what happens after they get in touch.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients describe the working relationship.',
       'Approved feedback can help prospects understand your communication, clarity and support. We establish a consistent process for requesting genuine reviews and using relevant testimonials across your website.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep enquiries moving through a busy practice.',
       'We help organise incoming requests, assign responsibility and schedule follow-up. Your team can see which prospects need an answer, which proposals are under consideration and what should happen next.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined service or client opportunity.',
       'We develop campaigns around a clear offer and audience, with relevant landing pages and tracking. The scope follows the service you want to grow, the market opportunity and the budget available.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Show your specialism',
      'title'   => 'Give prospective clients a reason to recognise themselves.',
      'quotes' => [
        'What does their business need to keep track of?',
        'Where does complexity arise?',
        'Which decisions bring them to your practice?',
      ],
      'paras' => [
        'A sector page becomes useful when it shows an understanding of that client&rsquo;s circumstances.',
        'We help explain the experience and services relevant to those questions. That might mean presenting expertise around a particular industry, business stage or tax requirement, with examples and claims your team can substantiate.',
      ],
      'tail' => 'The aim is to help a prospect think: &ldquo;they understand what I need&rdquo;.',
    ],

    [
      'eyebrow' => 'The switching question',
      'title'   => 'Make joining your practice feel understandable.',
      'paras' => [
        'Someone can be interested in your firm and still hesitate because they do not know what changing accountants involves.',
        'We help explain your actual onboarding process.',
      ],
      'items' => [
        ['The first conversation',
         'What you need to understand before recommending a service.'],
        ['The proposed arrangement',
         'The scope, responsibilities, fees and communication expectations.'],
        ['The information required',
         'What the client needs to provide and how the handover is coordinated.'],
        ['The transition',
         'The steps involved, timing considerations and who handles each part.'],
        ['The ongoing relationship',
         'Who they will work with and how support is delivered.'],
      ],
      'tail' => 'Clear information gives both sides a better starting point.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Your team&rsquo;s expertise',
      'title'   => 'Put the people behind the advice on the page.',
      'paras' => [
        'Prospective clients should be able to understand who will support them and what experience that person brings.',
      ],
      'listLead' => 'We help develop profiles and content that explain',
      'list' => [
        'Relevant qualifications and experience.',
        'Areas of specialism.',
        'The clients and situations each person supports.',
        'Their role in the working relationship.',
      ],
      'tail' => 'Where useful, your specialists can contribute a named perspective on the questions clients regularly ask. We organise the interview and drafting. Your team reviews the substance.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the practice. Focus the opportunity. Build the plan.',
  'moves' => [
    ['Define the client priorities.',
     'We agree the services and relationships you want to develop, alongside your capacity and preferred scope of work.'],
    ['Review the current journey.',
     'We examine how prospects discover you, what the website communicates and how enquiries are handled.'],
    ['Address the important gaps.',
     'We prioritise the service pages, sector explanations, proof and follow-up improvements that support your goals.'],
    ['Deliver and refine.',
     'We put the plan into action and review the suitability of the enquiries with your team. Those conversations help us improve the audience, message and next round of work.'],
  ],

  /* Real, openly not a practice, and running without a figure. The 3.2x came
     off 25 Sep 2026: invented during copywriting and never published. */
  'story' => [
    'title'    => 'What changed when the value became clearer?',
    'name'     => 'SweetRush',
    'meta'     => ['San Francisco, USA', 'Learning &amp; development consultancy'],
    'text'     => 'Not a practice. SweetRush advise learning and development buyers and have done for twenty years, and their position will be recognisable: the clients who had worked with them knew exactly how good they were, and everyone else met a website that read like a much smaller firm&rsquo;s brochure. A reputation that only travels by referral has a ceiling. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; SweetRush',
    'photoSrc' => 'case-sweetrush',
    'photoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',
    'href'     => '/success-stories/sweetrush/',
    'linkText' => 'Read the SweetRush story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are we attracting relationships that suit the practice?',
  'report' => [
    ['Client fit',
     'Do enquiries match your services, specialisms and preferred client profiles?'],
    ['Quality of conversation',
     'Do prospects understand the service and have requirements your team can support?'],
    ['Proposal progress',
     'Which conversations develop into a defined scope and fee proposal?'],
    ['Clients and work won',
     'Where your records allow, which opportunities convert, and what is the balance of recurring and one-off work?'],
  ],
  'reportTail' => 'We assess the results alongside capacity, so growth remains connected to the practice you want to run.',

  'qs' => [
    ['Most of our clients come from referrals. How does this help?', [
      'Your marketing can support those introductions and help people outside your existing network discover the practice.',
      'Clear service information, relevant proof and an understandable process also help referred prospects assess your firm before contacting you.',
    ]],
    ['Can you help us grow a particular service or specialism?', [
      'Yes. We can focus the plan on a defined service, sector or client profile.',
      'We first review the expertise you can demonstrate, the opportunity and your capacity to deliver the work.',
    ]],
    ['Who checks the accuracy of tax and accounting content?', [
      'Your designated specialist reviews the technical substance before publication.',
      'We handle the structure, clarity and presentation. The content plan also identifies which material needs periodic review as circumstances change.',
    ]],
    ['Will marketing attract clients looking only for the lowest fee?', [
      'Your positioning and service information help set expectations.',
      'We can explain who the service suits, what it includes and how fees are approached, then use enquiry questions to support qualification.',
    ]],
    ['Do we have to publish prices?', [
      'No. We discuss the level of guidance that would help prospective clients.',
      'That could include starting prices, typical ranges or an explanation of the factors used to prepare a quote, depending on your service.',
    ]],
    ['Our team is busy during peak periods. How would this work?', [
      'We plan interviews, reviews and delivery around your availability.',
      'The enquiry process can also reflect your capacity and response arrangements, so expectations remain clear during busy periods.',
    ]],
    ['Can we publish client stories without sharing financial information?', [
      'Yes. An approved account can focus on the requirement, your approach and the practical outcome without disclosing sensitive details.',
      'We agree what can be shared before writing.',
    ]],
    ['We already have someone managing marketing. Can you support them?', [
      'Yes. We agree priorities and responsibilities with your internal lead.',
      'Our team can provide the specialist capacity needed for the plan while your practice retains control of direction and technical approvals.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
