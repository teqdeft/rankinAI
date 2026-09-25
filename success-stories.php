<?php
/**
 * Success stories — the proof page
 * -----------------------------------------------------------------------------
 * Linked from the nav, the footer, the homepage and both mega panels. It is
 * the page that decides whether anything claimed on the other four is
 * believed, which is why the honesty rules below are not negotiable.
 *
 * RULES THAT MUST SURVIVE ANY REDESIGN
 * · Every figure carries a period. "4×" alone is marketing; "4× in three
 *   months" is evidence. The section that said this out loud was removed on
 *   22 Sep 2026 at Kulwant's request. The RULE still holds everywhere on the
 *   site, it is simply no longer stated on this page. See CLAIMS.md.
 * · Where a number is not signed off, the slot shows that it is pending.
 *   It is never filled with an adjective, and never quietly removed.
 * · The Studio Ubique card discloses the partnership. Kulwant is listed on
 *   their site as Partner, CEO — a prospect finds that in ninety seconds,
 *   and finding it themselves is far worse than being told.
 * · Two of the three metrics are currently unpublished. See CLAIMS.md.
 *
 * WordPress: rename to page-success-stories.php. The three stories become a
 * `story` custom post type — see the README's conversion table.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'Success stories | RankinAI';
$page_desc  = 'See what changed, and what made the difference. The business, the challenge, the decisions we took and the progress they helped create.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO

     REWRITTEN 25 Sep 2026 to Kulwant's copy, and to the centred hero every
     rebuilt page on the site now uses: eyebrow, heading, two lines of sub, then
     the growth audit and the call.

     WHAT CAME OFF WITH IT
     · the stat bar. "62% clients retained beyond five years" was marked in
       this file as a placeholder to be measured before launch and had been
       sitting here unsourced since. It is gone rather than carried forward.
       "200+ clients served" and "2009" went with it: the new copy has no stat
       bar, and both still appear on /about/ where they are explained.
     · the hero note, "free, back within a working day, and yours whether you
       hire us or not". The second action is now the shared "book a 20-minute
       call", the same as every other page.
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>Success stories</span></p>

    <h1 class="hero__title">See what changed. And what made the difference.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">Behind every result is a business, a challenge and a series of decisions.<span class="hero__sub2">Explore the work we delivered, why we took that approach, and the progress it helped create.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="<?= url('/growth-audit/') ?>">Get your growth audit <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     02 — THE STORIES
     ========================================================================== -->
<section class="band band--light band--tuck">
  <div class="container">

    <div class="questions__head">
      <div>
        <h2 class="questions__title">Client results</h2>
      </div>
      <p class="stories__note">Different countries, different trades, and the same problem underneath: good businesses that were hard to find.</p>
    </div>

    <div class="storylist">

      <!-- 01 — Pine Tree Lane ------------------------------------------- -->
      <article class="story">
        <div class="story__copy">
          <div class="story__head">
            <span class="label label--clay">01</span>
            <div>
              <h3 class="story__name">Pine Tree Lane</h3>
              <p class="story__where"><span class="label">Dubai, UAE</span><span class="label">Interior design &amp; bespoke joinery</span></p>
            </div>
          </div>

          <div class="metric">
            <b class="metric__n">4&times;</b>
            <span class="metric__k">organic traffic in three months</span>
          </div>

          <p class="story__text">A factory, a showroom and a ten-year warranty &mdash; and almost nobody finding them. The searches that mattered were going to firms who outsourced the making. The results for custom kitchens in Dubai are now theirs.</p>

          <ul class="tags" role="list">
            <li>AI and search visibility</li>
            <li>Content</li>
            <li>Website and conversion</li>
          </ul>

          <a class="link-quiet link-quiet--bold" href="<?= url('/success-stories/pine-tree-lane/') ?>">Read the full story</a>
        </div>

        <div class="story__photo case__photo">
          <img src="<?= asset('images/case-pine-tree-lane.webp') ?>" alt="Pine Tree Lane kitchen: pale blue cabinetry and a marble island in a Dubai villa" width="1200" height="580" loading="lazy" decoding="async">
        </div>
      </article>

      <!-- 02 — SweetRush ------------------------------------------------- -->
      <article class="story story--dark">
        <div class="story__copy">
          <div class="story__head">
            <span class="label label--clay">02</span>
            <div>
              <h3 class="story__name">SweetRush</h3>
              <p class="story__where"><span class="label">San Francisco, USA</span><span class="label">Learning &amp; development consultancy</span></p>
            </div>
          </div>

          <?php /* The 3.2x came off 25 Sep 2026: invented during copywriting and
                   never published. See CLAIMS.md. */ ?>
          <div class="metric metric--pending">
            <b class="metric__n">&mdash;</b>
            <span class="metric__k">Figure with the client for sign-off</span>
          </div>

          <p class="story__text">A twenty-year reputation among learning and development buyers, and a website that read like a much smaller firm&rsquo;s brochure. The reputation existed. Nothing online carried it.</p>

          <ul class="tags" role="list">
            <li>AI and search visibility</li>
            <li>Content</li>
          </ul>

          <a class="link-quiet link-quiet--onforest" href="<?= url('/success-stories/sweetrush/') ?>">Read the full story</a>
        </div>

        <div class="story__photo case__photo">
          <img src="<?= asset('images/case-sweetrush.webp') ?>" alt="Two SweetRush colleagues working through a problem on a laptop" width="1200" height="580" loading="lazy" decoding="async">
        </div>
      </article>

      <!-- 03 — Studio Ubique --------------------------------------------- -->
      <article class="story">
        <div class="story__copy">
          <div class="story__head">
            <span class="label label--clay">03</span>
            <div>
              <h3 class="story__name">Studio Ubique</h3>
              <p class="story__where"><span class="label">Zwolle, Netherlands</span><span class="label">Digital agency &mdash; our partner</span></p>
            </div>
          </div>

          <?php /* The +58% came off 25 Sep 2026: invented during copywriting and
                   never published. See CLAIMS.md. */ ?>
          <div class="metric metric--pending">
            <b class="metric__n">&mdash;</b>
            <span class="metric__k">Figure with the client for sign-off</span>
          </div>

          <p class="story__text">Excellent work, invisible outside their own network, and no record of it that a prospect could check. We&rsquo;re a partner in the business, which is why it&rsquo;s said on the card rather than in a footnote.</p>

          <ul class="tags" role="list">
            <li>AI and search visibility</li>
            <li>Paid advertising</li>
          </ul>

          <a class="link-quiet link-quiet--bold" href="<?= url('/success-stories/studio-ubique/') ?>">Read the full story</a>
        </div>

        <div class="story__photo case__photo">
          <img src="<?= asset('images/case-studio-ubique.webp') ?>" alt="Three Studio Ubique team members with coffee in the Zwolle office" width="1200" height="580" loading="lazy" decoding="async">
        </div>
      </article>

      <!-- More, unnamed --------------------------------------------------- -->
      <div class="more">
        <p class="label label--clay">More stories</p>
        <p class="more__title">More on the way.</p>
        <p class="more__text">Recruitment, construction and professional services, written up in the same shape as the three above.</p>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
