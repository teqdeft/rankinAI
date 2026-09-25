<?php
/**
 * Blog post — your website gets visitors. What stops them becoming clients?
 * -----------------------------------------------------------------------------
 * REAL ARTICLE, 25 Sep 2026. Kulwant's copy, used as written. The first piece
 * on the blog that is not a placeholder.
 *
 * THE ONE TABLE OF NUMBERS IS A WORKED EXAMPLE and the copy says so twice: in
 * the sentence introducing it and in the caption printed above it. The caption
 * is above rather than below on purpose, so a reader cannot reach the figures
 * without passing the line that says what they are. Nothing in the article is
 * presented as a client result or a forecast. See CLAIMS.md.
 *
 * TWO EXTERNAL REFERENCES, both real and both attributed in the text rather
 * than in a footnote: Nielsen Norman Group's form-design guidance, and the
 * recommended lead-generation events in Google Analytics. Neither is quoted.
 *
 * NO AUTHOR LINE. Kulwant's copy has "[Author name] · [Publication date]".
 * Bracketed placeholders do not go on a page, and the piece is not yet
 * attributed to a person. The template prints the date and the reading time,
 * and the byline says RankinAI.
 *
 * Title, topic, date and reading time come from includes/posts.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Your website gets visitors. What stops them becoming clients? | RankinAI';
$page_desc  = 'Before increasing your traffic budget, examine what happens after someone arrives. Understanding visitor intent, strengthening your offer and improving the path to an enquiry.';

$POST = [
  'slug'  => 'website-visitors-not-clients',
  'stand' => 'Before increasing your traffic budget, examine what happens after someone arrives. A practical guide to understanding visitor intent, strengthening your offer and improving the path to an enquiry.',
  'body' => [

    ['p', 'The marketing report looks encouraging.'],
    ['p', 'More people found the website. Your service pages attracted visitors. A few articles brought in traffic you were not getting before.'],
    ['p', 'Then someone asks the question that matters.'],
    ['quote', 'Did it bring us any worthwhile work?'],
    ['p', 'The answer takes longer.'],
    ['p', 'For a service business, the distance between a visit and a client can include several decisions. A visitor needs to recognise that you handle their situation, understand your offer, trust your experience and decide that contacting you is worth the effort. Your team then needs to develop that enquiry.'],
    ['p', 'More traffic can help when you need more relevant people to discover you. But before increasing the budget, find out what happens to the opportunities already arriving.'],
    ['p', 'You may need a larger audience. You may need a clearer offer. You may need both.'],

    ['h2', 'Start with your last ten enquiries'],
    ['p', 'Open your CRM, enquiry spreadsheet or inbox. Choose ten recent enquiries and follow each one as far as the records allow.'],
    ['p', 'For every enquiry, ask:'],
    ['list', [
      'Where did this person come from, if we know?',
      'What did they need?',
      'Did their requirements fit our services?',
      'How quickly did they receive a useful personal response?',
      'What happened next?',
      'If the conversation stopped, do we know why?',
    ]],
    ['p', 'Ten enquiries will not give you a statistically reliable diagnosis. They can give you concrete questions to investigate.'],
    ['p', 'Perhaps a recruitment agency received mostly candidate enquiries through a campaign intended to attract employers. Perhaps an architecture practice received suitable project requests but lacked a consistent handover to the right person. Perhaps a consultancy&rsquo;s prospects repeatedly asked what its service actually included.'],
    ['p', 'Those are different problems. Each calls for a different response.'],
    ['p', 'Pair what you find with website data and conversations with your sales team. Look for patterns worth examining across a larger sample.'],

    ['h2', 'First, decide what a useful enquiry looks like'],
    ['p', 'Conversion rate optimisation, or CRO, involves improving the proportion of visitors who complete a chosen action. For a service business, that action might be submitting a project enquiry or booking a consultation.'],
    ['p', 'However, the value of the action depends on what follows.'],
    ['p', 'An interior studio might need complete residential projects within its service area. An MSP might focus on organisations of a particular size. A recruitment firm might prioritise employer briefs in a defined sector.'],
    ['p', 'Write down those criteria before judging a campaign or website change.'],

    ['table', [
      'An illustrative example. Not a client result and not a forecast.',
      ['Measure', 'Starting scenario', 'Alternative scenario'],
      [
        ['Website sessions', '2,000', '2,000'],
        ['Enquiries', '40', '30'],
        ['Enquiries meeting the business&rsquo;s criteria', '8', '12'],
        ['Clients eventually won from those enquiries', '2', '3'],
        ['Session-to-enquiry rate', '2%', '1.5%'],
        ['Suitable enquiries as a share of sessions', '0.4%', '0.6%'],
      ],
    ]],

    ['p', 'The second scenario produces fewer enquiries and a lower initial conversion rate. It also produces more suitable opportunities and clients.'],
    ['p', 'That would deserve a closer commercial assessment: were the clients valuable, could the team serve them profitably, and what did acquisition cost?'],
    ['p', 'The example also assumes every enquiry has had enough time to reach an outcome. In your reporting, follow groups of enquiries over time. Contracts signed this month may have started as enquiries several months earlier.'],
    ['note', 'Define success far enough along the journey to recognise useful work.'],

    ['h2', 'One. Are the people arriving looking for what you sell?'],
    ['p', 'Start with the relationship between the visitor&rsquo;s intention and your service.'],
    ['p', 'Imagine a recruitment agency publishing interview advice. The content may attract candidates who find it genuinely useful. It does not follow that those visits represent employers looking to brief an agency.'],
    ['p', 'Similarly, an interior design article about choosing paint colours may attract readers who enjoy home improvement but have no intention of commissioning a full design service.'],
    ['p', 'That content may still serve a purpose. The mistake is expecting every audience to produce the same outcome.'],
    ['p', 'Review your main landing pages by traffic source. Where available, examine search queries, campaign targeting and the message that brought people to the page.'],
    ['note', 'What was this visitor probably trying to accomplish, and does this page help them do it?'],
    ['p', 'Where the audience is wrong for the commercial goal, investigate the targeting or content strategy. Where it is relevant, examine what the page does with the opportunity.'],

    ['h2', 'Two. Can a suitable visitor recognise themselves in the offer?'],
    ['p', 'A page can describe a business accurately while leaving a buyer unsure whether it is right for them.'],
    ['p', '&ldquo;Comprehensive HR solutions for modern businesses&rdquo; gives little help to an owner trying to decide whether to outsource payroll.'],
    ['p', 'A more specific description might be:'],
    ['quote', 'Payroll support for growing businesses, with a named contact and a clear monthly process.'],
    ['p', 'That sentence would need to reflect the provider&rsquo;s actual service. Its value is that it gives the reader something concrete to assess.'],
    ['p', 'Review your priority service pages. Can someone establish:'],
    ['list', [
      'What problem or requirement you handle?',
      'Who the service suits?',
      'Which locations or circumstances you cover?',
      'What the work includes?',
      'What they should do next?',
    ]],
    ['p', 'Also examine how you explain investment.'],
    ['p', 'You may not be able to publish a fixed price. You can often explain the scope, pricing model or factors that affect the fee. That helps prospects approach the conversation with more realistic expectations.'],
    ['p', 'Specificity may discourage some enquiries. Check whether it is helping suitable prospects move forward rather than simply trying to maximise submissions.'],

    ['h2', 'Three. Is the evidence relevant to the decision?'],
    ['p', 'Look at the proof beside each service.'],
    ['p', 'A general testimonial about friendly people may reassure a reader. A project story addressing a comparable requirement gives them something more specific to consider.'],

    ['table', [
      'Suggestions to investigate, not a universal formula.',
      ['Business', 'Evidence a prospective client could assess'],
      [
        ['Architecture practice', 'A comparable brief, site constraint and explanation of the architect&rsquo;s role'],
        ['IT consultancy', 'A project account showing the starting environment, responsibilities and outcome'],
        ['Recruitment agency', 'A placement story explaining the requirement, approach and timeframes'],
        ['Accounting practice', 'Approved client feedback about communication and support for a relevant business situation'],
      ],
    ]],

    ['p', 'Choose evidence that answers the question on the page. A buyer reading about a complex service should not have to search the entire website to discover whether you have relevant experience.'],
    ['p', 'Every claim should have a sound basis. Get permission for client material, retain the context behind numbers and explain what your team actually contributed.'],
    ['p', 'A small, specific example can make a better argument than an unsupported headline.'],

    ['img', ['photo-1711721954862-7009c23e90d6',
             'A doorway standing open onto a flight of stairs',
             'Peter Herrmann', 'tama66', 'a-doorway-leading-to-a-set-of-stairs-NqD-Jz6PUHg']],

    ['h2', 'Four. Does the next step match how ready the visitor is?'],
    ['p', '&ldquo;Contact us&rdquo; leaves room for uncertainty.'],
    ['p', 'Will the visitor receive an email? Are they requesting a quote? Will someone call unexpectedly? Do they need a complete brief?'],
    ['p', 'Explain what the action means.'],
    ['p', 'For an architecture practice, the invitation might be to discuss the project and establish whether a feasibility stage is appropriate. For a consultancy, it could be an introductory conversation about the situation and potential scope.'],
    ['p', 'Where there are two useful routes, make their purposes distinct. RankinAI, for example, offers a written growth audit and a 20-minute conversation. Someone can choose the starting point that suits them.'],
    ['p', 'Keep the choice manageable. The page should make the preferred next step easy to identify.'],
    ['p', 'Then check that the confirmation delivers on the expectation: acknowledge the request, explain what follows and provide a response timeframe your team can realistically meet.'],

    ['h2', 'Five. Can they complete the action comfortably?'],
    ['p', 'Use your own enquiry journey on a phone. Submit a test enquiry. Try correcting an error. Check that the information reaches the intended person.'],
    ['p', 'Watch for practical failures:'],
    ['list', [
      'A required field the visitor cannot reasonably answer yet.',
      'Instructions that disappear while typing.',
      'An error message that does not explain the problem.',
      'A booking link that opens the wrong calendar.',
      'A form that appears successful but fails to deliver the enquiry.',
    ]],
    ['p', 'Nielsen Norman Group&rsquo;s form-design guidance recommends clear labels, visible required and optional fields, useful instructions and specific error messages. These are sensible starting points for reviewing the interaction.'],
    ['p', 'Be thoughtful about qualification questions. An agency offering projects above a certain scope may need budget or requirement information to respond usefully.'],
    ['p', 'For every question, ask:'],
    ['note', 'Will this answer change what we do next?'],
    ['p', 'If it will, make the question understandable. If it will not, consider collecting it later or removing it.'],
    ['p', 'Evaluate the effect on both completion and suitability. A shorter form is not automatically a better commercial outcome.'],

    ['img', ['photo-1643865420909-2462d84339af',
             'Daylight coming through the windows of a quiet building',
             'Jay Lo', 'jaylotw', 'the-sun-is-shining-through-the-windows-of-a-house-uMNO8s_bDVs']],

    ['h2', 'Six. What happens after the website succeeds?'],
    ['p', 'A submitted enquiry is a handover.'],
    ['p', 'The visitor has expressed interest. Someone now needs to understand the requirement and take responsibility for the next step.'],
    ['p', 'Review a few suitable enquiries with the people who handled them. Who received the notification? Was ownership clear? Did the reply address the actual request? Was a next action agreed? If the prospect paused, was there useful context for reconnecting?'],
    ['p', 'An automatic acknowledgement can confirm receipt. Keep it distinct from a meaningful personal response when measuring response times.'],
    ['p', 'A basic record is often enough to begin improving the process.'],

    ['table', [
      '',
      ['Field', 'Why it is useful'],
      [
        ['Received date and source', 'Establishes when and how the opportunity arrived'],
        ['Requirement and fit', 'Helps assess relevance'],
        ['Owner', 'Makes responsibility clear'],
        ['First personal response', 'Shows how long the prospect waited'],
        ['Next action and date', 'Supports follow-through'],
        ['Outcome and reason', 'Helps marketing and sales learn'],
      ],
    ]],

    ['p', 'Google Analytics also supports separate recommended events for lead generation, qualification, active follow-up and conversion into a customer. These require implementation. They do not automatically appear just because a website has analytics installed.'],
    ['p', 'Whether you use those events, a CRM or a simple spreadsheet, make the stages visible. Keep personal and sensitive enquiry details out of general analytics reporting.'],

    ['h2', 'How to improve a website without a large testing budget'],
    ['p', 'Begin with one commercially important journey: a service page, the next action and the handover.'],
    ['p', 'Ask a few people who resemble your intended buyers to use it. Give them a realistic task, such as deciding whether the service suits their situation and finding out how to enquire.'],
    ['p', 'Observe where they hesitate. Ask what they understood and what information they still need.'],
    ['p', 'Combine those observations with enquiry records and analytics. Then write a specific explanation for the change you want to make:'],
    ['quote', 'Prospects repeatedly ask whether implementation is included. We will explain the service boundaries before the enquiry invitation and review whether suitable prospects arrive with a clearer understanding.'],
    ['p', 'Keep a record of the change, date and expected effect.'],
    ['p', 'An A/B test can help compare alternatives when you have enough relevant traffic and outcomes. Test duration and sample requirements depend on factors including visitor volume and the size of the effect you want to detect. There is no useful universal rule to test for a fixed number of days.'],
    ['p', 'On a low-volume site, a handful of submissions cannot establish a reliable winner. You can still repair broken interactions, address observed misunderstandings and follow the results carefully.'],
    ['p', 'If you compare periods before and after a change, account for other influences such as campaigns, seasonality and shifts in the audience. Treat the comparison as evidence to interpret, rather than proof that the page change caused everything.'],

    ['h2', 'When more traffic is the right investment'],
    ['p', 'Conversion work has limits. A website cannot generate a large pipeline from an audience that is too small, and no page improvement creates unlimited demand.'],
    ['p', 'Increasing relevant traffic makes sense when you have evidence that suitable visitors understand the offer, can enquire successfully and receive effective follow-up.'],
    ['p', 'Start with the services and channels where that evidence is strongest. Increase activity in a controlled way, then watch whether enquiry quality and acquisition costs remain acceptable.'],
    ['p', 'For some businesses, the most useful plan will develop visibility and improve conversion at the same time.'],
    ['p', 'The decision should follow the evidence from your own journey.'],

    ['h2', 'What to examine in your next marketing meeting'],
    ['p', 'Bring three things: a priority service page, a sample of recent enquiries and the outcomes your team has recorded.'],
    ['p', 'Work through these questions together.'],
    ['olist', [
      'Are we reaching people who need this service?',
      'Can a suitable buyer recognise the fit?',
      'Is there relevant evidence to support the decision?',
      'Does the next step feel clear and manageable?',
      'Does the handover give the opportunity a fair chance?',
    ]],
    ['p', 'Choose the most consequential issue you can substantiate. Assign an owner, define the change and agree how you will review it.'],
    ['p', 'That gives the next conversation about marketing budget a more useful starting point.'],

    ['h2', 'Frequently asked questions'],

    ['h3', 'What is a good conversion rate for a service-business website?'],
    ['p', 'There is no single figure that fits every service, traffic source and type of action. Compare relevant pages and channels using consistent definitions, then examine enquiry quality and eventual sales outcomes.'],

    ['h3', 'Should we redesign the website to improve conversion?'],
    ['p', 'First identify the problem. A focused change may address it. A rebuild becomes more relevant when the current structure, technology or editing limitations prevent the improvements you need.'],

    ['h3', 'Can conversion optimisation guarantee more clients?'],
    ['p', 'No. Website performance is one part of the result. Demand, competition, pricing, sales execution and capacity also matter. Measure the work against defined objectives and review the assumptions as evidence develops.'],

    ['h3', 'Should we pause SEO or advertising while improving the website?'],
    ['p', 'It depends on the problem. A broken enquiry route deserves immediate attention. Other improvements can happen alongside ongoing acquisition, with decisions informed by cost, quality and capacity.'],

  ],
];

require __DIR__ . '/includes/blog-template.php';
