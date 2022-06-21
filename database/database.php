<?php


$servername = "localhost";
$username = "root";
$password = "";
$database_name="pro";

try {
    $db_Conection = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





























