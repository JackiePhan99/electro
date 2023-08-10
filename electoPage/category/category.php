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
$categoryQuery = "SELECT * FROM category";
$categoryResult = mysqli_query($connection, $categoryQuery);

// Fetch and display the data
if (mysqli_num_rows($categoryResult) > 0) {
    while ($row = mysqli_fetch_assoc($categoryResult)) {
        echo [];
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);






