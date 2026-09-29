<?php
/*
 * One-off local install of the WordPress site in ../rankinai-wp/rankinai-m/,
 * from the command line. Safe to re-run: an installed site only gets its
 * settings, plugins and theme re-applied.
 *
 *   php .claude/wp-install.php
 *
 * The admin login it creates goes into LOCAL-LOGIN.txt in that folder, which
 * is git-ignored.
 */
$url = 'http://localhost:8890';
define( 'WP_INSTALLING', true );
$_SERVER['HTTP_HOST']   = 'localhost:8890';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/';
require dirname( __DIR__, 2 ) . '/rankinai-wp/rankinai-m/wp-load.php';
require_once ABSPATH . 'wp-admin/includes/upgrade.php';
require_once ABSPATH . 'wp-admin/includes/plugin.php';

if ( ! is_blog_installed() ) {
	$pass = wp_generate_password( 20, false );
	wp_install( 'RankinAI', 'rankinai', 'admin@rankinai.local', false, '', $pass );
	file_put_contents( ABSPATH . 'LOCAL-LOGIN.txt', "Local WordPress admin, $url/wp-admin/\nuser: rankinai\npassword: $pass\n" );
	echo "installed\n";
} else {
	echo "already installed\n";
}

update_option( 'siteurl', $url );
update_option( 'home', $url );
update_option( 'blogname', 'RankinAI' );
update_option( 'blogdescription', 'Digital marketing for firms that sell expertise' );
update_option( 'blog_public', '0' );
update_option( 'permalink_structure', '/blog/%postname%/' ); // posts at /blog/{slug}/, pages at /{slug}/
update_option( 'timezone_string', 'Asia/Kolkata' );

$r = activate_plugins( array(
	'advanced-custom-fields-pro/acf.php',
	'acf-extended/acf-extended.php',
	'classic-editor/classic-editor.php',
	'contact-form-7/wp-contact-form-7.php',
) );
echo is_wp_error( $r ) ? 'plugins: ' . $r->get_error_message() . "\n" : "plugins active\n";

switch_theme( 'rankinai' );
echo 'theme: ' . get_stylesheet() . "\n";

global $wp_rewrite;
$wp_rewrite->init();
$wp_rewrite->flush_rules( false );
echo "done\n";
