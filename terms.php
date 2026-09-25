<?php
/**
 * Terms
 * -----------------------------------------------------------------------------
 * NO DESIGN CANVAS EXISTS FOR THIS PAGE, and terms of service are a contract.
 *
 * I have not drafted contract terms. What this page does instead is collect,
 * in one place, the commercial commitments the site already makes on other
 * pages — notice period, ownership, exclusivity, what happens when a service
 * fails — because those are stated repeatedly across pricing, questions, how
 * we work and every service page, and a buyer deserves to find them together.
 *
 * Every one of them is traceable to a page already built. Nothing here is new.
 *
 * What is deliberately absent: liability, indemnity, warranties, governing
 * law, jurisdiction, payment terms, IP assignment and termination mechanics.
 * Those are the clauses that decide what happens when something goes wrong,
 * they are the reason terms exist, and guessing at them would be worse than
 * having no page. They need a lawyer — and one who can handle a UAE-licensed
 * company contracting with EU and US clients.
 *
 * DO NOT REMOVE THE DRAFT BANNER until that has happened.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Terms | RankinAI';
$page_desc  = 'The commercial terms published across this site, collected in one place: notice, ownership, exclusivity, and what happens when something does not work.';

$LEGAL = [
  'label'   => 'Legal',
  'title'   => 'Terms',
  'updated' => 'Draft &mdash; not yet issued',
  'reading' => 'About three minutes',
  'other'   => ['Read the privacy policy', '/privacy/'],

  /* NOT LEGAL ADVICE, and not shown on the page. Kept here because it is
     true and must be resolved before this document is relied on:
     This is not a contract and has not been drafted by a lawyer. It gathers 
     the commercial terms already published elsewhere on this site so they 
     can be read in one place. The clauses that decide what happens when 
     something goes wrong &mdash; liability, warranties, governing law, 
     payment, termination &mdash; are deliberately absent, because guessing 
     at them would be worse than leaving them out. The binding agreement is 
     the one you sign.
  */

  'summary' => [
    'Thirty days notice, either side. No minimum term after the first month.',
    'You own the site, the ad accounts, the analytics and the content &mdash; on the day you ask.',
    'One firm per city, per industry. We say so on the first call if the slot has gone.',
    'If a service stops working we remove it, and you stop paying for that part.',
    'Prices are published. You don&rsquo;t have to sit through a call to find them.',
  ],

  'toc' => [
    ['what', 'What this page is'],
    ['engagement', 'How an engagement works'],
    ['notice', 'Notice and commitment'],
    ['ownership', 'What you own'],
    ['exclusivity', 'Exclusivity'],
    ['failure', 'When something does not work'],
    ['money', 'Fees and spend'],
    ['limits', 'What we do not promise'],
    ['missing', 'What this document is missing'],
  ],

  'sections' => [

    ['what', '01', 'What this page is', [
      ['p', 'A plain-language summary of the commercial terms we publish elsewhere on this site, gathered here so you can read them together instead of assembling them from six pages.'],
      ['p', 'It is not the contract. The binding agreement is the one you sign, and where the two differ, that one applies.'],
    ]],

    ['engagement', '02', 'How an engagement works', [
      ['p', 'Two parts. A one-off Foundation Fix &mdash; learn, audit, strategy &mdash; and then a monthly engagement that runs the plan and reports against it. The full process is on the <a href="' . url('/how-we-work/') . '">how we work</a> page.'],
      ['p', 'Every package contains all six services. What changes between packages is how much of each, how often, and how senior the team is.'],
      /* TO RESOLVE BEFORE LAUNCH:
         The one-off price is unresolved. The pricing and questions pages
         state a $500 setup, waived on a six-month commitment. The
         how-we-work design canvas stated $2,400 for the Foundation Fix. Two
         prices for the same thing cannot both be published. See CLAIMS.md. */
    ]],

    ['notice', '03', 'Notice and commitment', [
      ['table', [
        ['Term', 'What we publish'],
        ['Notice period', '30 days, either side'],
        ['Minimum term', 'None after the first month'],
        ['Six-month commitment', 'Optional. It exists only because it waives the setup fee'],
      ]],
      ['p', 'Stated identically on the <a href="' . url('/pricing/') . '">pricing</a>, <a href="' . url('/questions/') . '">questions</a> and <a href="' . url('/how-we-work/') . '">how we work</a> pages.'],
    ]],

    ['ownership', '04', 'What you own', [
      ['p', 'All of it, on the day you ask, whether you are still a client or not.'],
      ['ul', [
        'Your website, hosting and domain',
        'Your ad accounts and the spend inside them',
        'Your analytics and the historical data in it',
        'The copy and the pages we produce for you, outright',
        'Every login. Nothing is created in a RankinAI account that should live in yours',
      ]],
      ['p', 'When an engagement ends we hand over accounts, files and documentation, and we don&rsquo;t remove or disable anything we built.'],
    ]],

    ['exclusivity', '05', 'Exclusivity', [
      ['p', 'One firm per city, per industry. Once we take on a joinery studio in Dubai we won&rsquo;t take a second &mdash; and if the slot for your market has already gone, we say so on the first call rather than after you have shared your numbers.'],
      /* TO RESOLVE BEFORE LAUNCH:
         Scope to define. "One firm per city, per industry" is a real
         commitment that a client may later want to enforce. What counts as a
         city, what counts as an industry, and how long the exclusivity
         survives the end of an engagement all need defining in the contract. */
    ]],

    ['failure', '06', 'When something does not work', [
      ['p', 'We change the mix inside the package, or we remove that part and reduce the fee. We would rather lose a line item than spend a call defending one.'],
      ['p', 'A month where nothing moved appears in the report with the reason and what we are changing. The report is sent before the monthly call, not read out on it.'],
    ]],

    ['money', '07', 'Fees and spend', [
      ['p', 'Advertising spend is separate from our fee, is paid by you, and sits in your own account. We manage it; you fund it and own it.'],
      ['p', 'We don&rsquo;t take a percentage of spend. A percentage pays an agency more for spending more, which is the wrong incentive to hand someone managing your budget.'],
      ['p', 'Package prices are published on the <a href="' . url('/pricing/') . '">pricing page</a>.'],
      /* TO RESOLVE BEFORE LAUNCH:
         Payment terms to draft &mdash; invoicing dates, currency, late
         payment, what happens to work in progress if an invoice is unpaid.
         None of that is stated anywhere on the site yet. */
    ]],

    ['limits', '08', 'What we do not promise', [
      ['p', 'Stated the same way across the site, and worth repeating here:'],
      ['ul', [
        'No guaranteed ranking, or any outcome we don&rsquo;t control.',
        'No reporting of impressions and engagement in place of enquiries.',
        'We won&rsquo;t hold your site, ads or data on our accounts.',
        'We won&rsquo;t sell you a service the audit says you don&rsquo;t need yet.',
        'We won&rsquo;t route around your marketing team, or replace them quietly.',
      ]],
    ]],

    ['missing', '09', 'What this document is missing', [
      ['p', 'Listed rather than glossed over, because the gaps matter more than the contents.'],
      ['ul', [
        'Limitation of liability, and any cap on it',
        'Warranties and indemnities',
        'Governing law and jurisdiction &mdash; non-trivial for a UAE-licensed company contracting with EU and US clients',
        'Payment terms, late payment and suspension',
        'Intellectual property assignment, and when it transfers',
        'Termination for cause, and what survives termination',
        'Confidentiality, and how it interacts with publishing a success story',
        'Subcontracting and the processor agreement referenced in the privacy policy',
      ]],
      ['p', 'Those clauses decide what happens when something goes wrong, which is the only reason terms exist. They need a lawyer.'],
    ]],
  ],
];

require __DIR__ . '/includes/legal-template.php';
