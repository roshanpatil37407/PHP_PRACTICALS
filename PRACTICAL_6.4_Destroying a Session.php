<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Check if the session variable exists
if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . "!"; // This won't be displayed
} else {
    echo "Session variable not set.";
}
?>
