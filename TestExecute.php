<?php

// 18

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// Menambahkan
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('seena', 'seena', 'seena@test.com');
SQL;

// $admin = <<<SQL
//     INSERT INTO admin(username, password)
//     VALUES ('eunha', 'eunha@pass.com');
// SQL;

$connection->exec($admin);

$connection = null;