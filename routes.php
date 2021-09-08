<?php
use \App\Router;
Router::get('/', function(){
    echo "Welcome to home page";
});

Router::get('/about', function(){
    echo "About me";
});

Router::get('/posts', function(){
    echo "posts here";
});