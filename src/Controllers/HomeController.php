<?php

namespace App\Controllers;

use App\DB;
use GuzzleHttp\Client;


class HomeController
{
    public function index() {
       $guzzle = new Client(['verify' => false]);
       $response = $guzzle->request('GET', 'https://rickandmortyapi.com/api/character/2');
       $value = json_decode($response->getBody());
       var_dump($value);
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
