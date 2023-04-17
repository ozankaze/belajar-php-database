<?php

// 53

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();
$connection->exec("INSERT INTO comments(email, comment) VALUE('budi@rocket.com', 'Hi budi')");
$connection->exec("INSERT INTO comments(email, comment) VALUE('seena@rocket.com', 'Hi seena')");
$connection->exec("INSERT INTO comments(email, comment) VALUE('diko@rocket.com', 'Hi diko')");

$connection->rollBack();

$connection = null;