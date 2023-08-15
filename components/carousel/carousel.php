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
$que = "SELECT * FROM carousel";
$res = mysqli_query($connection, $que);

// Fetch and display the data
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo '<div class="col-5 animated zoomIn" data-scs-animation-in="zoomIn" data-scs-animation-delay="500" style="animation-delay: 500ms; opacity: 1">' .
                "<img src=" . $row['image'] . " class='block' />" .
            '</div>';
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);
