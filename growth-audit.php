<?php
/**
 * Growth audit — the conversion endpoint
 * -----------------------------------------------------------------------------
 * Every primary CTA on the site lands here, so this page has one job and the
 * form is part of the first screen rather than the reward for scrolling.
 *
 * RULES THAT MUST SURVIVE ANY REDESIGN
 * · The form is visible without scrolling on every breakpoint down to 900.
 *   Below that it sits directly under the headline, above everything else.
 * · Six fields, one of them optional. Every field added costs completions.
 * · "Free" is stated three times, in three registers, because the single most
 *   common silent objection on a page like this is "what's the catch".
 * · Section 04 says plainly that we may not be the right people. It stays.
 *   It is the line that makes the rest of the page believable.
 *
 * WordPress: rename to page-growth-audit.php.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Get your growth audit — free, back in one working day | RankinAI';
$page_desc  = 'A person here reads your site, your search and AI visibility and your competitors, then sends you six to eight pages: what is working, where enquiries are leaking, and the three fixes worth doing first. Free, no obligation.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO, WITH THE FORM IN IT
     ========================================================================== -->
<section class="hero hero--page hero--audit">
  <div class="hero__inner container audit-lede">

    <div class="audit-lede__copy">

      <h1 class="hero__title hero__title--audit">See what&rsquo;s bringing you work, and what&rsquo;s quietly costing you.</h1>

      <p class="hero__sub audit-lede__sub">Tell us your website. Within one working day a person here sends back a short document &mdash; where you&rsquo;re visible, where you aren&rsquo;t, where enquiries are leaking, and the three fixes worth doing first.</p>
    </div>

    <!-- A sibling of the copy, not a child of it, so the three blocks can be
         reordered at 900 without display:contents — which would silently
         break the opacity the hero timeline animates. -->
    <ul class="ticks" role="list">
      <li>Free, and it stays free</li>
      <li>Back within one working day</li>
      <li>Written by a person, not generated</li>
      <li>No call booked on your behalf</li>
    </ul>

    <?php /* The form is includes/auditform.php, so the same offer is the same
             offer wherever it appears. It replaced a six-field version on
             25 Sep 2026: see that file and CLAIMS.md for what came off. */ ?>
    <?php $af_panel = true; require __DIR__ . '/includes/auditform.php'; unset($af_panel); ?>

  </div>

  <div class="hero__proof">
    <div class="stat">
      <span class="stat__n">2009</span>
      <span class="stat__k">Working with businesses since</span>
    </div>
    <div class="stat">
      <span class="stat__n">200+</span>
      <span class="stat__k">Clients served</span>
    </div>
  </div>
</section>


<!-- ==========================================================================
     02 — WHAT COMES BACK
     Dark, so the hero's 50px radius reads. Reuses .deliv from the pricing
     page with an --onforest modifier rather than a second component.
     ========================================================================== -->
<section class="audit-what">
  <div class="container">

    <div class="stories__head">
      <div>
        <h2 class="stories__title">What the audit includes</h2>
        <p class="packages__note">Not a scan with your logo on the front. Someone here opens your site, searches the way your buyers search, asks the assistants about your category, and writes down what they find.</p>
      </div>
    </div>

    <div class="deliv__grid deliv__grid--onforest">
      <div class="deliv">
        <p class="deliv__head">01 &mdash; Where you stand today</p>
        <ul class="deliv__list" role="list">
          <li>Where you rank for the searches that actually produce enquiries, not the ones that produce traffic</li>
          <li>Whether ChatGPT, Claude, Gemini and Perplexity name you when someone asks for your category in your city</li>
          <li>How your reviews read next to the three firms you lose to most</li>
          <li>What your site does with a visitor who has already decided to enquire</li>
        </ul>
      </div>

      <div class="deliv">
        <p class="deliv__head">02 &mdash; Where it&rsquo;s leaking</p>
        <ul class="deliv__list" role="list">
          <li>The pages people arrive on and leave from, and what they were looking for</li>
          <li>How long an enquiry waits before a human replies</li>
          <li>What currently happens to an enquiry that lands at 9pm on a Friday</li>
          <li>Which channels you&rsquo;re paying for that aren&rsquo;t producing work</li>
          <li>What you can&rsquo;t currently measure, and what that&rsquo;s hiding</li>
        </ul>
      </div>

      <div class="deliv">
        <p class="deliv__head">03 &mdash; What to do first</p>
        <ul class="deliv__list" role="list">
          <li>Three fixes, ranked by what they return against what they cost to do</li>
          <li>A rough figure for what each one is worth in enquiries a month</li>
          <li>Which of them your own team can do, and which they can&rsquo;t</li>
          <li>Whether we&rsquo;re the right people for the rest &mdash; including when we&rsquo;re not</li>
        </ul>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     03 — HOW IT WORKS — REMOVED 25 Sep 2026, at Kulwant's instruction.

     It carried three steps (you send the form, we do the work, you read it)
     and, under them, the "what this isn't" block: a sales call in disguise, an
     automated report, something you sit through a demo to receive.

     That objection block was the only place on the site that answered it in
     those words. The two-field form's own line, "free, no obligation, no call
     required", now carries the same promise in shorter form. If the longer
     version should come back it belongs under the form rather than three
     screens below it. See CLAIMS.md.
     ========================================================================== -->


<!-- ==========================================================================
     04 — QUESTIONS

     The <details> accordion the questions page and the service and industry
     templates use, not the .fqs / .answers stepper this page used to carry.
     The site had two ways of asking and answering a question; it now has one.
     The stepper is still on the home page, which is the only place it is left.
     ========================================================================== -->
<section class="band band--light qbody">
  <div class="container">

    <div class="qgroup">
      <div class="qgroup__head">
        <p class="eyebrow"><span>Frequently asked questions</span></p>
        <h2 class="qgroup__title">Before you send it.</h2>
        <p class="qgroup__more"><a class="link-quiet link-quiet--bold" href="<?= url('/questions/') ?>">Every question, answered in full</a></p>
      </div>

      <div class="qa">
<?php
/* Data rather than markup, so the answers stay readable in the file and the
   structured data below is built from the same rows the page prints. */
$audit_qs = [
    ['Why is it free?', [
        'Because it&rsquo;s the fastest way for both of us to find out whether there&rsquo;s work here. We&rsquo;d rather spend three hours and tell you no than spend three months finding out.',
        'Some of the firms we audit become clients. Most don&rsquo;t, and the ones that do arrive knowing exactly what they&rsquo;re buying.',
    ]],
    ['What do you need from me?', [
        'Your website address and a way to reach you. Two minutes, once.',
        'Read-only analytics access if you have it, which makes the numbers real rather than estimated. Nothing else, and nothing after.',
    ]],
    ['We already have an agency.', [
        'Then the audit is worth more, not less. It&rsquo;s an outside read on what you&rsquo;re already paying for.',
        'Take it to them. Most of what we find is fixable by whoever is doing the work now, and we&rsquo;ll say which parts those are.',
    ]],
    ['What happens to my details?', [
        'One person reads them. They aren&rsquo;t added to a list, put into a sequence, or passed to anyone else.',
        'If you never reply to the audit, that is the end of it.',
    ]],
    ['What if you tell me nothing is wrong?', [
        'We say so, in writing.',
        'It happens. Some firms are doing the fundamentals well and their problem is capacity, not demand. Telling you that costs us a client we were never going to keep.',
    ]],
];
?>
<?php foreach ($audit_qs as $i => [$q, $a]): ?>
        <details class="qi">
          <summary class="qi__q">
            <span class="qi__n"><?= sprintf('%02d', $i + 1) ?></span>
            <span class="qi__text"><?= $q ?></span>
            <span class="qi__mark" aria-hidden="true"></span>
          </summary>
          <div class="qi__a">
<?php foreach ($a as $para): ?>
            <p><?= $para ?></p>
<?php endforeach; ?>
          </div>
        </details>
<?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php
/* The shared close, with one change: the standard primary button goes to
   /growth-audit/, which is this page. It points at the form instead. Copy,
   card and layout are untouched. See includes/close.php. */
$close_btn = ['Fill in the form', '#audit-form'];
require __DIR__ . '/includes/footer.php';
?>
