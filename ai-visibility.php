<?php
/**
 * AI and search visibility
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. This is the first of the six
 * service files in the new shape, and the one the rebuilt template was built
 * around: it is the only file so far with 'opportunity', 'approach' and
 * 'compare'. The other five render without them until their copy arrives.
 *
 * THE STORY IS NOT THE COPY'S. Kulwant's draft carries bracketed placeholders
 * there: "[Approved summary…]", "[Verified search result]", "[Metric, baseline
 * and measurement period]". Bracketed placeholders do not go on a page, and
 * the Pine Tree Lane story that was already here is real and sourced, so it
 * stayed exactly as it was. The 4x figure and its three-month period are in
 * CLAIMS.md.
 *
 * THE "IT IS NOT, IF" COLUMN CAME OFF. The copy gives one list under "is this
 * the right next step". The other five services still have both columns, so
 * this page is the odd one out until they are rewritten. Worth deciding
 * deliberately rather than by accident.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'SEO, local search and AI visibility | RankinAI';
$page_desc  = 'Get found before the shortlist is made. Search strategy, technical SEO, service pages, local visibility, AI search visibility and authority work, built around the services you want to grow.';

$SERVICE = [

  'label'    => 'SEO, local search and AI visibility',
  'h1'       => 'Get found before the shortlist is made.',
  'sub'      => 'Your next client could be searching Google, checking Maps or asking AI who can help.',
  'sub2'     => 'We help your business become easier to discover for the services you want to grow, and give the people finding you stronger reasons to get in touch.',
  /* 'heroNote' removed 25 Sep 2026 at Kulwant's instruction. The key is still
     supported by the template, so a service that wants a line under its hero
     actions can set one. */

  'opportunity' => [
    'title' => 'They know what they need. They don&rsquo;t know your name yet.',
    'paras' => [
      'Someone is looking for the kind of expertise your business offers.',
      'They might describe a service, a location or a problem they need to solve. The firms they discover have the opportunity to explain their value and earn a place in the conversation.',
      'Your reputation helps when someone recommends you. Search gives people outside that network a way to discover you for themselves.',
    ],
    'items' => [
      ['Show up for a relevant need.',
       'Focus on the searches connected to your services, specialisms and market.'],
      ['Give buyers something worth considering.',
       'Help them understand your experience, approach and suitability for their situation.'],
      ['Make the next step clear.',
       'Connect the search to a useful page, then give the visitor a straightforward route to enquire.'],
    ],
  ],

  'approach' => [
    'title' => 'Start with the work you want. Build the search strategy around it.',
    'paras' => [
      'We look at the intent behind the words before deciding which opportunities deserve your budget.',
      'A search can bring a potential client, a job applicant, a student or someone looking for a free answer.',
    ],
    'listLead' => 'That means understanding',
    'list' => [
      'Which services you want to grow.',
      'What a suitable client looks like.',
      'Where you can deliver the work.',
      'Which questions come up before someone buys.',
      'What makes your business a credible choice.',
    ],
    'tail' => 'From there, we identify the searches, pages and supporting content that can help relevant buyers find their way to you.',
  ],

  'doHead' => [
    '',
    'Make your expertise easier to discover, understand and trust.',
    '',
  ],

  'do' => [
    ['target', 'Search strategy',
     'Choose the opportunities worth pursuing.',
     'We research how buyers look for your services, review the competing results, and map priority searches to the right pages. You get a clear direction: which opportunities to pursue first, what those buyers need to see, and where the gaps are.'],
    ['wrench', 'Technical SEO',
     'Give your important pages a clear path into search.',
     'We investigate issues affecting how search engines access, understand and index your website. The work may include site structure, internal links, duplicate pages, redirects, page experience and appropriate structured data. Fixes are prioritised around the pages that matter to your business.'],
    ['page', 'Service pages and supporting content',
     'Answer the questions that lead to an enquiry.',
     'We improve the pages that explain what you do and create useful content around the decisions your buyers face. That could mean a clearer service page, a guide to choosing the right approach, or a project story showing how your expertise applies in practice.'],
    ['pin', 'Local visibility',
     'Make it easier to find you in the places you serve.',
     'For businesses where location influences the decision, we work on Google Business Profile, relevant location pages and accurate business listings. Your services and coverage should be clear to someone deciding whether you can help them.'],
    ['spark', 'AI search visibility',
     'Understand how your business appears in AI answers.',
     'We check relevant buyer questions across the platforms included in your plan, recording when your firm is mentioned or your content is cited. We then investigate gaps in discoverability, business information and the content available about your expertise.'],
    ['link', 'Authority and industry presence',
     'Give your expertise a presence beyond your own website.',
     'We identify relevant publications, professional platforms and opportunities to contribute something useful. The focus is on credible coverage, references and links connected to your field. Outreach is part of the work. Publication remains the publisher&rsquo;s decision.'],
  ],

  'compare' => [
    'eyebrow' => 'Google and AI search',
    'title'   => 'Different ways of searching. The same need to understand who can help.',
    'paras' => [
      'Both describe an opportunity to be discovered. They also reveal different information needs.',
      'We help your website explain your services, relevant experience and project evidence clearly, with content that search systems can access.',
      'Alongside that work, we monitor selected AI answers to understand whether your business appears, how it is described, and which sources are cited.',
    ],
    /* [icon, label, the words a buyer types]. The icon is what makes the two
       boxes read as two different places to type rather than two quotations
       that happen to sit side by side. */
    'quotes' => [
      ['search', 'A short Google search', 'Commercial architects in Manchester.'],
      ['spark',  'A more detailed question', 'Which architecture firms have experience converting older buildings into office space?'],
    ],
    'listTitle' => 'What AI visibility reporting shows',
    'list' => [
      'The questions and platforms checked.',
      'When your firm was mentioned.',
      'Whether your website was cited.',
      'Which other businesses and sources appeared.',
      'What changed between checks.',
    ],
    'tail' => 'These checks are snapshots of selected questions. They help guide the work without pretending to represent every answer a buyer could receive.',
  ],

  'movesTitle' => 'A focused start. Consistent work. Decisions based on evidence.',
  'moves' => [
    ['Establish the starting point.',
     'We review your current visibility, priority pages, competitors and available enquiry data. Together, we choose the services and markets to focus on.'],
    ['Address the barriers.',
     'We prioritise technical issues and improve the pages that need to carry the strategy. Tracking is checked so progress can be assessed.'],
    ['Build out the opportunity.',
     'We develop the content, local presence and authority work needed to support your priorities. Your expertise and real project experience help make the content distinctive.'],
    ['Review and refine.',
     'We examine what is gaining visibility, what brings relevant visitors, and which pages contribute to enquiries. Those findings shape the next round of work.'],
  ],

  /* REAL AND SOURCED. See the note at the top of this file: the copy's
     bracketed placeholders are not printed. */
  'story' => [
    'title'     => 'What changed when the right buyers could find them?',
    'name'      => 'Pine Tree Lane',
    'meta'      => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'metric'    => '4&times;',
    'metricKey' => 'organic traffic in three months',
    'text'      => 'Pine Tree Lane have their own factory, a ten-year warranty and a showroom in Dubai. But the searches that matter, custom kitchens and fitted wardrobes, were going to firms who outsource the making. We fixed what was stopping Google reading the site, rebuilt the pages around what they actually sell, and got them into the answers assistants give.',
    'photo'     => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc'  => 'case-pine-tree-lane',
    'photoAlt'  => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'      => '/success-stories/pine-tree-lane/',
  ],

  'reportTitle' => 'Follow the opportunity beyond the ranking.',
  'report' => [
    ['Relevant visibility',
     'Are your priority pages appearing for the services and questions you want to be found for? Are you becoming more visible in the locations you serve?'],
    ['Visits to the right pages',
     'Are people reaching content that matches their needs? Which services and topics attract interest?'],
    ['Enquiries from search',
     'Which calls, forms and bookings can be connected to organic search or identifiable AI referrals?'],
    ['Opportunities and clients',
     'Where your sales data allows, which enquiries become suitable opportunities and signed work?'],
  ],
  'reportTail' => 'Your report connects these stages and explains where attribution is incomplete. The review focuses on what the evidence suggests we should do next.',

  /* fitHead / fitYes / fitTail removed 25 Sep 2026. They belonged to the
     "is this the right next step" section, which came off on Kulwant's call.
     No service file carries them now. */

  'qs' => [
    ['How long does SEO take to produce results?', [
      'It depends on your starting point, competition and the work required.',
      'Some technical and page improvements can be implemented early. Building visibility for competitive searches usually takes several months of sustained work. We agree milestones after reviewing your website and explain the difference between work completed and results achieved.',
    ]],
    ['Is AI visibility a replacement for SEO?', [
      'The work overlaps. A technically accessible website, useful content and clear business information support discoverability.',
      'Our approach combines those foundations with checks of how your business appears in selected AI answers. The scope explains what we will improve and what we will monitor.',
    ]],
    ['Can you guarantee a top ranking or an AI recommendation?', [
      'No. Search engines and AI platforms control their results.',
      'We commit to the agreed work, transparent measurement and ongoing improvement. Your report shows the findings without presenting visibility as something we can guarantee.',
    ]],
    ['We tried SEO before. How would you approach it?', [
      'We begin by examining what was done, which searches were targeted, and how success was measured.',
      'We want to understand whether the strategy reached suitable buyers, whether the landing pages supported enquiries, and whether the available tracking could show the outcome.',
    ]],
    ['Do we need to publish large amounts of content?', [
      'The plan starts with the gaps that matter.',
      'Improving a few important service pages may be more useful initially than publishing many new articles. We agree the content priorities around buyer needs and the opportunities identified.',
    ]],
    ['Can you work with our existing website and developer?', [
      'Yes. We assess your current setup and agree who will implement changes.',
      'Where your developer handles the website, we provide clear recommendations and coordinate the work. Any substantial development is scoped before it begins.',
    ]],
    ['What if we need enquiries sooner?', [
      'We can assess whether paid advertising should run alongside the search work.',
      'That decision depends on demand, budget and whether the website and sales process are ready to handle the enquiries.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
