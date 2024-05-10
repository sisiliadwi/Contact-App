<?php
include_once __DIR__ . '/../model/auth_model.php';

class AuthController {
    static function login() {
        view('auth/layout', ['url' => 'login']);
    }

    static function successLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'data_contact');
        }
        else {
            header('Location: '.BASEURL.'login?failed=true');
        }
    }

    static function register() {
        view('auth/layout', ['url' => 'register']);
    }

    static function successRegister() {
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

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL);
    }


}