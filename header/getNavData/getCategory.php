<?php
$hostname = 'localhost';
$username = 'electro';
$password = 'electro';
$database = 'electro';

// Create connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the query
$query = "SELECT * FROM nav_category";
$result = mysqli_query($connection, $query);

// Fetch and display the data
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . "<a class='dropdown-item' . href='#'>" . $row["name"] . "</a>" . "</li>" ;
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);