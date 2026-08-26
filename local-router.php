<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;

$legacyLocationPrefixes = [
    '/locations' => '/global-footprint/',
    '/global-markets' => '/global-footprint/',
    '/global-footprints' => '/global-footprint/',
];

foreach ($legacyLocationPrefixes as $legacyPrefix => $newPrefix) {
    if ($path === $legacyPrefix || str_starts_with($path, $legacyPrefix . '/')) {
        $target = $newPrefix . substr($path, strlen($legacyPrefix));
        if (!empty($_SERVER['QUERY_STRING'])) {
            $target .= '?' . $_SERVER['QUERY_STRING'];
        }
        header('Location: ' . $target, true, 301);
        return true;
    }
}
function render_php_file($target)
{
    $previousDirectory = getcwd();
    chdir(dirname($target));
    require $target;
    chdir($previousDirectory);
}

if ($path === '/' || $path === '') {
    render_php_file(__DIR__ . '/home.php');
    return true;
}

if ($path === '/career' || $path === '/career/') {
    header('Location: https://careers.empireonecx.com/', true, 301);
    return true;
}

if (is_file($file)) {
    return false;
}

$indexFile = rtrim($file, '/\\') . '/index.php';
if (is_dir($file) && is_file($indexFile)) {
    render_php_file($indexFile);
    return true;
}

$phpFile = __DIR__ . $path . '.php';
if (is_file($phpFile)) {
    render_php_file($phpFile);
    return true;
}

http_response_code(404);
render_php_file(__DIR__ . '/404.php');
return true;
