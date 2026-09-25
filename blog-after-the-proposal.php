<?php
/**
 * Blog post — The Proposal Went Out. What Should Happen Next?
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

$page_title = 'The Proposal Went Out. What Should Happen Next? | RankinAI';
$page_desc  = 'Build a follow-up process that reflects the buyer\'s situation, gives your team a clear next action and keeps useful conversations moving.';

$POST = [
  'slug'  => 'after-the-proposal',
  'stand' => 'Build a follow-up process that reflects the buyer&rsquo;s situation, gives your team a clear next action and keeps useful conversations moving.',
  'body' => [
    ['p', 'Most work is lost after the proposal, not before it, and rarely to a competitor. It is lost to a decision that never got made, in a business where the person who liked the idea could not get it over the line on their own.'],
    ['h2', 'What is actually happening on their side'],
    ['p', 'A pause is usually not a refusal. Someone is waiting for a budget, a colleague, a board date or the end of something else entirely. None of that is visible from your side, and the follow-up that assumes rejection reads as pressure.'],
    ['quote', 'A pause is rarely a refusal. It is usually a dependency you cannot see.'],
    ['h2', 'Follow-up that reflects the situation'],
    ['p', 'The useful version has three parts, and none of them is a reminder that the proposal exists.'],
    ['list', [
      'Record what the buyer said they were waiting for.',
      'Reconnect on the date they suggested, not the date your sequence suggests.',
      'Bring something relevant to the thing they were stuck on.',
    ]],
    ['p', 'That last one is the difference between being helpful and being persistent.'],
    ['h2', 'Give your contact something to carry'],
    ['p', 'Often the person you are speaking to has to convince somebody else. A short account of why the issue matters, what the work covers and what the first stage produces is more use to them than another call.'],
    ['take', ['What to take from this', [
      'Write down what they are waiting for, and follow up on that.',
      'Automation handles the agreed steps. Your team brings the judgment.',
      'Arm your contact for the meeting you will not be in.',
    ]]],
  ],
];

require __DIR__ . '/includes/blog-template.php';
