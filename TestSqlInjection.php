<?php

// 28

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("eunha");
$passpord = $connection->quote("eunha@pass.com");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $passpord";

$statement = $connection->query($sql);

$sukses = false;
$find_users = null;

foreach ($statement as $row) {
    // echo "Sukses" . PHP_EOL;
    // echo $row["password"] . PHP_EOL;
    $sukses = true;
    $find_users = $row["username"];
}

if ($sukses) {
    echo "Sukses " . $find_users . PHP_EOL;
} else {
    echo "Gagal" . PHP_EOL;
}

$connection = null;