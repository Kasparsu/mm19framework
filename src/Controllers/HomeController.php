<?php

namespace App\Controllers;

use App\DB;

class HomeController
{
    public function index() {
        $db = new DB("sqlite:" . __DIR__ . '/../../db.sqlite');
        var_dump($db->all('posts'));
    }

    public function upload() {
        $from = $_FILES['image']['tmp_name'];
        $to = __DIR__ . '/../../public/' . $_FILES['image']['name'];
        move_uploaded_file($from, $to);
    }

    public function login() {
        if ($_POST['username'] === 'user' && $_POST['password'] === 'pass') {
            $_SESSION['isLoggedIn'] = true;
        }
        header('Location: /');
    }

    public function about() {
        echo "About me";
    }

    public function posts() {
        echo "posts here";
    }
}
