<?php
/**
 * HR and recruitment — category hub
 * -----------------------------------------------------------------------------
 * No design canvas exists for the category pages. Built from approved
 * components — see includes/category-template.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Marketing for recruitment and HR firms | RankinAI';
$page_desc  = 'Recruitment agencies and outsourced HR providers. Two audiences, referral-led markets, and buyers who arrive with a problem rather than a shopping list.';

$CATEGORY = [
  'label' => 'HR and recruitment',
  'h1'    => 'People businesses, sold on trust and answered on speed.',
  'sub'   => 'Recruiters and HR providers both sell judgment that a buyer can&rsquo;t inspect before they commit. Both are referral-led, both are crowded with firms saying identical things, and in both the fastest useful answer usually wins the work.',
  'ctaNote' => 'Free, back within a working day &mdash; including which firms in your market the assistants name instead of you.',

  'shared' => [
    ['The buyer arrives with a problem, not a plan.',
     'A vacancy that has been open three weeks, or a payroll run that went wrong. Nobody in either trade is browsing. That makes response time worth more than brand, and specifics worth more than adjectives.'],
    ['Everyone says the same three things.',
     '&ldquo;Trusted partner&rdquo;, &ldquo;bespoke&rdquo;, &ldquo;people-first&rdquo;. Written by four competitors on the same page. What differentiates is a real placement, a real transition, a real named person &mdash; which almost nobody publishes.'],
    ['The pipeline depends on somebody remembering.',
     'Consultants prospect when the desk is quiet; proposals get chased when someone has time. In both trades the follow-up that nobody owns is where most of the lost revenue sits.'],
  ],

  'industries' => [
    ['Recruitment and staffing agencies', '/recruitment-agencies/',
     'Two markets at once, and a pipeline that empties when the desk gets busy.'],
    ['HR outsourcing and payroll', '/hr-outsourcing/',
     'Being the name they find after the bad week that finally makes them switch.'],
  ],
];

require __DIR__ . '/includes/category-template.php';
