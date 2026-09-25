<?php
/**
 * Blog — the overview
 * -----------------------------------------------------------------------------
 * Served at /blog/. Rebuilt 25 Sep 2026 to Kulwant's copy.
 *
 * SEARCH, FILTERING AND PAGING ARE ALL SERVER-SIDE, on ?q=, ?topic= and ?page=.
 * No JavaScript, so it works on a slow connection and with the script blocked,
 * every view has its own URL that can be linked and shared, and the same
 * behaviour survives the move to WordPress, where the chips become category
 * archives and the search box hits a real query.
 *
 * "LOAD MORE ARTICLES" IS A LINK, not a button that fetches. With seven posts
 * and six to a page there is one more page. It keeps its own URL and it works
 * without script, which a fetch button does not.
 *
 * THE FEATURED CARD PRINTS NO AUTHOR. Kulwant's copy has "[Author name] ·
 * [Publication date] · [Reading time]" there. Bracketed placeholders do not go
 * on a page, and the three dummy posts have no named author on purpose, so the
 * line carries the date and the reading time only. See CLAIMS.md.
 *
 * WordPress: becomes archive.php for the `post` type.
 */
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/posts.php';

/* One topic, or all. Anything not in the list falls back to all rather than
   showing an empty page for a mistyped query string. */
$active = isset($_GET['topic']) && isset($TOPICS[$_GET['topic']]) ? $_GET['topic'] : '';
$q      = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
$page   = max(1, (int) ($_GET['page'] ?? 1));

/* Four to a page. Six would fit the current seven posts on one page and the
   "load more" state would never appear, which is a state Kulwant needs to be
   able to see. Raise it once there are enough articles for it not to matter. */
$PER_PAGE = 4;

/* Filter, then search. A reader who has picked a topic and then typed a word
   expects both to apply. */
$found = $active
    ? array_values(array_filter($POSTS, function ($p) use ($active) { return $p['topic'] === $active; }))
    : $POSTS;
$found = posts_search($found, $q);

/* The featured card only appears on the unfiltered first page. Under a search
   or a topic it would be an answer to a question nobody asked. */
$feature   = ($active === '' && $q === '' && $page === 1) ? post_featured() : null;
$listing   = $feature
    ? array_values(array_filter($found, function ($p) use ($feature) { return $p['slug'] !== $feature['slug']; }))
    : $found;

$total   = count($listing);
$pages   = max(1, (int) ceil($total / $PER_PAGE));
$page    = min($page, $pages);
$shown   = array_slice($listing, ($page - 1) * $PER_PAGE, $PER_PAGE);
$hasMore = $page < $pages;

/* The query string for a link that keeps the current view and changes one
   thing. Empty values drop out, so /blog/ stays clean. */
$qs = function (array $over = []) use ($active, $q, $page) {
    $parts = array_filter([
        'topic' => $over['topic'] ?? $active,
        'q'     => $over['q']     ?? $q,
        'page'  => $over['page']  ?? null,
    ], function ($v) { return $v !== '' && $v !== null; });
    return $parts ? '?' . http_build_query($parts) : '';
};

$page_title = ($q !== '' ? 'Search results' : ($active ? $TOPICS[$active] : 'The RankinAI blog')) . ' | RankinAI';
$page_desc  = 'Practical guides and perspectives on getting found, getting chosen and turning interest into new business.';

/* Only the topics that actually have a post behind them. An empty chip is a
   dead end, and on a young blog most of them would be. */
$used = array_unique(array_column($POSTS, 'topic'));

require __DIR__ . '/includes/header.php';
?>

<!-- 01 — HERO ============================================================ -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>The RankinAI blog</span></p>

    <h1 class="hero__title">Make more of your marketing.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">What helps the right clients find you? What gives them confidence to enquire? Where should your next marketing investment go?<span class="hero__sub2">Explore practical guides and perspectives on getting found, getting chosen and turning interest into new business.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>


<!-- 02 — SEARCH AND FILTERS ==============================================
     A real form and real links. Each view has an address, so a reader can send
     someone straight to the articles about their own problem.
     ====================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="finder">
      <form class="bsearch" method="get" action="<?= url('/blog/') ?>" role="search">
        <label class="label label--clay" for="blog-q">Search articles</label>
        <div class="bsearch__row">
          <input class="bsearch__input" type="search" id="blog-q" name="q" value="<?= e($q) ?>" placeholder="Search by topic or question" autocomplete="off">
<?php if ($active): ?>
          <input type="hidden" name="topic" value="<?= e($active) ?>">
<?php endif; ?>
          <button class="btn btn--primary bsearch__go" type="submit">Search <?= btn_arrow() ?></button>
        </div>
      </form>

      <nav class="browse" aria-label="Browse articles by topic">
        <p class="label label--clay">Browse by topic</p>
        <div class="filters">
          <a class="filter<?= $active === '' ? ' is-on' : '' ?>" href="<?= url('/blog/') . $qs(['topic' => '']) ?>"<?= $active === '' ? ' aria-current="true"' : '' ?>>All articles</a>
<?php foreach ($TOPICS as $key => $name): ?>
<?php if (!in_array($key, $used, true)) continue; ?>
          <a class="filter<?= $active === $key ? ' is-on' : '' ?>" href="<?= url('/blog/') . $qs(['topic' => $key]) ?>"<?= $active === $key ? ' aria-current="true"' : '' ?>><?= $name ?></a>
<?php endforeach; ?>
        </div>
      </nav>
    </div>

  </div>
</section>


<?php if ($feature): ?>
<!-- 03 — THE FEATURED ARTICLE ============================================
     Full width on the dark band, so the one piece we are pointing at is not
     competing with six cards for the same attention.
     ====================================================================== -->
<section class="band band--light">
  <div class="container">

    <article class="feature feature--light<?= !empty($feature['img']) ? ' feature--img' : '' ?>">
<?php if (!empty($feature['img'])): ?>
      <a class="feature__img" href="<?= url('/blog/' . $feature['slug'] . '/') ?>" tabindex="-1" aria-hidden="true">
        <img src="<?= e(post_img($feature, 1000, 750)) ?>" alt="" width="1000" height="750" loading="lazy" decoding="async">
      </a>
<?php endif; ?>
      <div class="feature__say">
      <p class="feature__flags">
        <span class="label label--clay">Featured</span>
        <span class="label"><?= $TOPICS[$feature['topic']] ?></span>
      </p>
      <h2 class="feature__title"><a href="<?= url('/blog/' . $feature['slug'] . '/') ?>"><?= $feature['title'] ?></a></h2>
      <p class="feature__stand"><?= $feature['stand'] ?></p>
      <p class="feature__meta"><time datetime="<?= e($feature['date']) ?>"><?= post_date($feature['date']) ?></time> &middot; <?= $feature['mins'] ?> min read</p>
      <a class="btn btn--primary" href="<?= url('/blog/' . $feature['slug'] . '/') ?>">Read article <?= btn_arrow() ?></a>
      </div>
    </article>

  </div>
</section>
<?php endif; ?>


<!-- 04 — THE LISTING ===================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
<?php if ($q !== ''): ?>
        <p class="eyebrow"><span>Search results</span></p>
        <h2 class="questions__title">Results for &ldquo;<?= e($q) ?>&rdquo;</h2>
        <p class="stories__note"><?= $total ?> <?= $total === 1 ? 'article' : 'articles' ?> found.</p>
<?php elseif ($active): ?>
        <p class="eyebrow"><span><?= $TOPICS[$active] ?></span></p>
        <h2 class="questions__title">Explore the latest thinking.</h2>
<?php else: ?>
        <p class="eyebrow"><span>Article listing</span></p>
        <h2 class="questions__title">Explore the latest thinking.</h2>
<?php endif; ?>
      </div>
    </div>

<?php if ($shown): ?>
    <div class="postgrid">
<?php foreach ($shown as $p): ?>
      <article class="post">
<?php if (!empty($p['img'])): ?>
        <a class="post__img" href="<?= url('/blog/' . $p['slug'] . '/') ?>" tabindex="-1" aria-hidden="true">
          <img src="<?= e(post_img($p, 800, 480)) ?>" alt="" width="800" height="480" loading="lazy" decoding="async">
        </a>
<?php endif; ?>
        <p class="post__meta">
          <span class="label label--clay"><?= $TOPICS[$p['topic']] ?></span>
          <span class="post__mins"><?= $p['mins'] ?> min read</span>
        </p>
        <h3 class="post__title"><a href="<?= url('/blog/' . $p['slug'] . '/') ?>"><?= $p['title'] ?></a></h3>
        <p class="post__stand"><?= $p['stand'] ?></p>
        <p class="post__more"><a class="link-quiet link-quiet--bold" href="<?= url('/blog/' . $p['slug'] . '/') ?>">Read article</a></p>
      </article>
<?php endforeach; ?>
    </div>

    <?php /* Unsplash's guidelines want the photographer credited. Each article
             carries its own credit under the picture; this line covers the
             thumbnails, which are too small to hold one each. */ ?>
    <p class="aftercards">Photographs by the photographers credited on each article, via <a class="link-quiet" href="<?= e(unsplash_url()) ?>" rel="noopener">Unsplash</a>.</p>

<?php if ($hasMore): ?>
    <p class="loadmore">
      <a class="btn btn--outline" href="<?= url('/blog/') . $qs(['page' => $page + 1]) ?>">Load more articles <?= btn_arrow() ?></a>
    </p>
<?php elseif ($pages > 1): ?>
    <p class="loadmore">
      <a class="link-quiet link-quiet--bold" href="<?= url('/blog/') . $qs(['page' => null]) ?>">Back to the first page</a>
    </p>
<?php endif; ?>

<?php else: ?>
    <?php /* The empty state is a real answer, not a shrug. It says what to try
             next and gives a way back. */ ?>
    <div class="noresults">
      <p class="noresults__t">Nothing here for that search yet.</p>
      <p class="noresults__x">Try a broader term, such as &ldquo;enquiries&rdquo;, &ldquo;search&rdquo; or &ldquo;website&rdquo;, or browse the topics above.</p>
      <a class="btn btn--outline" href="<?= url('/blog/') ?>">Clear search <?= btn_arrow() ?></a>
    </div>
<?php endif; ?>

  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
