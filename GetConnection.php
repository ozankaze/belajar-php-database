<?php

// 18

function getConnection() : PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "admin";
    $password = "password";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}