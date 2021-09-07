<?php

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . '\\..\\src\\' . implode('\\', $parts) . '.php';
    require_once $path;
});

use \App\Birds\Hawk as Bird;

$animal = new \App\Animal();
$animal2 = new \App\Cat();
$hawk = new Bird();