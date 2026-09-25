<?php
/**
 * Build and design — category hub
 * -----------------------------------------------------------------------------
 * No design canvas exists for the three category pages. The mega panel links
 * to them, so they had to be built; this is assembled from components that
 * are already approved elsewhere rather than invented as a new layout.
 *
 * A hub page has one job: get the reader to the right industry page quickly,
 * and say what the three trades have in common so the page is worth landing
 * on from a search. It deliberately does not repeat the industry pages.
 *
 * WordPress: an `industry` taxonomy archive.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Marketing for build and design firms | RankinAI';
$page_desc  = 'Interior design studios, construction companies and architecture practices. Considered purchases, long decisions, and buyers who check your work before they call.';

$CATEGORY = [
  'label' => 'Design and construction',
  'h1'    => 'Trades where the buyer looks at your work before they call you.',
  'sub'   => 'Design studios, contractors and architecture practices sell the same thing in different forms: proof that you can be trusted with something expensive and slow to undo. The marketing problem is nearly identical, even though the trades feel nothing alike from the inside.',
  'ctaNote' => 'Free, back within a working day &mdash; including which firms in your city the assistants name instead of you.',

  'shared' => [
    ['The decision takes weeks, not minutes.',
     'Six to twelve weeks is normal across all three. That makes follow-up worth more here than almost anywhere else, and makes the second and third contact the ones that win work.'],
    ['Resellers outrank makers.',
     'Firms who subcontract everything routinely outrank the ones who actually do the work &mdash; because they write about the search terms while you are on site or in the workshop.'],
    ['The portfolio is the product.',
     'In all three trades the work exists and is good. What is missing is the record of it that a buyer outside the profession can read: scale, budget band, timeline, outcome.'],
  ],

  'industries' => [
    ['Interior design studios', '/interior-design/',
     'Showrooms, portfolios and the enquiry that follows a folder of saved images.'],
    ['Construction companies', '/construction/',
     'Getting onto the list of three that gets written long before the tender.'],
    ['Architecture firms', '/architecture/',
     'Being findable by the developer with a site, rather than admired by other architects.'],
  ],
];

require __DIR__ . '/includes/category-template.php';
