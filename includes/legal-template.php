<?php
/**
 * Legal document template
 * =============================================================================
 * Privacy policy and terms. A contents column on the left, numbered sections
 * on the right — the shape a legal document is actually read in, which is
 * "find clause six" rather than "start at the top".
 *
 * THE DRAFT BANNER IS NOT DECORATION
 * Both documents ship with $LEGAL['draft'] set. A privacy policy is a
 * statement to a regulator and terms of service are a contract; neither
 * should go live without a qualified review, and RankinAI operating between
 * the UAE and the EU makes that more true, not less. Remove the flag when a
 * lawyer has signed the document off — not when it reads well.
 *
 * REQUIRED KEYS: label, title, updated, reading, draft, summary[], toc[],
 *                sections[] — each [id, number, heading, blocks[]]
 * Blocks are ['p'|'ul'|'table'|'note', content].
 * =============================================================================
 */
if (!isset($LEGAL)) {
    exit('legal-template.php requires $LEGAL.');
}
$L = $LEGAL;

require __DIR__ . '/header.php';
?>

<section class="hero hero--page">
  <div class="hero__inner container">
    <h1 class="hero__title hero__title--page"><?= $L['title'] ?></h1>

    <div class="hero__meta hero__meta--page">
      <div class="legal__meta">
        <p class="legal__pair"><span class="label">Last updated</span><b><?= $L['updated'] ?></b></p>
        <p class="legal__pair"><span class="label">Reading time</span><b><?= $L['reading'] ?></b></p>
      </div>
    </div>
  </div>

<?php if (!empty($L['draft'])): ?>
  <div class="container">
    <div class="draftbar" role="note">
      <p class="label label--clay">Not yet reviewed</p>
      <p class="draftbar__text"><?= $L['draft'] ?></p>
    </div>
  </div>
<?php endif; ?>

  <div class="hero__proof legal__summary">
    <div>
      <p class="label">The short version</p>
      <ul class="ticks" role="list">
<?php foreach ($L['summary'] as $s): ?>
        <li><?= $s ?></li>
<?php endforeach; ?>
      </ul>
      <p class="legal__caveat">The summary is here to be useful, not to replace what follows. Where the two differ, the full document applies.</p>
    </div>
  </div>
</section>


<section class="band band--light legalbody">
  <div class="container legal">

    <nav class="legal__toc" aria-label="Contents">
      <p class="label">Contents</p>
      <ol>
<?php foreach ($L['toc'] as $i => [$id, $t]): ?>
        <li><a href="#<?= e($id) ?>"><span class="legal__n"><?= sprintf('%02d', $i + 1) ?></span><?= $t ?></a></li>
<?php endforeach; ?>
      </ol>
    </nav>

    <div class="legal__doc">
<?php foreach ($L['sections'] as [$id, $num, $heading, $blocks]): ?>
      <section class="clause" id="<?= e($id) ?>">
        <p class="label label--clay"><?= $num ?></p>
        <h2 class="clause__h"><?= $heading ?></h2>
<?php   foreach ($blocks as [$kind, $content]): ?>
<?php     if ($kind === 'p'): ?>
        <p class="clause__p"><?= $content ?></p>
<?php     elseif ($kind === 'ul'): ?>
        <ul class="ticks" role="list">
<?php       foreach ($content as $li): ?>
          <li><?= $li ?></li>
<?php       endforeach; ?>
        </ul>
<?php     elseif ($kind === 'table'): ?>
        <div class="clause__table">
<?php       foreach ($content as $r => $row): ?>
          <div class="clause__row<?= $r === 0 ? ' clause__row--head' : '' ?>">
<?php         foreach ($row as $cell): ?>
            <span><?= $cell ?></span>
<?php         endforeach; ?>
          </div>
<?php       endforeach; ?>
        </div>
<?php     endif; ?>
<?php   endforeach; ?>
      </section>
<?php endforeach; ?>
    </div>

  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
