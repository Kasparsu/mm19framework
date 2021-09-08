<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        $name = "Kaspar";
        view('index', compact('name'));
        //require __DIR__ . '\\..\\..\\views\\index.php';
    }

    public function about(){
        echo "About me";
    }

    public function posts(){
        echo "posts here";
    }
}
