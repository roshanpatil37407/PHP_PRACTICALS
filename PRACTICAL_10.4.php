<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}

// Display a welcome message
echo "Welcome, " . $_SESSION["username"] . "! You are now logged in.";

// You can add logout functionality here
?>
