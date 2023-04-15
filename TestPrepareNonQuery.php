<?php

// 37

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "budi";
$password = "budi@pass.com";

// memasukan data
$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$results = $connection->prepare($sql);
$results->bindParam("username", $username);
$results->bindParam("password", $password);
$results->execute();

$connection = null;