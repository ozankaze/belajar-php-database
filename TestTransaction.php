<?php

// 53

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();


$connection = null;