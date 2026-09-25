<?php
/*
 * Router for PHP's built-in server, standing in for the .htaccess rules
 * (which only Apache reads). Local development only.
 *
 *   php -S localhost:8889 -t . .claude/dev-router.php
 */
$root = dirname(__DIR__);
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Server-side files stay out of the browser.
if (preg_match('#^/(includes|_archive|\.claude)/|^/(README|CLAIMS|CLAUDE|HANDOVER)\.md$#', $path)) {
    http_response_code(404);
    exit('Not found');
}

// Real files (assets, robots.txt) are served as-is.
if ($path !== '/' && is_file($root . $path) && substr($path, -4) !== '.php') {
    return false;
}

$qs = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';

// /index.php -> /, /pricing.php -> /pricing/
if (preg_match('#^/(.*?)(index)?\.php$#', $path, $m)) {
    $target = $m[2] ? '/' . $m[1] : '/' . $m[1] . '/';
    header('Location: ' . $target . $qs, true, 301);
    exit;
}

// Missing trailing slash.
if ($path !== '/' && substr($path, -1) !== '/' && !is_dir($root . $path)) {
    header('Location: ' . $path . '/' . $qs, true, 301);
    exit;
}

if ($path === '/') {
    $file = 'index.php';
} elseif (preg_match('#^/([^/]+)/$#', $path, $m)) {
    $file = $m[1] . '.php';
} elseif (preg_match('#^/([^/]+)/([^/]+)/$#', $path, $m)) {
    $file = $m[1] . '-' . $m[2] . '.php';
} else {
    $file = null;
}

if ($file && is_file($root . '/' . $file)) {
    chdir($root);
    require $root . '/' . $file;
    return true;
}

http_response_code(404);
echo 'Not found';
