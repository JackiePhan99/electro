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
$productQuery = "SELECT * FROM product
                WHERE id IN (1,2,3,4,5,6,7,8,9)";
$productResult = mysqli_query($connection, $productQuery);

// Fetch and display the data
if (mysqli_num_rows($productResult) > 0) {
    while ($row = mysqli_fetch_assoc($productResult)) {
        echo '<div class="slido" >' .
            '<div class="recently-viewed-card" >' .
            '<div class="product-type" >' .
            '<a>' . $row["type"] . '</a>' .
            '</div >' .
            '<h5 class="recently-viewed-name">' .
            '<a>' . $row["name"] . '</a>' .
            '</h5>' .
            '<div class="recently-viewed-img">' .
            '<a>' .
            "<img src=".$row['image']." />" .
            '</a>' .
            '</div>' .
            '<div class="recently-viewed-buy">' .
            '<div class="product-price">' .
            '$' .  $row["price"] . '.00' .
            '</div>' .
            '<a class="product-buy-icon">' .
            '<div class="product-add-to-cart">' . '<i class="fa-solid fa-cart-shopping">' . '</i>' . '</div>' .
            '</a>' .
            '</div>' .
            '<div class="card-hidden-items">' .
            '<a>' . '<i class="fa-solid fa-code-compare">' . '</i>' . 'Compare' . '</a>' .
            ' <a>' . '<i class="fa-regular fa-heart">' . '</i>' . 'Wishlist' . '</a>' .
            '</div>' .
            '</div >' .
            '</div >';
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);






