<?php
// Database connection settings
$host = 'localhost'; // Database host
$dbname = 'olympus_gym'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>