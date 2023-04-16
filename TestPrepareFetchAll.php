<?php

// 45

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";

$statement = $connection->query($sql);
$result = $statement->fetchAll();
var_dump($result);

$connection = null;

/* 

PDOStatemen memiliki sebuah function bernama fetchAll().
fetchAll() untuk mengambil seluruh data sekaligus.

*/