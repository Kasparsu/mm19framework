<?php

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . '\\..\\src\\' . implode('\\', $parts) . '.php';
    require_once $path;
});

require __DIR__ . '\\..\\routes.php';

$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
call_user_func($match['action']);