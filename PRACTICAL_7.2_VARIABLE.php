<?php
// Retrieve and display the value of the "user" cookie
if(isset($_COOKIE["user"])) {
    echo "Welcome, " . $_COOKIE["user"] . "!";
} else {
    echo "Cookie named 'user' is not set!";
}
?>
