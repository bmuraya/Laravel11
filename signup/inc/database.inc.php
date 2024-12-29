<?php
$dsn = "mysql:host=localhost;dbname=mydbwork";  // Replace with your DSN
$dbusername = "root";                           // Replace with your username
$dbpassword = "";                               // Replace with your password

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If connected, display a success message
    echo "Database connected successfully!";
} catch (PDOException $e) {
    // Display error message if connection fails
    die("Connection failed: " . $e->getMessage());
}
?>
