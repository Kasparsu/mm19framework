<?php
namespace App\Controllers;

class HomeController {
    public function index(){

        var_dump($_GET);
        die();
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
