<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "admin";
$password = "password";

try {
    $connect = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi dengan database MySQL" . PHP_EOL;

    // menutup koneksi
    $connect = null;
} catch (PDOException $exception) {
    echo "Gagal masuk database MySQL : " . $exception->getMessage() . PHP_EOL;
}