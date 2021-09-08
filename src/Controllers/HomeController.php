<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        echo "Welcome to home page";
    }

    public function about(){
        echo "About me";
    }

    public function posts(){
        echo "posts here";
    }
}