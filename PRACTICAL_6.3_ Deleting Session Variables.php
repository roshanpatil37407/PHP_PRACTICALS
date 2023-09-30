<?php
// Start the session
session_start();

// Set a session variable
$_SESSION['username'] = 'john_doe';

// Delete a session variable
unset($_SESSION['username']);

// Check if the session variable exists
if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . "!"; // This won't be displayed
} else {
    echo "Session variable not set.";
}
?>
