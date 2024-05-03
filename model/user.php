<?php
include_once 'config/conn.php';

class User
{
    static function login($data = [])
    {
        global $conn;
    
        $email = $data['email'];
        $password = $data['password'];
    
        $result = $conn->query("SELECT * FROM akun WHERE email = '$email'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        }
    }
    
    static function register($data = [])
    {
        global $conn;

        $nama = $data['nama'];
        $email = $data['email'];
        $password = $data['password'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO akun SET nama = ?, email = ?, password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $nama, $email, $hashedPassword);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($email)
    {
        global $conn;
        $sql = "SELECT password FROM akun WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}