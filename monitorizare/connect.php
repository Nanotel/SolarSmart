<?php

$servername = "YOUR SERVER NAME";
$username = "YOUR DATABASE USERNAME";
$password = "YOUR DATABASE PASSWORD";
$dbname= "YOUR DATABASE NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
