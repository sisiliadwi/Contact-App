<?php

include_once 'model/user.php';

class AuthController {
    static function saveLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'login?failed=true');
        }
    }

    static function saveRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'nama' => $post['nama'], 
            'email' => $post['email'], 
            'password' => $post['password']
        ]);

        if ($user) {
            header('Location: '.BASEURL.'login');
        }
        else {
            header('Location: '.BASEURL.'register?failed=true');
        }
    }

}