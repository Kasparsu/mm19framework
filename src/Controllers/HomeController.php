<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        view('index');
        //require __DIR__ . '\\..\\..\\views\\index.php';
    }

    public function about(){
        echo "About me";
    }

    public function posts(){
        echo "posts here";
    }
}