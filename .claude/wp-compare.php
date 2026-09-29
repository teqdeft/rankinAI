<?php
/*
 * Compare a page on the flat build (localhost:8889) with the same page on the
 * WordPress site (localhost:8890): every heading, paragraph, list item, link
 * text and target, image file and alt, and section, inside <main>.
 *
 *   php .claude/wp-compare.php /about/ /pricing/ ...
 *   (from Git Bash, prefix MSYS_NO_PATHCONV=1 or the paths get rewritten)
 *   php .claude/wp-compare.php /static/path/::/wordpress/path/
 *
 * Prints one line per page and the first differences. Exit code 1 when any
 * page differs. Both servers must be running.
 */
function rc_page( $u ) {
	$ctx = stream_context_create( array( 'http' => array( 'ignore_errors' => true, 'timeout' => 60 ) ) );
	$h   = @file_get_contents( $u, false, $ctx );
	return array( (string) $h, isset( $http_response_header[0] ) ? substr( $http_response_header[0], 9, 3 ) : '???' );
}
function rc_blocks( $h ) {
	$d = new DOMDocument();
	@$d->loadHTML( '<?xml encoding="utf-8"?>' . $h );
	$x   = new DOMXPath( $d );
	$out = array();
	$m   = $x->query( '//main' )->item( 0 );
	if ( ! $m ) { return array(); }
	foreach ( $x->query( './/*[self::h1 or self::h2 or self::h3 or self::h4 or self::p or self::li or self::summary or self::a or self::b or self::figcaption or self::blockquote or self::td or self::th or self::label or self::button or self::dt or self::dd]', $m ) as $n ) {
		$t = trim( preg_replace( '/\s+/u', ' ', $n->textContent ) );
		if ( '' !== $t ) { $out[] = $n->nodeName . ': ' . $t; }
	}
	foreach ( $x->query( './/img', $m ) as $n ) {
		$src = basename( (string) parse_url( $n->getAttribute( 'src' ), PHP_URL_PATH ) );
		$out[] = 'img: ' . preg_replace( '/-\d+x\d+(\.\w+)$/', '$1', $src ) . ' | ' . $n->getAttribute( 'alt' );
	}
	foreach ( $x->query( './/a', $m ) as $n ) {
		$out[] = 'href: ' . preg_replace( '#^https?://localhost:\d+#', '', $n->getAttribute( 'href' ) );
	}
	foreach ( $x->query( './/section', $m ) as $n ) { $out[] = 'section: ' . $n->getAttribute( 'class' ); }
	return $out;
}
$bad = 0;
foreach ( array_slice( $argv, 1 ) as $arg ) {
	list( $a, $b ) = array_pad( explode( '::', $arg, 2 ), 2, null );
	$b = $b ?? $a;
	list( $ha, $ca ) = rc_page( 'http://localhost:8889' . $a );
	list( $hb, $cb ) = rc_page( 'http://localhost:8890' . $b );
	$A = rc_blocks( $ha );
	$B = rc_blocks( $hb );
	$miss  = array_values( array_diff( $A, $B ) );
	$extra = array_values( array_diff( $B, $A ) );
	preg_match( '#<title>(.*?)</title>#s', $ha, $ta );
	preg_match( '#<title>(.*?)</title>#s', $hb, $tb );
	$same_title = html_entity_decode( trim( $ta[1] ?? '' ) ) === html_entity_decode( trim( $tb[1] ?? '' ) );
	$ok = '200' === $ca && $ca === $cb && ! $miss && ! $extra && count( $A ) === count( $B ) && $same_title;
	if ( ! $ok ) { $bad++; }
	printf( "%s %-40s %s|%s  %d vs %d  missing %d  extra %d  title %s\n", $ok ? 'OK  ' : 'DIFF', $b, $ca, $cb, count( $A ), count( $B ), count( $miss ), count( $extra ), $same_title ? 'same' : 'DIFF' );
	foreach ( array_slice( $miss, 0, 6 ) as $l ) { echo '   - ', mb_substr( $l, 0, 140 ), "\n"; }
	foreach ( array_slice( $extra, 0, 6 ) as $l ) { echo '   + ', mb_substr( $l, 0, 140 ), "\n"; }
	if ( ! $same_title ) { echo '   title: ', trim( $ta[1] ?? '' ), ' | ', trim( $tb[1] ?? '' ), "\n"; }
}
exit( $bad ? 1 : 0 );
