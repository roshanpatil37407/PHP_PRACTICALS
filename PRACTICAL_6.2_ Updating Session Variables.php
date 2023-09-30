<?php
// Start the session
session_start();

// Check if a session variable exists
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

echo "You have visited this page " . $_SESSION['counter'] . " times.";
?>
