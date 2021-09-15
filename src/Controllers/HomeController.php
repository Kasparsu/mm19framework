<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        try {
            $conn = new \PDO("sqlite:" . __DIR__ . '/../../db.sqlite');
            // set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
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
