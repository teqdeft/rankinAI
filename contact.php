<?php
/**
 * Contact
 * -----------------------------------------------------------------------------
 * REBUILT 25 Sep 2026 to Kulwant's copy, to the rules the other rebuilt pages
 * were settled on: no uppercase, no em-dashes, no semicolons, no <br> in a
 * heading, one eyebrow per section head, heading and note both free inside the
 * 1024px measure, alternating light and dark bands, and the shared close from
 * includes/close.php.
 *
 * THREE WAYS IN, IN ORDER OF COMMITMENT. The audit and the call as two cards,
 * then the message form for anyone who wants to ask something first, then the
 * direct details. A contact page that opens with a form assumes the reader has
 * already decided; this one does not.
 *
 * THE FORM POSTS NOWHERE YET. action="#" and the script shows the confirmation
 * in place. Wiring it to a mailbox is a server job and has not been done. Do
 * not launch the page in this state without saying so.
 *
 * THE CONFIRMATION WORDING is Kulwant's, carried on the form itself as
 * data-sent-label and data-sent-text. The default in script.js is the audit
 * form's, which three other pages use.
 *
 * WordPress: rename to page-contact.php. The form becomes a CF7 or Gravity
 * form with the same field names.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Contact RankinAI, tell us what you would like to change | RankinAI';
$page_desc  = 'Ask a question, request a free growth audit, or book a 20-minute call. Tell us where you are and what you want to achieve.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>Contact RankinAI</span></p>

    <h1 class="hero__title">What would you like to change?</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">More enquiries for a particular service? Better-fit clients? A marketing plan you can finally see working together?<span class="hero__sub2">Tell us where you are and what you want to achieve. We&rsquo;ll help you identify a useful next step.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     02 — CHOOSE YOUR NEXT STEP

     Two cards on the dark band, each opening with the sentence a reader would
     say to themselves. That is what tells someone which card is theirs faster
     than any heading: they recognise their own thought.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>Choose your next step</span></p>
        <h2 class="stories__title">Start wherever feels useful.</h2>
      </div>
    </div>

    <div class="routes">

      <article class="route">
        <p class="route__said">&ldquo;I&rsquo;d like to see what needs improving.&rdquo;</p>
        <h3 class="route__name">Get your growth audit</h3>
        <p class="route__text">Share your website and what you&rsquo;d like to achieve. We&rsquo;ll review your public presence and enquiry journey, then send the clearest opportunities and suggested priorities in writing.</p>
        <p class="route__note">You can decide what to do next after reading it.</p>
        <a class="btn btn--cream" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
      </article>

      <article class="route">
        <p class="route__said">&ldquo;I&rsquo;d rather talk it through.&rdquo;</p>
        <h3 class="route__name">Book a 20-minute call</h3>
        <p class="route__text">Bring the question, challenge or goal on your mind. We&rsquo;ll discuss your situation, share an initial perspective, and see whether our support could be useful.</p>
        <p class="route__note">A conversation about your business. No presentation to prepare.</p>
        <a class="btn btn--cream" href="<?= url('/call/') ?>">Book a 20-minute call <?= btn_arrow() ?></a>
      </article>

    </div>

  </div>
</section>


<!-- ==========================================================================
     03 — SEND US A MESSAGE

     The invitation on the left and the form on the right. Five fields, two of
     them optional, and a message box rather than a subject line: the page
     already said a finished brief is not needed, and a form with nine fields
     would say the opposite.
     ========================================================================== -->
<section class="band band--light" id="message">
  <div class="container">

    <div class="questions__head">
      <div>
        <p class="eyebrow"><span>Send us a message</span></p>
        <h2 class="questions__title">A question first? Go ahead.</h2>
        <p class="stories__note">You don&rsquo;t need a finished brief. A few details about your business and what you&rsquo;re considering are enough to start.</p>
      </div>
    </div>

    <?php /* data-auditform wires the validation and the in-place confirmation
             in script.js. The wording below is this form's own: the default in
             the script belongs to the audit request. */ ?>
    <form class="auditform auditform--light" method="post" action="#" novalidate data-auditform
          data-sent-label="Message received"
          data-sent-text="Your message has reached our team, and we&rsquo;ll reply to the email address you provided.">
      <div class="auditform__grid">
        <label class="field">
          <span class="label">Your name</span>
          <input type="text" name="name" autocomplete="name" placeholder="Full name" required>
          <span class="field__msg" data-msg></span>
        </label>
        <label class="field">
          <span class="label">Work email</span>
          <input type="email" name="email" autocomplete="email" placeholder="Email address" required>
          <span class="field__msg" data-msg></span>
        </label>
        <label class="field">
          <span class="label">Company</span>
          <input type="text" name="company" autocomplete="organization" placeholder="Company name">
          <span class="field__msg" data-msg></span>
        </label>
        <label class="field">
          <span class="label">Website</span>
          <input type="text" name="website" inputmode="url" autocomplete="url" placeholder="yourcompany.com">
          <span class="field__msg" data-msg></span>
        </label>
        <label class="field field--wide">
          <span class="label">What would you like to discuss?</span>
          <textarea name="message" rows="5" placeholder="Tell us what you want to achieve, what needs attention, or what you&rsquo;d like to ask." required></textarea>
          <span class="field__msg" data-msg></span>
        </label>
      </div>
      <button class="btn btn--primary" type="submit">Send your message <?= btn_arrow() ?></button>
      <p class="auditform__note">We&rsquo;ll review your message and reply by email. Sending an enquiry creates no obligation to proceed.</p>
    </form>

  </div>
</section>


<!-- ==========================================================================
     04 — OTHER REASONS TO GET IN TOUCH

     THE PHONE AND THE ADDRESS ARE HERE, and they are not in Kulwant's copy,
     which lists only the email under "you can reach us directly". They were
     added because this is the only page on the site that carries either, the
     section is explicitly about reaching us directly, and both already exist
     in $SITE. Say the word and they come off.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>Other reasons to get in touch</span></p>
        <h2 class="stories__title">You can reach us directly.</h2>
      </div>
    </div>

    <div class="direct">
      <div class="direct__item">
        <p class="label label--clay">Email</p>
        <a class="link-quiet link-quiet--onforest link-quiet--bold" href="mailto:<?= e($SITE['email']) ?>"><?= e($SITE['email']) ?></a>
      </div>
      <div class="direct__item">
        <p class="label label--clay">Phone</p>
        <?php /* The office hours line came off on 25 Sep 2026 at Kulwant's
                 instruction. $SITE['hours'] is still set and still used on
                 /call/. */ ?>
        <a class="link-quiet link-quiet--onforest link-quiet--bold" href="tel:<?= e(preg_replace('/\s+/', '', $SITE['phone'])) ?>"><?= e($SITE['phone']) ?></a>
      </div>
      <div class="direct__item">
        <p class="label label--clay">Office</p>
        <p class="direct__addr"><?= e($SITE['address']) ?></p>
      </div>
    </div>

    <?php
    $REASONS = [
      ['people', 'Already working with us?',
       'Your named contact is the best place to start. If you&rsquo;re unsure who to reach, email us with your company name and we&rsquo;ll direct your message.'],
      ['link',   'Looking for an agency partner?',
       'Tell us which services you need support with, the markets you work in, and how you&rsquo;d like us to fit into your team.'],
      ['spark',  'Interested in joining RankinAI?',
       'Send a short introduction, your area of expertise, and examples of work you&rsquo;re proud of. Tell us what your contribution was and why it mattered.'],
    ];
    ?>
    <div class="wcards wcards--three">
<?php foreach ($REASONS as $i => [$icon, $name, $text]): ?>
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

<?php require __DIR__ . '/includes/footer.php'; ?>
