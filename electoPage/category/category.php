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
$catQuery = "SELECT * FROM product
              WHERE id IN (1,2,3,4)";
$catResult = mysqli_query($connection, $catQuery);

// Fetch and display the data
if (mysqli_num_rows($catResult) > 0) {
    while ($row = mysqli_fetch_assoc($catResult)) {
        echo '<li class="col-sm-12 col-md-12 col-xl-6 product-list-col">' .
                '<div class="category-product-list" >' .
                    '<div class="category-card-product" >' .
                        '<div class="product-type" >' .
                            '<a>' . $row["type"] . '</a>' .
                        '</div >' .
                        '<h5 class="product-name">' .
                            '<a>' . $row["name"] . '</a>' .
                        '</h5>' .
                        '<div class="product-img">' .
                            '<a>' .
                                "<img src=" . $row['image'] . " />" .
                            '</a>' .
                        '</div>' .
                        '<div class="product-buy">' .
                            '<div class="product-price">' .
                                '$' . $row["price"] . '.00' .
                            '</div>' .
                            '<a class="product-buy-icon">' .
                                '<div class="product-add-to-cart">' . '<i class="fa-solid fa-cart-shopping">' . '</i>' . '</div>' .
                            '</a>' .
                        '</div>' .
                        '<div class="card-hidden-items">' .
                            '<a>' . '<i class="fa-solid fa-code-compare">' . '</i>' . 'Compare' . '</a>' .
                            '<a>' . '<i class="fa-regular fa-heart">' . '</i>' . 'Add to Wishlist' . '</a>' .
                        '</div>' .
                    '</div >' .
                '</div >' .
            '</li>';
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);






