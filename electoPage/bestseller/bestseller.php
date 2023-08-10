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
$bestQuery = "SELECT * FROM product
                 WHERE id IN (9,10,11,12,13,14,15,16)";
$bestResult = mysqli_query($connection, $bestQuery);

// Fetch and display the data
if (mysqli_num_rows($bestResult) > 0) {
    while ($row = mysqli_fetch_assoc($bestResult)) {
        $divClass = 'col-xl-3 col-md-4 bestseller-card';
        if ($row['id'] == 15 || $row['id'] == 16) {
            $divClass = 'col-xl-3 col-md-4 d-xl-block d-sm-none bestseller-card';
        }

        echo '<div class="' . $divClass . '">' .
                '<div class="bestseller-card-items">' .
                    '<div class="bestseller-card-item">' .
                        '<div class="bestseller-card-left-block">' .
                            '<a>' .
                                "<img src=" . $row['image'] . " />" .
                            '</a>' .
                        '</div>' .
                        '<div class="bestseller-card-right-block">' .
                            '<div class="bestseller-card-title">' .
                                '<div class="bestseller-type">' .
                                    '<a>' .
                                        $row['type'] .
                                    '</a>' .
                                '</div>' .
                                '<h5 class="bestseller-name">' .
                                    '<a>' .
                                        $row['name'] .
                                    '</a>' .
                                '</h5>' .
                            '</div>' .
                            '<div class="bestseller-buy">' .
                                '<div class="bestseller-price">' .
                                    '$' . $row['price'] . '.00' .
                                '</div>' .
                                '<a>' .
                                    '<div class="product-add-to-cart">' .
                                        '<i class="fa-solid fa-cart-shopping">' . '</i>' .
                                    '</div>' .
                                '</a>' .
                            '</div>' .
                            '<div class="card-hidden-items">' .
                                '<a><i class="fa-solid fa-code-compare"></i> Compare</a>' .
                                '<a><i class="fa-regular fa-heart"></i> Wishlist</a>' .
                            '</div>' .
                        '</div>' .
                    '</div>' .
                '</div>' .
            '</div>';
    }
} else {
    echo "No data found!";
}

// Close the connection
mysqli_close($connection);

