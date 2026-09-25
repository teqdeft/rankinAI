<?php
/**
 * Professional services — category hub
 * -----------------------------------------------------------------------------
 * No design canvas exists for the category pages. Built from approved
 * components — see includes/category-template.php.
 *
 * This hub carries four industries rather than three, so the grid runs two-up
 * rather than three-across. That is handled by .hows--four in the template's
 * layout, not by a special case here.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Marketing for professional services firms | RankinAI';
$page_desc  = 'Accountants, IT consultancies, law firms and business consultants. Referral-led practices where the buyer is choosing a person, not a company.';

$CATEGORY = [
  'label' => 'Professional services',
  'h1'    => 'The client is choosing a person. Your website describes a company.',
  'sub'   => 'Accountants, lawyers, IT providers and consultants all sell judgment that can&rsquo;t be inspected before it&rsquo;s bought. All four are referral-led until a referral doesn&rsquo;t arrive. And in all four, the site is organised the way the firm is organised rather than the way a client thinks.',
  'ctaNote' => 'Free, back within a working day &mdash; including which firms in your city the assistants name instead of you.',

  'shared' => [
    ['Nobody buys without a trigger.',
     'A tax bill, an outage, a dispute, a margin problem. Professional services spend is almost never planned, which makes being visible at the moment of the trigger worth more than any amount of brand-building beforehand.'],
    ['The individual is the product.',
     'Clients compare partners, engineers and consultants &mdash; not firms. Most sites list qualifications where a buyer wants to know what this person has actually handled, in their sector, at their size.'],
    ['Referral is a strength until it&rsquo;s the only channel.',
     'It&rsquo;s the highest-quality work you get. It also stops at the ceiling of one person&rsquo;s relationships, and it can&rsquo;t be scheduled. This is about having a second source, not replacing the first.'],
  ],

  'industries' => [
    ['Accounting and tax', '/accounting/',
     'Being findable at the moment a business finally has a reason to switch.'],
    ['IT consulting and MSPs', '/it-consulting/',
     'Being the name that appears at 8am, when something has already broken.'],
    ['Legal and corporate law', '/law-firms/',
     'Six firms saying the same six things, and a client choosing a partner.'],
    ['Business consulting', '/consulting/',
     'Publishing the argument you make in every scoping call but never write down.'],
  ],
];

require __DIR__ . '/includes/category-template.php';
