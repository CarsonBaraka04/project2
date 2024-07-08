<?php

$dsn = "mysql:host=localhost;dbname=project_2";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);//actual line to connect to database
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
