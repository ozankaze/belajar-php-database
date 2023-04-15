<?php

// 37

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "eunha";
$password = "eunha@pass.com";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$results = $connection->prepare($sql);
$results->bindParam("username", $username);
$results->bindParam("password", $password);
$results->execute();

$sukses = false;
$find_users = null;
$anonymouse = "Lu siapa?";

foreach ($results as $result) {
    // echo "Sukses" . PHP_EOL;
    // echo $result["password"] . PHP_EOL;
    $sukses = true;
    $find_users = $result["username"];
}

if ($sukses) {
    echo "Sukses login: " . $find_users . PHP_EOL;
} else {
    echo "Gagal login: " . $anonymouse . PHP_EOL;
}

$connection = null;