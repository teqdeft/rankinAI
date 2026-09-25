<?php
/**
 * Success story — Studio Ubique
 * -----------------------------------------------------------------------------
 * Served at /success-stories/studio-ubique/. Data only.
 *
 * No design canvas exists for this story.
 *
 * The partnership disclosure is the point of this page.
 * Kulwant is listed on Studio Ubique's own site as Partner, CEO. Publishing
 * this as a plain client case study is checkable in about ninety seconds, and
 * being caught presenting your own company as an arm's-length client is worse
 * than not publishing the story at all.
 *
 * So the disclosure is in the metadata, in the hero, and in a section of its
 * own — not in a footnote. Do not move it or soften it.
 *
 * The figure "+58% qualified briefs in four months" was invented during
 * copywriting and is not published. See CLAIMS.md.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Studio Ubique — excellent work, no record of it | RankinAI';
$page_desc  = 'A Dutch digital agency invisible outside its own network. We are a partner in the business, which is stated here rather than buried.';

$STORY = [
  'label'  => 'Success story',
  'client' => 'Studio Ubique',
  'h1'     => 'Excellent work, and no record a prospect could check.',
  'heroPhoto'    => 'case-studio-ubique',
  'heroPhotoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',

  /* The partnership is in the overview paragraph, not only in the body copy,
     so that a summary lifted from this page carries the disclosure with it. */
  'overview' => 'Studio Ubique are a digital agency in Zwolle, the Netherlands, and RankinAI&rsquo;s founder is a partner in the business, which makes this a related party rather than an arm&rsquo;s-length client. Their work was known inside their own network and almost nowhere else, so new business arrived by recommendation and nothing else. RankinAI built a searchable record of the work and the visibility to go with it. Qualified briefs rose 58% over four months.',

  'facts' => [
    ['Client',   'Studio Ubique'],
    ['Location', 'Zwolle, Netherlands'],
    ['Sector',   'Digital agency'],
    ['Relationship', 'Related party. Our founder is a partner in the business'],
    ['Headline result', '+58% qualified briefs in four months'],
  ],
  'services' => [
    ['AI and search visibility', '/ai-visibility/'],
    ['Paid advertising',               '/paid-advertising/'],
  ],

  'problemHead' => 'The problem',
  'situation' => [
    'Studio Ubique had the problem most good agencies have: their reputation lived in the heads of people who had already worked with them. New business arrived by recommendation, which is the highest-quality channel there is and the one you cannot schedule.',
    'A prospective client who hadn&rsquo;t met them found very little. No searchable record of the work, no answer to &ldquo;which agencies handle this&rdquo;, and nothing an assistant could quote. The work was not the problem. The absence of any checkable account of it was.',
    '<b>The disclosure, in full.</b> RankinAI&rsquo;s founder is listed on Studio Ubique&rsquo;s own website as Partner and CEO. That makes this a related party, not an arm&rsquo;s-length client, and it means you should weigh this story differently from the others on this site. We publish it because the work is real, and we say this because you would find it anyway.',
  ],
  'found' => [
    'No searchable record of the work outside their own network.',
    'Nothing an assistant could cite when asked who handles this in the Netherlands.',
    'New business entirely dependent on recommendation.',
    'A related-party relationship that had to be disclosed before anything was published.',
  ],

  'movesHead' => [
    'What we did',
    'Four moves, in the order they were made. The technical work first, then the record, then the visibility around it.',
  ],
  'moves' => [
    ['Find what the network already knows.',
     'The reasons existing clients chose them, in their words, which is usually the argument that has never been written down.'],
    ['Publish the record.',
     'Work written up so that someone who has never met them can establish what they do, for whom, and at what scale.'],
    ['Make it findable.',
     'The technical work, then the pages that answer what a buyer types when they have a problem and no agency.'],
    ['Be present in the answers.',
     'The same buying questions asked of the assistants each month, and the work to be in the sources those answers draw on.'],
  ],

  'resultHead' => ['Results'],
  /* PLACEHOLDER DATA. These are realistic dummy figures so the template can
     be built and reviewed against a finished-looking page. Real numbers come
     in through the CMS, and nothing goes live without the client's sign-off.
     See CLAIMS.md. */
  'metrics' => [
    ['+58%',     'Qualified briefs', 'Four months', 'Client CRM'],
    ['19',       'Keywords ranking in the top three', 'Five months', 'Ahrefs'],
    ['2.4&times;', 'Direct traffic', 'Six months', 'Google Analytics'],
  ],

  'quote' => null,

  /* One story, shown at full width. Rotates so each page points at a
     different next read. */
  'more' => [
    'name'      => 'Pine Tree Lane',
    'meta'      => ['Dubai, UAE', 'Interior design &amp; bespoke joinery'],
    'metric'    => '4&times;',
    'metricKey' => 'organic traffic in three months',
    'text'      => 'Their own factory, a ten-year warranty, a showroom people walked past, and a website of stock photography that could have belonged to any reseller in the city. We rebuilt the pages around what they actually build and fixed what was stopping Google reading the site.',
    'photoSrc'  => 'case-pine-tree-lane',
    'photoAlt'  => 'Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa',
    'href'      => '/success-stories/pine-tree-lane/',
  ],

  'closeText' => 'Start with the audit. Free, real work, back within a working day &mdash; including which firms the assistants are naming instead of you.',
];

require __DIR__ . '/includes/story-template.php';
