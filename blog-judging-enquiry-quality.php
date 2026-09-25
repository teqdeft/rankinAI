<?php
/**
 * Blog post — Cheap Leads, Expensive Problem: How to Judge Enquiry Quality
 * -----------------------------------------------------------------------------
 * DUMMY BODY, 25 Sep 2026. The title, standfirst and topic are Kulwant's copy;
 * the article below is a placeholder written so the detail template can be
 * designed against a real-looking page. It carries no statistic, no client name
 * and no result, because a placeholder with an invented figure in it is the
 * kind of thing that survives into production. See CLAIMS.md.
 *
 * Title, topic, date and reading time come from includes/posts.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Cheap Leads, Expensive Problem: How to Judge Enquiry Quality | RankinAI';
$page_desc  = 'A low cost per lead tells only part of the story. Learn what to track between the first response and a worthwhile sales opportunity.';

$POST = [
  'slug'  => 'judging-enquiry-quality',
  'stand' => 'A low cost per lead tells only part of the story. Learn what to track between the first response and a worthwhile sales opportunity.',
  'body' => [
    ['p', 'Cost per lead is the easiest number in advertising to improve and the easiest to be misled by. Loosen the targeting, soften the offer, and it falls. Whether anything worth having arrived is a separate question, and it is usually asked too late.'],
    ['h2', 'The stage nobody measures'],
    ['p', 'Most reporting covers the click and the form. What happens between the form and a real conversation is where the money is decided, and it lives in a place no ad platform can see: the inbox of whoever replies.'],
    ['quote', 'A cheaper enquiry only helps if it is worth having.'],
    ['h2', 'What to record instead'],
    ['p', 'Four things, recorded per enquiry, take a moment each and change what the next round of budget does.'],
    ['list', [
      'Did it match the service, the area and a plausible budget?',
      'Did it reach a real conversation?',
      'Did it become a proposal?',
      'Did it become work?',
    ]],
    ['p', 'The gap between the first and second line is where most campaigns are quietly failing, and no amount of bid tuning will show it to you.'],
    ['h2', 'Who has to do it'],
    ['p', 'The people answering the enquiries, because nobody else knows. Agree the categories before you start, keep them to a handful, and apply the same test to every period you compare.'],
    ['take', ['What to take from this', [
      'Cost per lead is an input. Suitability is the outcome.',
      'Define a suitable enquiry before you measure, and do not change the definition mid-comparison.',
      'The sales team holds the only number that matters.',
    ]]],
  ],
];

require __DIR__ . '/includes/blog-template.php';
