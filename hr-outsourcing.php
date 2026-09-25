<?php
/**
 * HR outsourcing and payroll providers
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Fifth industry page on the new
 * shape. Four industries are still on the old one and render as they did.
 *
 * No new template keys. The switching block uses the five-across grid the
 * architecture page added, and the six-item strip uses the three-and-three
 * grid from the same page.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. SweetRush stays, openly
 * not a payroll provider, with the metric pending: the 3.2x came off earlier
 * today with the other five places it was live. See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for HR outsourcing and payroll providers | RankinAI';
$page_desc  = 'Give employers the confidence to choose you as their next partner. Employer-focused search, service content, websites, client proof and proposal follow-up for HR outsourcing and payroll providers.';

$INDUSTRY = [

  'label' => 'Digital marketing for HR outsourcing and payroll providers',
  'h1'    => 'Give employers the confidence to choose you as their next partner.',
  'sub'   => 'Growing teams. More complex payroll. People questions that need an experienced answer.',
  'sub2'  => 'We help businesses discover your services, understand the support you provide, and feel ready to start a conversation.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'They&rsquo;re choosing a service. They&rsquo;re also deciding who to rely on.',
    'quotes' => [
      'Who will handle their questions?',
      'What does the service cover?',
      'How does onboarding work?',
      'What happens when something needs urgent attention?',
    ],
    'paras' => [
      'An employer considering HR or payroll support needs more than a list of features.',
      'They may also be wondering how difficult it would be to leave their current provider or move work out of the business.',
      'Your marketing can begin answering those questions before the first call. We help make your expertise, service boundaries and working relationship easier to understand, so a suitable employer has clearer reasons to choose you.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right client',
    'title'   => 'Which employers can you support best?',
    'paras' => [
      'A small business seeking its first outsourced HR service has different needs from a growing organisation reviewing its payroll provision.',
    ],
    'listLead' => 'We start by defining where your offer fits',
    'list' => [
      'The services you want to grow.',
      'Your preferred employer sizes and sectors.',
      'The locations and jurisdictions you serve.',
      'The systems and service models you support.',
      'Your recurring and project-based offerings.',
      'Your capacity to onboard new clients.',
    ],
    'tail' => 'That gives the marketing a clear direction and helps your team recognise suitable enquiries.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the moment',
    'title'   => 'Employers look for support for different reasons.',
    'items' => [
      ['The business has grown.',
       'Responsibilities that once fitted around someone&rsquo;s main role now need more time, structure and specialist knowledge. The buyer needs to understand what outsourcing would change and which responsibilities remain with their team.'],
      ['The existing arrangement needs to improve.',
       'An employer may want clearer communication, broader support or a service that better fits the organisation. They need practical information about the transition and evidence of the working relationship you offer.'],
      ['A specific situation needs attention.',
       'A people issue, payroll challenge or organisational change may prompt the first enquiry. They need to understand whether you handle that situation, what the first step involves and how any ongoing support would work.'],
    ],
    'tail' => 'We shape the pages and messages around the situations relevant to your service.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make a considered purchase easier to understand.',
    'items' => [
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable when an employer starts looking.',
       'We research relevant service, location and problem-based searches, paying attention to whether the person is seeking support for a business. We improve priority pages and monitor selected AI questions connected to your market.'],
      ['pencil', 'Content', '/content/',
       'Explain the service through the employer&rsquo;s questions.',
       'We create service pages, practical guides and client stories around the situations your team supports. Specialist material is reviewed by your advisers before publication, with the scope and context made clear.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help employers assess the fit.',
       'We make your services, ideal client profile, team and onboarding process easier to explore. The enquiry journey gathers useful information about the business and its needs without asking for unnecessary sensitive details.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients describe the support they receive.',
       'Approved feedback can help prospective clients understand your communication, responsiveness and approach. We help establish a consistent process for requesting genuine reviews and placing relevant testimonials alongside your services.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep the proposal moving through the decision.',
       'An employer may need input from finance, operations or senior management before proceeding. We help organise the opportunity, record the next step and support follow-up that reflects the conversation.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined service and audience.',
       'We develop campaigns around the employers and requirements you want to reach. The targeting, message and destination page work together to clarify who the offer is for and what action to take.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'The switching question',
      'title'   => '&ldquo;This looks right for us.&rdquo; &ldquo;But what would changing involve?&rdquo;',
      'paras' => [
        'Interest can pause when the transition feels unclear.',
        'We help you explain the practical steps an employer needs to understand.',
      ],
      'items' => [
        ['What happens first',
         'How you assess their requirements and establish whether the service fits.'],
        ['What information is needed',
         'What their team needs to prepare and how the handover is organised.'],
        ['Who is responsible',
         'The roles of your team, their business and any other parties involved.'],
        ['What the timing depends on',
         'The factors that affect onboarding, with realistic expectations.'],
        ['What ongoing support looks like',
         'How clients contact you, what the service includes and how additional needs are handled.'],
      ],
      'tail' => 'The content reflects your actual process. Clear expectations give the sales conversation a stronger starting point.',
    ],

    [
      'eyebrow' => 'Show the expertise',
      'title'   => 'Make the people behind the service visible.',
      'paras' => [
        'An employer may be trusting your team with decisions and processes that affect the whole business. Help them understand who they would be working with.',
        'We develop clear team profiles, explanations of responsibilities and approved examples of how your specialists approach client situations.',
      ],
      'tail' => 'Qualifications and experience provide context. The way you explain a problem can show prospective clients how your team thinks.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the offer. Answer the questions. Support the decision.',
  'moves' => [
    ['Define the client opportunity.',
     'We agree the services, employer profiles and markets you want to prioritise.'],
    ['Review the current journey.',
     'We examine how employers discover you, how clearly the website explains the service and what happens after an enquiry.'],
    ['Prioritise the gaps.',
     'We identify the service pages, onboarding explanations, proof and follow-up improvements that would make the offer easier to assess.'],
    ['Deliver and refine.',
     'We put the plan into action and review the suitability of the conversations it supports. Your team&rsquo;s feedback helps refine the audience, message and priorities.'],
  ],

  /* Real, openly not a payroll provider, and running without a figure. The
     3.2x came off 25 Sep 2026: invented during copywriting and never
     published. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when the service became clearer?',
    'name'     => 'SweetRush',
    'meta'     => ['San Francisco, USA', 'Learning &amp; development consultancy'],
    'text'     => 'Not a payroll provider. SweetRush are a learning and development consultancy, which means they sell the same thing you do: something a business only buys when it trusts the people behind it. The buyers who had worked with them knew that. Everyone else met a website that carried none of it. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; SweetRush',
    'photoSrc' => 'case-sweetrush',
    'photoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',
    'href'     => '/success-stories/sweetrush/',
    'linkText' => 'Read the SweetRush story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are we reaching employers your service is built for?',
  'report' => [
    ['Employer fit',
     'Do enquiries match your services, locations, sectors and preferred business size?'],
    ['Relevant requirements',
     'Are prospects seeking the type and level of support you provide?'],
    ['Sales progress',
     'Which conversations move into assessments, demonstrations or proposals?'],
    ['Client outcomes',
     'Where your records allow, which opportunities become clients, and what is the value and scope of that work?'],
  ],
  'reportTail' => 'We distinguish recurring service opportunities from one-off requests so the report reflects your business model.',

  'qs' => [
    ['Can you write about HR and payroll without getting the details wrong?', [
      'We work from approved source material and interviews with your specialists.',
      'Your designated reviewer checks technical content before publication. We also agree how dated or changing information will be reviewed as part of the content plan.',
    ]],
    ['We offer both HR and payroll. Should they have separate pages?', [
      'Where they answer different buyer needs, distinct pages can make the offer easier to understand.',
      'We show how the services connect while giving each enough space to explain its scope, audience and process.',
    ]],
    ['How do you avoid attracting enquiries from employees seeking individual advice?', [
      'We make the employer audience clear in the messaging, page structure and enquiry questions.',
      'For advertising, we review targeting and the responses received, then refine the campaign around relevant business demand.',
    ]],
    ['Can you help us attract businesses of a particular size?', [
      'Yes. Your ideal employer profile informs the content, campaigns and qualification process.',
      'We can explain which business sizes your service suits and collect relevant information, such as approximate headcount, at the appropriate stage.',
    ]],
    ['Most of our clients come through accountants and other partners. How does this fit?', [
      'The marketing can support those introductions.',
      'Clear service pages and useful resources give partners material to share, while your website helps referred employers assess the offer before speaking with you.',
    ]],
    ['Our clients are confidential. How do we demonstrate experience?', [
      'We use approved business-level examples and information you have permission to publish.',
      'An anonymised story may still explain the client&rsquo;s requirements, your approach and the outcome without exposing employee information.',
    ]],
    ['Can you help explain our pricing?', [
      'Yes. We can clarify how the service is priced, what is included and which factors affect the fee.',
      'Where a fixed price would be misleading, we explain the model and what is needed to prepare a quote.',
    ]],
    ['We already have an internal marketing person. Can you support them?', [
      'Yes. We agree the priorities and responsibilities together.',
      'Your internal lead can coordinate the commercial direction and specialist review while our team supports the agreed delivery.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
