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
    $firstCategory = true; // флаг для определения первого элемента
    while ($row = mysqli_fetch_assoc($categoryResult)) {
        $activeClass = ($firstCategory) ? ' active' : ''; // добавляем класс active для первого элемента
        echo '<li class="nav-item category-nav-item" role="presentation">' .
            '<a class="nav-link category-nav-link' . $activeClass . '" id="tab" data-bs-toggle="tab"
               data-bs-target="' . $row["id"] . '"
               type="button" role="tab" aria-controls="home" aria-selected="true">' .
            '<div>' .
            $row["name"] .
            '</div>' .
            '</a>' .
            '</li>';

        $firstCategory = false; // сбрасываем флаг после обработки первого элемента
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);
?>
