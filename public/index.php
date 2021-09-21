<?php

session_start();

require __DIR__ . '\\..\\vendor\\autoload.php';



require __DIR__ . '\\..\\helpers.php';
require __DIR__ . '\\..\\routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = new \App\Router($uri, $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if(isset($match['action'])) {
    $controller = new $match['action'][0]();
    $controller->{$match['action'][1]}();

} else {
    echo "404";
}