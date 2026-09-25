<?php
/**
 * Website design, development and conversion
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Fourth service page in the new
 * shape, after /ai-visibility/, /paid-advertising/ and /content/.
 *
 * WHAT THE TEMPLATE GAINED FOR THIS PAGE, all guarded:
 *   · an opportunity with no three-item strip. This page's argument ends on
 *     "we work on all three", and the three are the section after it.
 *   · approach['items'] — three named moves in place of the five-across strip,
 *     where what follows the thinking is what the approach produces rather
 *     than what we need to know.
 *   · substance['paras'] — prose before the three pairs.
 *   · 'routes' — two honest answers side by side, as the two cards the contact
 *     page uses. Improve or rebuild is a choice being offered, not a
 *     recommendation being made, and two cards say that better than prose.
 *
 * THE STORY IS NOT THE COPY'S, AND THE FIGURE CAME OFF. Bracketed placeholders
 * again, including "the experience" and "the outcome" pairs. Pine Tree Lane is
 * real and stays. The 4x organic traffic figure does not: this is a conversion
 * page, and the card's own text says the conversion figures are the client's to
 * release. A visitor reads the one number on the page as the result of the work
 * the page is selling. It stays on /ai-visibility/. Same call as
 * /paid-advertising/. See CLAIMS.md.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the mid-page CTA, the
 * comparison table, closeText, and the dead fitHead / fitYes / fitNo arrays.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Website design, development and conversion | RankinAI';
/* Plain text only. This string is escaped on output, so an HTML entity here
   arrives in the tag as a literal &rsquo; rather than an apostrophe. */
$page_desc  = 'Make your website as convincing as your first conversation. Website strategy, design, development, landing pages and enquiry journeys for firms that sell expertise.';

$SERVICE = [

  'label' => 'Website design, development and conversion',
  'h1'    => 'Make your website as convincing as your first conversation.',
  'sub'   => 'In a conversation, you can explain your approach, answer questions and show someone why your firm is a good fit. Your website needs to do some of that work before you meet.',
  'sub2'  => 'We design, build and improve websites that help prospective clients understand your value, and feel confident getting in touch.',
  /* No 'heroNote'. The two before this one listed the service names and came
     off on Kulwant's call. */

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'They&rsquo;ve arrived. What helps them stay and take the next step?',
    'quotes' => [
      'Do they handle what I need?',
      'Have they done this before?',
      'What would working with them involve?',
    ],
    'paras' => [
      'A visitor may have found you through search, an advert or a recommendation. They arrive with a reason to look, and questions your website needs to answer.',
      'A strong website makes those answers easy to find. Its design creates the right impression, its content gives that impression substance, and its enquiry journey makes moving forward straightforward.',
      'We work on all three.',
    ],
    /* No 'items'. The three things are the section below. */
  ],

  'approach' => [
    'eyebrow' => 'Our approach',
    'title'   => 'Build the website around the decision your client needs to make.',
    'paras' => [
      'Before discussing layouts, we establish who the website needs to serve and what a useful outcome looks like.',
      'For one firm, that may be a project enquiry with the right budget and brief. For another, a consultation, a proposal request or a conversation with a particular team.',
    ],
    'tail' => 'That understanding shapes the structure, content, design and functionality.',
    'items' => [
      ['Help visitors recognise the fit.',
       'Make it clear what you do, who you work with and which needs you can support.'],
      ['Give them confidence in the choice.',
       'Bring relevant experience, client feedback and practical information into the places where questions arise.'],
      ['Make the next step understandable.',
       'Explain what to do, what information you need and what happens after they enquire.'],
    ],
  ],

  'doHead' => [
    'What we do',
    'From a focused improvement to a complete new website.',
    '',
  ],

  'do' => [
    ['split', 'Website strategy and structure',
     'Put the information in the order buyers need it.',
     'We plan the pages, navigation and journeys around your services and audiences. The aim is to help visitors reach useful information without needing to understand how your business is organised internally.'],
    ['pencil', 'Website design',
     'Make the experience feel like your business.',
     'We develop a visual direction that reflects your positioning and supports the way people use the site. Typography, imagery, layout and interaction work together to create a credible impression and make the content easy to explore.'],
    ['code', 'Website development',
     'Build something your team can use and maintain.',
     'We turn the approved design into a responsive website, with the content management, forms and integrations your business needs. We consider the visitor experience alongside the practical work of updating pages, adding projects and managing enquiries.'],
    ['page', 'Landing pages',
     'Give each campaign a relevant destination.',
     'We create pages around a specific service, audience or offer. The message continues naturally from the advert or link that brought someone there, with focused information and a clear action.'],
    ['mail', 'Enquiry and booking journeys',
     'Make expressing interest feel straightforward.',
     'We review calls to action, form fields, booking links, confirmation messages and where enquiries are sent. The right questions help you assess fit. Clear instructions help the visitor understand what they are committing to.'],
    ['sliders', 'Conversion analysis and improvement',
     'Find the friction and work through it.',
     'We use available analytics, enquiry data and usability observations to identify where the experience could improve. Changes are prioritised and assessed. Where traffic supports meaningful experiments, we test alternatives against a defined outcome.'],
  ],

  'substance' => [
    'eyebrow' => 'Design and confidence',
    'title'   => 'Look credible at first glance. Be useful at a closer look.',
    'paras' => [
      'The visual quality of your website should reflect the care you put into your work.',
      'Then the details need to support that impression.',
    ],
    'items' => [
      ['A project gallery',
       'Becomes more useful when visitors can understand the brief and the outcome.'],
      ['A team page',
       'Becomes more persuasive when it explains relevant experience.'],
      ['A service page',
       'Becomes clearer when it answers what the work involves.'],
    ],
    'tail' => 'We connect presentation with substance, helping the website feel considered all the way through.',
  ],

  'routes' => [
    'eyebrow' => 'Improve or rebuild?',
    'title'   => 'Start with what the website needs to achieve.',
    'items' => [
      ['Improve',
       'Sometimes the existing site can support the work with focused changes. A clearer service page, a better enquiry form or a stronger arrangement of proof may address an important gap.'],
      ['Rebuild',
       'In other cases, the structure, technology or editing experience makes a rebuild the more practical choice.'],
    ],
    'tail' => 'We assess your current website before recommending the route, explaining what can be retained, what needs attention and what the investment covers.',
  ],

  'movesEyebrow' => 'How we work',
  'movesTitle'   => 'A clear route from the brief to a working website.',
  'moves' => [
    ['Understand and review.',
     'We discuss your goals, audiences and sales process, then review the existing site and available performance data. Together, we define the outcome the project needs to support.'],
    ['Plan and design.',
     'We agree the structure, priority journeys and content requirements. Designs show how the website will communicate your value and help visitors move through it. You review the direction before development.'],
    ['Build and check.',
     'We develop the approved pages and functionality, configure the content management system, and check the important journeys. That includes mobile use, forms, booking links and the tracking needed to assess performance.'],
    ['Launch and improve.',
     'We coordinate the launch, provide the agreed handover and explain how your team can manage the site. Where ongoing support is included, we monitor performance and use the findings to prioritise further improvements.'],
  ],

  /* Real, and running without a figure. See the note at the top of this file
     for why the 4x came off. */
  'story' => [
    'title'    => 'A better website should have a story beyond its launch.',
    'name'     => 'Pine Tree Lane',
    'meta'     => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'text'     => 'Pine Tree Lane had their own factory, a ten-year warranty and a showroom, and a website that read like any reseller in the city. We rebuilt the pages around what they actually build, and fixed what was stopping Google reading the site. The conversion figures are theirs to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; finished kitchen, Dubai showroom',
    'photoSrc' => 'case-pine-tree-lane',
    'photoAlt' => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'     => '/success-stories/pine-tree-lane/',
    'linkText' => 'Read the Pine Tree Lane story',
  ],

  'reportEyebrow' => 'Measuring the difference',
  'reportTitle'   => 'What changed for the visitor? What changed for the business?',
  'report' => [
    ['A clearer journey',
     'Can visitors find the relevant service, understand the offer and reach the next step?'],
    ['More completed enquiries',
     'How many people start and complete the actions that matter?'],
    ['Better-fit conversations',
     'Are the enquiries relevant to your services, locations and client requirements?'],
    ['Useful commercial outcomes',
     'Where your sales data allows, which enquiries become opportunities and clients?'],
  ],
  'reportTail' => 'We establish the available baseline and explain the limits of the data. An increase in enquiries is most useful when your team can also assess their quality.',

  'qs' => [
    ['Do we need a complete redesign?', [
      'We assess that before recommending one.',
      'Your current website may support the improvements you need. If a rebuild would solve important structural or technical limitations, we explain the reasoning and provide a separate scope.',
    ]],
    ['Can you improve a website another agency built?', [
      'Yes, subject to reviewing the platform, code and access available.',
      'We can implement suitable changes or work with your existing developer, with responsibilities agreed before starting.',
    ]],
    ['What platform do you use?', [
      'WordPress is a common choice for the service businesses we work with.',
      'The recommendation depends on your content, integrations, editing needs and existing setup. We explain the choice and how your team will manage the finished website.',
    ]],
    ['Is copywriting included?', [
      'It depends on the project scope.',
      'We can develop the copy alongside the design, or work with approved material from your team. The proposal explains which pages need new writing, editing or client-supplied content.',
    ]],
    ['Can our team update the website?', [
      'Yes. We plan the content management around the updates your team needs to make, such as adding projects, editing service information or publishing articles.',
      'The handover includes guidance for the agreed editing tasks.',
    ]],
    ['Do we need lots of traffic to improve conversion?', [
      'You can address clear usability and communication problems at any traffic level.',
      'Controlled tests need enough data to support a meaningful conclusion. For lower-traffic sites, we place greater emphasis on usability reviews, enquiry feedback and clearly identified improvements.',
    ]],
    ['Will a redesign affect our search visibility?', [
      'Changes to pages, URLs and content need careful planning.',
      'We review the existing structure and identify the redirects, content considerations and checks required for the launch. Search performance is monitored where included in the engagement.',
    ]],
    ['Are website builds included in the monthly packages?', [
      'The monthly packages cover defined improvements to an existing website.',
      'A complete build, substantial redesign or larger development requirement receives its own scope, timeline and price.',
    ]],
    ['How long will the project take?', [
      'The timeline depends on the number of pages, functionality, content readiness and review process.',
      'We provide a schedule after scoping the work, including what we need from your team and when.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
