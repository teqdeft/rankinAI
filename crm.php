<?php
/**
 * CRM and automation
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. The sixth and last service page in
 * the new shape. All six now share the same structure and the same rules.
 *
 * The only template change this page needed: a `substance` block picks its grid
 * from the number of items, so this page's four team requirements sit four
 * across where the other pages' three sit three across.
 *
 * THE STORY IS NOT THE COPY'S. Bracketed placeholders again, with an "the
 * operational improvement" and "the commercial outcome" pair. Studio Ubique is
 * real, is our partner, is disclosed as one, and stays. The block states their
 * position and nothing about CRM work delivered, because their published story
 * documents the lead-flow situation and lists search and paid as the services.
 * The +58% came off earlier today with the other eight places it was live.
 * See CLAIMS.md.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the mid-page CTA, the
 * comparison table, closeText, and the dead fitHead / fitYes / fitNo arrays.
 * Those arrays are now gone from all six service files.
 *
 * WordPress: becomes a `service` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'CRM and automation | RankinAI';
/* Plain text only. This string is escaped on output, so an HTML entity here
   arrives in the tag as a literal &rsquo; rather than an apostrophe. */
$page_desc  = 'Give every good enquiry a clear next step. CRM setup, lead routing, acknowledgements, proposal follow-up, appointment reminders and pipeline reporting for firms that sell expertise.';

$SERVICE = [

  'label' => 'CRM and automation',
  'h1'    => 'Give every good enquiry a clear next step.',
  'sub'   => 'An enquiry arrives. A proposal goes out. A promising conversation pauses while someone considers their options.',
  'sub2'  => 'We connect your CRM, lead routing, reminders and follow-up so your team can see what needs attention, and keep useful conversations moving.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'Interest brought them to you. What happens next helps win the work.',
    'quotes' => [
      'Who is replying?',
      'Has the proposal been followed up?',
      'Did anyone agree when to reconnect?',
    ],
    'paras' => [
      'A prospective client has taken the first step. Now they need a response, the right information and a clear way forward.',
      'Inside the business, that can involve several people, inboxes and handovers.',
      'We help put those details into a process your team can use, with clear responsibilities and reminders at the moments that matter.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Our approach',
    'title'   => 'Build the system around how you actually win work.',
    'paras' => [
      'A recruitment brief moves differently from an architecture commission. A consultancy proposal may need several conversations before a decision. Your CRM should reflect that process.',
      'We start by understanding how enquiries arrive, how your team qualifies them, and what happens between first contact and an agreement.',
    ],
    'tail' => 'Then we identify where a clearer workflow, better information or a timely reminder would help.',
    'items' => [
      ['Give enquiries an owner.',
       'Make responsibility visible from the moment a prospect gets in touch.'],
      ['Make the next action clear.',
       'Help your team see what needs doing and when.'],
      ['Keep the conversation relevant.',
       'Use the prospect&rsquo;s situation and stage to guide the follow-up.'],
    ],
  ],

  'doHead' => [
    'What we do',
    'Connect the enquiry, the conversation and the next decision.',
    '',
  ],

  'do' => [
    ['sliders', 'CRM setup and improvement',
     'Give your team a shared view of the opportunity.',
     'We configure the stages, fields and working views around your sales process. If you already have a CRM, we review what is useful, what is missing and what makes it difficult to use before recommending changes.'],
    ['split', 'Lead capture and routing',
     'Get the enquiry to the right person.',
     'We connect agreed enquiry sources with your CRM and define who should receive each type of opportunity. Routing can reflect the service, location or team involved, with notifications and escalation rules where needed.'],
    ['mail', 'Enquiry acknowledgement',
     'Let the prospect know what happens next.',
     'We prepare a clear confirmation that their enquiry has arrived, explain the next step and set an appropriate expectation for a personal response. Your team&rsquo;s follow-up remains visible, so an automatic acknowledgement is recognised as the start of the process.'],
    ['refresh', 'Proposal and enquiry follow-up',
     'Make staying in touch a deliberate part of the process.',
     'We develop sequences and reminders for relevant situations: an unanswered enquiry, a proposal under consideration or an agreed future check-in. Messages are reviewed with your team, with rules for when they should continue, pause or stop.'],
    ['calendar', 'Appointment reminders',
     'Help people arrive prepared for the conversation.',
     'We configure confirmations and reminders with the meeting details, any useful preparation and a straightforward route to reschedule. Where appropriate, we also define what happens after a missed appointment.'],
    ['chart', 'Pipeline reporting',
     'See where opportunities move, and where they wait.',
     'We organise reporting around the stages your business uses. That can include response times, outstanding actions, proposals awaiting a decision and opportunities won or lost. The aim is to give your team information they can act on.'],
  ],

  /* Two blocks. The first is the argument and has no cards; the second is what
     the team needs from the system and has four, on the dark ground so the two
     do not read as one long section of cream. */
  'substance' => [

    [
      'eyebrow' => 'Follow-up that fits the relationship',
      'title'   => 'Stay useful while the buyer decides.',
      'paras' => [
        'A prospect may need a question answered, another person&rsquo;s approval or time to arrange a budget. The next message should reflect that context.',
        'It could share a relevant case study, clarify something in the proposal or reconnect on the date the prospect suggested.',
        'We plan the timing and content around those situations, with a clear handover to a person when a conversation needs attention.',
      ],
      'tail' => 'Automation handles the agreed steps. Your team brings the judgment.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Make it work for the team',
      'title'   => 'A useful CRM makes the next action easier to see.',
      'paras' => [
        'The people using the system need to understand it and find it practical.',
        'We involve them in the design of the workflow: which information matters, where ownership changes, and what they need to see during a busy day. That helps us keep the process manageable.',
      ],
      'items' => [
        ['Clear stages',
         'Everyone understands what each stage means and what moves an opportunity forward.'],
        ['Useful information',
         'Fields capture what the team needs to qualify, respond and follow up.'],
        ['Visible responsibilities',
         'Each opportunity has an owner and a next action.'],
        ['Practical guidance',
         'Your team knows how to use the workflow and where to raise a problem.'],
      ],
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the handovers. Then connect them.',
  'moves' => [
    ['Trace the current journey.',
     'We review a sample of recent enquiries and speak with the people handling them. We look at how the information moves, where it becomes unclear and which actions depend on memory.'],
    ['Agree the workflow.',
     'Together, we define the stages, ownership, response expectations and follow-up rules. We identify what should happen automatically and where a person needs to decide.'],
    ['Configure and test.',
     'We set up the agreed CRM changes, integrations, messages and reminders. We test the key journeys, including replies, bookings, changes of status and stop rules, before enabling the workflow.'],
    ['Introduce and improve.',
     'We help your team adopt the process, review what happens in practice and refine the parts that need adjustment. Ongoing monitoring and improvements follow the scope of your plan.'],
  ],

  /* Real, our partner, disclosed, and stating their position rather than a
     result. Their published story documents the lead-flow situation and lists
     search and paid as the services, so nothing here claims CRM work
     delivered. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when the follow-up became more consistent?',
    'name'     => 'Studio Ubique',
    'meta'     => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    'text'     => 'Studio Ubique are a digital agency in Zwolle, and our founder is a partner there, so weigh this one differently from the others on this site. Their new business arrived by recommendation, which is the highest-quality channel there is and the one nobody can schedule. A referral still has to be answered, quoted and chased like any other enquiry. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; Studio Ubique, Zwolle',
    'photoSrc' => 'case-studio-ubique',
    'photoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'     => '/success-stories/studio-ubique/',
    'linkText' => 'Read the Studio Ubique story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Is it helping your team move opportunities forward?',
  'reportGrid'    => 'wcards--five',
  'report' => [
    ['Response time',
     'How long does an enquiry wait for a meaningful personal response?'],
    ['Ownership and follow-through',
     'Are enquiries assigned, next actions recorded and overdue tasks addressed?'],
    ['Movement through the pipeline',
     'Which opportunities progress, and where do they stall?'],
    ['Appointment attendance',
     'Are booked conversations taking place, and how are missed appointments handled?'],
    ['Work won',
     'Where the records support it, which opportunities become clients and what can be learned from the journey?'],
  ],
  'reportTail' => 'We establish the available baseline and agree which measures are useful for your business.',

  'qs' => [
    ['We already have a CRM. Can you work with it?', [
      'Yes. We review the platform, current configuration and available integrations.',
      'If it can support the process you need, we focus on improving it. Any recommendation to migrate includes the reason, scope and expected disruption.',
    ]],
    ['Which CRM should we use?', [
      'We recommend a platform after understanding your sales process, team, reporting needs and budget.',
      'The choice should fit the way you work and the systems it needs to connect with.',
    ]],
    ['Will automated follow-up sound impersonal?', [
      'The messages are written around specific situations and reviewed by your team.',
      'We agree the voice, timing and level of personalisation, along with the point at which someone should take over the conversation.',
    ]],
    ['What happens when someone replies or books a meeting?', [
      'The workflow should respond to that change.',
      'We define and test the rules for pausing messages, updating the opportunity and notifying the responsible person. The exact behaviour depends on the systems involved.',
    ]],
    ['Can you connect our forms, email and calendar?', [
      'We review the integrations supported by your current setup.',
      'Standard connections may be part of the agreed work. Custom integrations and additional software costs are identified before implementation.',
    ]],
    ['Does this include cold email campaigns?', [
      'This service focuses on managing enquiries, active opportunities and appropriate follow-up with existing contacts.',
      'A separate outbound prospecting programme would need its own strategy and scope.',
    ]],
    ['What if our team doesn&rsquo;t use the system?', [
      'We look at what is making adoption difficult: the steps involved, unclear ownership, missing training or a mismatch with the real process.',
      'The setup includes practical guidance, and we agree who on your side will help maintain the workflow.',
    ]],
    ['Who owns the account and data?', [
      'Your business retains control of its CRM account and contact data.',
      'We use the access needed to deliver the work. Documentation and handover responsibilities are established at the start.',
    ]],
    ['Are software and messaging charges included?', [
      'Third-party subscriptions and usage charges are separate where required.',
      'Your proposal identifies the expected costs alongside our setup and management fees.',
    ]],
  ],
];

require __DIR__ . '/includes/service-template.php';
