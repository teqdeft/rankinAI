# RankinAI website — working notes for Claude

Read this before touching anything. It is the short version of decisions taken
over many sessions, and most of it exists because breaking it has already cost
somebody a rebuild.

`README.md` has the file-by-file structure. `CLAIMS.md` is the record of every
factual claim on the site and every decision about one. **When you change
anything that makes a claim, add to CLAIMS.md.** That file is the reason this
site can be trusted.

---

## What this is

A flat-file PHP site for RankinAI, a digital marketing agency based in
Zirakpur, India, selling to service businesses in the USA and UK. It is built
to become a WordPress theme with minimal change: the templates map to
`single-*.php` and the data arrays map to ACF fields.

**It is not live.** `SITE_NOINDEX` is `true` in `includes/config.php`. Leave it
true on any server that is not the real site.

## Running it

MAMP, document root at this folder **or** its parent — `config.php` detects
which and sets `BASE`. Apache needs `mod_rewrite` for the clean URLs in
`.htaccess`. Default local URL is `http://localhost:8888/`.

There is no build step. Edit a file, reload.

---

## House rules, in order of how much trouble breaking them causes

### 1. Never invent a fact

No figure, client name, testimonial, date or credential goes on a page unless
it is real and sourced. This is not a stylistic preference — the site's whole
argument is that it shows its working.

- A figure with no source renders its **pending state**, never a guess. The
  templates all support this: `'metric' => null`, or a row with `null` in the
  figure slot.
- A client quote is **never** written on a client's behalf. `'quote' => null`
  renders an honest empty state.
- Bracketed placeholders from a copy draft (`[Client name]`, `[Approved
  summary…]`) **never** print. Either fill them with something real or leave
  the section's pending state.
- A table of numbers in an article carries a caption saying where they came
  from, printed **above** the table.

Two invented figures reached production-ready pages this week and had to be
pulled from fifteen places between them. Assume any number you did not
personally source is one of those.

### 2. Tone and typography

- **No uppercase.** No `text-transform: uppercase`, no words typed in capitals.
  Acronyms (SEO, CRM, UAE, USA) are fine.
- **No em-dashes. No semicolons.** Rewrite as two sentences or use a comma.
- Sentence case for every heading. (The blog article titles are Title Case
  because they came that way from the client, and that inconsistency is a known
  open question.)
- Plain register. No "solutions", "leverage", "unlock", "supercharge".
- `&rsquo;` for apostrophes in PHP strings, not `'`.

### 3. Things RankinAI does not do

- **We do not shoot photography.** The team is in India, the clients are in the
  USA and UK. Copy may offer art direction; it must not offer a shoot. Several
  copy drafts have said "photography is commissioned separately", which is
  ambiguous — it gets rewritten to say the client commissions locally.
- No client logos exist yet. Story pages set the client name as a wordmark.

### 4. Nothing important depends on JavaScript

Blog search, topic filtering and paging are query-string state. The growth
audit modal intercepts a link that still works without it. The contents list on
an article is anchors first, highlight second. Keep it that way.

---

## Architecture

One template per page type, one data file per instance. The data file fills an
array and requires the template.

| Template | Data files | Array |
| --- | --- | --- |
| `includes/service-template.php` | 6 service pages | `$SERVICE` |
| `includes/industry-template.php` | 9 industry pages | `$INDUSTRY` |
| `includes/category-template.php` | 3 hub pages | `$C` |
| `includes/story-template.php` | 3 success stories | `$STORY` |
| `includes/blog-template.php` | 7 articles | `$POST` |
| `includes/legal-template.php` | privacy, terms | `$L` |

**Every section in every template is guarded.** A data file that does not set a
key does not render that section. This is what let the service and industry
templates carry two different content shapes at once while pages migrated one
at a time. Do not remove a guard to "tidy up".

Shared includes: `config.php` (nav, footer, helpers, `ASSET_VERSION`),
`header.php`, `footer.php`, `close.php` (the shared CTA), `modal.php` +
`auditform.php` (the growth audit), `posts.php` (the blog index), `team.php`.

### Conventions that will bite you

- **Bump `ASSET_VERSION` in `config.php` after any CSS or JS change.** Assets
  are cached hard by `.htaccess`. If a change "isn't showing", this is why.
- **Measure with `offsetTop` chains, not `getBoundingClientRect()`.** The GSAP
  reveal animation transforms elements as they scroll in, which moves the rect
  a browser reports without moving the element in the document. This has broken
  three separate features. An IntersectionObserver reads the same polluted
  geometry and is equally unreliable here.
- **Sections alternate light and forest**, and two of the same colour in a row
  is handled by a specific rule in `style.css` — it is supported, not a bug.
- **Grid items need `min-width: 0`**, and a responsive `1fr` should be
  `minmax(0, 1fr)`. Articles and tables have blown out layouts twice without
  this.
- **Responsive rule order matters.** `responsive.css` is one file with blocks at
  different breakpoints; at equal specificity the later rule wins regardless of
  which breakpoint is narrower. Add narrow-screen overrides at the end.
- URLs are clean and flat: `pricing.php` serves `/pricing/`, and a two-segment
  rule maps `/blog/some-slug/` to `blog-some-slug.php`. Never create a
  top-level page whose slug is two segments joined.

---

## What is not finished

**Blocking launch:**

1. **No form handler anywhere.** Every form posts to `action="#"`. The growth
   audit modal is now the primary conversion path on every page and it silently
   does nothing. This is the single most important outstanding item.
2. **Two success story pages carry invented results tables.**
   `/success-stories/sweetrush/` and `/success-stories/studio-ubique/` each have
   a results table their own file marks `PLACEHOLDER DATA` — six invented
   numbers between them, plus figures in the overview and facts rows. They need
   the clients' real numbers or a rebuild without a results section.
3. **Six of seven blog articles are placeholder bodies** under real titles.
   Only `/blog/website-visitors-not-clients/` is a real article.
4. **Client permissions.** The three case photographs were taken from the
   clients' own sites and need written sign-off before launch. See CLAIMS.md.
5. `SITE_NOINDEX` must be flipped to `false` only on the real domain.

**Open questions for the client:**

- Blog article titles are Title Case; every other heading on the site is
  sentence case. One convention should give.
- The audit form was cut from six fields to two. Name, company and phone are no
  longer collected. Worth watching once live.
- `/growth-audit/` still exists as the no-JS fallback behind the modal. If it
  should be deleted, the audit becomes unreachable without JavaScript and the
  URL needs a redirect.
- The stepper FAQ pattern survives only on the home page; every other page uses
  the `<details>` accordion.

**Smaller:**

- Team photographs for four people on `/about/`; two team members have
  placeholder years and project counts.
- Seven industry pages have no hero image.
- The privacy policy names RankinAI FZ-LLC with no registered address.
- Blog photographs are hotlinked from Unsplash, so the blog depends on a third
  party nothing else on the site depends on.

---

## How to work on this

Verify in a browser, by measurement, not by eye. The reveal animation hides
content until it scrolls in, so a screenshot of the top of a page proves
little. Check computed styles, element widths and overflow at 1440 and 375 at
minimum.

Read the file header comments. Most non-obvious decisions are explained where
they were made, including what was tried first and why it failed.
