<?php

$serverName = "localhost";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$serverName;dbame=users", $userName, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

$conn = null;
