<?php
include_once 'config/static.php';
include_once 'controller/main.php';

# GET
Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('add', 'get', 'ContactController::add');
Router::url('edit', 'get', 'ContactController::edit');
Router::url('remove', 'get', 'ContactController::remove');

# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('add', 'post', 'ContactController::saveAdd');
Router::url('edit', 'post', 'ContactController::saveEdit');

new Router();