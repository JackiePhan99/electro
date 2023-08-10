<?php
//$hostname = 'localhost';
//$username = 'electro';
//$password = 'electro';
//$database = 'electro';
//
//// Create connection
//$connection = mysqli_connect($hostname, $username, $password, $database);
//
//// Check connection
//if (!$connection) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//
//// Execute the query
//$navQuery = "SELECT JSON_VALUE(name, '$.title') AS title,
//                    JSON_VALUE(name, '$.items') AS items
//                    FROM nav_navigation;";
//$navResult = mysqli_query($connection, $navQuery);
//
//// Fetch and display the data
//if (mysqli_num_rows($navResult) > 0) {
//    while ($asd = mysqli_fetch_assoc($navResult)) {
//        echo "<li>" . "<div class='dropdown-item navigation-item' . href='#'>" . $asd["title"] . "<br>" . $asd["item"] . "</div>" . "</li>" . "<br>" ;
//    }
//} else {
//    echo "No data found!";
//}
//
//
//while ($row = mysqli_fetch_assoc($navResult)) {
//    $jsonString = $row['items'];
//    $data = json_decode($jsonString, true);
//
//    // Используем данные из каждого объекта
//    foreach ($data as $object) {
//        echo $object['item'] . "<br>";
//    }
//}
//
//
//// Close the connection
//mysqli_close($connection);


//$hostname = 'localhost';
//$username = 'electro';
//$password = 'electro';
//$database = 'electro';
//
//// Create connection
//$connection = mysqli_connect($hostname, $username, $password, $database);
//
//// Check connection
//if (!$connection) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//
//// Execute the query
//$navQuery = "SELECT JSON_VALUE(name, '$.title') AS title,
//                    JSON_VALUE(name, '$.items') AS items
//                    FROM nav_navigation;";
//$navResult = mysqli_query($connection, $navQuery);
//
//// Fetch and display the data
//if (mysqli_num_rows($navResult) > 0) {
//    while ($row = mysqli_fetch_assoc($navResult)) {
//        // Decode the items JSON
//        $jsonString = $row['items'];
//        $items = json_decode($jsonString, true);
//        echo "<li>" . "<div class='dropdown-item navigation-item' . href='#'>" . $row["title"] . "</div>" . "</li>";
//        // Display each item
//        foreach ($items as $item) {
//            echo "<div>" . $item['item'] . "</div>";
//        }
//    }
//} else {
//    echo "No data found!";
//}
//
//// Close the connection
//mysqli_close($connection);




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
$navQuery = "SELECT id, JSON_VALUE(name, '$.title') AS title, 
                    JSON_VALUE(name, '$.items') AS items
                    FROM nav_navigation;";
$navResult = mysqli_query($connection, $navQuery);

// Define arrays to store items based on id
$row1Items = [];
$row2Items = [];
$row3Items = [];
$row4Items = [];
$row5Items = [];
$row6Items = [];
$row7Items = [];

// Fetch and group the data
if (mysqli_num_rows($navResult) > 0) {
    while ($row = mysqli_fetch_assoc($navResult)) {
        $id = $row['id'];
        $title = $row['title']; // Получаем заголовок

        // Decode the items JSON
        $jsonString = $row['items'];
        $items = json_decode($jsonString, true);

        // Group items by id
        foreach ($items as $item) {
            if ($id == 1) {
                $row1Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 2) {
                $row2Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 3) {
                $row3Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 4) {
                $row4Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 5) {
                $row5Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 6) {
                $row6Items[] = [
                    'title' => $title,
                    'item' => $item['item']
                ];
            } elseif ($id == 7) {
                $row7Items[] = [
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

    <div class="col">
        <?php
        // Row 1
        if (!empty($row1Items)) {
            echo "<li><strong>" . $row1Items[0]['title'] . "</strong></li>"; // Выводим заголовок перед первым элементом

            foreach ($row1Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
        }
        ?></div>
    <div class="col">
        <?php
        // Row 2
        if (!empty($row2Items && $row3Items)) {
            echo "<li><strong>" . $row2Items[0]['title'] . "</strong></li>";
            foreach ($row2Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
            echo "<br><li><strong>" . $row3Items[0]['title'] . "</strong></li>";
            foreach ($row3Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
        }
        ?>
    </div>
    <div class="col">
        <?php
        // Row 3
        if (!empty($row4Items && $row5Items)) {
            echo "<li><strong>" . $row4Items[0]['title'] . "</strong></li>";
            foreach ($row4Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
            echo "<br><li><strong>" . $row5Items[0]['title'] . "</strong></li>";
            foreach ($row5Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
        }
        ?>
    </div>
    <div class="col">
        <?php
        // Row 4
        if (!empty($row6Items && $row7Items)) {
            echo "<li><strong>" . $row6Items[0]['title'] . "</strong></li>";
            foreach ($row6Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
            echo "<br><li><strong>" . $row7Items[0]['title'] . "</strong></li>";
            foreach ($row7Items as $item) {
                echo "<li><a class='dropdown-item'>" . $item['item'] . "</a></li>";
            }
        }
        ?>
    </div>

<?php
// Close the connection
mysqli_close($connection);
?>

