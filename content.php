<?php
/**
 * Content
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Third service page in the new shape,
 * after /ai-visibility/ and /paid-advertising/.
 *
 * FOUR THINGS THE TEMPLATE GAINED FOR THIS PAGE, all guarded so the three
 * service pages still on the older data shape are untouched:
 *   · opportunity['quotes'] — the buyer's three questions, set as type under
 *     the heading rather than run into the prose beside it.
 *   · an approach with no list. The five-across strip is now conditional, so a
 *     service whose approach is prose alone renders two rows and stops.
 *   · 'substance' — three claims a buyer can read anywhere, each beside the
 *     thing that would actually demonstrate it.
 *   · 'reuse' — what a finished piece keeps doing afterwards.
 *
 * THE STORY IS NOT THE COPY'S, AND THE FIGURE CAME OFF. Kulwant's draft has
 * bracketed placeholders under "proof in practice", including a "the work" and
 * "the evidence" pair. Those do not go on a page. SweetRush is real and stays.
 *
 * The 3.2x inbound enquiries figure does NOT stay. CLAIMS.md has said since 22
 * Sep that it was invented during copywriting and is unpublished, but the data
 * kept printing it anyway, so the card said "the figures are not published"
 * directly under a published figure. The metric now renders in its pending
 * state. The same figure was live in five other places and came off with this.
 * See CLAIMS.md.
 *
 * ONE COPY EDIT, FOR THE PHOTOGRAPHY RULE. The draft answer to "does this
 * include design, photography and development" says new photography "is scoped
 * before production", which reads as an offer to arrange a shoot. We are in
 * India and the clients are in the US and the UK. The answer now says we give
 * direction and you commission locally, which is what every other page on the
 * site says. See CLAIMS.md.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Content for firms that sell expertise | RankinAI';
/* Plain text only. This string is escaped on output, so an HTML entity here
   arrives in the tag as a literal &rsquo; rather than an apostrophe. */
$page_desc  = 'Turn what you know into reasons to choose you. Website copy, service and industry pages, case studies and guides that help prospective clients understand your value before the first conversation.';

$SERVICE = [

  'label' => 'Content for firms that sell expertise',
  'h1'    => 'Turn what you know into reasons to choose you.',
  'sub'   => 'The questions you answer in meetings. The decisions behind your best projects. The experience that helps you spot what others miss.',
  'sub2'  => 'We turn that knowledge into website copy, client stories and useful content that helps prospective clients understand your value before the first conversation.',
  /* No 'heroNote'. The one on /paid-advertising/ listed the channels and came
     off on Kulwant's call, and this page's draft note did the same job. */

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'Your next client has questions. Your content can start the conversation.',
    'quotes' => [
      'Have they handled something like this?',
      'What would working with them involve?',
      'Why would I choose them?',
    ],
    'paras' => [
      'Your team may answer these questions confidently every day. Your website gives you the opportunity to answer them for people you haven&rsquo;t met yet.',
      'We help bring those explanations onto the page, with the detail, examples and personality that make your business worth considering.',
    ],
    'items' => [
      ['Make your expertise understandable.',
       'Explain what you do and how it applies to the buyer&rsquo;s situation.'],
      ['Give your claims something behind them.',
       'Show the decisions, work and outcomes that demonstrate your capabilities.'],
      ['Help the reader move forward.',
       'Answer the next question and make the next step clear.'],
    ],
  ],

  'approach' => [
    'eyebrow' => 'Our approach',
    'title'   => 'We start with the conversations that win you work.',
    'paras' => [
      'Before we recommend topics, we want to hear how you talk about your business.',
      'What do prospective clients ask? What do they misunderstand? What changes their mind? Which project best explains what your team can do?',
      'Those conversations give us the material for content with something useful to say.',
      'We connect it with your commercial priorities and the information buyers look for, then build a plan around the gaps.',
    ],
    'tail' => 'Every piece has a purpose: introduce a service, explain a decision, demonstrate experience or help someone take the next step.',
    /* No 'list'. The strip is conditional in the template. */
  ],

  'doHead' => [
    'What we create',
    'Put the right information in front of the next decision.',
    '',
  ],

  'do' => [
    ['pencil', 'Website copy',
     'Make your value easier to understand.',
     'We shape the words across your key pages so visitors can understand what you offer, who it suits and why your business is worth considering. Headlines, supporting copy, proof and calls to action work together to guide the reader through the page.'],
    ['page', 'Service and industry pages',
     'Show buyers that you understand their situation.',
     'We explain your services through the needs of the people buying them. That includes the problems you help solve, what the work involves, relevant experience and the questions someone needs answered before enquiring. Industry pages add the context that makes your expertise meaningful to a particular audience.'],
    ['star', 'Case studies and project stories',
     'Let the work make the argument.',
     'We turn completed projects into clear accounts of the challenge, the choices made and the outcome. Where evidence is available, we include specific results and their context. Where a number would tell only part of the story, we explain the practical difference the work made.'],
    ['chat', 'Articles and guides',
     'Be useful while buyers are figuring things out.',
     'We create content around the questions, options and decisions connected to your services. That might be a guide to planning a project, an explanation of a complex issue or a comparison that helps someone understand which approach suits them.'],
    ['refresh', 'Content improvements',
     'Make more of the material you already have.',
     'We review existing pages for unclear messages, missing answers, outdated information and opportunities to strengthen the evidence. A useful page can often become more persuasive with a better structure, a clearer example or the answer buyers keep asking for.'],
  ],

  'substance' => [
    'eyebrow' => 'Finding the substance',
    'title'   => 'The detail you take for granted may be the detail that earns trust.',
    'items' => [
      ['A buyer can read that your approach is thorough.',
       'A project story can show what you checked, and why it mattered.'],
      ['They can read that your service is personal.',
       'Your process page can explain who they will work with and how decisions are made.'],
      ['They can read that you understand their industry.',
       'Your content can demonstrate that understanding through the questions you ask and the examples you choose.'],
    ],
    'tail' => 'We look for those details in your work and help you explain them clearly.',
  ],

  'movesEyebrow' => 'How we work',
  'movesTitle'   => 'You bring the knowledge. We give it structure.',
  'moves' => [
    ['Listen.',
     'We interview the people who know the work and review the material you already have. Sales questions, project notes, presentations and client feedback can all help us understand what buyers need to hear.'],
    ['Plan.',
     'We identify the priority pages and topics, the audience for each piece, and the action it should support. You can see what we propose to create and why it deserves a place in the plan.'],
    ['Write and review.',
     'We develop the draft, then work through your feedback. Your team checks the facts and specialist details. We take responsibility for structure, clarity, tone and how the piece serves its reader.'],
    ['Publish and learn.',
     'We prepare the approved content for its intended use and handle publication where included in the scope. Over time, we review how it is discovered, used and connected to enquiries. Those findings inform updates and future priorities.'],
  ],

  /* 'reuse' (more use from the same expertise) removed 25 Sep 2026 at
     Kulwant's instruction, with its template section. It argued that a
     finished piece keeps working afterwards. The page still says it where it
     counts: "sales support" is the fourth thing the report measures. */

  /* Real, and running without a figure. See the note at the top of this file
     for why the 3.2x came off. */
  'story' => [
    'title'    => 'What changed when the expertise became clearer?',
    'name'     => 'SweetRush',
    'meta'     => ['San Francisco, USA', 'Learning &amp; development consultancy'],
    'text'     => 'SweetRush have been advising learning and development buyers for twenty years, and the buyers who had already worked with them knew exactly how good they were. Everyone else met a website that read like a much smaller firm&rsquo;s brochure. The reputation existed. Nothing written down carried it. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; SweetRush',
    'photoSrc' => 'case-sweetrush',
    'photoAlt' => 'Two SweetRush colleagues working through a problem on a laptop',
    'href'     => '/success-stories/sweetrush/',
    'linkText' => 'Read the SweetRush story',
  ],

  'reportEyebrow' => 'Measuring its contribution',
  'reportTitle'   => 'Give each piece a purpose. Measure it accordingly.',
  'report' => [
    ['Discovery',
     'Are relevant people finding the content through search, campaigns or other channels?'],
    ['Usefulness',
     'Are visitors engaging with it and moving to related information or a meaningful next step?'],
    ['Enquiries',
     'Which pages are part of the journeys that lead to contact?'],
    ['Sales support',
     'Is your team using the content to answer questions, demonstrate experience or support proposals?'],
  ],
  'reportTail' => 'These signals help us understand the contribution of the work. We explain where measurement is incomplete and avoid treating every page view as a buying decision.',

  'qs' => [
    ['How will you write about our business without being specialists in it?', [
      'We start with the people who are.',
      'Interviews, source material and your review give us the specialist knowledge. Our role is to ask useful questions, organise the information and make it clear to the intended reader.',
      'Technical or regulated claims require review by an appropriate person on your team.',
    ]],
    ['Will the content sound like us?', [
      'We establish the tone using your existing materials, conversations and preferences.',
      'Early drafts help us agree the voice. We then apply it consistently while adapting the level of detail to the audience and purpose.',
    ]],
    ['Do you use AI tools?', [
      'We may use tools to support research, organisation and drafting.',
      'Our team remains responsible for fact-checking, editorial decisions and the finished work. Content follows the agreed review process before publication.',
    ]],
    ['How much time will you need from our team?', [
      'We arrange focused interviews and clearly defined review points.',
      'The time required depends on the content and how much source material already exists. We agree that involvement when planning the work, so your team knows what to prepare.',
    ]],
    ['What if our clients or projects are confidential?', [
      'We establish what can be shared before writing.',
      'An approved, anonymised story may still explain the challenge, approach and outcome. We use only the details your team and any relevant client approvals allow.',
    ]],
    ['How many pieces will you create?', [
      'The volume is set by your package or individual scope.',
      'We agree what each piece will be, its purpose and its format. Website copy, a researched guide and a case study can require different inputs, so the plan makes those expectations clear.',
    ]],
    ['Does this include design, photography and development?', [
      'Those requirements are identified separately.',
      'We can work with your existing assets and team, and give direction on the images or presentation a piece needs. We do not shoot. Our team is in India and our clients are not, so photography is commissioned locally by you. New design or development is scoped before production.',
    ]],
    ['Can you improve our existing content?', [
      'Yes. We review what is already useful and identify where rewriting, restructuring or updating would help.',
      'Your content plan can combine improvements to existing material with new pieces.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
