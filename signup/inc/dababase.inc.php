<?php
$dsn = "mysql:host=localhost;dbname=mydbwork";  // Replace with your DSN
$dbusername = "root";                              // Replace with your username
$dbpassword = "";                                  // Replace with your password

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>