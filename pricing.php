<?php
/**
 * Pricing
 * -----------------------------------------------------------------------------
 * REBUILT 25 Sep 2026 to Kulwant's copy, to the rules the home and about pages
 * were settled on: no uppercase, no em-dashes, no semicolons, no <br> in a
 * heading, one eyebrow per section head, heading and note both free inside the
 * 1024px measure, one button per section with the second action as a quiet
 * link, and the shared close from includes/close.php.
 *
 * WHAT THE REBUILD REPLACED
 *   · A reversed comparison matrix, four packages across seven service rows.
 *     The new copy is written as four plans in sequence, each one "everything
 *     in the last, with", which a matrix cannot express: a grid says the four
 *     are alternatives, the copy says they are stages.
 *   · A <dialog> holding the four deliverable lists. The lists are on the page
 *     now, inside their own plan, which is where a reader looking at a price
 *     wants them. The dialog, its open buttons and its script block are gone.
 *
 * THE PLANS ARE ROWS, NOT COLUMNS. Nine deliverables in a quarter of the page
 * is a column of two-word fragments. Each plan is a full-width card split into
 * identity and price on the left, what you get on the right.
 *
 * EVERY FIGURE ON THIS PAGE IS A PRICE KULWANT SET. $750, $1,250, $1,750, from
 * $2,500, and $500 setup. They are commercial decisions, not claims about the
 * market, so they need no source. Nothing else here is a number.
 *
 * WordPress: rename to page-pricing.php. The plans become a `plan` post type.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Plans and pricing, from $750 a month | RankinAI';
$page_desc  = 'Four plans, from $750 a month. What each one includes, what the deliverables mean, what setup covers, and the answers to the questions people ask before choosing.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>Plans and pricing</span></p>

    <h1 class="hero__title">Build the pipeline. Know the investment.</h1>

    <div class="hero__meta hero__meta--home">
      <?php /* Two lines came out of this hero on 25 Sep 2026, at Kulwant's
               instruction: "We agree the priorities, deliverables and measures
               of progress before starting", and the note under the buttons,
               "All prices are in USD. Advertising spend and third-party
               software are separate."

               The second of those is the only place the page said USD. The
               separate costs are still answered in full by two of the nine
               questions at the foot of the page. */ ?>
      <p class="hero__sub">Choose the support that fits where your business is now, and the work you want to win next.<span class="hero__sub2">Each plan brings together search, content, your website, reputation and follow-up, with paid advertising where it supports your goals.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Help me choose a plan</a>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     02 — THE FOUR PLANS

     Rows rather than columns. The copy reads as a sequence, each plan being
     the one before it with more in it, and a four-column grid would say the
     opposite: that they are four alternatives to weigh against each other.

     Inside each row, identity and price on the left and the deliverables on
     the right, with the full breakdown and the button beneath them.

     The band is dark and the cards are paper. Four light cards on forest,
     not the other way round: the section is the dark thing, and the prices
     are what sits on it.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>Choose your plan</span></p>
        <h2 class="stories__title">Where does your business want to go next?</h2>
      </div>
    </div>

    <?php
    /* 'from' marks the one price that is a floor rather than a figure, and
       'inherits' is the line that makes the sequence explicit. */
    $PLANS = [
      [
        'name'  => 'Foundation',
        'price' => '$750',
        'from'  => false,
        'line'  => 'Give your next client a clearer path to finding you.',
        'who'   => 'For small firms building a consistent marketing presence around a focused service offering and one location.',
        'does'  => 'We establish the essentials, strengthen your most important pages, and make it easier to capture and follow up on enquiries.',
        'inherits' => 'Your monthly plan includes',
        'items' => [
          'Search improvements focused on your priority services and local market.',
          'Google Business Profile management.',
          'AI visibility checks on an agreed set of buyer questions across two platforms.',
          'Two content pieces, such as service-page copy, an article or a client story.',
          'Targeted improvements to existing website pages and enquiry forms.',
          'Review-request process and priority business-profile updates.',
          'Basic enquiry tracking, an automatic acknowledgement and one follow-up sequence.',
          'Management of one Google Search campaign, when appropriate.',
          'A monthly report and one review call.',
        ],
        'cta'   => ['Start with Foundation', '/growth-audit/'],
      ],
      [
        'name'  => 'Growth',
        'price' => '$1,250',
        'from'  => false,
        'line'  => 'Build a stronger flow of opportunities around the work you want.',
        'who'   => 'For firms ready to develop their visibility, strengthen their proof and improve how enquiries become sales conversations.',
        'does'  => 'We expand the content and search work, support more deliberate campaigns, and improve qualification and follow-up.',
        'inherits' => 'Everything in Foundation, with',
        'items' => [
          'Broader search coverage across your agreed priority services.',
          'Four content pieces per month, including service or location-page copy where needed.',
          'AI visibility checks across up to four platforms.',
          'Regular updates to existing pages with improvement potential.',
          'Landing-page and enquiry-journey improvements within the agreed scope.',
          'Automated review requests and drafted review replies.',
          'Lead qualification and more tailored follow-up sequences.',
          'Management of up to two Google Search campaigns and one retargeting campaign.',
          'A monthly report and two review calls.',
        ],
        'cta'   => ['Start with Growth', '/growth-audit/'],
      ],
      [
        'name'  => 'Accelerate',
        'price' => '$1,750',
        'from'  => false,
        'line'  => 'Make your next stage of growth a coordinated effort.',
        'who'   => 'For established firms expanding selected services, entering additional locations, or pursuing higher-value work.',
        'does'  => 'We increase delivery, build stronger evidence around your expertise, and review performance more frequently.',
        'inherits' => 'Everything in Growth, with',
        'items' => [
          'A wider search and content plan across agreed services and locations.',
          'Six content pieces per month.',
          'More extensive updates to existing content and priority pages.',
          'Outreach to relevant publications and industry websites.',
          'A structured programme of website and enquiry-journey improvements.',
          'Conversion experiments where traffic and data support meaningful testing.',
          'More detailed lead routing, qualification and follow-up.',
          'Management of up to three Google Search campaigns and one retargeting campaign.',
          'Reviews every two weeks with a senior strategist.',
        ],
        'cta'   => ['Start with Accelerate', '/growth-audit/'],
      ],
      [
        'name'  => 'Custom',
        'price' => '$2,500',
        'from'  => true,
        'line'  => 'A plan built around a more complex business.',
        'who'   => 'For firms operating across several locations or markets, coordinating multiple teams, or needing a broader mix of channels and systems.',
        'does'  => 'We agree the scope around your commercial priorities, internal resources and reporting needs.',
        'inherits' => 'Your plan can include',
        'items' => [
          'Marketing across multiple locations or countries.',
          'Content and campaigns for several service lines.',
          'Additional advertising platforms, including LinkedIn and Meta.',
          'CRM integrations and more complex automation.',
          'Reporting by market, location or business unit.',
          'Specialist support alongside your internal marketing team.',
          'A tailored delivery schedule and review cadence.',
        ],
        'foot'  => 'You receive a defined proposal with the deliverables, responsibilities and full price.',
        'cta'   => ['Discuss a Custom plan', '/call/'],
      ],
    ];

    /* THE FULL DELIVERABLES, restored 25 Sep 2026.
       -----------------------------------------------------------------------
       These are the lists that used to open in a dialog behind "Read full
       deliverables" on each package column. The dialog is gone and the page
       is rows now, so they open in place instead: the short list above is
       what the plan is, this is what the plan contains.

       TWO LINES WERE RECONCILED against Kulwant's new copy, because the old
       detail contradicted it. Both are logged in CLAIMS.md:
         · Accelerate content was "6 to 8 pieces a month". The new copy says
           six, so it says six.
         · Accelerate outreach was "2 placements a month", a promise of
           publication. The new copy's own definition says publication
           decisions rest with the publisher, so it is now outreach for two.

       Anything added here has to survive the same test: it cannot promise
       something the "what the deliverables mean" section says is not
       guaranteed. */
    $FULL = [
      'Foundation' => [
        'AI and search visibility' => [
          'Google Business Profile set up and optimised',
          'Local search for your service area',
          'Monthly technical SEO maintenance',
          'Answer-first blocks on your priority pages',
          'Visibility tracked on one or two AI assistants',
          'Monthly check of the prompts your buyers actually type',
        ],
        'Content' => [
          '2 pieces a month: a success story, a project write-up, an article or a review asset',
          'Written from a half-hour interview, so nobody on your side has to draft anything',
        ],
        'Website and conversion' => [
          'Core service pages improved: titles, meta, calls to action, proof blocks',
          '1 landing page built to convert',
          'Enquiry forms cut back to what you actually need',
          'Monthly on-page improvements to the priority pages',
        ],
        'Reviews and reputation' => [
          'Review system set up: how you ask, where they land, where they show',
          'Your profiles claimed and corrected where the details are wrong',
        ],
        'CRM and automation' => [
          'CRM set up',
          'Instant auto-reply to every new enquiry',
          '1 follow-up sequence',
          'A cleaner route from enquiry to booked conversation',
        ],
        'Paid advertising' => [
          '1 Google search campaign managed. The spend is separate and stays in your account',
        ],
        'Strategy and reporting' => [
          'Monthly performance report',
          '1 strategy call a month',
          'We tell you first if something breaks',
        ],
      ],

      'Growth' => [
        'AI and search visibility' => [
          'Broader topic coverage plus one service or area page',
          'Topic clusters started: a main page with supporting ones around it',
          'Google Business Profile set up and optimised',
          'Local search for your service area',
          'Answer-first blocks on your priority pages',
          'Visibility tracked on more AI assistants, checked monthly against the prompts your buyers type',
          'Monthly technical SEO maintenance',
        ],
        'Content' => [
          '4 pieces a month: success stories, project write-ups, articles or review assets',
          'Monthly refreshes on the pages closest to moving',
          'Written from a half-hour interview, so nobody on your side has to draft anything',
        ],
        'Website and conversion' => [
          'Core service pages improved: titles, meta, calls to action, proof blocks',
          'Extra landing pages beyond the first',
          'Monthly testing on the pages that carry enquiries',
          'Question and comparison sections where they help someone decide',
          'Enquiry forms cut back to what you actually need',
          'Monthly on-page improvements to the priority pages',
        ],
        'Reviews and reputation' => [
          'Review system set up: how you ask, where they land, where they show',
          'Your profiles claimed and corrected where the details are wrong',
          'Requests sent automatically after the right moment in the job',
          'Replies drafted for you, including the difficult ones',
        ],
        'CRM and automation' => [
          'CRM set up',
          'Instant auto-reply to every new enquiry',
          'Lead qualification built into the enquiry flow',
          'Email and WhatsApp follow-up sequences',
          'A cleaner route from enquiry to booked conversation',
        ],
        'Paid advertising' => [
          'Google search plus retargeting',
          'The spend is separate and stays in your account',
        ],
        'Strategy and reporting' => [
          'Monthly performance report plus 2 calls',
          'A dedicated specialist on your account',
          'We tell you first if something breaks',
        ],
      ],

      'Accelerate' => [
        'AI and search visibility' => [
          'Wide topic coverage plus multiple service and area pages',
          'Google Business Profile and local search for your service area',
          'Every major AI assistant covered, and the pages rewritten to be quotable by them',
          'Monthly check of the prompts your buyers actually type',
          'Authority building: quality mentions and links, partnerships, press angles',
          'Weekly Search Console monitoring',
          'Monthly technical SEO maintenance',
        ],
        'Content' => [
          '6 pieces a month: success stories, project write-ups, articles or review assets',
          'Outreach for 2 placements a month: guest pieces, press mentions or industry publications, with the decision resting with the publisher',
          '8 existing articles refreshed a month',
          'Written from a half-hour interview, so nobody on your side has to draft anything',
        ],
        'Website and conversion' => [
          'Core service pages improved: titles, meta, calls to action, proof blocks',
          'Landing pages built as the programme needs them',
          'Continuous testing across the whole journey, not just the enquiry form',
          'Layout changes made because a test said so',
          'Proof placed where people decide, rather than on a page nobody opens',
          'Enquiry forms cut back to what you actually need',
        ],
        'Reviews and reputation' => [
          'Review system set up: how you ask, where they land, where they show',
          'Requests sent automatically after the right moment in the job',
          'Replies drafted for you, including the difficult ones',
          'Every platform your buyers check, covered and kept current',
          'Mentions of your name monitored, so you hear about them first',
        ],
        'CRM and automation' => [
          'CRM set up, with an instant auto-reply to every new enquiry',
          'Lead qualification built into the enquiry flow',
          'Email and WhatsApp follow-up sequences',
          'Full follow-up automation, tuned every month',
          'Pipeline tracking, so you can see where enquiries stall',
        ],
        'Paid advertising' => [
          'Multiple Google search campaigns plus retargeting',
          'The spend is separate and stays in your account',
        ],
        'Strategy and reporting' => [
          'Reports and calls every two weeks',
          'A senior strategist on your account',
          'We tell you first if something breaks',
        ],
      ],

      'Custom' => [
        'One-time setup' => [
          'Tracking set up properly: analytics, Search Console, and conversions on forms and calls',
          'Tracking split by location and by market, so you can see which ones are working',
          'Baseline report: where you rank, what traffic you get, what converts',
          'Full technical audit and fix plan: crawling and indexing, sitemap, redirects, canonicals, internal linking',
          'Competitor gap analysis and a page-mapping plan, run per market',
          'The questions your buyers ask, mapped to the pages that answer them',
          'The pages that establish who you are: about, process, results, and named people behind them',
          'Your name, address and phone number consistent everywhere they appear, for every location',
          'Full structured data across the site',
          'Custom reporting built around the numbers your board already looks at',
        ],
        'AI and search visibility' => [
          'Wide topic coverage across every service you sell',
          'A page for each location and each service, rather than one page doing both jobs',
          'Google Business Profile and local search for every location',
          'Every major AI assistant covered, and the pages rewritten to be quotable by them',
          'AI visibility tracked per market, not as one average',
          'Authority building in every market you sell into: quality mentions and links, partnerships, press angles',
          'Weekly Search Console monitoring',
          'Monthly technical SEO maintenance',
        ],
        'Content' => [
          'Volume set to the number of services and markets you cover',
          'Success stories, project write-ups, articles and review assets',
          'Outreach for placements on other sites: guest pieces, press mentions and industry publications',
          'Existing articles refreshed every month',
          'Written from a half-hour interview, so nobody on your side has to draft anything',
        ],
        'Website and conversion' => [
          'Core service pages improved: titles, meta, calls to action, proof blocks',
          'Location and service landing pages built as the programme needs them',
          'Continuous testing across the whole journey, not just the enquiry form',
          'Layout changes made because a test said so',
          'Proof placed where people decide, rather than on a page nobody opens',
          'Enquiry forms cut back to what you actually need',
        ],
        'Reviews and reputation' => [
          'Review system set up per location: how you ask, where they land, where they show',
          'Requests sent automatically after the right moment in the job',
          'Replies drafted for you, including the difficult ones',
          'Every platform your buyers check, covered and kept current',
          'One view of reviews across all locations, so you can compare them',
          'Mentions of your name monitored in every market',
        ],
        'CRM and automation' => [
          'CRM set up, with an instant auto-reply to every new enquiry',
          'Lead qualification built into the enquiry flow',
          'Email and WhatsApp follow-up sequences',
          'Full follow-up automation, tuned every month',
          'Routing so an enquiry reaches the right office or team',
          'Integrations with the systems you already run',
          'Pipeline tracking, so you can see where enquiries stall',
        ],
        'Paid advertising' => [
          'Multi-channel campaigns plus retargeting, sized to the budget',
          'Run per market, with budgets you can move between them',
          'The spend is separate and stays in your account',
        ],
        'Strategy and reporting' => [
          'The reporting cadence you set',
          'A senior team on the account',
          'Quarterly planning against your own targets',
          'We tell you first if something breaks',
        ],
        'How it is priced' => [
          'Scope and price quoted after the free audit and the strategy call',
          'Sized to your goals, your markets and your team, not to your logo',
        ],
      ],
    ];
    ?>
    <div class="plans">
<?php foreach ($PLANS as $p): ?>
      <article class="plan2">

        <div class="plan2__id">
          <h3 class="plan2__name"><?= $p['name'] ?></h3>
          <p class="plan2__price">
<?php if ($p['from']): ?><span class="plan2__from">From</span><?php endif; ?>
            <b><?= $p['price'] ?></b><span>/ month</span>
          </p>
          <p class="plan2__line"><?= $p['line'] ?></p>
          <p class="plan2__who"><?= $p['who'] ?></p>
          <p class="plan2__does"><?= $p['does'] ?></p>
        </div>

        <div class="plan2__get">
          <p class="label label--clay"><?= $p['inherits'] ?></p>
          <ul class="deliv__list" role="list">
<?php foreach ($p['items'] as $item): ?>
            <li><?= $item ?></li>
<?php endforeach; ?>
          </ul>
<?php if (!empty($p['foot'])): ?>
          <p class="plan2__foot"><?= $p['foot'] ?></p>
<?php endif; ?>
        </div>

        <?php /* The button first and the deliverables link beside it, on one
                 line across the foot of the card.

                 The <details> is display: contents, so its summary and its
                 body become items of this same row rather than a box of their
                 own. The summary lands next to the button; the body has a
                 100% flex basis, so it always wraps onto its own line at the
                 full width of the card. That is what keeps the button still
                 when someone expands a plan: the panel opens underneath the
                 row, not between the row and anything else.

                 Native <details>, the same mechanism as the questions
                 accordion below, so it needs no script, works from the
                 keyboard, and there is one way of doing this on the site
                 rather than two. A summary rather than a button also means
                 everything inside is in the page for a search engine whether
                 or not anyone opens it. */ ?>
        <div class="plan2__act">
          <a class="btn btn--primary" href="<?= url($p['cta'][1]) ?>"><?= $p['cta'][0] ?> <?= btn_arrow() ?></a>

          <details class="plist">
            <summary class="plist__toggle">
              <span class="plist__mark" aria-hidden="true"></span>
              <span class="plist__label plist__label--more">Read full deliverables</span>
              <span class="plist__label plist__label--less">Hide full deliverables</span>
            </summary>
            <div class="plist__body">
              <div class="deliv__grid deliv__grid--plan">
<?php foreach ($FULL[$p['name']] as $group => $lines): ?>
                <div class="deliv">
                  <p class="deliv__head"><?= $group ?></p>
                  <ul class="deliv__list" role="list">
<?php foreach ($lines as $line): ?>
                    <li><?= $line ?></li>
<?php endforeach; ?>
                  </ul>
                </div>
<?php endforeach; ?>
              </div>
            </div>
          </details>
        </div>

      </article>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ==========================================================================
     03 — WHAT THE DELIVERABLES MEAN

     Six definitions, on the dark band, as cards with icons. They are the part
     of a pricing page a reader goes looking for when a line in a plan does not
     tell them enough, so they get the treatment that is easiest to scan.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>What the deliverables mean</span></p>
        <h2 class="stories__title">Clear scope makes a better working relationship.</h2>
      </div>
    </div>

    <?php
    $TERMS = [
      ['pencil',    'Content pieces',
       'A piece may be an article, a case study, or copy for a service or location page. We agree the format and brief in advance. A new page requiring design or development is scoped separately from its copy.'],
      ['wrench',    'Website improvements',
       'These cover agreed changes to your existing pages, templates and enquiry journey. A full redesign, substantial development or a new integration receives its own scope and price.'],
      ['target',    'Advertising campaigns',
       'Campaign management sits within the limits of your plan. The advertising budget is paid separately through your own accounts. We recommend channels and budgets based on the market you want to reach.'],
      ['spark',     'AI visibility',
       'We check an agreed set of questions and record where your firm appears. The work supports your visibility. Inclusion in an AI answer cannot be guaranteed by anyone.'],
      ['link',      'Outreach and placements',
       'Outreach covers research, pitching and follow-up. Publication decisions remain with the publisher, so editorial coverage and links are not guaranteed.'],
      ['sliders',   'Your monthly priorities',
       'We agree how the work is distributed. If advertising is not appropriate, for example, your proposal explains how that capacity will support other priorities.'],
    ];
    ?>
    <div class="wcards wcards--three">
<?php foreach ($TERMS as $i => [$icon, $name, $text]): ?>
      <div class="wcard">
        <span class="wcard__icon"><?= svc_icon_svg($icon) ?></span>
        <span class="wcard__n"><?= sprintf('%02d', $i + 1) ?></span>
        <h3 class="wcard__name"><?= $name ?></h3>
        <p class="wcard__text"><?= $text ?></p>
      </div>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ==========================================================================
     04 — GETTING STARTED

     The setup fee on the left and the two ways to start on the right, so the
     choice sits beside the thing it is a choice about. Same two-column shape
     as the about page's "how we think", for the same reason: it halves the
     height and neither column reads as a wall.
     ========================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
        <?php /* No eyebrow here. "Getting started" came off on 25 Sep 2026 at
                 Kulwant's instruction; the heading says what the section is
                 without it. */ ?>
        <h2 class="questions__title">Set up once. Build from there.</h2>
      </div>
    </div>

    <div class="think">

      <div class="think__say">
        <p class="label label--clay">Initial setup</p>
        <p class="think__lead">$500, once.</p>
        <p>For Foundation, Growth and Accelerate, setup establishes the information and systems needed to begin the agreed plan.</p>
        <p>Substantial website repairs, CRM migrations, custom integrations and additional development are quoted separately. Custom-plan setup is scoped and priced in your proposal.</p>
      </div>

      <div class="think__rules">
        <p class="label label--clay">It includes</p>
        <ul class="deliv__list" role="list">
          <li>A kickoff session covering your goals, ideal clients and priority services.</li>
          <li>Review of the website, accounts and access required for delivery.</li>
          <li>A baseline of available search, traffic and enquiry data.</li>
          <li>Standard tracking setup or corrections for agreed enquiry actions.</li>
          <li>A review of your current lead-capture and follow-up process.</li>
          <li>An initial action plan with priorities and responsibilities.</li>
        </ul>
      </div>

    </div>

    <?php /* The two ways in. Two cards rather than two paragraphs, because it
             is a decision with two options and the reader is making it here. */ ?>
    <div class="starts">
      <div class="start">
        <h3 class="start__name">Monthly arrangement</h3>
        <p class="start__text">Pay the setup fee and your monthly plan. Cancellation requires 30 days&rsquo; notice.</p>
      </div>
      <div class="start start--flag">
        <p class="label label--clay">We waive the $500 setup fee</p>
        <h3 class="start__name">Six-month initial commitment</h3>
        <p class="start__text">You commit to the first six months, then continue monthly with 30 days&rsquo; notice.</p>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     05 — WHAT YOU'RE PAYING FOR

     The claim on the left and what follows from it on the right, the same
     shape as the about page's opening argument.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container why">

    <div class="why__head">
      <p class="eyebrow eyebrow--light"><span>What you&rsquo;re paying for</span></p>
      <h2 class="why__title">A team working towards the same commercial goal.</h2>
      <p class="why__sub">Your plan gives you coordinated delivery across the parts of marketing that affect how buyers find, evaluate and contact your business.</p>
    </div>

    <div class="why__body">
      <p class="why__lead">You&rsquo;ll know:</p>
      <ul class="ticks" role="list">
        <li>What is being delivered.</li>
        <li>What we need from your team.</li>
        <li>Which measures we are tracking.</li>
        <li>What the results suggest we should do next.</li>
      </ul>
      <p>Where your sales data allows, reporting connects enquiries with opportunities and clients won.</p>
    </div>

  </div>
</section>


<!-- ==========================================================================
     06 — QUESTIONS ABOUT PRICE

     The accordion from /questions/ rather than the tabbed panel this page
     used to carry. Nine answers is too many to hold in one panel that swaps
     its contents, and the site already has one way of asking and answering.
     ========================================================================== -->
<section class="band band--light qbody">
  <div class="container">

    <div class="qgroup">
      <div class="qgroup__head">
        <p class="eyebrow"><span>Frequently asked questions</span></p>
        <h2 class="qgroup__title">Before you choose.</h2>
        <p class="qgroup__note">The nine that come up most often, answered in the order people ask them.</p>
      </div>

      <?php
      $FAQ = [
        ['Which plan is right for us?',
         'Start with the growth audit. We look at your current presence, discuss what you want to achieve, and recommend a scope that fits. Your priorities, market and capacity matter more than company size alone.'],
        ['Does every service run every month?',
         'The plan draws on the specialisms your business needs. Some work happens during setup, some runs regularly, and some becomes relevant later. Your proposal and monthly priorities explain the allocation.'],
        ['Can we hire you for just one service?',
         'Yes. If you need a focused engagement, for example search, paid advertising or website conversion, we can propose a separate scope. The packages are designed for businesses that want coordinated ongoing support.'],
        ['Is advertising spend included?',
         'No. Your monthly fee covers our work. Advertising spend is separate, stays in your account, and is agreed with you before campaigns launch.'],
        ['Are software subscriptions included?',
         'Third-party costs such as CRM subscriptions, messaging charges, hosting and premium tools are separate where required. We identify expected costs before you agree to the work.'],
        ['What happens if a channel underperforms?',
         'We investigate the cause, explain the findings, and agree the next action. That may mean improving the campaign, revising the offer or moving effort elsewhere. If the ongoing scope changes materially, we review the fee with you.'],
        ['Can we change plans?',
         'Yes. We can review your plan as your goals, budget or capacity change. Any adjustment is agreed in writing, including when it takes effect and how it fits your current commitment.'],
        ['Do you guarantee leads or revenue?',
         'We commit to the agreed work, measurement and regular improvement. Results also depend on your market, offer, budget, competition and sales process. We establish realistic objectives and explain the assumptions behind them.'],
        ['Will there be additional charges?',
         'Your proposal lists the agreed fees, separate costs and any applicable taxes. Work outside the scope is discussed and approved before it is added.'],
      ];
      ?>
      <div class="qa">
<?php foreach ($FAQ as $i => [$q, $a]): ?>
        <details class="qi">
          <summary class="qi__q">
            <span class="qi__n"><?= sprintf('%02d', $i + 1) ?></span>
            <span class="qi__text"><?= $q ?></span>
            <span class="qi__mark" aria-hidden="true"></span>
          </summary>
          <div class="qi__a">
            <p><?= $a ?></p>
          </div>
        </details>
<?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
