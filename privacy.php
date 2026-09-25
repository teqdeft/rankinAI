<?php
/**
 * Privacy policy
 * -----------------------------------------------------------------------------
 * WHAT THIS DOCUMENT DESCRIBES, AND WHAT IT DOES NOT
 *
 * The design canvas contained a complete-looking policy naming Google
 * Analytics 4, Google Workspace, HubSpot, Cloudflare and Xero as processors,
 * and listing four cookies — rai_session, rai_consent, _ga and _ga_*.
 *
 * The site as built uses none of them. It sets no cookies at all, loads no
 * analytics, and stores nothing in the browser. I checked.
 *
 * A privacy policy is a statement to a regulator, not marketing copy. One
 * that describes cookies you do not set and processors you do not use is
 * inaccurate under GDPR Article 13 in exactly the same way as one that omits
 * processors you do use. So this document describes what the site actually
 * does today, and marks every operational fact that only Kulwant can confirm.
 *
 * WHAT IT AUDITED (accurate as of this build):
 *   Collected  name, company, work email, phone, website, optional message
 *   Cookies    none
 *   Storage    none — no localStorage, sessionStorage or IndexedDB
 *   Analytics  none installed
 *   Third-party requests, on every page load:
 *              fonts.googleapis.com + fonts.gstatic.com   (Google Fonts)
 *              cdnjs.cloudflare.com                       (GSAP)
 *              cdn.jsdelivr.net                           (Lenis)
 *
 * THE ONE THING WORTH ACTING ON BEFORE LAUNCH
 * Those four origins receive every visitor's IP address before any consent is
 * given. A Munich court held in 2022 that embedding Google Fonts this way
 * breached GDPR. With an office in Zwolle and EU clients, self-hosting the
 * fonts and the two scripts removes the issue entirely and costs an hour.
 *
 * DO NOT REMOVE THE DRAFT BANNER until a qualified adviser has reviewed this.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Privacy policy | RankinAI';
$page_desc  = 'What we collect, why, who we share it with, and how to get it back. Written to describe what this site actually does.';

$LEGAL = [
  'label'   => 'Legal',
  'title'   => 'Privacy policy',
  'updated' => 'Draft &mdash; not yet issued',
  'reading' => 'About five minutes',
  'other'   => ['Read the terms', '/terms/'],

  /* NOT LEGAL ADVICE, and not shown on the page. Kept here because it is
     true and must be resolved before this document is relied on:
     This document has not been reviewed by a qualified adviser. It describes 
     what the website does today, accurately, but the operational facts 
     marked in the text still need confirming &mdash; and RankinAI operating 
     between the UAE and the EU means both regimes apply. It should not be 
     published in this state.
  */

  'summary' => [
    'We collect what we need to reply to you and do the work. Nothing else.',
    'We don&rsquo;t sell your details, and requesting an audit doesn&rsquo;t put you on a list.',
    'You own your accounts and your data, and can have it all back on the day you ask.',
    'This website currently sets no cookies and runs no analytics.',
    'Any question about your data reaches a person, not a template.',
  ],

  'toc' => [
    ['who', 'Who we are'],
    ['collect', 'What we collect'],
    ['why', 'Why we use it'],
    ['share', 'Who we share it with'],
    ['keep', 'How long we keep it'],
    ['rights', 'Your rights'],
    ['cookies', 'Cookies and tracking'],
    ['clients', 'If you are a client'],
    ['protect', 'How we protect it'],
    ['changes', 'Changes to this policy'],
  ],

  'sections' => [

    ['who', '01', 'Who we are', [
      ['p', 'This policy explains how RankinAI collects, uses and protects personal information when you visit this website, request an audit, or work with us as a client.'],
      ['p', 'RankinAI FZ-LLC, licence number 2109-DMCC-4471.'],
      /* TO RESOLVE BEFORE LAUNCH:
         The entity on the line above, and its registered address. The Dubai
         and Zwolle office addresses came off the site on 25 Sep 2026: the
         office is in Chandigarh, India. That leaves an open question here,
         because a privacy policy has to name the real controller and its
         real registered address, and a free-zone company registered in the
         UAE with an office in India is a perfectly ordinary arrangement.
         Confirm which entity is the controller before this goes live. */
      /* TO RESOLVE BEFORE LAUNCH:
         Data controller and representative to confirm &mdash; if you have EU
         clients or visitors, you may need an Article 27 representative in
         the EU. That is a question for an adviser, not for a website. */
      ['p', 'For anything in this policy you can reach a person at <a href="mailto:' . e($SITE['email']) . '">' . e($SITE['email']) . '</a>. We answer these ourselves rather than routing them to a template.'],
    ]],

    ['collect', '02', 'What we collect', [
      ['p', 'Only what we need to reply to you and to do the work. On this website, that is the six fields on the audit form and nothing else &mdash; there is no analytics, no tracking pixel and no profiling.'],
      ['table', [
        ['When', 'What'],
        ['You request an audit or contact us', 'Your name, the company you work for, your work email address, your phone number, your website address, and anything you choose to write in the optional message field.'],
        ['You visit this website', 'Nothing is collected by us. Your browser makes requests to four third parties for fonts and scripts &mdash; see section 07.'],
        ['You become a client', 'Business and billing details needed to invoice you; access to your own marketing accounts, which remain yours throughout; and performance data from those accounts, which we report back to you.'],
      ]],
      /* TO RESOLVE BEFORE LAUNCH:
         Server logs to confirm &mdash; your host almost certainly records IP
         addresses and requested URLs. That is personal data and it belongs
         in this section once you know what the host keeps and for how long. */
    ]],

    ['why', '03', 'Why we use it', [
      ['p', 'For four purposes, and no others.'],
      ['table', [
        ['Purpose', 'Lawful basis'],
        ['Replying to an enquiry or audit request', 'Legitimate interests &mdash; you asked us to'],
        ['Delivering the services you bought', 'Performance of a contract'],
        ['Invoicing and financial records', 'Legal obligation'],
        ['Any future website analytics', 'Consent, withdrawable at any time. None is installed today'],
      ]],
      ['p', 'We don&rsquo;t sell your details to anyone. We don&rsquo;t add you to a marketing list because you requested an audit, and we don&rsquo;t run a nurture sequence against you.'],
    ]],

    ['share', '04', 'Who we share it with', [
      ['p', 'Only with the suppliers that make the service work, and only as much as each of them needs.'],
      /* TO RESOLVE BEFORE LAUNCH:
         The processor list is deliberately empty. The canvas listed Google
         Analytics 4, Google Workspace, HubSpot, Cloudflare, Xero, Google
         Ads, Meta and LinkedIn. None of those is used by this website. Some
         may well be used by the business &mdash; email, invoicing and CRM
         all run on something. List the ones you actually use, and only
         those: naming a processor you do not use is as inaccurate as
         omitting one you do. */
      ['p', 'We don&rsquo;t pass your details to other clients, and we never share them with a competitor of yours.'],
      /* TO RESOLVE BEFORE LAUNCH:
         International transfers to confirm &mdash; if any supplier processes
         data outside the UAE, the transfer needs a lawful basis (standard
         contractual clauses or an equivalent). That paragraph can only be
         written once the supplier list above is real. */
    ]],

    ['keep', '05', 'How long we keep it', [
      ['p', 'For as long as it is useful to you, or as long as the law requires, and then we delete it.'],
      /* TO RESOLVE BEFORE LAUNCH:
         Retention periods to set. The canvas proposed 12 months for
         enquiries that did not proceed, 24 months for client records, 7
         years for invoices and 14 months for analytics. Those are reasonable
         shapes but they are your decisions, and the seven-year figure
         depends on which jurisdiction&rsquo;s tax rules bind you. Set them,
         then state them here &mdash; a retention period you do not actually
         keep to is worse than none. */
      ['p', 'When an engagement ends, you can ask us to return and delete everything we hold about your business. We do that on request, and confirm in writing when it is done.'],
    ]],

    ['rights', '06', 'Your rights', [
      ['p', 'You can ask us to do any of the following, at any time, and we will act on it rather than ask you why.'],
      ['ul', [
        'Tell you what we hold about you',
        'Correct anything that is wrong',
        'Delete it, where we are not legally required to keep it',
        'Send you a copy in a portable format',
        'Stop using it for a particular purpose',
        'Withdraw consent you previously gave',
      ]],
      ['p', 'Requests go to <a href="mailto:' . e($SITE['email']) . '">' . e($SITE['email']) . '</a>. We respond within 30 days, and usually within one working day.'],
      ['p', 'If you are not satisfied with how we handled a request, you can complain to the relevant data protection authority &mdash; in the UAE, the UAE Data Office; in the European Union, the supervisory authority for your country.'],
    ]],

    ['cookies', '07', 'Cookies and tracking', [
      ['p', '<b>This website sets no cookies.</b> It stores nothing in your browser &mdash; no cookies, no local storage, no session storage. There is no analytics, no advertising pixel and no profiling of any kind. That is unusual enough to be worth stating plainly.'],
      ['p', 'Your browser does make requests to four third parties on every page, for typefaces and two animation libraries. Those requests carry your IP address:'],
      ['table', [
        ['Origin', 'What it is for'],
        ['fonts.googleapis.com and fonts.gstatic.com', 'The typefaces this site is set in'],
        ['cdnjs.cloudflare.com', 'GSAP, which drives the page animation'],
        ['cdn.jsdelivr.net', 'Lenis, which drives the smooth scrolling'],
      ]],
      /* TO RESOLVE BEFORE LAUNCH:
         Recommended fix before launch &mdash; self-host the fonts and both
         scripts. A Munich court held in 2022 that embedding Google Fonts
         transmitted the visitor&rsquo;s IP address to Google without a
         lawful basis. Self-hosting removes all four origins, removes this
         section&rsquo;s only complication, and makes the site faster. It is
         about an hour of work. */
      /* TO RESOLVE BEFORE LAUNCH:
         If analytics is added later, this section and the table in section
         03 must be updated the same day, and a consent banner becomes
         necessary. Analytics without consent is the single most common
         privacy failure on agency websites &mdash; which is an awkward one
         to be caught by. */
    ]],

    ['clients', '08', 'If you are a client', [
      ['p', 'When we work on your marketing we are usually handling data on your behalf rather than for ourselves, which makes you the controller and us the processor.'],
      ['p', 'In practice that means three things. You keep every login. Nothing is created in a RankinAI account that should live in yours. And on the day you ask, everything comes back to you &mdash; whether you are still a client or not.'],
      /* TO RESOLVE BEFORE LAUNCH:
         Processor agreement to be drafted. GDPR Article 28 requires a
         written processor agreement with defined content, and it has to be a
         real document. The canvas referred to one as though it existed. */
    ]],

    ['protect', '09', 'How we protect it', [
      ['p', 'Access to client accounts and personal data is limited to the people working on that account, and removed when someone leaves or an engagement ends.'],
      /* TO RESOLVE BEFORE LAUNCH:
         Security claims to confirm &mdash; the canvas stated multi-factor
         authentication and a password manager as facts. Only publish a
         control you actually operate. A stated control you do not have is a
         misrepresentation, and it is the first thing examined after an
         incident. */
    ]],

    ['changes', '10', 'Changes to this policy', [
      ['p', 'When this policy changes materially we date the new version and, if you are a client, tell you directly rather than relying on you to notice.'],
      ['p', 'This document has no issue date because it has not been issued. See the notice at the top of the page.'],
    ]],
  ],
];

require __DIR__ . '/includes/legal-template.php';
