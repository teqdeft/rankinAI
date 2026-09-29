<?php
/*
 * Router for PHP's built-in server running the WordPress install in
 * ../rankinai-wp/rankinai-m/ (its own repo). Real files are served as they are,
 * everything else goes to WordPress, which is what Apache's rewrite rules do.
 * Local only.
 *
 *   php -S localhost:8890 -t ../rankinai-wp/rankinai-m .claude/wp-router.php
 */
$root = dirname(__DIR__, 2) . '/rankinai-wp/rankinai-m';
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($path !== '/' && is_file($root . $path)) {
    if (substr($path, -4) === '.php') {
        chdir(dirname($root . $path));
        require $root . $path;
        return true;
    }
    // Returning false hands the file to the built-in server, which looks for
    // it in the folder given to -t. A server started with a different -t
    // (one still pointing at the old rankinai-local/ did) then answers 404
    // for anything uploaded since, so in that case the file is sent from
    // here instead.
    $file = realpath($root . $path);
    if (realpath((string) $_SERVER['DOCUMENT_ROOT']) === realpath($root)) {
        return false;
    }
    if ($file === false || strpos($file, realpath($root)) !== 0) {
        http_response_code(404);
        return true;
    }
    $types = [
        'css' => 'text/css', 'js' => 'text/javascript', 'json' => 'application/json',
        'svg' => 'image/svg+xml', 'webp' => 'image/webp', 'avif' => 'image/avif',
        'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png',
        'gif' => 'image/gif', 'ico' => 'image/x-icon', 'woff2' => 'font/woff2',
        'woff' => 'font/woff', 'ttf' => 'font/ttf', 'txt' => 'text/plain',
        'xml' => 'application/xml', 'pdf' => 'application/pdf', 'mp4' => 'video/mp4',
    ];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    header('Content-Type: ' . ($types[$ext] ?? (mime_content_type($file) ?: 'application/octet-stream')));
    header('Content-Length: ' . filesize($file));
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($file)) . ' GMT');
    readfile($file);
    return true;
}
if (is_dir($root . $path) && is_file(rtrim($root . $path, '/') . '/index.php')) {
    if (substr($path, -1) !== '/') {
        header('Location: ' . $path . '/', true, 301);
        exit;
    }
    chdir(rtrim($root . $path, '/'));
    require rtrim($root . $path, '/') . '/index.php';
    return true;
}
chdir($root);
$_SERVER['SCRIPT_NAME'] = '/index.php';
require $root . '/index.php';
