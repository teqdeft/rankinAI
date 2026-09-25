# RankinAI — website

Static PHP site, built to become a WordPress theme with minimal change.

> **Start here:** `HANDOVER.md` for deployment and current state, `CLAUDE.md`
> for the rules and conventions before you change anything, `CLAIMS.md` for the
> record behind every factual claim on the site. This file is the structural
> reference.

---

## Running it on MAMP

Point MAMP's document root at **either** this folder or its parent — both work.
`config.php` detects which and sets `BASE` accordingly, so no links break either way.

| Document root            | Site URL                                  |
| ------------------------ | ----------------------------------------- |
| `…/final-website`        | `http://localhost:8888/`                  |
| `…/website`              | `http://localhost:8888/final-website/`    |

Apache must have **mod_rewrite** enabled for the trailing-slash tidy-up in
`.htaccess`. MAMP ships with it on. Nothing else breaks without it.


---

## Added since this file was first written

| File | What it is |
| --- | --- |
| `includes/auditform.php` | The two-field growth audit form, one include, used everywhere |
| `includes/modal.php` | The audit modal, rendered once per page from the footer |
| `includes/posts.php` | The blog index: topics, posts, search and image helpers |
| `includes/blog-template.php` | The article page |
| `blog.php`, `blog-*.php` | The blog index and seven articles |
| `CLAUDE.md`, `HANDOVER.md` | Working rules, and deployment and status |

---

## Structure

```
final-website/
├── index.php                 Home                    /
├── pricing.php               Pricing                 /pricing/
├── growth-audit.php          Growth audit            /growth-audit/  (now the no-JS fallback behind the modal)
├── blog.php                  Blog index              /blog/
├── blog-<slug>.php           7 articles              /blog/<slug>/
├── call.php                  Book a call             /call/
├── success-stories.php       Proof, three clients     /success-stories/
├── questions.php             Thirty answers          /questions/
├── about.php                 Who runs the work       /about/
├── how-we-work.php           The process             /how-we-work/
├── contact.php               Routing, not a queue    /contact/
├── privacy.php               ┐  drafts — includes/legal-template.php
├── terms.php                 ┘  NOT reviewed. See the banner on each.
├── success-stories-pine-tree-lane.php ┐ the three stories,
├── success-stories-sweetrush.php      ├─ includes/story-template.php
├── success-stories-studio-ubique.php  ┘ (two-segment URLs — see .htaccess)
├── ai-visibility.php  ┐
├── paid-media.php     │      the six services — data only,
├── content.php        ├───   all rendered by
├── websites.php       │      includes/service-template.php
├── reputation.php     │
├── crm.php            ┘
├── interior-design.php     ┐
├── construction.php        │
├── architecture.php        │   the nine industries — data only,
├── recruitment-agencies.php├── all rendered by
├── hr-outsourcing.php      │   includes/industry-template.php
├── accounting.php          │
├── it-consulting.php       │
├── law-firms.php           │
├── consulting.php          ┘
├── build-and-design.php    ┐   the three category hubs,
├── hr-and-recruitment.php  ├── includes/category-template.php
├── professional-services.php ┘ (no design canvas exists for these)
├── includes/
│   ├── config.php            URLs, navigation, footer links, site details
│   ├── header.php            <head> + site header + opening <main>
│   ├── service-template.php  the shared six-service page
│   ├── industry-template.php the shared industry page
│   ├── category-template.php the three "who we work with" hubs
│   ├── legal-template.php    privacy and terms
│   ├── story-template.php    the three success stories
│   └── footer.php            closing </main> + footer + scripts
├── assets/
│   ├── css/reset.css         normalise only, no brand styling
│   ├── css/style.css         tokens + every component
│   ├── css/responsive.css    breakpoint token overrides
│   ├── js/script.js          nav, section behaviour, motion, smooth scroll
│   └── images/               favicon is real; the rest are placeholders
├── .htaccess
├── CLAIMS.md                 every number on the site, and what backs it
└── _archive/                 superseded files, safe to delete
```

### File names and URLs are not the same thing

Templates sit flat in this folder. The URLs stay clean, and `.htaccess` maps
between them:

| URL              | Served by          |
| ---------------- | ------------------ |
| `/`              | `index.php`        |
| `/pricing/`      | `pricing.php`      |
| `/growth-audit/` | `growth-audit.php` |
| `/questions/`    | `questions.php`    |
| `/about/`        | `about.php`        |
| `/ai-visibility/`| `ai-visibility.php` |
| `/paid-media/`   | `paid-media.php`   |
| …and the other four services |

There is exactly one URL per page. `/pricing.php`, `/pricing` and
`/index.php` all 301 to the canonical form, so nothing is reachable at two
addresses.

**Never write `.php` in a link.** `url('/pricing/')` is the only correct
form — it is what the rewrite expects and what survives the WordPress move.

> **If a URL misbehaves after a rewrite change, clear the browser cache
> first.** These are 301s, and browsers cache them hard — a wrong one keeps
> being followed from cache long after the rule is fixed. Test in a private
> window, or append `?x=1`, before concluding the rule is broken.

### Adding a page

```php
<?php
require __DIR__ . '/includes/config.php';

$page_title = 'Title | RankinAI';
$page_desc  = 'One sentence, under 160 characters.';

require __DIR__ . '/includes/header.php';
?>

  <!-- sections -->

<?php require __DIR__ . '/includes/footer.php'; ?>
```

Every page is at the site root, so every page uses `__DIR__`.

**Never write a URL by hand.** Use the helpers:

| Helper                        | Returns                                 |
| ----------------------------- | --------------------------------------- |
| `url('/pricing/')`            | an internal link, prefixed correctly    |
| `asset('css/style.css')`      | an asset URL, with a cache-busting `?v=` |
| `is_current('/pricing/')`     | true on that page — used for nav state  |
| `e($string)`                  | escape for output                       |

That indirection is the whole reason the WordPress move is cheap.

### Section grounds

New pages should not write their own background gradient. The site has two
grounds and they are named in `style.css` section 3:

```html
<section class="band band--forest">   <!-- dark -->
<section class="band band--light">    <!-- cream -->
<section class="band band--forest band--tuck">  <!-- directly under a hero -->
```

`--tuck` pulls the section up under the hero's 50px bottom radius, so the
cream corner sits *on top of* the dark band. Only ever put it on the section
immediately following a hero.

The homepage and pricing page still carry their own hand-written copies of
these gradients. That is deliberate — they are correct, and rewriting working
sections buys nothing until one of them needs to change.

---

## Turning this into a WordPress theme

The folder is already shaped like one. The conversion is four steps.

**1. Move it.** `wp-content/themes/rankinai/`. `assets/` stays as it is.

**2. Rewrite three functions in `config.php`.** Nothing else references the
environment, so nothing else changes:

```php
function asset($path) { return get_template_directory_uri() . '/assets/' . ltrim($path, '/'); }
function url($path)   { return home_url($path); }
function is_current($path) { return untrailingslashit(home_url($path)) === untrailingslashit(get_permalink()); }
```

**3. Rename the templates.** They are already flat in the theme root, which
is where WordPress expects them — this step is now a rename and nothing else.

| Now                  | WordPress            |
| -------------------- | -------------------- |
| `index.php`            | `front-page.php`           |
| `pricing.php`          | `page-pricing.php`         |
| `growth-audit.php`     | `page-growth-audit.php`    |
| `call.php`             | `page-call.php`            |
| `success-stories.php`  | `page-success-stories.php` |
| `questions.php`        | `page-questions.php`       |
| `about.php`            | `page-about.php`           |
| `ai-visibility.php`    | a `service` post           |
| `includes/service-template.php` | `single-service.php` |
| `includes/header.php`| `header.php`         |
| `includes/footer.php`| `footer.php`         |

Then swap the requires for `get_header()` and `get_footer()`, add `wp_head()`
before `</head>` and `wp_footer()` before `</body>`, and add `functions.php`
with `wp_enqueue_style` / `wp_enqueue_script` calls replacing the tags.

WordPress also needs a `style.css` at the theme root carrying the theme header
comment. That is not the stylesheet — the real one stays in `assets/css/`.

**4. Decide what becomes editable.** Not everything should. Suggested split:

| Content                            | Where it should live |
| ---------------------------------- | -------------------- |
| Success stories, notes, people     | Custom post types    |
| Prices, package contents           | ACF options page     |
| Questions and answers              | ACF repeater — `$GROUPS` in `questions.php` is already shaped like one |
| Navigation labels and mega panels  | Stay in `config.php` |
| Section headings and body copy     | Stay in the template |

The last two are deliberate. A mega panel with three columns and a contextual
offer cannot be expressed by `wp_nav_menu`, and putting the positioning copy
behind an editor is how carefully-argued pages quietly turn into
"results-driven solutions" a year later.

---

## The questions page is generated from one array

`questions.php` holds all thirty Q&As in `$GROUPS`. That array renders the
accordion **and** the FAQPage JSON-LD at the bottom of the page. Never write
an answer twice — the copy that drifts is always the machine-readable one,
and that is the copy an assistant quotes back when someone asks about us.

A question can take an optional third element:

```php
['How big is the team?',
 'Small enough that you know everyone on your account.',
 'ADD THE HEADCOUNT — unconfirmed'],   // editor note
```

The third element renders on the page in the placeholder style and is
**excluded from the structured data**. Publishing "unverified" into JSON-LD
would be worse than publishing nothing: the caveat does not travel with the
sentence once a machine has quoted it.

---

## The six service pages share one template

I checked three of the service canvases before building — Search and AI
visibility, Paid media and Reputation carry the same seven sections in the
same order. So there is one page and six data files:

```
includes/service-template.php   the page
ai-visibility.php               $SERVICE = [...]; require the template
```

The industry pages work the same way — `includes/industry-template.php`
plus one data file each. I checked interior design, construction and
architecture: same nine sections, same order. **All nine are built**, and the
whole "Who we work with" mega panel is now live.

**No design canvas exists for the three category hubs.**
`includes/category-template.php` is assembled from components approved
elsewhere. If a canvas turns up, that is the file to replace.

All six services are built. Each file is content only — no markup, no CSS, no layout
decisions. A change to how a service page works happens once, in the
template, rather than six times.

`'story' => null` renders a block saying the case is with the client, instead
of a case. Four of the six use it, because only Pine Tree Lane is a
signed-off client. **Do not fill those in with anything that is not a real
customer** — see `CLAIMS.md`.

In WordPress this becomes `single-service.php` with a `service` post type —
`$SERVICE` maps to ACF fields almost one to one, which is the other reason
it is data rather than markup.

---

## Known gaps

- **The audit form has no endpoint.** `growth-audit.php` posts to `#`,
  and `script.js` intercepts that and shows a confirmation without sending
  anything. Nothing reaches you. Before this page goes live it needs a real
  `action`, and the block in `script.js` marked *DELETE THIS BLOCK* removed.
  Server-side validation is still required — the client-side checks only stop
  a visitor losing a completed form to a typo.
- **The call page has no scheduler.** `call.php` marks the embed point
  (`.booker__embed`, `data-scheduler`). Drop a Cal.com or Calendly embed in and
  delete the placeholder. **Keep the fallback block below it** — embeds are
  blocked by more corporate networks than people expect, and on this page that
  is the whole conversion.
- **Privacy and Terms are drafts and must not be published as they stand.**
  Both carry a visible banner saying so, and both contain marked notes listing
  what a qualified adviser has to decide. `privacy.php` accurately describes
  what the site does today; `terms.php` deliberately omits liability,
  warranties, governing law and payment terms rather than guessing at them.
- **Self-host the fonts and the two scripts before launch.** Every page load
  currently sends the visitor's IP to `fonts.googleapis.com`,
  `fonts.gstatic.com`, `cdnjs.cloudflare.com` and `cdn.jsdelivr.net` before
  any consent. A Munich court held in 2022 that embedding Google Fonts this
  way breached GDPR. Downloading them removes the issue, makes the site
  faster, and simplifies the privacy policy. About an hour of work.
- **The one-off price is unresolved.** The pricing and questions pages say a
  $500 setup; the how-we-work canvas said Foundation Fix, $2,400.
  `how-we-work.php` publishes neither and points at the pricing page. **See
  `CLAIMS.md` — this is the most serious contradiction on the site**, because
  it is the number a buyer checks first.
- **Every internal link on the site resolves.** There are no 404s left.
- **A testimonial slot is empty on the Pine Tree Lane story.** The canvas
  filled it with a named quote from "Rami Fakhoury, Founder". Do not put a
  plausible sentence and a plausible name there — see `CLAIMS.md`.
- **Two figures on the success stories page are unpublished** and show an
  "awaiting sign-off" state instead. **See `CLAIMS.md`** — that file is the
  register for every number on the site and what backs it. Read it before
  changing anything on the stories page.
- **Three of the four people on the About page are empty slots.** The design
  canvas filled them with invented staff, including a founder who is not the
  founder. **Read `CLAIMS.md` before touching that section** — do not fill the
  grid with plausible names to make it look finished.
- **Every office address and both phone numbers are unconfirmed**, and marked
  as such on the About page. The canvas gave the Zwolle office a Dubai phone
  number.
- **Every image is a placeholder** and says so. See `assets/images/README.txt`.

- Most nav destinations are not built yet and will 404.

---

## Third-party

Loaded from CDN in `includes/footer.php`:

- GSAP 3.12.5 + ScrollTrigger — reveals and the eyebrow rule
- Lenis 1.3.26 — smooth scroll

All three are skipped entirely under `prefers-reduced-motion`, and the page is
built so that a blocked CDN leaves it static rather than blank.
