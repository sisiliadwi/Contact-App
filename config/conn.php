<?php
include_once 'env.php';

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

$conn = new mysqli('localhost', 'root', '', 'contact');
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
// else {
//     echo "Koneksi database berhasil!";
// }
