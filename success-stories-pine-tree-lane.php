<?php
/**
 * Success story — Pine Tree Lane
 * -----------------------------------------------------------------------------
 * Served at /success-stories/pine-tree-lane/ by the two-segment rewrite rule in
 * .htaccess. Data only; the page is includes/story-template.php.
 *
 * REBUILT 25 Sep 2026 to Kulwant's new story structure. First of the three on
 * the new shape.
 *
 * FOUR THINGS CAME OFF, AND ALL FOUR WERE CLAIMS PROBLEMS
 *  · "38 keywords ranking in the top three" and "11 enquiries a month, up from
 *    2". Both were marked PLACEHOLDER DATA in this file and both were printing.
 *  · The quote. It carried invented words attributed to "Client name, Job
 *    title, Company". A sentence nobody said, in a real client's mouth, under a
 *    heading that says it is what the client said. The slot now renders its
 *    empty state.
 *  · The old "Headline result" fact row, which repeated the figure the hero
 *    already carries.
 *
 * WHAT KULWANT'S STRUCTURE ASKS FOR THAT THIS STORY CANNOT FILL
 *  · The before-and-after copy pair in "what we changed". We do not have Pine
 *    Tree Lane's previous page copy recorded, and inventing a client's old
 *    headline to make the new one look better is not something this site does.
 *    The template renders the pair whenever a step supplies one.
 *  · The results comparison table. Every figure in the structure's worked
 *    example is marked illustrative. The table renders only when there are real
 *    rows; here the slot says the comparison is with the client, and lists what
 *    is being measured.
 *  · Month-numbered delivery phases. We do not have the dated schedule, so the
 *    phases are labelled by sequence, which is what we can actually stand
 *    behind: this happened, then this.
 *
 * THE 4x IS PUBLISHED because it is already on the home page, the success
 * stories page and four service and industry pages. It has still never been
 * sourced to a dated Analytics export. See CLAIMS.md.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Pine Tree Lane | RankinAI';
$page_desc  = 'Their own factory, their own fitters and a ten-year warranty, and almost nobody finding them. What changed, in what order, and over what period.';

$STORY = [

  'label'  => 'Success story',
  'meta'   => ['Interior design and joinery', 'Dubai, UAE'],
  'client' => 'Pine Tree Lane',

  'h1'   => 'Their own factory. Almost nobody finding it.',
  'sub'  => 'How rebuilding the site around what Pine Tree Lane actually make helped the searches that carry their work reach them.',
  'lead' => 'The factory, the fitters and the ten-year warranty were already there. What was missing was any way for a buyer to discover them.',

  /* [was, now, what it measures]. A null 'now' renders the pending state, which
     is where two of these three sit. Nothing is invented to fill the row. */
  'headline' => [
    [null, '4&times;', 'Organic traffic, over the first three months'],
    [null, null,       'Suitable project enquiries per month'],
    [null, null,       'Discovery calls booked per month'],
  ],
  'headlineNote' => 'The traffic figure covers the first three months of the work. The enquiry measures are tracked monthly and appear here when Pine Tree Lane release them, with the periods and the source attached.',

  'heroPhoto'    => 'case-pine-tree-lane',
  'heroPhotoAlt' => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',

  'business' => [
    'eyebrow' => 'The business',
    'title'   => 'A factory, a showroom, and a website that could have belonged to anyone.',
    'paras' => [
      'Pine Tree Lane build bespoke kitchens and joinery in their own factory in Dubai and back the work for ten years.',
      'That is the difference between them and most of the firms they compete with, which subcontract the making. Their fitters are their own. The warranty is one they actually honour.',
      'None of it was on the website. The pages were stock photography, interchangeable with any reseller in the city, and the showroom sat on a road people drove past.',
    ],
  ],

  'facts' => [
    ['Client',         'Pine Tree Lane'],
    ['Sector',         'Interior design and bespoke joinery'],
    ['Market',         'Dubai, United Arab Emirates'],
    ['Project period', 'Ongoing, reported monthly'],
  ],
  'services' => [
    ['AI and search visibility', '/ai-visibility/'],
    ['Content', '/content/'],
    ['Website and conversion', '/website-conversion/'],
  ],

  'challenge' => [
    'eyebrow' => 'The challenge',
    'title'   => 'The searches that carry the work were going to firms who subcontract it.',
    'paras' => [
      'Someone in Dubai looking for a bespoke kitchen would search, find three firms who outsource the making, and never see Pine Tree Lane at all.',
      'The buyers who did arrive met a site that answered almost nothing they needed to know before spending that kind of money.',
    ],
    'quotes' => [
      'Do they make this themselves, or buy it in?',
      'What does a kitchen like that actually cost?',
      'How long does a project take from first drawing to fitted?',
      'Have they done anything like my apartment before?',
    ],
    'tail' => 'The goal became more specific: be found for the work they actually do, and give a buyer enough to recognise a comparable project before they get in touch.',
  ],

  'found' => [
    'eyebrow' => 'What we found',
    'title'   => 'The capability was real. Nothing online carried it.',
    'lead'    => 'We reviewed the site, the search results for the terms that matter in Dubai, and what the assistants were saying when asked who makes kitchens there.',
    'items' => [
      ['Resellers ranking above them for every term that mattered.', [
        'Custom kitchens and fitted wardrobes plus the city are the searches that precede a real project.',
        'They were being won by firms whose advantage was marketing rather than manufacturing.',
      ]],
      ['A site search engines struggled to read.', [
        'Structure, speed and pages competing with each other for the same search.',
        'None of it visible to a visitor, all of it holding back everything else.',
      ]],
      ['No project record at all.', [
        'No budgets, no timelines, no client types, no account of what was built or why.',
        'A buyer comparing four firms had nothing to compare.',
      ]],
      ['Assistants naming competitors.', [
        'Asked who makes bespoke kitchens in Dubai, the answers were built from sources that did not mention Pine Tree Lane.',
        'Nobody at the company had ever checked.',
      ]],
    ],
  ],

  'strategy' => [
    'eyebrow' => 'The strategy',
    'title'   => 'Make what they actually do impossible to miss.',
    'paras' => [
      'The work did not need repositioning. It needed writing down, and it needed the technical faults cleared so it could be found.',
    ],
    'listLead' => 'Four connected changes',
    'list' => [
      'Clear what was stopping the site being read.',
      'Rebuild the pages around what they make rather than what they stock.',
      'Turn real projects into evidence a buyer can assess.',
      'Be present in the answers, not only the rankings.',
    ],
    'tail' => 'No advertising ran in the period. Everything below is work on what Pine Tree Lane already had.',
  ],

  'changed' => [
    'eyebrow' => 'What we changed',
    'title'   => 'The work was already good. We made it legible.',
    'steps' => [
      [
        'title' => 'First, we cleared what was blocking it.',
        'paras' => [
          'The technical work came first: how the site was structured, how fast it loaded, and which pages were competing with each other for the same search.',
          'None of it is visible to a visitor. All of it was required before anything else could compound.',
        ],
      ],
      [
        'title' => 'Then we put their own work on the site.',
        'paras' => [
          'The stock imagery came off, and their own joinery, their own fitters and their own finishes went on, photographed locally and written up by us.',
          'It is the single clearest difference between Pine Tree Lane and a reseller, and none of it had been on the site before.',
        ],
      ],
      [
        'title' => 'We wrote the projects up properly.',
        'paras' => [
          'Real kitchens, with the brief, the budget band, the timeline and the material choices.',
          'That is what a buyer comparing four firms is actually trying to establish, and it gave the team something useful to send after a showroom visit.',
        ],
      ],
      [
        'title' => 'And we went after the answers, not just the rankings.',
        'paras' => [
          'The same buying questions asked of the assistants each month, recorded and compared.',
          'Then the work needed to be present in the sources those answers are built from.',
        ],
      ],
    ],
  ],

  /* Labelled by sequence rather than by month. We have the order the work was
     done in. We do not have a dated schedule, and numbering months we cannot
     evidence would be inventing a project plan. */
  'delivery' => [
    'eyebrow' => 'The delivery',
    'title'   => 'The changes supported each other.',
    'phases' => [
      ['First', 'Clear the ground.',
       'The technical faults, the site structure and the pages competing with each other. Tracking checked so the following months could be assessed.'],
      ['Then', 'Rebuild and publish.',
       'The service pages rewritten around what they make, their own photography in place of the stock library, and the first projects written up with budgets and timelines.'],
      ['Ongoing', 'Review and extend.',
       'Search results and assistant answers checked each month, and the findings deciding which pages get attention next.'],
    ],
  ],

  'results' => [
    'eyebrow' => 'The results',
    'title'   => 'What changed, and over what period.',
    'paras' => [
      'Organic traffic rose four times over across the first three months of the work.',
      'That is the figure Pine Tree Lane have released. The enquiry and project measures below are tracked in the same report and are theirs to publish when they choose.',
    ],
    /* No rows. The comparison table renders only when there are real ones, and
       the slot below says what is being measured instead. */
    'measuring' => [
      ['Suitable project enquiries, monthly average', 'Client enquiry records'],
      ['Discovery calls booked, monthly average', 'Client booking records'],
      ['Projects signed per period', 'Client records'],
      ['Keywords ranking on the first page', 'Ahrefs'],
    ],
    'notes' => [
      ['How a suitable enquiry is defined',
       'It has to match the service, the emirate they can deliver in, a plausible budget band and a workable timescale. The same test is applied to both comparison periods.'],
      ['What the figures cover',
       'The work is a combined search, content and website programme. The results are not attributed to any single change, and seasonality and showroom footfall are recorded alongside them.'],
    ],
    'tail' => 'The 4&times; has been published on this site since the story went up. It has not yet been tied to a dated analytics export, and it will be before launch.',
  ],

  /* NOT A SLOT TO FILL. The previous version of this file carried invented
     words attributed to "Client name, Job title, Company" under a heading that
     says it is what the client said. See CLAIMS.md. */
  'quote' => null,

  'closing' => [
    'eyebrow' => 'What this project shows',
    'title'   => 'The capability was never the problem. The record of it was.',
    'paras' => [
      'Pine Tree Lane did not need to become a different business.',
      'They needed the thing that already made them different, the factory and the fitters and the warranty, to be findable and legible to someone who had never walked past the showroom.',
      'That is most of what this kind of work is.',
    ],
  ],

  'more' => [
    'name'     => 'SweetRush',
    'meta'     => ['San Francisco, USA', 'Learning &amp; development consultancy'],
    /* The 3.2x came off 25 Sep 2026: invented during copywriting and never
       published. Pending until SweetRush release a real number. */
    'text'     => 'Twenty years of work for learning and development teams, and a reputation that travelled by recommendation inside a fairly small professional world. Outside it, a website that read like a much smaller firm&rsquo;s brochure. The gap was never capability. It was the record of it.',
    'photoSrc' => 'case-sweetrush',
    'photoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',
    'href'     => '/success-stories/sweetrush/',
  ],
];

require __DIR__ . '/includes/story-template.php';
