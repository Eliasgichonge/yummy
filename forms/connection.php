<?php
// Database configuration
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "vyumba_chap";   // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
