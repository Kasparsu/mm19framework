<?php
use \App\Router;
use \App\Controllers\HomeController;
use \App\Controllers\PostsController;


Router::get('/', [HomeController::class, 'index']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/posts', [HomeController::class, 'posts']);
Router::get('/post', [PostsController::class, 'post']);
Router::post('/upload', [HomeController::class, 'upload']);
Router::post('/login', [HomeController::class, 'login']);