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

// Create a query to fetch data from the database table
$query = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with the actual table name

// Execute the query
$result = mysqli_query($conn, $query);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    // Loop through the result set and display data in a table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conn);
?>
