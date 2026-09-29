<?php
/*
 * Create the site's content in WordPress.
 *   · pages built from sections (home), with their section content
 *   · every model in the theme's inc/models/ (services, industries, stories,
 *     blog articles, legal, hubs, and the one-off pages), filled from the
 *     flat build's content, word for word
 * Safe to re-run: existing posts are left alone.
 *
 *   php .claude/wp-seed.php                  everything missing
 *   php .claude/wp-seed.php --force          refill everything (overwrites edits)
 *   php .claude/wp-seed.php --only=about     one model (repeatable, comma list ok)
 *   php .claude/wp-seed.php --only=forms     the two Contact Form 7 forms
 *   php .claude/wp-seed.php --only=chrome    the header and footer (Website settings)
 */
$_SERVER['HTTP_HOST']   = 'localhost:8890';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/';
require dirname( __DIR__, 2 ) . '/rankinai-wp/rankinai-m/wp-load.php';

$force = in_array( '--force', $argv, true );
$only  = array();
foreach ( $argv as $a ) {
	if ( 0 === strpos( $a, '--only=' ) ) { $only = array_merge( $only, explode( ',', substr( $a, 7 ) ) ); }
}
if ( ! $only ) { echo rankinai_seed( $force ), "\n"; }
echo rankinai_seed_models( $force, $only ?: null ), "\n";
if ( ! $only || in_array( 'forms', $only, true ) ) {
	echo rankinai_seed_forms( $force ), "\n";
}
if ( ! $only || in_array( 'chrome', $only, true ) ) {
	echo rankinai_seed_chrome( $force ), "\n";
}
flush_rewrite_rules( false );
echo "rewrite rules flushed\n";
