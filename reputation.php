<?php
/**
 * Reviews and reputation
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Fifth service page in the new shape,
 * and the last one with copy. Only /crm/ is still on the older data shape.
 *
 * WHAT THE TEMPLATE GAINED FOR THIS PAGE:
 *   · 'substance' now takes a list of blocks rather than one, and each block
 *     picks its own ground. This page has two: the value of a useful review,
 *     which is prose, and when feedback is difficult, which is prose plus
 *     three steps on the dark band. Two blocks of the same shape on the same
 *     ground would have read as one long section.
 *   · 'reportGrid' — five measures rather than four, and they are a set rather
 *     than a journey, so they run five across with no chevrons.
 *
 * THE STORY IS NOT THE COPY'S, AND THE FIGURE CAME OFF. Bracketed placeholders
 * again. Studio Ubique is real and stays, with the partner disclosure intact.
 * The +58% does not stay: CLAIMS.md has said since 22 Sep that it was invented
 * during copywriting and that it was not in the markup. It was, here and in
 * eight other places. All cleared. See CLAIMS.md.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the mid-page CTA, the
 * comparison table, closeText, and the dead fitHead / fitYes / fitNo arrays.
 * That is the last of them on a service page.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Reviews and reputation | RankinAI';
/* Plain text only. This string is escaped on output, so an HTML entity here
   arrives in the tag as a literal &rsquo; rather than an apostrophe. */
$page_desc  = 'Let the clients who know you help the next ones choose you. Review collection, considered responses, accurate business profiles and reputation monitoring for firms that sell expertise.';

$SERVICE = [

  'label' => 'Reviews and reputation',
  'h1'    => 'Let the clients who know you help the next ones choose you.',
  'sub'   => 'Your team puts care into the work. Your clients experience the difference.',
  'sub2'  => 'We help bring those experiences into public view through genuine reviews, thoughtful responses and accurate business profiles, giving prospective clients more to go on when they&rsquo;re considering your firm.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'A recommendation starts the conversation. What people find next should support it.',
    'quotes' => [
      'What was it like to work with you?',
      'Did you communicate clearly?',
      'How did you handle a difficult moment?',
      'Would someone choose you again?',
    ],
    'paras' => [
      'Someone hears your name, visits your website or discovers your business in search. Then they look for reassurance.',
      'Your clients can answer questions that your own marketing can only speak to from one side.',
      'We help you make that feedback easier to collect, find and learn from.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Our approach',
    'title'   => 'Make asking for feedback part of how you work.',
    'paras' => [
      'Without a clear process, review requests can depend on someone remembering after a project closes.',
      'We build a consistent approach around your client journey: when to ask, who asks, where the feedback goes and what happens afterwards.',
      'The invitation is simple. Share an honest account of the experience.',
    ],
    'tail' => 'You gain a clearer picture of what clients value, where the service could improve, and what prospective clients can learn from those experiences.',
  ],

  'doHead' => [
    'What we do',
    'Build a more complete picture of your business.',
    '',
  ],

  'do' => [
    ['mail', 'Review requests',
     'Give clients a straightforward way to share their experience.',
     'We develop requests around appropriate moments in your client journey. The timing, wording and channel should feel natural to the relationship. We agree a consistent process for inviting feedback, without directing clients towards a particular rating.'],
    ['chat', 'Review responses',
     'Show how your business listens.',
     'We help draft replies that acknowledge the client&rsquo;s experience and reflect your business&rsquo;s voice. Positive feedback deserves a considered response. Critical feedback needs context, care and an appropriate next step. You know who reviews and approves sensitive replies before they are published.'],
    ['pin', 'Business profiles',
     'Make the practical details dependable.',
     'We review priority profiles for accurate business names, contact information, services, locations and website links. Clear, consistent information helps prospective clients understand whether your business serves their needs and how to reach you.'],
    ['eye', 'Reputation monitoring',
     'Know what needs your attention.',
     'We monitor the platforms and mentions included in your plan, identify relevant feedback and flag issues for review. The coverage, frequency and escalation process are agreed so your team knows what to expect.'],
    ['star', 'Proof on your website',
     'Put relevant client feedback where it helps someone decide.',
     'We help select approved testimonials and review excerpts for the pages where they add useful context. A comment about communication may support your process page. Feedback about a particular service may be more helpful beside that offer. The source and wording remain clear.'],
    ['ear', 'Feedback insights',
     'Use what clients say to improve what happens next.',
     'We look for recurring themes in the feedback. What do clients consistently appreciate? Where do expectations differ from the experience? Which questions should your website answer earlier? Those observations can inform your messaging, service process and future requests for feedback.'],
  ],

  /* Two blocks. The first is the argument and has no cards; the second is a
     process and has three, on the dark ground so the two do not read as one
     long section of cream. */
  'substance' => [

    [
      'eyebrow' => 'The value of a useful review',
      'title'   => '&ldquo;Great service&rdquo; is welcome. The experience behind it tells buyers more.',
      'paras' => [
        'A prospective client may be trying to understand how you communicate, manage a project or respond when circumstances change.',
        'Specific feedback can help them picture the working relationship.',
        'We make it easy for clients to describe their experience in their own words, with open questions where appropriate.',
        'Their account stays theirs. We help create the opportunity for it to be heard.',
      ],
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'When feedback is difficult',
      'title'   => 'A careful response starts with understanding what happened.',
      'paras' => [
        'A critical review can involve missing context, a genuine service issue or a misunderstanding.',
        'We help your team work through the situation before replying.',
      ],
      'items' => [
        ['Establish the facts.',
         'Speak with the people involved and understand what can appropriately be discussed in public.'],
        ['Acknowledge the experience.',
         'Prepare a response that addresses the concern respectfully and gives a suitable next step.'],
        ['Take the learning back into the business.',
         'If the feedback points to a recurring issue, identify who needs to act on it.'],
      ],
      'tail' => 'Public responses are written with care for the reviewer, the client relationship and the people reading later.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'A practical process your team can keep using.',
  'moves' => [
    ['Review the current picture.',
     'We examine the priority profiles, existing feedback, unanswered reviews and the way your business currently requests feedback.'],
    ['Agree the approach.',
     'Together, we choose the platforms, request moments, responsibilities and approval process. We also establish how sensitive feedback should reach the right person.'],
    ['Put the process in place.',
     'We prepare the requests, make agreed profile corrections and connect the workflow to your existing systems where included.'],
    ['Review and improve.',
     'We assess participation, response coverage, recurring themes and any changes needed to make the process more useful.'],
  ],

  /* Real, our partner, disclosed, and running without a figure. See the note
     at the top of this file for why the +58% came off. */
  'story' => [
    'title'    => 'Make the client experience easier to see.',
    'name'     => 'Studio Ubique',
    'meta'     => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    'text'     => 'Studio Ubique are a digital agency in Zwolle, and our founder is a partner there, so weigh this one differently from the others on this site. Their clients rated them and said so privately. Anyone checking from outside found nothing, because nobody had ever asked them to say it in public. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; Studio Ubique, Zwolle',
    'photoSrc' => 'case-studio-ubique',
    'photoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'     => '/success-stories/studio-ubique/',
    'linkText' => 'Read the Studio Ubique story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Look at the quality of the picture you&rsquo;re building.',
  'reportGrid'    => 'wcards--five',
  'report' => [
    ['Participation',
     'Are appropriate clients receiving an invitation, and are more choosing to share their experience?'],
    ['Coverage and recency',
     'Does your public feedback represent the services you provide and the work you are doing now?'],
    ['Responsiveness',
     'Are reviews being acknowledged, and are concerns reaching the people who can address them?'],
    ['Accuracy',
     'Can prospective clients find dependable information across your priority profiles?'],
    ['Business insight',
     'What does the feedback reveal about client expectations, strengths and opportunities to improve?'],
  ],
  'reportTail' => 'We report these measures in context. Where enquiry data provides further insight, we explain what it can and cannot tell us about the contribution of reviews.',

  'qs' => [
    ['Will you write reviews for our clients?', [
      'No. Reviews should reflect the client&rsquo;s own experience and words.',
      'We write the invitation, simplify the process and help your team respond. We don&rsquo;t create client reviews or prescribe the rating someone should leave.',
    ]],
    ['Do you ask only happy clients?', [
      'We agree a consistent approach for inviting honest feedback from appropriate clients.',
      'The process should help you understand the experience being delivered, including where it needs attention.',
    ]],
    ['Can you remove a negative review?', [
      'We don&rsquo;t promise removal.',
      'We can help assess the situation, prepare a considered response or support a request for the platform to review the content. The platform controls its decision.',
    ]],
    ['Which platforms will you manage?', [
      'We focus on the places relevant to your buyers and business.',
      'That may include Google Business Profile, an industry directory or a specialist review platform. The coverage is listed in your proposal.',
    ]],
    ['Do you reply without checking with us?', [
      'We agree the approval process before starting.',
      'Routine responses can follow an approved approach. Sensitive complaints or situations requiring client-specific knowledge are escalated to your designated contact.',
    ]],
    ['What if our clients value confidentiality?', [
      'We discuss that before introducing review requests or publishing testimonials.',
      'Some clients may prefer private feedback or an approved anonymous account. We work within the permissions and professional requirements relevant to your business.',
    ]],
    ['Can this connect with our CRM?', [
      'Where the systems support it, review requests can be linked to an appropriate stage in your client journey.',
      'Any integration, subscription or messaging requirements are identified before implementation.',
    ]],
    ['How quickly will our rating improve?', [
      'We cannot promise a rating or a timeframe.',
      'The outcome depends on existing feedback, the number of new reviews and the experiences clients report. We focus on a consistent process, accurate profiles and thoughtful handling of feedback.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
