<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;

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

return false;
