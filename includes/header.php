<?php
/**
 * RankinAI — document head, and the site header
 * =============================================================================
 * Becomes header.php in the WordPress theme almost unchanged. The parts that
 * would move: <title> and the meta description come from wp_head(), and the
 * $NAV loop below becomes wp_nav_menu() — or stays, since a three-column mega
 * panel with a contextual offer is not something wp_nav_menu can express.
 *
 * Pages set $page_title and $page_desc before requiring this file.
 * =============================================================================
 */

$page_title = $page_title ?? ($SITE['name'] . ' — ' . $SITE['tagline']);
$page_desc  = $page_desc  ?? 'We build and run the system that keeps new work coming in.';
$body_class = $body_class ?? '';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_desc) ?>">
<?php /* SITE_NOINDEX in config.php covers the whole site on a test server.
         Individual pages can still set $page_robots, which the QA sitemap
         does because it is a build tool rather than content. */
$robots = defined('SITE_NOINDEX') && SITE_NOINDEX
        ? 'noindex,nofollow'
        : ($page_robots ?? '');
?>
<?php if ($robots !== ''): ?>
<meta name="robots" content="<?= e($robots) ?>">
<?php endif; ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;1,6..72,400&family=Public+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap">

<link rel="stylesheet" href="<?= asset('css/reset.css') ?>">
<link rel="stylesheet" href="<?= asset('css/style.css') ?>">
<link rel="stylesheet" href="<?= asset('css/responsive.css') ?>">

<link rel="icon" href="<?= asset('images/favicon.png') ?>" sizes="any">
<link rel="apple-touch-icon" href="<?= asset('images/tile-forest-512.png') ?>">

<script>
  /* Pre-hide the first screen only, and only if motion is welcome. A failsafe
     in script.js removes this class if GSAP has not started, so a blocked CDN
     degrades to a static page rather than an empty one. */
  (function () {
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.documentElement.classList.add('anim');
    }
  })();
</script>
</head>

<body<?= $body_class ? ' class="' . e($body_class) . '"' : '' ?>>

<a class="skip-link" href="#main">Skip to content</a>

<!-- =============================================================================
     HEADER
     Six nav items, one green button. No phone number, no login, no search.
     Three of the six open panels; the rest link straight through.
     ============================================================================= -->
<header class="site-header" data-header>
  <div class="site-header__panel">

    <a class="wordmark" href="<?= url('/') ?>" aria-label="<?= e($SITE['name']) ?> home">Rankin<em>AI</em><i>.</i></a>

    <button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-nav">
      <span class="nav-toggle__bars" aria-hidden="true"></span>
      <span class="nav-toggle__label">Menu</span>
    </button>

    <nav class="nav" id="primary-nav" data-nav data-lenis-prevent aria-label="Primary">
      <ul class="nav__list" role="list">
<?php foreach ($NAV as $item): ?>
<?php if (empty($item['cols'])): ?>
        <li class="nav__item">
          <a class="nav__link<?= is_current($item['link']) ? ' is-current' : '' ?>" href="<?= url($item['link']) ?>"><?= $item['label'] ?></a>
        </li>
<?php else: ?>
        <li class="nav__item">
          <button class="nav__link" type="button" data-panel-trigger aria-expanded="false" aria-controls="<?= e($item['id']) ?>">
            <?= $item['label'] ?> <span class="nav__chev" aria-hidden="true"></span>
          </button>

          <div class="mega" id="<?= e($item['id']) ?>" data-panel>
            <div class="mega__inner">
<?php foreach ($item['cols'] as $col): ?>
              <div class="mega__col">
                <?php /* A column label, never a link. "Design and construction"
                         names the group of industries under it; it is not a
                         place to go. The three hub pages it used to point at
                         are listed in sitemap.php. */ ?>
                <p class="label"><?= $col['label'] ?></p>
                <ul class="mega__list" role="list">
<?php foreach ($col['items'] as [$name, $href, $desc]): ?>
                  <li><a href="<?= url($href) ?>"><strong><?= $name ?></strong><span><?= $desc ?></span></a></li>
<?php endforeach; ?>
                </ul>
              </div>
<?php endforeach; ?>
<?php if (!empty($item['offer'])): ?>
              <div class="mega__col mega__offer">
                <p class="label label--clay"><?= $item['offer']['label'] ?></p>
                <p><?= $item['offer']['text'] ?></p>
                <a class="btn btn--primary" href="<?= url($item['offer']['cta'][1]) ?>"><?= $item['offer']['cta'][0] ?></a>
              </div>
<?php endif; ?>
            </div>
          </div>
        </li>
<?php endif; ?>
<?php endforeach; ?>
      </ul>

      <div class="nav__actions">
        <a class="nav__secondary" href="<?= url('/call/') ?>">Book a 20-minute call</a>
        <a class="btn btn--green" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
      </div>
    </nav>

  </div>
</header>

<main id="main">
