# RankinAI — project setup

## Structure
- Repo root — the flat-file PHP site. The design and copy reference for the theme.
- `../rankinai-wp/rankinai-m/` — the WordPress site, its own repo (github.com/teqdeft/rankinai-m), checked out beside this one. Custom theme: `wp-content/themes/rankinai/`. The helper scripts in `.claude/` find it by that relative path.
- `CLAUDE.md` — conventions and house rules. `CLAIMS.md` — every factual claim and its source.

## Local development (WordPress)
1. Start MySQL (XAMPP: `C:\xampp\mysql\bin\mysqld.exe --defaults-file=C:\xampp\mysql\bin\my.ini --standalone`).
2. Create a database `rankinai_local` (utf8mb4).
3. In the WordPress folder, copy `wp-config.example.php` to `wp-config.php` and fill in fresh salts. Keep table prefix `rankinai_`. Its `RANKINAI_FLAT_DIR` points the seed at this repo. Change it if the two folders are not side by side as above.
4. Run `php .claude/wp-install.php` once. It installs WordPress at `http://localhost:8890`, sets pretty permalinks, activates the plugins and the theme, and writes the admin login to `LOCAL-LOGIN.txt` in the WordPress folder (git-ignored).
5. Run `php .claude/wp-seed.php` to create every page, service, industry, success story and blog article, filled with the flat build's content and images (imported into the Media Library). `--force` refills everything from the flat build, overwriting edits made in WordPress. `--only=about` does one model. `--only=forms` creates the two Contact Form 7 forms, `--only=chrome` fills the header and footer on Website settings.
6. Serve it from this repo's root: `php -S localhost:8890 -t ../rankinai-wp/rankinai-m .claude/wp-router.php`, or the `rankinai-wp` entry in `.claude/launch.json`.

Under Apache (MAMP) with the WordPress folder as document root, the site runs at `/`, which is what its `.htaccess` is written for. At any other path, update `siteurl` and `home` to match, then save Settings → Permalinks once.

## Editing rules
- All ACF fields are registered in code (`inc/acf-fields.php`), never in the ACF admin.
- The header and footer (menu, drop-downs, footer columns and links) are edited on Website settings. Empty fields show the original.
- Pages are built from the "Sections" flexible content field. Every field left empty shows the original copy.
- A new section type is one layout in `rankinai_section_layouts()` and one partial in `template-parts/sections/section-{name}.php`.
- Every other page is a model in `inc/models/` (see the header of `inc/model-engine.php`): services, industries and success stories are post types, blog articles are posts, and the one-off pages use their own page template. Change a model's schema, not its fields.
- Check a converted page against the flat build with `php .claude/wp-compare.php /path/` (both servers running).
- CSS and JS live in the theme's `assets/`. They are the same files as the flat build's `assets/`: change both, or port from one to the other.

## Plugins (bundled in the repo)
ACF Pro (copied from the Sokkies install, licensed), ACF Extended (free), Classic Editor, Contact Form 7 (free).

Forms: edit the fields, wording and email under Contact → Contact Forms, and choose which form each slot uses on Website settings. `RANKINAI_FORMS_SKIP_MAIL` in `wp-config.php` writes submissions to `wp-content/debug.log` instead of mailing them. Keep it for local only. The live site needs working mail (an SMTP plugin or the host's mail) and must not define it.

Check the ACF Pro license covers this site before it goes live, and do not update ACF Pro without checking the license.
