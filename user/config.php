<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seaFood";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 