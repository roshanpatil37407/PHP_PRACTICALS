<?php
// Start the session
session_start();

// Set a session variable
$_SESSION['username'] = 'john_doe';

// Get and display the session variable
if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . "! Welcome back!";
} else {
    echo "Session variable not set.";
}
?>
