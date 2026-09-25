<?php
/**
 * Blog post — Which Part of Your Marketing Needs Attention First?
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

$page_title = 'Which Part of Your Marketing Needs Attention First? | RankinAI';
$page_desc  = 'Visibility, messaging, conversion or follow-up? A practical way to investigate the gaps and decide where your next round of effort should go.';

$POST = [
  'slug'  => 'where-to-start',
  'stand' => 'Visibility, messaging, conversion or follow-up? A practical way to investigate the gaps and decide where your next round of effort should go.',
  'body' => [
    ['p', 'There are only four places a prospective client is lost, and most firms are losing them in one place and spending in another. Working out which one is your problem is worth more than any single tactic.'],
    ['h2', 'The four places'],
    ['p', 'They happen in order, and each one only matters if the one before it is working.'],
    ['list', [
      'Visibility. Do the right people find you at all?',
      'Messaging. Once they arrive, do they understand what you do and who it is for?',
      'Conversion. Is there a clear, small next step they are willing to take?',
      'Follow-up. Once they take it, does anything useful happen?',
    ]],
    ['h2', 'How to find yours'],
    ['p', 'Start at the end and work backwards, because the last stage is the cheapest to fix and the most commonly broken.'],
    ['p', 'If enquiries arrive and go cold, the problem is follow-up and no amount of traffic will help. If people arrive and leave, it is messaging or the next step. Only when those hold is more visibility the right thing to buy.'],
    ['quote', 'Buying visibility to fix a follow-up problem is the most expensive mistake available.'],
    ['h2', 'What to do with the answer'],
    ['p', 'Fix one stage properly rather than all four badly. They compound: a fifth more of each is not a fifth more work, it is roughly double. But that only holds if each one is genuinely working before you move on.'],
    ['take', ['What to take from this', [
      'Diagnose backwards. The cheapest fixes are at the end.',
      'More traffic in front of a broken stage makes the problem more expensive, not smaller.',
      'One stage fixed properly beats four touched lightly.',
    ]]],
  ],
];

require __DIR__ . '/includes/blog-template.php';
