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

<!-- 
// 
// $servername = "localhost";  // Replace with your server name
// $username = "root";         // Replace with your username
// $password = "";             // Replace with your password
// $dbname = "example_db";     // Replace with your database name

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


Choosing Between MySQLi and PDO
MySQLi:

Specific to MySQL.
Supports both object-oriented and procedural approaches.
PDO:

Works with multiple database systems (e.g., MySQL, PostgreSQL, SQLite).
Better for portability and advanced features. -->