<?php

// 49

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('eva@rocket.com','iam eva')");
$result = $connection->lastInsertId();

echo $result . PHP_EOL;

$connection = null;

/*

Kita bisa menggunakan function lastInsertId() untuk mendapatkan Id terakhir yang dibuat secara auto increment.

*/