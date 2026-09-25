<?php
/**
 * Law firms
 * -----------------------------------------------------------------------------
 * REWRITTEN 25 Sep 2026 to Kulwant's copy. Eighth industry page on the new
 * shape. Only /consulting/ is still on the old one.
 *
 * No new template keys.
 *
 * WHAT CAME OFF WITH THE REWRITE: the hero stat pair, the channel audit, the
 * market data section and its calculation, the mid-page CTA, the shelved levers
 * block, closeText, and the team section.
 *
 * THE STORY. Kulwant's copy brackets the whole block. Studio Ubique stays,
 * disclosed as our partner, openly not a law firm, with the metric pending
 * after the +58% sweep. See CLAIMS.md.
 *
 * THREE COLONS BECAME SENTENCES. The draft leads three card sets with "we help
 * develop profiles around:", "we help explain:" and similar. A colon hanging
 * above a card grid reads as a missing list, so each one now names what
 * follows. No wording was added beyond the item titles themselves.
 *
 * WordPress: an `industry` post with ACF fields in this shape.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Digital marketing for law firms | RankinAI';
$page_desc  = 'Get found for the matters you want to handle. Search visibility, practice-area content, lawyer profiles, websites and enquiry follow-up for law firms.';

$INDUSTRY = [

  'label' => 'Digital marketing for law firms',
  'h1'    => 'Get found for the matters you want to handle.',
  'sub'   => 'Prospective clients need to understand whether your firm has the experience their situation requires, and who they would be trusting with it.',
  'sub2'  => 'We help make your practice areas, people and relevant expertise easier to discover, understand and choose.',

  'opportunity' => [
    'eyebrow' => 'The opportunity',
    'title'   => 'The question is bigger than &ldquo;do they offer this service?&rdquo;',
    'quotes' => [
      'Have you handled comparable work?',
      'Who would lead the matter?',
      'How would the relationship begin?',
      'What should they expect from the process and fees?',
    ],
    'paras' => [
      'A prospective client wants to know whether you understand their situation.',
      'Your website can help them answer those questions before making contact.',
      'We turn your firm&rsquo;s expertise into clear, relevant information that supports a considered decision.',
    ],
  ],

  'approach' => [
    'eyebrow' => 'Start with the right matters',
    'title'   => 'Where does your firm want to grow?',
    'paras' => [
      'You may want to develop a practice area, strengthen a sector position or attract work at a different level of complexity.',
    ],
    'listLead' => 'We start by understanding',
    'list' => [
      'The practice areas you want to prioritise.',
      'Your ideal client profiles and sectors.',
      'The jurisdictions and locations you serve.',
      'The nature and scale of matters you undertake.',
      'The lawyers and experience supporting that work.',
      'Your capacity to respond to and accept suitable enquiries.',
    ],
    'tail' => 'That direction shapes the audience, content and enquiry journey.',
  ],

  'journey' => [
    'eyebrow' => 'Understanding the client',
    'title'   => 'Different buyers need different evidence.',
    'items' => [
      ['Business owners and leadership teams',
       'They may recognise the commercial problem before they know which legal service they need. Clear explanations help them understand where your firm can assist and how to begin.'],
      ['In-house legal teams',
       'They may be looking for specific expertise, sector knowledge or additional capacity. Your lawyer profiles and approved experience should make the relevant capabilities easy to assess.'],
      ['Individuals seeking specialist advice',
       'They may be unfamiliar with the process and uncertain about what information to provide. An understandable service page and clear first step can make approaching the firm feel more manageable.'],
    ],
    'tail' => 'We focus the page structure and language on the clients your practice wants to serve.',
  ],

  'services' => [
    'eyebrow' => 'What we do',
    'title'   => 'Make your expertise visible before the first conversation.',
    'items' => [
      ['pencil', 'Content', '/content/',
       'Explain the work through the client&rsquo;s situation.',
       'We create practice-area pages, sector content and useful explanations based on your lawyers&rsquo; expertise. Your designated reviewers approve the legal substance and publication suitability. We take responsibility for clarity, structure and the reader&rsquo;s journey.'],
      ['search', 'AI and search visibility', '/ai-visibility/',
       'Be discoverable for relevant requirements.',
       'We research searches connected to your practice areas, sectors and appropriate locations. We improve priority pages and monitor selected AI questions, focusing on discoverability for the work your firm is equipped to handle.'],
      ['code', 'Website and conversion', '/website-conversion/',
       'Help prospective clients find the right route.',
       'We connect practice areas, lawyer profiles and relevant experience so visitors can assess the fit. The enquiry process collects useful initial context and directs it to the appropriate person without inviting unnecessary sensitive detail.'],
      ['star', 'Reviews and reputation', '/reputation/',
       'Present approved evidence of the working relationship.',
       'Where appropriate for your firm, we help organise genuine client feedback and maintain accurate professional profiles. Any review or testimonial activity follows the publication boundaries and approval process your firm establishes.'],
      ['refresh', 'CRM and automation', '/crm/',
       'Keep administrative follow-up organised.',
       'We help route enquiries, assign responsibility and make outstanding actions visible. Acknowledgements and reminders support your team&rsquo;s process. Decisions about conflicts, suitability and accepting a client remain with the firm.'],
      ['target', 'Paid advertising', '/paid-advertising/',
       'Support a defined practice-area opportunity.',
       'We develop campaigns around a clear service, audience and geographic scope. The message and destination page help prospective clients understand the offer, with wording reviewed through your firm&rsquo;s approval process.'],
    ],
  ],

  'blocks' => [

    [
      'band'    => 'forest',
      'eyebrow' => 'Your people',
      'title'   => 'Help clients understand who they would be working with.',
      'paras' => [
        'A lawyer profile can do more than list qualifications and admission dates. It can explain the matters that person handles, the clients they support and the experience relevant to the reader&rsquo;s situation.',
        'We help develop profiles around the areas of focus, the relevant experience, the sector understanding and the role in the engagement.',
      ],
      'items' => [
        ['Areas of focus',
         'The work the lawyer regularly undertakes.'],
        ['Relevant experience',
         'Approved examples that demonstrate capability.'],
        ['Sector understanding',
         'The industries and commercial contexts they know.'],
        ['Role in the engagement',
         'How they contribute and work with the wider team.'],
      ],
      'tail' => 'The aim is to give prospective clients useful reasons to start a conversation with the right person.',
    ],

    [
      'eyebrow' => 'Demonstrating experience',
      'title'   => 'Show the substance of the work you can discuss.',
      'paras' => [
        'Where publication is appropriate, experience summaries can help a buyer assess whether your firm has handled comparable matters.',
      ],
      'listLead' => 'We work with approved information about',
      'list' => [
        'The type of matter and relevant sector.',
        'The challenge or requirement.',
        'Your firm&rsquo;s role and contribution.',
        'The approach taken.',
        'The outcome or stage reached, where publishable.',
      ],
      'tail' => 'Client confidentiality, permissions and the firm&rsquo;s review requirements shape what appears. When a matter cannot be discussed, other content can demonstrate expertise: a clear explanation of an issue, a practical guide or a lawyer&rsquo;s considered perspective.',
    ],

    [
      'band'    => 'forest',
      'eyebrow' => 'Helping clients begin',
      'title'   => 'Make the first step clear enough to take.',
      'paras' => [
        'A prospective client should understand what happens when they contact the firm.',
        'We help explain who the service is for, what the initial enquiry involves, what happens next, how fees are approached and who they may work with.',
      ],
      'items' => [
        ['Who the service is for',
         'The situations and client types your practice supports.'],
        ['What the initial enquiry involves',
         'The basic information needed to direct it appropriately.'],
        ['What happens next',
         'How the firm reviews and responds to the request.'],
        ['How fees are approached',
         'The relevant pricing model and what is needed to define the scope.'],
        ['Who they may work with',
         'The lawyers or team responsible for that area.'],
      ],
      'tail' => 'The content reflects your firm&rsquo;s actual process and engagement requirements.',
    ],

  ],

  'movesEyebrow' => 'How we start',
  'movesTitle'   => 'Understand the practice. Present the expertise. Reach suitable clients.',
  'moves' => [
    ['Define the growth priorities.',
     'We agree the practice areas, client profiles and markets you want to develop.'],
    ['Review the current journey.',
     'We examine your visibility, service content, lawyer profiles and enquiry routes.'],
    ['Agree the work and review process.',
     'We prioritise the pages, experience summaries and search opportunities, with clear responsibilities for legal and editorial approval.'],
    ['Deliver and refine.',
     'We put the plan into action and review enquiry suitability with your team. That feedback helps improve the audience, message and priorities.'],
  ],

  /* Real, our partner, disclosed, openly not a law firm, and running without a
     figure. The +58% came off 25 Sep 2026: invented during copywriting and
     never published. See CLAIMS.md. */
  'story' => [
    'title'    => 'What changed when the expertise became clearer?',
    'name'     => 'Studio Ubique',
    'meta'     => ['Zwolle, Netherlands', 'Digital agency, our partner'],
    'text'     => 'Not a law firm. Studio Ubique are a digital agency in Zwolle, and our founder is a partner there, so weigh this one differently from the others on this site. Their clients rated them and said so privately, and anyone checking from outside found nothing, because nobody had ever been asked to say it in public. That is the position most firms are in, and it is the cheapest thing on this page to fix. The figures are the client&rsquo;s to release, and they are not on this page until they do.',
    'photo'    => 'Photo &mdash; Studio Ubique, Zwolle',
    'photoSrc' => 'case-studio-ubique',
    'photoAlt' => 'Three Studio Ubique team members with coffee in the Zwolle office',
    'href'     => '/success-stories/studio-ubique/',
    'linkText' => 'Read the Studio Ubique story',
  ],

  'reportEyebrow' => 'Measuring progress',
  'reportTitle'   => 'Are the enquiries relevant to the firm you want to build?',
  'report' => [
    ['Practice-area fit',
     'Do enquiries relate to work your firm undertakes?'],
    ['Client and jurisdiction fit',
     'Are the prospective clients and requirements within your intended scope?'],
    ['Progress through review',
     'Which enquiries move into an appropriate consultation or scoping discussion?'],
    ['Engagements accepted',
     'Where your records allow, which opportunities become new matters?'],
  ],
  'reportTail' => 'Reporting uses the business information needed to assess marketing performance. The firm determines which information can be shared.',

  'qs' => [
    ['Can you work within our firm&rsquo;s marketing and professional requirements?', [
      'We agree the publication boundaries and approval process before starting.',
      'Your designated reviewer signs off claims, technical content and any client references. Those requirements shape the delivery schedule.',
    ]],
    ['Who writes and checks the legal content?', [
      'We interview your lawyers and work from approved source material.',
      'We prepare the draft for clarity and usefulness. Your legal reviewer checks the substance, context and suitability before publication.',
    ]],
    ['Most of our work comes through referrals. How does this help?', [
      'The marketing supports those introductions and helps people outside your network discover the firm.',
      'Clear lawyer profiles, practice-area pages and approved experience also give referrers useful information to share.',
    ]],
    ['Can you focus on a specific practice area?', [
      'Yes. We can build the plan around a defined practice area, sector or client profile.',
      'We first review the expertise you can demonstrate, the opportunity and the firm&rsquo;s capacity to handle additional work.',
    ]],
    ['Will we have to publish client names?', [
      'No. Publication depends on the permissions and requirements relevant to the matter.',
      'We can work with approved anonymised experience or use other formats to explain your expertise.',
    ]],
    ['Can we explain fees without publishing fixed prices?', [
      'Yes. We can clarify how fees are structured, what affects the scope and what information is needed to prepare an estimate.',
      'The wording should accurately reflect your firm&rsquo;s approach.',
    ]],
    ['How do you help reduce unsuitable enquiries?', [
      'We make the service scope, intended clients and relevant jurisdictions clear.',
      'Enquiry questions can support initial routing, while feedback from your team helps us refine the content and targeting.',
    ]],
    ['Can you work with our internal marketing team?', [
      'Yes. We agree priorities and responsibilities with your marketing lead.',
      'Our team provides the specialist delivery required, while your firm retains control of legal review and publication approval.',
    ]],
  ],
];

require __DIR__ . '/includes/industry-template.php';
