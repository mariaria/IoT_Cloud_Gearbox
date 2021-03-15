<?php

// Connection identity 
$host = "localhost"; 
$user = "root"; 
$password = ""; 
// $database = "starting_db";  

// Connect to MySQL Database
$conn = new mysqli($host, $user, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if ($conn) {
    echo("Connection successful: ");
    }
    
?>