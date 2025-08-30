<?php

require_once '../vendor/autoload.php';
require_once './routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = rtrim($uri, '/');

foreach ($router['routes'] as $route => $controller) {
    if ($uri === $route || empty($uri) && $route === '/') {
        $controller = new $controller();
        $controller->index($_REQUEST);
        exit;
    }
}

$defaultController = new $router['default']();
$defaultController->index($_REQUEST);
exit;
