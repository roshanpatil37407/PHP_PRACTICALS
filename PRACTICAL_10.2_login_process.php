<?php
// Include database connection
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize input to prevent SQL injection (use prepared statements for better security)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database for user authentication
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Successful login
        session_start();
        $_SESSION["username"] = $username;
        header("location: welcome.php"); // Redirect to a welcome page
    } else {
        // Failed login
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
