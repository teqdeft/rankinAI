<?php
/**
 * Category hub template
 * =============================================================================
 * The three "who we work with" category pages. No design canvas exists for
 * these — only the nine individual industries were designed — so this is
 * built from components already approved on other pages rather than as a new
 * layout. If a canvas appears later, this is the page to replace.
 *
 * Deliberately short. A hub that restates each industry page in miniature
 * gives the reader two places to read the same thing and a reason to leave.
 *
 * REQUIRED KEYS: label, h1, sub, ctaNote, shared[], industries[]
 * =============================================================================
 */
if (!isset($CATEGORY)) {
    exit('category-template.php requires $Category.');
}
$C = $CATEGORY;

require __DIR__ . '/header.php';
?>

<!-- 01 — HERO ============================================================ -->
<section class="hero hero--page">
  <div class="hero__inner container">
    <h1 class="hero__title hero__title--page"><?= $C['h1'] ?></h1>

    <div class="hero__meta hero__meta--page">
      <p class="hero__sub"><?= $C['sub'] ?></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit</a>
        <p class="hero__note"><?= $C['ctaNote'] ?></p>
      </div>
    </div>
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


<!-- 02 — PICK THE TRADE ==================================================
     The reason the page exists. Straight to the industry pages, before any
     argument — someone who arrived here from the menu already knows which
     trade they are in.
     ====================================================================== -->
<section class="band band--forest band--tuck">
  <div class="container">
    <div class="stories__head">
      <div>
        <h2 class="stories__title">Sectors we cover</h2>
      </div>
    </div>

    <?php /* Two categories have three industries, one has four, and HR has
             two. The grid follows the count rather than assuming three. */ ?>
    <div class="hows hows--<?= ['two', 'two', 'three', 'four'][min(count($C['industries']), 4) - 1] ?> hows--onforest">
<?php foreach ($C['industries'] as [$name, $href, $text]): ?>
      <div class="how">
        <p class="how__name"><a href="<?= url($href) ?>"><?= $name ?></a></p>
        <p class="how__text"><?= $text ?></p>
        <a class="link-quiet link-quiet--onforest" href="<?= url($href) ?>">How it works in this trade</a>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>


<!-- 03 — WHAT THEY SHARE ================================================= -->
<section class="band band--light">
  <div class="container">
    <div class="questions__head">
      <div>
        <h2 class="questions__title">One team across all three</h2>
      </div>
      <p class="stories__note">The trades feel nothing alike from the inside. The buying behaviour is close to identical, which is why the same order of work applies to all of them.</p>
    </div>

    <div class="hows hows--three">
<?php foreach ($C['shared'] as $i => [$name, $text]): ?>
      <div class="how">
        <p class="label label--clay"><?= sprintf('%02d', $i + 1) ?></p>
        <p class="how__name"><?= $name ?></p>
        <p class="how__text"><?= $text ?></p>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>


<!-- 04 — THE CLOSE ======================================================= -->

<?php require __DIR__ . '/footer.php'; ?>
