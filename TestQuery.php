<?php

// 23

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// Menampilkan data dari database
$sql = "SELECT id, name, email FROM customers";
$results = $connection->query($sql);

foreach ($results as $result) {
    // var_dump($result);
    $id = $result[0];
    $name = $result["name"];
    $email = $result["email"];

    echo "Id: $id" . PHP_EOL;
    echo "Name: $name" . PHP_EOL;
    echo "Email: $email" . PHP_EOL;
}

$connection = null;