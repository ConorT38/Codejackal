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

// sql to create table
$sql = "CREATE TABLE blog (
postID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
content VARCHAR(255) NOT NULL,
id INT(10) NOT NULL,
reg_date TIMESTAMP
)";



if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 