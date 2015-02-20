<?php
$servername = "localhost";
$username = "codejackal_admin";
$password = "Waltherp99";
$dbname = "codejackal_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?> 
