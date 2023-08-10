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
$productQuery = "SELECT id, JSON_VALUE(name, '$.title') AS title, 
                    JSON_VALUE(name, '$.items') AS items
                    FROM nav_footer;";
$productResult = mysqli_query($connection, $productQuery);

$row1Item = [];
$row2Item = [];
$row3Item = [];

// Fetch and display the data
if (mysqli_num_rows($productResult) > 0) {
    while ($row = mysqli_fetch_assoc($productResult)) {
        $id = $row['id'];
        $title = $row['title'];
        $jsonString = $row['items'];
        $items = json_decode($jsonString, true);

        foreach ($items as $item) {
            if ($id == 1) {
                $row1Item[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 2) {
                $row2Item[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 3) {
                $row3Item[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            }
        }
    }
} else {
    echo "No data found!";
}
?>

<div class="page-navigation col-sm-12 col-md-4">
    <?php
    // Row 1
    if (!empty($row1Item)) {
        echo "<h6>" . $row1Item[0]['title'] . "</h6>";
        // Выводим заголовок перед первым элементом
        foreach ($row1Item as $item) {
            echo "<li><a>" . $item['item'] . "</a></li>";
        }
    }
    ?> </div>
<div class="page-navigation col-sm-12 col-md-4">
    <?php
    // Row 1
    if (!empty($row2Item)) {
        echo "<h6>" . $row2Item[0]['title'] . "</h6>";
        // Выводим заголовок перед первым элементом
        foreach ($row2Item as $item) {
            echo "<li><a>" . $item['item'] . "</a></li>";
        }
    }
    ?> </div>
<div class="page-navigation col-sm-12 col-md-4">
    <?php
    // Row 1
    if (!empty($row3Item)) {
        echo "<h6>" . $row3Item[0]['title'] . "</h6>";
        // Выводим заголовок перед первым элементом
        foreach ($row3Item as $item) {
            echo "<li><a>" . $item['item'] . "</a></li>";
        }
    }
    ?>

    <?php
    // Close the connection
    mysqli_close($connection);
    ?>

