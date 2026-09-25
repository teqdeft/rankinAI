# RankinAI website — handover

**Prepared 25 September 2026.** Everything needed to deploy this and to pick the
work up cold.

Three documents, and it is worth knowing which is which:

| File | What it is |
| --- | --- |
| `HANDOVER.md` | This. Deployment, current state, what to do next |
| `CLAUDE.md` | The rules and conventions. Read before changing anything |
| `CLAIMS.md` | Every factual claim on the site and the decision behind it |
| `README.md` | File-by-file structure and the WordPress conversion table |

---

## 1. Deploying

### Requirements

- PHP 7.4 or newer. No database, no Composer, no build step.
- Apache with `mod_rewrite` enabled. The clean URLs in `.htaccess` need it.
- Nothing else.

### Steps

1. Upload the contents of `final-website/` to the document root.
2. Confirm `.htaccess` uploaded. It is a dotfile and FTP clients hide it.
3. Load the site. If URLs 404, `mod_rewrite` is off or `AllowOverride` is not
   set to `All` for the directory.
4. **Leave `SITE_NOINDEX` as `true`** in `includes/config.php` unless this is
   the real public domain. It writes a `noindex` meta tag on every page.

`config.php` detects whether the site is at the root or in a subfolder and sets
`BASE` accordingly, so both work without editing links.

### Before it goes public

Work through section 3 below. **At minimum, wire up the forms.** Everything
else is a quality problem; a form that silently discards enquiries is a
commercial one.

---

## 2. What the site is

41 pages, all built and all reachable:

- Home, pricing, about, how we work, questions, contact
- 6 service pages (`/ai-visibility/`, `/paid-advertising/`, `/content/`,
  `/website-conversion/`, `/reputation/`, `/crm/`)
- 9 industry pages and 3 industry hub pages
- Success stories index and 3 client stories
- Blog index and 7 articles
- Growth audit, book a call, privacy, terms
- `sitemap.php`, a self-generating QA list of every URL

The growth audit is a **modal**: every "get your growth audit" link on the site
opens it over the current page. `/growth-audit/` still exists and answers as the
fallback for anyone without JavaScript.

Recent large changes, all on 25 September 2026: all 6 service pages and all 9
industry pages rebuilt to new client copy; the success story detail restructured;
the blog built from scratch; the audit form cut to two fields and made a modal.
Each is recorded in CLAIMS.md with what was removed and why.

---

## 3. What has to happen before launch

### Blocking

**1. No form handler.** Every form posts to `action="#"`.

Forms live at: `includes/auditform.php` (used by the modal on every page and by
`/growth-audit/`) and `contact.php`. The front-end validation and the "sent"
confirmation already work — `assets/js/script.js`, the block hooked on
`[data-auditform]`. It needs:

- A POST endpoint (a small `send.php`, or a third-party form service).
- Somewhere for the enquiry to go: an inbox, and ideally the CRM.
- Spam protection. There is none.
- A real `action` on both forms, replacing `#`.

The audit modal is now the primary conversion path on every page of the site.

**2. Two success story pages carry invented figures.**
`/success-stories/sweetrush/` and `/success-stories/studio-ubique/` each have a
results table their own file header marks `PLACEHOLDER DATA`. Six invented
numbers between them, plus figures in the overview paragraph and the facts
table. Either get the clients' real numbers, or rebuild those pages without a
results section. **Do not publish these as they are.**

**3. Client permissions.** The three case photographs were taken from the
clients' own websites. Each needs written permission before launch. SweetRush's
image looks like licensed stock, so their permission may not be theirs to give.
Detail in CLAIMS.md.

**4. Six of seven blog articles are placeholders.** Real titles, real
standfirsts, placeholder bodies. Replace them, or delete the six and remove the
blog from the nav until there is more than one article. They deliberately carry
no statistics or client names, so nothing false is in them.

**5. Flip `SITE_NOINDEX` to `false`** — only on the real domain.

### Should happen

- Team photographs for `/about/`; two team members have placeholder years of
  experience and project counts.
- Hero images for seven industry pages.
- The privacy policy names RankinAI FZ-LLC with no registered address.
- Blog photographs are hotlinked from Unsplash. If Unsplash is unreachable the
  blog images do not load. Self-hosting them means checking the licence terms.

### Decisions waiting on the client

- Blog article titles are Title Case; the rest of the site is sentence case.
- The audit form lost name, company and phone when it went to two fields.
- Whether `/growth-audit/` should actually be deleted rather than kept as the
  fallback.
- Whether the stepper FAQ on the home page should become the accordion used
  everywhere else.

---

## 4. Picking up the work

Read `CLAUDE.md` first. The short version:

- Never put a number, name or quote on a page unless it is real and sourced.
  Use the pending states the templates already have.
- No uppercase, no em-dashes, no semicolons, sentence case.
- RankinAI does not shoot photography.
- Bump `ASSET_VERSION` in `includes/config.php` after any CSS or JS change, or
  your change will not appear.
- One template per page type, one data file per page. Every section is guarded
  so a data file can omit it.
- Measure with `offsetTop`, not `getBoundingClientRect()`. The scroll animation
  makes rects lie.

The file header comments carry the reasoning for most non-obvious decisions,
including approaches that were tried and abandoned. They are worth reading
before redoing something.

---

## 5. Becoming a WordPress theme

The site was written for this. `README.md` has the full conversion table. In
short: each `includes/*-template.php` becomes a `single-*.php`, each data array
becomes ACF fields, `$NAV` and `$FOOTER` in `config.php` become menus, and
`includes/posts.php` becomes the `post` type. The blog's filtering and paging
become standard archive behaviour with no rewriting.
