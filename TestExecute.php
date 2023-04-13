<?php

// 18

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// Menambahkan
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('seena', 'seena', 'seena@test.com');
SQL;

$connection->exec($sql);

$connection = null;