<?php
/**
 * RankinAI — site footer and scripts
 * =============================================================================
 * Becomes footer.php in the WordPress theme. The scripts at the bottom would
 * move into functions.php as wp_enqueue_script() calls, and wp_footer() goes
 * immediately before </body>.
 *
 * Cream, never forest. The close section above it is the page's one dark band
 * and two stacked would swallow it.
 * =============================================================================
 */
?>
<?php /* The close is part of the page, not of the footer, so it goes inside
         <main>. It lives here rather than in each page because fourteen
         hand-written copies had drifted into eleven different asks. A page
         opts out with $no_close and adjusts its buttons with $close_btn and
         $close_link: see includes/close.php. */ ?>
<?php if (empty($no_close)) require __DIR__ . '/close.php'; ?>
</main>

<!-- =============================================================================
     FOOTER
     All nine industries are linked here, and on the home page this is the only
     place they are. Category names are links too.
     ============================================================================= -->
<footer class="site-footer">
  <div class="container">

    <?php /* Top row: what the company does, and how to reach it. Says who the
             work is for to a reader who arrived deep in the site and scrolled
             to the bottom without ever passing the home page. */ ?>
    <div class="footer__top">
      <div class="footer__about">
        <?php /* The logo sits with the sentence that says what the company
                 does, rather than on its own above the copyright line.

                 This is the drawn wordmark from the logo pack rather than
                 the type-set one used in the header: outlined paths, so it
                 does not wait on Newsreader and cannot reflow if the font
                 fails. Forest and clay on a transparent ground, which is
                 the primary version for a cream band. */ ?>
        <a class="footer__mark" href="<?= url('/') ?>">
          <img src="<?= asset('images/logo-forest.svg') ?>" alt="<?= e($SITE['name']) ?>" width="1713" height="356">
        </a>
        <p>RankinAI helps design and construction firms, recruitment and HR businesses, and professional service firms attract relevant enquiries and turn more of them into opportunities.</p>
        <p>Search, content, paid advertising, websites, reputation and follow-up, connected around your business goals.</p>
        <p class="footer__strap">Get found. Get booked.</p>
      </div>

      <div class="footer__col footer__contact">
        <p class="label">Talk to us</p>
        <a class="link-quiet link-quiet--bold" href="mailto:<?= e($SITE['email']) ?>"><?= e($SITE['email']) ?></a>
        <p class="footer__pair"><span class="label">Phone</span><b><?= e($SITE['phone']) ?></b></p>
        <p class="footer__pair"><span class="label">Offices</span><b><?= e($SITE['offices']) ?></b></p>
      </div>
    </div>

    <div class="footer__cols">
      <div class="footer__col">
        <p class="label label--clay">Getting found</p>
        <ul role="list">
<?php foreach ($FOOTER['found'] as [$label, $href]): ?>
          <li><a href="<?= url($href) ?>"><?= $label ?></a></li>
<?php endforeach; ?>
        </ul>
      </div>

      <div class="footer__col">
        <p class="label label--clay">Getting booked</p>
        <ul role="list">
<?php foreach ($FOOTER['booked'] as [$label, $href]): ?>
          <li><a href="<?= url($href) ?>"><?= $label ?></a></li>
<?php endforeach; ?>
        </ul>
      </div>

      <div class="footer__col footer__col--quiet">
        <p class="label">Company</p>
        <ul role="list">
<?php foreach ($FOOTER['company'] as [$label, $href]): ?>
          <li><a href="<?= url($href) ?>"><?= $label ?></a></li>
<?php endforeach; ?>
        </ul>
      </div>

    </div>

    <div class="footer__industries">
      <p class="label">Industries</p>
<?php foreach ($FOOTER['industries'] as [$cat, $catHref, $items]): ?>
      <?php /* The category name is a heading over the list, not a link.
               $catHref is left in the data so the hub URL is not lost, but
               nothing renders it here any more. */ ?>
      <div class="ind">
        <p class="ind__cat"><?= $cat ?></p>
        <p class="ind__list">
<?php $out = [];
      foreach ($items as [$label, $href]) { $out[] = '<a href="' . url($href) . '">' . $label . '</a>'; }
      echo implode(' &middot; ', $out); ?>
        </p>
      </div>
<?php endforeach; ?>
    </div>

    <?php /* The wordmark moved up to the about block, and the licence line
             is gone, so this is one quiet line now. */ ?>
    <div class="footer__base">
      <p class="footer__legal">
        &copy; <?= e($SITE['name']) ?> <?= e($SITE['year']) ?> &middot;
        <a href="<?= url('/privacy/') ?>">Privacy</a> &middot;
        <a href="<?= url('/terms/') ?>">Terms</a>
      </p>
    </div>

  </div>
</footer>

<?php /* The growth audit modal. One per page, before the scripts that drive
         it. Every "get your growth audit" link opens this instead of loading
         the page; without the script the link still loads the page. */ ?>
<?php require __DIR__ . '/modal.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.3.26/dist/lenis.min.js"></script>
<script src="<?= asset('js/script.js') ?>"></script>
</body>
</html>
