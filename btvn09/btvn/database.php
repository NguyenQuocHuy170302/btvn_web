<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btvn08";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
