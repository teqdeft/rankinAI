<?php
/**
 * Blog post — Can Your Next Client Find You Without Knowing Your Name?
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

$page_title = 'Can Your Next Client Find You Without Knowing Your Name? | RankinAI';
$page_desc  = 'Your business name is only one way to search. Explore how service, location and problem-based searches can help new buyers discover your expertise.';

$POST = [
  'slug'  => 'find-you-without-your-name',
  'stand' => 'Your business name is only one way to search. Explore how service, location and problem-based searches can help new buyers discover your expertise.',
  'body' => [
    ['p', 'Most firms rank perfectly well for their own name. That is worth having and it proves very little, because the people searching for your name already know you exist. The buyers worth reaching are the ones who do not.'],
    ['h2', 'Three ways a stranger looks'],
    ['p', 'Someone who has never heard of you tends to search in one of three registers, and they need different things from your site.'],
    ['list', [
      'By service, when they know what they want to buy.',
      'By location, when who can actually come and do it matters.',
      'By problem, when they know what is wrong and not what fixes it.',
    ]],
    ['p', 'The third is the largest and the least contested, and it is the one almost nobody writes for.'],
    ['quote', 'Ranking for your own name proves the people who already know you can find you.'],
    ['h2', 'Where the gaps usually are'],
    ['p', 'A site organised around what the firm sells will answer the first register and miss the other two. There is a page for each service and nothing that describes a situation, a constraint or a question.'],
    ['p', 'The fix is not more pages for their own sake. It is a page for each thing a buyer is actually trying to resolve, written in the words they would use before they knew yours.'],
    ['h2', 'How to find out what is missing'],
    ['p', 'Ask the people who answer the phone what callers say in the first thirty seconds. Those sentences are the searches. Then check which of them your site has a page for.'],
    ['take', ['What to take from this', [
      'Your own name is the search that proves the least.',
      'Problem-based searches are the largest opportunity and the least written for.',
      'The first thirty seconds of a sales call is a free keyword list.',
    ]]],
  ],
];

require __DIR__ . '/includes/blog-template.php';
