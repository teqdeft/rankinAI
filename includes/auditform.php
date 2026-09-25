<?php
/**
 * The growth audit form
 * =============================================================================
 * Built 25 Sep 2026 to Kulwant's copy. Two fields: the website and an email
 * address. One include, so the same offer is the same offer wherever it
 * appears, and a change to the wording or the fields happens in one file.
 *
 *   require __DIR__ . '/includes/auditform.php';
 *
 * Optional, set before the require and unset after it:
 *   $af_panel   true to paint the whole block as a forest card, for a cream
 *               ground like the growth audit hero
 *   $af_light   true for cream text on a dark ground it does not paint itself
 *   $af_id      the form's id, where a page has more than one
 *
 * WHAT THIS REPLACED, AND WHAT WENT WITH IT. The /growth-audit/ page asked for
 * name, company, work email, phone, website and an optional note: six fields
 * for a free offer, four of them before the visitor has seen anything in
 * return. Kulwant's copy asks for two. The name, company and phone are no
 * longer collected at the point of enquiry and would have to come from the
 * reply or the call. That is a commercial trade, not a design one, and it is
 * recorded in CLAIMS.md rather than buried here.
 *
 * THE FORM STILL HAS NO HANDLER. action="#" posts nowhere. A form that
 * silently does nothing is worse than no form, so this must not go live
 * without an endpoint. The same warning is on every form on this site.
 */
$af_panel = $af_panel ?? false;
$af_light = $af_light ?? false;
$af_id    = $af_id ?? 'audit-form';
?>
<div class="afx<?= $af_panel ? ' afx--panel' : '' ?><?= $af_light ? ' afx--light' : '' ?>">

  <p class="eyebrow<?= $af_light ? '' : ' eyebrow--light' ?>"><span>Your free growth audit</span></p>

  <h2 class="afx__title">Know what to improve next.</h2>

  <p class="afx__sub">We&rsquo;ll review your website, search visibility and enquiry journey, and send you three practical priorities to help you attract and convert more of the right clients.</p>

  <form class="auditform afx__form<?= $af_light ? ' auditform--light' : '' ?>" id="<?= e($af_id) ?>" method="post" action="#" novalidate data-auditform data-sent-label="Sent" data-sent-text="Your audit is on its way. We&rsquo;ll reply from a real address within one working day.">

    <div class="afx__fields">
      <label class="field">
        <span class="label">Website URL</span>
        <input type="text" name="website" inputmode="url" autocomplete="url" placeholder="Your website address" required>
        <span class="field__msg" data-msg></span>
      </label>

      <label class="field">
        <span class="label">Email address</span>
        <input type="email" name="email" autocomplete="email" placeholder="Where should we send your audit?" required>
        <span class="field__msg" data-msg></span>
      </label>
    </div>

    <button class="btn <?= $af_light ? 'btn--primary' : 'btn--cream' ?> btn--lg" type="submit">Get your growth audit <?= btn_arrow() ?></button>

    <p class="auditform__note">Free. No obligation. No call required.</p>
  </form>

  <p class="afx__alt">Prefer to talk? <a class="link-quiet link-quiet--bold<?= $af_light ? '' : ' link-quiet--onforest' ?>" href="<?= url('/call/') ?>">Book a 20-minute call</a></p>

</div>
