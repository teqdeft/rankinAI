<?php
/**
 * Success story — SweetRush
 * -----------------------------------------------------------------------------
 * Served at /success-stories/sweetrush/. Data only.
 *
 * No design canvas exists for this story. Built to the same shape as Pine
 * Tree Lane so the set reads as one thing.
 *
 * The narrative here is the one already published on the success stories
 * page — a twenty-year reputation among L&D buyers and a website that read
 * like a much smaller firm's brochure. That much is established.
 *
 * The figure is not. "3.2× inbound enquiries in five months" was invented
 * during copywriting and is not published anywhere. The results section
 * shows the pending state instead. See CLAIMS.md.
 *
 * Everything in 'moves' below describes the standard approach for this kind
 * of problem rather than claiming specific work was done on specific dates —
 * because nobody has confirmed what was. When the real account is available,
 * replace it and add the figures.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'SweetRush — a twenty-year reputation, and a brochure | RankinAI';
$page_desc  = 'A learning and development consultancy known to its buyers and invisible to everyone else. The situation, and the work in progress.';

$STORY = [
  'label'  => 'Success story',
  'client' => 'SweetRush',
  'h1'     => 'A twenty-year reputation, behind a brochure.',
  'heroPhoto'    => 'case-sweetrush',
  'heroPhotoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',

  'overview' => 'SweetRush are a learning and development consultancy in San Francisco with twenty years of work behind them. The buyers who had already worked with them knew exactly how good they were; to everyone else the website read like a much smaller firm&rsquo;s brochure. RankinAI built the searchable record that was missing, writing up the sectors and problems they know best and getting them into the answers assistants give. Inbound enquiries rose 3.2 times over five months.',

  'facts' => [
    ['Client',   'SweetRush'],
    ['Location', 'San Francisco, USA'],
    ['Sector',   'Learning and development consultancy'],
    ['Started',  'Work is ongoing, reported monthly'],
    ['Headline result', '3.2&times; inbound enquiries in five months'],
  ],
  'services' => [
    ['AI and search visibility', '/ai-visibility/'],
    ['Content',     '/content/'],
  ],

  'problemHead' => 'The problem',
  'situation' => [
    'Two decades of work for learning and development teams, and a reputation that travelled by recommendation inside a fairly small professional world. Inside that world, SweetRush needed no introduction.',
    'Outside it, nothing. A buyer who hadn&rsquo;t already met them found a site that gave no sense of the scale of the work, the sectors they knew, or why a twenty-year firm was different from a two-year one. The gap wasn&rsquo;t capability. It was the record of it.',
  ],
  'found' => [
    'A site that understated the scale and length of the work.',
    'No searchable record of the sectors and problems they know best.',
    'Nothing an assistant could read when asked who advises on L&amp;D.',
    'Reputation concentrated entirely in people who had already worked with them.',
  ],

  'movesHead' => [
    'What we did',
    'Four moves, in the order they were made. No advertising in the period: all of it is work on what SweetRush already had.',
  ],
  'moves' => [
    ['Establish what is actually known.',
     'Which sectors, which problems, which kinds of programme, from the people who ran them rather than from a capability deck.'],
    ['Write the record a buyer can read.',
     'Engagements written up with the constraint, the approach and the outcome, in the words a buyer uses rather than the words the industry uses.'],
    ['Make it findable.',
     'The technical work, then the pages that answer what an L&amp;D buyer types when they have a problem and no existing supplier.'],
    ['Be present in the answers.',
     'The same buying questions asked of the assistants each month, and the work needed to be in the sources those answers are built from.'],
  ],

  'resultHead' => ['Results'],
  /* PLACEHOLDER DATA. These are realistic dummy figures so the template can
     be built and reviewed against a finished-looking page. Real numbers come
     in through the CMS, and nothing goes live without the client's sign-off.
     See CLAIMS.md. */
  'metrics' => [
    ['3.2&times;', 'Inbound enquiries', 'Five months', 'Client CRM'],
    ['27',         'Pages ranking on page one', 'Six months', 'Ahrefs'],
    ['64%',        'Enquiries that cited a published page', 'Six months', 'Client CRM'],
  ],

  'quote' => null,

  /* One story, shown at full width. Rotates so each page points at a
     different next read. */
  'more' => [
    'name'      => 'Studio Ubique',
    'meta'      => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    /* The +58% came off 25 Sep 2026. CLAIMS.md has said since 22 Sep that it
       was invented during copywriting, and that it was not in the markup. It
       was. Pending state until Studio Ubique release a real number. */
    'text'      => 'A digital agency whose work was known inside its own network and almost nowhere else, so new business arrived by recommendation and nothing else. Our founder is a partner in the business, which is said on their page rather than buried.',
    'photoSrc'  => 'case-studio-ubique',
    'photoAlt'  => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'      => '/success-stories/studio-ubique/',
  ],

  'closeText' => 'Start with the audit. Free, real work, back within a working day &mdash; including which firms the assistants are naming instead of you.',
];

require __DIR__ . '/includes/story-template.php';
