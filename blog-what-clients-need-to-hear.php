<?php
/**
 * Blog post — What Prospective Clients Need to Hear from Your Existing Ones
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

$page_title = 'What Prospective Clients Need to Hear from Your Existing Ones | RankinAI';
$page_desc  = 'Explore how specific, genuine feedback can help buyers understand your communication, approach and working relationship before they contact you.';

$POST = [
  'slug'  => 'what-clients-need-to-hear',
  'stand' => 'Explore how specific, genuine feedback can help buyers understand your communication, approach and working relationship before they contact you.',
  'body' => [
    ['p', 'A page of five-star reviews saying &ldquo;great service&rdquo; is worth less than one review that describes what happened when something went wrong. Buyers know the first kind is easy to collect. The second kind tells them what working with you is actually like.'],
    ['h2', 'What a buyer is trying to picture'],
    ['p', 'Not whether you are good. They have assumed that or they would not be reading. They are trying to picture the relationship: how you communicate, what you do when a date slips, whether they will be managed or ignored.'],
    ['quote', 'Nobody chooses a supplier because the reviews were positive. They choose because the reviews were specific.'],
    ['h2', 'How to ask for something useful'],
    ['p', 'The request shapes the answer. &ldquo;Would you leave us a review&rdquo; produces a sentence. An open question about a specific part of the work produces something a stranger can learn from.'],
    ['list', [
      'What were you unsure about before we started?',
      'What was the most useful part of how we worked together?',
      'What would you tell someone considering us?',
    ]],
    ['p', 'You are not scripting the answer. You are giving the client something to answer.'],
    ['h2', 'Where to put it'],
    ['p', 'Beside the thing it is about. A comment about communication belongs on the process page. Feedback about a particular service belongs beside that service, not in a carousel on the home page where none of it is attached to anything.'],
    ['take', ['What to take from this', [
      'Specific beats positive.',
      'The question you ask decides the answer you get.',
      'Put each piece of feedback next to the claim it supports.',
    ]]],
  ],
];

require __DIR__ . '/includes/blog-template.php';
