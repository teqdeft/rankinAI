<?php
/**
 * Sitemap — a testing tool, not a page for visitors
 * -----------------------------------------------------------------------------
 * Every page on the site, grouped, with the URL, the file that serves it, and
 * whatever is still unresolved on it.
 *
 * It generates itself. The groups below list slugs; everything else — whether
 * the file exists, the page title, how many placeholders it carries — is read
 * from the filesystem at request time. A hand-written list would be wrong the
 * first time someone adds a page, which is exactly when you would trust it.
 *
 * It carries noindex. This is scaffolding, and a QA checklist is not something
 * you want appearing in search results for your own brand name.
 *
 * The tick boxes remember themselves in localStorage so a testing pass can be
 * done over more than one sitting. That is per-browser and per-device, so it
 * is a convenience rather than a record — clear it with the button.
 */
require __DIR__ . '/includes/config.php';

$page_title  = 'Sitemap — every page, for testing | RankinAI';
$page_desc   = 'Every page on the site with its URL, the file that serves it, and what is still unresolved.';
$page_robots = 'noindex, nofollow';

/* -----------------------------------------------------------------------------
 * The groups. Slugs only — the rest is derived.
 * -------------------------------------------------------------------------- */
$GROUPS = [
  ['Core', 'The pages a visitor reaches from the header.', [
    ['/', 'index'],
    ['/about/', 'about'],
    ['/pricing/', 'pricing'],
    ['/how-we-work/', 'how-we-work'],
    ['/questions/', 'questions'],
    ['/contact/', 'contact'],
  ]],
  ['Conversion', 'Where every call to action on the site leads.', [
    ['/growth-audit/', 'growth-audit'],
    ['/call/', 'call'],
  ]],
  ['Services', 'One template, six data files.', [
    ['/ai-visibility/', 'ai-visibility'],
    ['/paid-advertising/', 'paid-media'],
    ['/content/', 'content'],
    ['/website-conversion/', 'websites'],
    ['/reputation/', 'reputation'],
    ['/crm/', 'crm'],
  ]],
  ['Industries', 'One template, nine data files.', [
    ['/interior-design/', 'interior-design'],
    ['/construction/', 'construction'],
    ['/architecture/', 'architecture'],
    ['/recruitment-agencies/', 'recruitment-agencies'],
    ['/hr-outsourcing/', 'hr-outsourcing'],
    ['/accounting/', 'accounting'],
    ['/it-consulting/', 'it-consulting'],
    ['/law-firms/', 'law-firms'],
    ['/consulting/', 'consulting'],
  ]],
  ['Category hubs', 'No design canvas exists for these three.', [
    ['/build-and-design/', 'build-and-design'],
    ['/hr-and-recruitment/', 'hr-and-recruitment'],
    ['/professional-services/', 'professional-services'],
  ]],
  ['Success stories', 'Two-segment URLs, served by hyphenated files.', [
    ['/success-stories/', 'success-stories'],
    ['/success-stories/pine-tree-lane/', 'success-stories-pine-tree-lane'],
    ['/success-stories/sweetrush/', 'success-stories-sweetrush'],
    ['/success-stories/studio-ubique/', 'success-stories-studio-ubique'],
  ]],
  ['Legal', 'Drafts. Both carry a banner saying so.', [
    ['/privacy/', 'privacy'],
    ['/terms/', 'terms'],
  ]],
];

/* -----------------------------------------------------------------------------
 * Read each file for the things a tester needs to know about before opening it
 * -------------------------------------------------------------------------- */
function page_facts(string $slug): array {
    $file = __DIR__ . '/' . $slug . '.php';
    if (!is_file($file)) {
        return ['exists' => false, 'title' => '—', 'flags' => [], 'lines' => 0];
    }
    $src = file_get_contents($file);

    /* The <title>, minus the brand suffix */
    $title = '';
    if (preg_match("/\\\$page_title\s*=\s*'([^']+)'/", $src, $m)) {
        $title = preg_replace('/\s*\|\s*RankinAI\s*$/', '', $m[1]);
    }

    /* What is unresolved. Counted from source, so it stays true as the files
       change rather than describing how they looked when this was written. */
    $flags = [];
    $ph = substr_count($src, 'is-placeholder');
    if ($ph)                                  $flags[] = [$ph . ' placeholder' . ($ph > 1 ? 's' : ''), 'warn'];
    if (strpos($src, "'story' => null") !== false)  $flags[] = ['case pending', 'warn'];
    if (strpos($src, "'quote' => null") !== false)  $flags[] = ['quote pending', 'warn'];
    if (preg_match('/\[null,/', $src))              $flags[] = ['figure pending', 'warn'];
    if (strpos($src, "'draft' =>") !== false)       $flags[] = ['DRAFT — not reviewed', 'stop'];
    if (strpos($src, 'data-auditform') !== false)   $flags[] = ['form, no endpoint', 'stop'];
    if (strpos($src, 'data-scheduler') !== false)   $flags[] = ['scheduler missing', 'stop'];
    if (strpos($src, 'case__photo') !== false)      $flags[] = ['photo placeholders', 'info'];

    return [
        'exists' => true,
        'title'  => $title ?: $slug,
        'flags'  => $flags,
        'lines'  => substr_count($src, "\n"),
    ];
}

$total = 0; $missing = 0; $stops = 0;
foreach ($GROUPS as [, , $rows]) {
    foreach ($rows as [$url, $slug]) {
        $f = page_facts($slug);
        $total++;
        if (!$f['exists']) $missing++;
        foreach ($f['flags'] as [$t, $kind]) if ($kind === 'stop') { $stops++; break; }
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="hero hero--page">
  <div class="hero__inner container">
    <h1 class="hero__title hero__title--page">Every page, for testing.</h1>

    <div class="hero__meta hero__meta--page">
      <p class="hero__sub">Generated from the filesystem each time this page loads, so it can&rsquo;t drift from what&rsquo;s actually there. The tick boxes remember themselves in this browser &mdash; useful for working through a pass over more than one sitting, but they&rsquo;re not a record anyone else can see.</p>
      <div class="hero__actions">
        <button class="btn btn--primary" type="button" data-reset-checks>Clear all ticks</button>
        <p class="hero__note">This page is <code>noindex</code>. It&rsquo;s a build tool, not content &mdash; remove it before launch or leave it, but don&rsquo;t link to it.</p>
      </div>
    </div>
  </div>

  <div class="hero__proof hero__proof--four">
    <div class="stat stat--wide">
      <span class="stat__n"><?= $total ?></span>
      <span class="stat__k">Pages listed</span>
    </div>
    <div class="stat stat--wide">
      <span class="stat__n" data-done>0</span>
      <span class="stat__k">Ticked off in this browser</span>
    </div>
    <div class="stat stat--wide">
      <span class="stat__n<?= $missing ? ' is-placeholder' : '' ?>"><?= $missing ?></span>
      <span class="stat__k">Files missing</span>
    </div>
    <div class="stat stat--wide">
      <span class="stat__n<?= $stops ? ' is-placeholder' : '' ?>"><?= $stops ?></span>
      <span class="stat__k">Pages with a blocker before launch</span>
    </div>
  </div>
</section>


<section class="band band--light legalbody">
  <div class="container">

<?php foreach ($GROUPS as [$name, $note, $rows]): ?>
    <div class="smgroup">
      <div class="smgroup__head">
        <p class="smgroup__note"><?= $note ?></p>
      </div>

      <div class="smlist">
<?php foreach ($rows as [$url, $slug]): $f = page_facts($slug); ?>
        <div class="smrow<?= $f['exists'] ? '' : ' smrow--missing' ?>">
          <label class="smrow__check">
            <input type="checkbox" data-check="<?= e($slug) ?>">
            <span class="sr-only">Tested <?= e($f['title']) ?></span>
          </label>

          <div class="smrow__main">
            <a class="smrow__title" href="<?= url($url) ?>"><?= $f['title'] ?></a>
            <p class="smrow__url"><?= e($url) ?> <span class="smrow__file">&rarr; <?= e($slug) ?>.php<?= $f['lines'] ? ', ' . $f['lines'] . ' lines' : '' ?></span></p>
          </div>

          <div class="smrow__flags">
<?php if (!$f['exists']): ?>
            <span class="flag flag--stop">File missing</span>
<?php else: foreach ($f['flags'] as [$text, $kind]): ?>
            <span class="flag flag--<?= $kind ?>"><?= e($text) ?></span>
<?php endforeach; endif; ?>
          </div>

          <a class="smrow__open" href="<?= url($url) ?>" target="_blank" rel="noopener">Open &nearr;</a>
        </div>
<?php endforeach; ?>
      </div>
    </div>
<?php endforeach; ?>

    <div class="notthis">
      <p class="label label--clay">What the flags mean</p>
      <p class="notthis__text">
        <b>DRAFT</b> &mdash; the page carries a visible banner and must not be published as it stands.
        <b>form, no endpoint</b> &mdash; the audit form posts to <code>#</code>; the confirmation is faked by JavaScript and nothing is sent.
        <b>scheduler missing</b> &mdash; the booking embed is a placeholder.
        <b>figure / case / quote pending</b> &mdash; deliberately empty, awaiting something real. See <code>CLAIMS.md</code>.
        <b>photo placeholders</b> &mdash; expected everywhere; no photography exists yet.
      </p>
    </div>

  </div>
</section>

<script>
/* Tick state, per browser. Wrapped because storage throws in a private window
   with site data blocked, and a QA page that white-screens is worse than one
   that forgets. */
(function () {
  'use strict';
  var KEY = 'rankinai:sitemap-checks';
  var boxes = [].slice.call(document.querySelectorAll('[data-check]'));
  var counter = document.querySelector('[data-done]');
  var state = {};

  try { state = JSON.parse(localStorage.getItem(KEY) || '{}'); } catch (e) { state = {}; }

  function save() { try { localStorage.setItem(KEY, JSON.stringify(state)); } catch (e) {} }
  function count() {
    var n = boxes.filter(function (b) { return b.checked; }).length;
    if (counter) counter.textContent = n;
  }

  boxes.forEach(function (b) {
    var k = b.getAttribute('data-check');
    b.checked = !!state[k];
    b.closest('.smrow').classList.toggle('is-done', b.checked);
    b.addEventListener('change', function () {
      state[k] = b.checked;
      b.closest('.smrow').classList.toggle('is-done', b.checked);
      save(); count();
    });
  });
  count();

  var reset = document.querySelector('[data-reset-checks]');
  if (reset) reset.addEventListener('click', function () {
    boxes.forEach(function (b) { b.checked = false; b.closest('.smrow').classList.remove('is-done'); });
    state = {}; save(); count();
  });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
