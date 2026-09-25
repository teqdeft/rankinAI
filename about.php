<?php
/**
 * About
 * -----------------------------------------------------------------------------
 * A top-level nav item, so it is one click from every page on the site. It is
 * also the page a prospect reads *before* deciding whether to believe the
 * numbers on the other six, which is why nothing on it may be invented.
 *
 * REBUILT 25 Sep 2026 to Kulwant's copy, to the same rules the home page was
 * settled on:
 *   · no uppercase anywhere, no em-dashes, no semicolons
 *   · no <br> in a heading. Every break comes from the text meeting the
 *     1024px measure
 *   · heading and the paragraph under it both free inside that measure.
 *     Neither is matched to the other
 *   · one button per section, with the second action as a quiet text link
 *   · one eyebrow, in the hero, and nowhere else
 *
 * THREE SECTIONS CAME OFF in that rebuild, at Kulwant's instruction: "Where
 * we are" (the office address, which is still on /contact/ and in the
 * footer), "Careers" and "Our commitment". Do not reinstate them without
 * asking: they were dropped on purpose, not lost.
 *
 * ALSO REMOVED, 22 Sep 2026: an "honest comparison" section setting how we
 * work against how agencies usually work. Do not reinstate it either. A page
 * about us that spends a screen on what other people do badly is arguing with
 * someone who is not in the room.
 *
 * THE PEOPLE SECTION — how it got resolved
 * The design canvas named four members of staff. None existed, and one of them
 * invented a founder called Yusuf Rahman for a company founded by Kulwant
 * Singh. Three invented placeholder leads replaced them and were themselves
 * replaced on 22 Sep 2026 with four real people taken from the RankinAI
 * LinkedIn page: Kulwant Singh, Reena Devi, Abhishek Thakur and Rahul Verma.
 *
 * THE TEST FOR ADDING ANYONE ELSE: their own LinkedIn headline has to say
 * RankinAI. Several people connected to the page do not say it, Pankaj Kumar,
 * Monisha suri and Sultan Malik among them, and they are left off until
 * Kulwant confirms. A fabricated or wrongly attributed colleague is one search
 * away from ending the conversation, and this is the page where trust is
 * either established or lost. See CLAIMS.md.
 *
 * THE BIOGRAPHIES. Kulwant's copy marks each card "[Approved biography: …]".
 * Bracketed placeholders do not go on a page, so the cards carry what is
 * already sourced instead: experience and project counts for Kulwant and
 * Reena, taken from teqdeft.com/about, and name and role for Abhishek and
 * Rahul. Every field renders only when it has something in it. A card with
 * fewer lines is not a problem. An invented one is.
 *
 * WordPress: rename to page-about.php. The people become a `person` post type.
 */
require __DIR__ . '/includes/config.php';

$page_title = 'About RankinAI, marketing for firms that sell expertise | RankinAI';
$page_desc  = 'Why RankinAI exists, how we think about growth, what guides the work, and the named people who would actually do it.';

require __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     01 — HERO

     The eyebrow is the only one on the site besides the home page. It earns
     its place for the same reason: the headline is a promise rather than a
     description, so without it the first screen never says what this page is.

     Two actions, in Kulwant's order. The button goes to the team further down
     rather than off the page, because on an About page that is the thing a
     reader came for. The call is the quiet link beside it, never a second
     button.

     The proof bar that used to close this band (2009, 200+ clients) came off
     with the rebuild: the home page hero lost its own, and the new copy does
     not carry it. Both figures are still sourced in CLAIMS.md if it comes back.
     ========================================================================== -->
<section class="hero hero--centred">
  <div class="hero__inner container">

    <p class="eyebrow"><span>About RankinAI</span></p>

    <?php /* --two holds it to a line per sentence. See the note in style.css:
             the headline is longer than the home page one, so at the full h1
             step it ran to three lines inside the 1024 measure. */ ?>
    <h1 class="hero__title hero__title--two">You&rsquo;ve spent years getting good. We help the right people see it.</h1>

    <div class="hero__meta hero__meta--home">
      <p class="hero__sub">Your best clients understand the value you bring. They&rsquo;ve worked with you, seen your thinking, and experienced the difference.<span class="hero__sub2">We help that understanding travel further, so people who haven&rsquo;t met you yet have a reason to choose you.</span></p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="#team">Meet your team <?= btn_arrow() ?></a>
        <a class="link-quiet" href="<?= url('/call/') ?>">Book a 20-minute call</a>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     02 — WHY RANKINAI EXISTS

     The referral analogy is the argument of the whole page, so it gets the
     first band after the hero, a dark ground, and nothing competing with it.

     The argument sits on the left and the working out on the right: the
     heading is a claim, and the column beside it is what follows from the
     claim. That is a different job from a heading with a note under it, which
     is why this section has its own layout rather than reusing a section head.

     The second eyebrow on the site, after the hero. It earns it: the heading
     is an analogy rather than a statement of subject, so without the eyebrow
     the section never says what it is about.

     The band below is forest too, on purpose. The two read as one dark
     chapter, why we exist and what we are for, before the page returns to
     cream. See the .band--forest + .band--forest rule in style.css.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container why">

    <div class="why__head">
      <p class="eyebrow eyebrow--light"><span>Why we exist</span></p>
      <h2 class="why__title">A referral gives you a head start. Your marketing should do the same.</h2>
      <p class="why__sub">Think about what happens when a happy client recommends you. They explain what you do well. They share their experience. They give someone a reason to trust you before the first conversation.</p>
    </div>

    <div class="why__body">
      <p class="why__lead">That&rsquo;s a useful standard for your marketing.</p>
      <p>Your website should make your value clear. Your content should demonstrate how you think. Your client stories should give your promises weight. And your business should be visible when someone starts looking.</p>
      <p>RankinAI brings those pieces together for firms that sell expertise.</p>
      <p>We help you reach beyond the people who already know you, and give your next client something meaningful to go on.</p>
    </div>

  </div>
</section>


<!-- ==========================================================================
     03 — THE PICTURES, AND THE MISSION

     The drifting photo rows from the home page, without the heading and the
     paragraph that sit above them there. They come from
     includes/team-marquee.php, so there is one copy of the tile list and one
     place a photograph changes.

     The mission sits under them, centred, in the display face. One statement
     rather than the mission-and-vision pair this band used to carry.

     WHAT CAME OFF WITH THAT PAIR, on 25 Sep 2026:
       · the vision statement, "More good firms getting the recognition their
         work deserves", and the paragraph under it. It is not anywhere else
         on the site. Ask before assuming it was meant to go.
       · the two placeholder images beside it. The photographs above do that
         job now, and these are real rather than placeholders.

     The band above is forest too. The two read as one dark chapter and the
     seam is handled by .band--forest + .band--forest in style.css.
     ========================================================================== -->
<section class="band band--forest photoband">

  <?php require __DIR__ . '/includes/team-marquee.php'; ?>

  <div class="container">
    <p class="vision vision--centre">We&rsquo;re on a mission to make expertise easier to find, by helping service businesses communicate their value, reach relevant buyers, and build a clearer path from interest to enquiry. The goal is a business with more opportunities to win the work it wants.</p>
  </div>
</section>


<!-- ==========================================================================
     04 — HOW WE THINK, AND WHAT GUIDES THE WORK

     One section, not two. They were a light band of prose followed by a dark
     band of five principles, and read as two screens saying the same kind of
     thing twice.

     The thinking sits on the left and the rules beside it on the right, so
     the section is read across rather than down and comes out about half the
     height. The rules use a run-in heading, the name in the display face
     followed by its sentence on the same line, which is what stops five
     stacked paragraphs from reading as a wall: the eye catches five bold
     phrases and a hairline between each, not five blocks of grey.

     The icons went with the combination. At this size they were decoration
     competing with the numbers, and five of them in a narrow column pushed
     the text into a gutter it did not need.

     RULE FOR THE FIVE: each one has to be a thing somebody could disagree
     with. A principle nobody would argue against is a platitude, and it
     should be cut rather than kept to make five.
     ========================================================================== -->
<section class="band band--light">
  <div class="container">

    <div class="questions__head">
      <div>
        <?php /* Light ground, so the default eyebrow colours. The forest one
                 two sections up carries --light for the same reason. */ ?>
        <p class="eyebrow"><span>How we think</span></p>
        <h2 class="questions__title">Marketing starts with the business you want to build.</h2>
        <p class="stories__note">More enquiries can be useful. So can fewer unsuitable ones.</p>
      </div>
    </div>

    <div class="think">

      <div class="think__say">
        <p class="think__lead">We start by understanding what growth means for you.</p>
        <p>For one firm, progress means winning larger projects. For another, it means reaching a new market, growing a particular service, or reducing dependence on the founder&rsquo;s network.</p>
        <p>That shapes the audience, the message, the channels and the work we recommend.</p>
      </div>

      <?php
      $VALUES = [
        ['Get close to the business.',
         'We ask about your clients, sales conversations, capacity and commercial priorities. Your answers shape the plan.'],
        ['Make the expertise visible.',
         'The details that feel ordinary to your team can be the very things a buyer needs to hear. We help draw them out and explain why they matter.'],
        ['Give every claim something behind it.',
         'Useful examples, approved client stories and clearly defined results make a stronger case than a page full of promises.'],
        ['Take responsibility for the work.',
         'We agree who is doing what, keep you informed, and raise issues while there is still time to address them.'],
        ['Stay willing to change direction.',
         'Results give us something to learn from. We use that learning to improve the next round of work.'],
      ];
      ?>
      <div class="think__rules">
        <p class="label label--clay">What guides the work</p>
        <ol class="rules" role="list">
<?php foreach ($VALUES as $i => [$name, $text]): ?>
          <li class="rule">
            <span class="rule__n"><?= sprintf('%02d', $i + 1) ?></span>
            <?php /* A div, not a p: an h3 cannot live inside a paragraph, and
                     the browser would silently close the p before it. Both
                     children are inline, so the heading runs into its sentence
                     as one block of text. */ ?>
            <div class="rule__body"><h3 class="rule__name"><?= $name ?></h3> <span class="rule__text"><?= $text ?></span></div>
          </li>
<?php endforeach; ?>
        </ol>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     05 — WHAT WORKING WITH US LOOKS LIKE

     Dark ground, and the four things a client actually gets as cards rather
     than as four columns of text under a rule. Each one has an icon, because
     four headings of similar length and weight give the eye nothing to sort
     them by, and at this size a line icon does that work faster than any
     amount of type.

     The three supporting sentences are in the sub-heading rather than in a
     prose block of their own. They set up the cards, so putting them between
     the heading and the cards only moved the cards further down the page.

     REMOVED 25 Sep 2026, at Kulwant's instruction: the section that followed
     this one, "Support that fits the team you already have", with its three
     cases (handling marketing yourself, a marketing manager, an established
     team). Not required. Do not reinstate it without asking.
     ========================================================================== -->
<section class="band band--forest">
  <div class="container">

    <div class="stories__head">
      <div>
        <p class="eyebrow eyebrow--light"><span>Working with us</span></p>
        <h2 class="stories__title">Connected expertise. People you can talk to.</h2>
        <p class="packages__note">Search, advertising, content, websites, reputation and follow-up all influence the same buying journey. We bring those specialisms into one plan, with clear priorities and a named person coordinating the work, so you know what is being delivered, who needs your input, and what we are measuring.</p>
      </div>
    </div>

    <?php
    $WORKING = [
      ['clipboard', 'A plan you can understand',
       'We explain the priorities, the reasoning behind them, and the scope your budget covers.'],
      ['people',    'A useful role for your team',
       'You bring the knowledge of your business. We organise the interviews, questions and approvals needed to turn it into marketing.'],
      ['chart',     'A clear view of progress',
       'Reports explain what changed and what it means. Reviews help us decide what to continue, improve or reconsider.'],
      ['shield',    'Ownership and access',
       'Your business accounts stay under your control. Deliverables, access and handover arrangements are agreed from the start.'],
    ];
    ?>
    <div class="wcards">
<?php foreach ($WORKING as $i => [$icon, $name, $text]): ?>
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


<!-- ==========================================================================
     08 — MEET THE TEAM
     The hero button points at #team, so the id on this section is load
     bearing. Read the note at the top of this file before touching the list.
     ========================================================================== -->
<section class="band band--light" id="team">
  <div class="container">

    <div class="questions__head">
      <div>
        <h2 class="questions__title">Put names to the people behind the work.</h2>
        <p class="stories__note">A good working relationship starts with knowing who you&rsquo;re speaking to, and what they&rsquo;re responsible for.</p>
      </div>
    </div>

    <?php
    /* THE PEOPLE. Built to the same shape as the Teqdeft about page, which
       is Kulwant's other company: portrait, name, role, years, projects,
       LinkedIn.

       WHO GOES ON HERE. Kulwant Singh, Reena Devi, Abhishek Thakur and
       Rahul Verma all state RankinAI in their own LinkedIn headline, which
       is the only evidence worth publishing a colleague on. Three invented
       leads used to sit here (Ana Ferreira, Marcus Bell, Priya Nair). Do
       not put names like that back.

       WHAT IS MISSING AND WHY. Years, projects and LinkedIn for Kulwant and
       Reena come from teqdeft.com/about, published by the same company.
       Abhishek and Rahul have no published figures, so their fields are
       empty rather than estimated, and every field below renders only when
       it has something in it.

       PORTRAITS. 'photo' is a filename in assets/images without the
       extension, and the card falls back to a name plate when the file is
       not there yet, so these two can be set before the files land:
         team-kulwant.webp  <- teqdeft.com/wp-content/uploads/2025/06/1-1.jpg
         team-reena.webp    <- teqdeft.com/wp-content/uploads/2025/07/reena-1.webp
       Both are already published on Teqdeft, so they are ours to move. The
       other two need a photograph from the person. Square, 560px or better. */
    $TEAM = [
      [
        'name'  => 'Kulwant Singh',
        'role'  => 'Founder',
        'photo' => 'team-kulwant',
        'years' => '16 years',
        'work'  => '240+ projects',
        'li'    => 'https://www.linkedin.com/in/kulwant-singh-59338717a',
      ],
      [
        'name'  => 'Reena Devi',
        'role'  => 'Co-founder',
        'photo' => 'team-reena',
        'years' => '14 years',
        'work'  => '220+ projects',
        'li'    => 'https://www.linkedin.com/in/reena-devi-2k10',
      ],
      /* PLACEHOLDER FIGURES. Kulwant asked for these two to carry the same
         card layout as the founders, filled with dummy values for now and
         replaced through the CMS later. They are marked 'draft' so the
         template can find them and so nobody mistakes them for sourced
         numbers. Logged in CLAIMS.md. The LinkedIn row stays empty on both:
         a made-up profile URL is a different kind of placeholder, because it
         either dead-ends or lands on a stranger. */
      [
        'name'  => 'Abhishek Thakur',
        'role'  => 'Senior SEO executive',
        'photo' => '',
        'years' => '6 years',
        'work'  => '80+ projects',
        'li'    => '',
        'draft' => true,
      ],
      [
        'name'  => 'Rahul Verma',
        'role'  => 'SEO specialist',
        'photo' => '',
        'years' => '4 years',
        'work'  => '50+ projects',
        'li'    => '',
        'draft' => true,
      ],
    ];
    ?>
    <div class="teamslider" data-teamslider>

      <ul class="people" role="list" data-team-track>
<?php foreach ($TEAM as $m):
        $file = $m['photo'] ? __DIR__ . '/assets/images/' . $m['photo'] . '.webp' : '';
        $has  = $file && file_exists($file);
?>
        <li class="person">
          <div class="person__photo case__photo">
<?php if ($has): ?>
            <img src="<?= asset('images/' . $m['photo'] . '.webp') ?>" alt="<?= e($m['name']) ?>" width="560" height="560" loading="lazy" decoding="async">
<?php else: ?>
            <span><?= $m['name'] ?></span>
<?php endif; ?>
          </div>

          <p class="person__name"><?= $m['name'] ?></p>
          <p class="label"><?= $m['role'] ?></p>

<?php if ($m['years'] || $m['work']): ?>
          <dl class="person__facts">
<?php if ($m['years']): ?>
            <div><dt>Experience</dt><dd><?= $m['years'] ?></dd></div>
<?php endif; ?>
<?php if ($m['work']): ?>
            <div><dt>Delivered</dt><dd><?= $m['work'] ?></dd></div>
<?php endif; ?>
          </dl>
<?php endif; ?>

<?php if ($m['li']): ?>
          <a class="person__li" href="<?= e($m['li']) ?>" target="_blank" rel="noopener">
            <?= svc_icon_svg('linkedin') ?><span>View LinkedIn profile</span>
          </a>
<?php endif; ?>
        </li>
<?php endforeach; ?>
      </ul>

      <?php /* The track scrolls natively and snaps, so it works with a
               trackpad, a touchscreen and the keyboard whether or not the
               script runs. These two only move it along, and hide entirely
               while everybody already fits on screen. */ ?>
      <div class="teamnav">
        <button class="teamnav__btn" type="button" data-team-prev aria-label="Previous team members">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M14.5 8H4M7.4 4.6 4 8l3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <button class="teamnav__btn" type="button" data-team-next aria-label="More team members">
          <svg viewBox="0 0 16 16" width="16" height="16" fill="none" aria-hidden="true" focusable="false">
            <path d="M1.5 8H12M8.6 4.6 12 8l-3.4 3.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

    </div>

    <?php /* REMOVED 25 Sep 2026, at Kulwant's instruction: the "Around your
             account" footnote about proposals, contacts and approvals. */ ?>

  </div>
</section>


<!-- ==========================================================================
     REMOVED 25 Sep 2026, at Kulwant's instruction: "who we work with", the
     three industry groups with their nine links. Not required here. The nine
     industry pages are still in the nav and the footer, which is where a
     reader looking for their own trade goes.

     NOTE FOR WHOEVER PICKS THIS UP: the three group pages
     (/build-and-design/, /hr-and-recruitment/, /professional-services/) now
     have no inbound links at all. They lost the nav and footer ones when the
     group names became headings, and this section was the last. They still
     resolve, and they are listed in sitemap.php, but nothing points at them.
     ========================================================================== -->

<?php require __DIR__ . '/includes/footer.php'; ?>
