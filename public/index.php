<?php

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . '\\..\\src\\' . implode('\\', $parts) . '.php';
    require_once $path;
});

require __DIR__ . '\\..\\routes.php';

$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if(isset($match['action'])) {
    $controller = new $match['action'][0]();
    $controller->{$match['action'][1]}();

} else {
    echo "404";
}