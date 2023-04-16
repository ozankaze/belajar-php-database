<?php

// 45

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "eunha";
$password = "eunha@pass.com";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$results = $connection->prepare($sql);
$results->bindParam("username", $username);
$results->bindParam("password", $password);
$results->execute();

if ($row = $results->fetch()) {
    echo "Sukses: " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login";
}

$connection = null;

/* 

PDOStatemen memiliki sebuah function bernama fetch().
fetch() digunakan untuk menarik satu data dari hasil query, ketika kita memanggil function fetch() lagi, maka otomatis akan menarik data selanjutnya, jika panggil fetch() lagi, maka akan mengambil data ketiga, dan seterusnya.



*/