<?php
/**
 * Interior design studios
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy, and the first industry page on the
 * new shape. The other eight still set 'stats' and 'channelsHead' and render
 * exactly as they did: every section in the template is guarded on one shape or
 * the other.
 *
 * WHAT CAME OFF WITH THE REWRITE
 *   · the hero stat pair and the hero object image.
 *   · "where the effort goes today" and "where it doesn't", the two-column
 *     channel audit. Not in the new copy.
 *   · "what the market data shows" and the calculation. The three sourced
 *     market figures and the worked example went with it. They were the most
 *     carefully sourced thing on the page, so they are listed in CLAIMS.md
 *     against this date in case the section should come back.
 *   · the mid-page CTA, the shelved 'levers' block, and closeText.
 *   · the team section. The service pages dropped it and the new copy does not
 *     ask for it. includes/team.php is unchanged and the eight old industry
 *     pages still render it.
 *
 * THE STORY KEEPS ITS FIGURE. Kulwant's copy names Pine Tree Lane and then
 * brackets everything else. The bracketed parts do not print, and the real
 * write-up that was already here stays. The 4x is the published organic figure,
 * it is labelled as organic, and this page is not selling a single service the
 * number could be misread as the result of. Same reasoning as /ai-visibility/.
 * See CLAIMS.md.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for interior design studios | RankinAI';
$page_desc  = 'More of the projects you built your studio for. Search and AI visibility, project stories, websites, advertising and enquiry follow-up for interior design studios.';

$INDUSTRY = [

  'label' => 'Digital marketing for interior design studios',
  'h1'    => 'More of the projects you built your studio for.',
  'sub'   => 'The right clients appreciate your approach, understand the investment and want the kind of spaces you love creating.',
  'sub2'  => 'We help them discover your studio, see the value behind your work, and take the first step towards a project.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'They can see the beautiful room. Help them see the thinking behind it.',
    'quotes' => [
      'Can you work with a property like theirs?',
      'How involved will they need to be?',
      'What does your service include?',
      'Is their budget a sensible starting point?',
    ],
    'paras' => [
      'Your portfolio shows the finished space. There is more a prospective client needs to understand before choosing the people who will design theirs.',
      'The answers help them picture a working relationship with your studio.',
      'We connect the visual appeal of your work with the practical information that builds confidence, then make it easier for suitable clients to find you.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right project',
    'title'   => 'A fuller inbox is useful when you want the work inside it.',
    'paras' => [
      'Perhaps you want more complete home projects. A stronger presence in hospitality. Clients who value your expertise early enough to involve you properly.',
      'Your marketing should reflect those ambitions.',
    ],
    'listLead' => 'We start by understanding',
    'list' => [
      'The project types you want more of.',
      'Your design approach and strongest experience.',
      'The locations you serve.',
      'Your typical scope and investment range.',
      'The number of new projects your team can take on.',
    ],
    'tail' => 'That gives us a direction for the audience, message and enquiry journey.',
  ],

  'journey' => [
    'eyebrow' => 'The client journey',
    'title'   => 'From &ldquo;I love this space&rdquo; to &ldquo;could you help with ours?&rdquo;',
    'items' => [
      ['Help them discover you.',
       'Build visibility around the services, locations and project types relevant to your studio.'],
      ['Help them recognise the fit.',
       'Show the work that reflects where you want the business to go, supported by useful context.'],
      ['Help them understand the commitment.',
       'Explain your process, scope and approach to investment so the first conversation starts with clearer expectations.'],
      ['Help them begin.',
       'Give prospective clients a straightforward way to share their project and understand what happens next.'],
    ],
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your marketing as considered as your design.',
    'items' => [
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for the work you want.',
       'We research how prospective clients look for your services and build the search plan around your specialisms and locations. We also monitor selected AI questions relevant to your studio and investigate opportunities to improve how your business is represented.'],
      ['pencil', 'Content', '/content/',
       'Give the photographs a story worth reading.',
       'We turn your projects into useful accounts of the brief, constraints, design decisions and finished result. Service and process pages explain the expertise behind the images and answer the questions a prospective client brings.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help visitors picture working with you.',
       'We organise the portfolio and services around what clients want to explore. Clear project context, an understandable process and a well-designed enquiry form help people assess whether your studio is right for them.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Let clients describe the experience behind the space.',
       'Feedback about communication, collaboration and how you handled the project can help a prospective client understand the working relationship. We establish a consistent process for requesting genuine reviews and using approved testimonials where they add value.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Bring selected services and projects to relevant audiences.',
       'We develop campaigns around a defined opportunity, such as a priority service or location. The advert, landing page and enquiry questions work together to help attract and identify suitable projects.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep promising conversations moving.',
       'We help organise incoming briefs, assign follow-up and reconnect at appropriate points. That might mean acknowledging an enquiry, reminding someone about a consultation or following up when they expected to have plans or funding ready.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Your portfolio',
      'title'   => 'Every project has more to say than its photographs can.',
      'paras' => [
        'The challenge that changed the layout. The material choice that balanced appearance with everyday use. The decisions that made an awkward space work.',
        'Those details show a prospective client how you think. We help write up selected projects with the information you can share.',
      ],
      'items' => [
        ['The brief',
         'What the client wanted the space to achieve.'],
        ['The challenge',
         'The constraints and decisions that shaped the work.'],
        ['Your contribution',
         'What your studio designed, coordinated or delivered.'],
        ['The result',
         'How the finished space answered the brief, supported by approved photography and feedback.'],
      ],
      'tail' => 'Budget bands and timelines can be included where appropriate. Client privacy and publication permissions are established before writing.',
    ],

    [
      'eyebrow' => 'Better-fit enquiries',
      'title'   => 'Make the first conversation more useful for both sides.',
      'paras' => [
        'A prospective client should have enough information to understand your service before reaching out.',
        'Your team should receive enough context to decide how to respond.',
      ],
      'listLead' => 'We help balance those needs through',
      'list' => [
        'Clear descriptions of your services and project types.',
        'Investment guidance where you are comfortable providing it.',
        'A visible explanation of the design process.',
        'Relevant enquiry questions about location, scope and timing.',
        'Confirmation of what happens after the form is submitted.',
      ],
      'tail' => 'The aim is to help suitable prospects move forward with realistic expectations.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the studio. Then shape the plan around it.',
  'moves' => [
    ['Define the direction.',
     'We discuss the projects you want, your capacity and what makes clients a good fit.'],
    ['Review the current journey.',
     'We examine how people discover you, what the website communicates and how enquiries are handled. Account data adds detail where access is available.'],
    ['Prioritise the work.',
     'We identify the pages, project stories, visibility improvements and follow-up changes that deserve attention first.'],
    ['Deliver and refine.',
     'We put the plan into action and review the enquiries it supports, using your team&rsquo;s feedback to improve the direction.'],
  ],

  /* Real, published, and the only figure on the page. Kulwant's copy names
     Pine Tree Lane and brackets the rest; the bracketed parts do not print and
     the write-up that was already here stays. */
  'story' => [
    'title'     => 'What changed for a business in your world?',
    'name'      => 'Pine Tree Lane',
    'meta'      => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'metric'    => '4&times;',
    'metricKey' => 'organic traffic in three months',
    'text'      => 'Their own factory, a ten-year warranty, a showroom people walked past, and a website of stock photography that could have belonged to any reseller in the city. We rebuilt the pages around what they actually build, wrote up three projects with budgets and timelines, and fixed what was stopping Google reading the site.',
    'photo'     => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc'  => 'case-pine-tree-lane',
    'photoAlt'  => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'      => '/success-stories/pine-tree-lane/',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are we attracting projects your studio wants to take forward?',
  'reportNote'    => 'We look beyond the number of enquiries to understand their relevance.',
  'report' => [
    ['Project fit',
     'Do they match your services, locations and preferred type of work?'],
    ['Investment and timing',
     'Are expectations broadly aligned with what your studio can deliver?'],
    ['Consultations and proposals',
     'Which enquiries develop into useful discussions and proposed projects?'],
    ['Projects won',
     'Where your records allow, which opportunities become commissions and what can we learn from them?'],
  ],
  'reportTail' => 'Your feedback helps us distinguish a busy month from a commercially useful one.',

  'qs' => [
    ['Most of our work comes through referrals. Why add more marketing?', [
      'Referrals remain valuable.',
      'A stronger online presence helps people outside that network discover your studio. It also gives referred prospects more information when they look you up before making contact.',
    ]],
    ['Instagram already works for us. Would you change that?', [
      'We start by understanding what it contributes.',
      'The plan can build around an effective existing channel, with search, website content and follow-up supporting different parts of the client journey.',
    ]],
    ['Will the website still feel like our studio?', [
      'Your visual identity and design approach are central to the brief.',
      'We work with that character while making the services, project context and enquiry journey easier to understand.',
    ]],
    ['Do we have to publish project budgets?', [
      'No. We discuss what level of guidance is useful and appropriate.',
      'That could be a broad investment range, an explanation of what affects the cost or a clear description of the scope you typically take on.',
    ]],
    ['Some clients don&rsquo;t want their homes published. Can we still create content?', [
      'Yes. We work with projects and information you have permission to share.',
      'Anonymised stories, process explanations and your perspective on design decisions can also help demonstrate expertise.',
    ]],
    ['Do we need new photography?', [
      'We review the existing images first.',
      'Where additional photography would materially improve a project story or key page, we can help define the brief. We do not shoot. Our team is in India and our clients are not, so photography is commissioned locally by you.',
    ]],
    ['Can you help us attract commercial projects?', [
      'Yes, with a plan built around the specific sector and decision-makers you want to reach.',
      'Commercial interiors need relevant proof and information about your capabilities. We assess what already supports that ambition and what needs to be developed.',
    ]],
    ['We already receive plenty of enquiries, but many are unsuitable.', [
      'Then we start with positioning, service descriptions and qualification.',
      'The immediate priority may be making the right fit clearer and improving the information collected before a consultation.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
