<?php
include_once __DIR__ . '/../config/static.php';
include_once 'main.php';
include_once __DIR__ . '/../function/main.php';


# GET

Router::url('login', 'get', 'AuthController::login');
Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('logout', 'get', 'AuthController::logout');
Router::url('data_contact', 'get', 'ContactController::contacts');
Router::url('add', 'get', 'ContactController::add');
Router::url('edit', 'get', 'ContactController::edit');
Router::url('remove', 'get', 'ContactController::remove');

# POST
Router::url('login', 'post', 'AuthController::successLogin');
Router::url('register', 'post', 'AuthController::successRegister');
Router::url('add', 'post', 'ContactController::saveAdd');
Router::url('edit', 'post', 'ContactController::saveEdit');

new Router();