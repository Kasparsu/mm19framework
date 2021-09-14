<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        var_dump($_SESSION);
        $name = "Kaspar";
        view('index', compact('name'));
        //require __DIR__ . '\\..\\..\\views\\index.php';
    }

    public function upload(){
        $from = $_FILES['image']['tmp_name'];
        $to = __DIR__ . '/../../public/'. $_FILES['image']['name']; 
        move_uploaded_file($from, $to);
    }
    
    public function login() {
        if($_POST['username'] === 'user' && $_POST['password'] === 'pass'){
            $_SESSION['isLoggedIn'] = true;
        }
        header('Location: /');
    }

    public function about(){
        echo "About me";
    }

    public function posts(){
        echo "posts here";
    }
}
