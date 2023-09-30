<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
