<?php

$HOST = "localhost";
$dbname = "mydbwork";
$dbusername = "root";
$dbpassword = "";


try {
    $pdo = new PDO("mysql:host=$HOST    ;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}   
