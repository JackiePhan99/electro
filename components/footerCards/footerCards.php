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
$footQuery = "SELECT * FROM product 
            WHERE id IN (18,19,20,21,22,23,24,25,26)";
$footResult = mysqli_query($connection, $footQuery);

$row1 = [];
$row2 = [];
$row3 = [];

// Fetch and display the data
if (mysqli_num_rows($footResult) > 0) {
    while ($row = mysqli_fetch_assoc($footResult)) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['image'];
        $deal = $row['sale'];

        if ($id == 25 || $id == 22 || $id == 19) {
            $row1[] = [
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'deal' => $deal,
            ];
        } elseif ($id == 18 || $id == 20 || $id == 24) {
            $row2[] = [
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'deal' => $deal,
            ];
        } elseif ($id == 26 || $id == 21 || $id == 23) {
            $row3[] = [
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'deal' => $deal,
            ];
        }
    }
} else {
    echo "No data found!";
}
?>

<div class="featured-products left-block-container col-xl-3 col-md-4">
    <div class="left-block-content">
        <div class="left-block-content-title">
            <h3 class="footer-card-title-line">Featured Products</h3>
        </div>
        <ul class="left-block-content-items">
            <?php
            // Row 1
            if (!empty($row1)) {
                foreach ($row1 as $item) {
                    echo '<li class="left-block-content-item">' .
                        '<div>' .
                        '<a>' .
                        "<img src=" . $item['image'] . ">" .
                        '</a>' .
                        '</div>' .
                        '<div class="left-block-content-info">' .
                        '<a><h5>' . $item['name'] . '</h5></a>' .
                        '<div class="left-block-content-price">' . '$' . $item['price'] . '.00' . '</div>' .
                        '</div>' .
                        '</li>';
                }
            }
            ?>
        </ul>
    </div>
</div>
<div class="onsale-products left-block-container col-xl-3 col-md-4">
    <div class="left-block-content">
        <div class="left-block-content-title">
            <h3 class="footer-card-title-line">Onsale Products</h3>
        </div>
        <ul class="left-block-content-items">
            <?php
            // Row 2
            if (!empty($row2)) {
                foreach ($row2 as $item) {
                    echo '<li class="left-block-content-item">' .
                        '<div>' .
                        '<a>' .
                        "<img src=" . $item['image'] . ">" .
                        '</a>' .
                        '</div>' .
                        '<div class="left-block-content-info">' .
                        '<a><h5>' . $item['name'] . '</h5></a>' .
                        '<div class="left-block-content-price">' .
                        '<ins>' . '$' . $item['price'] . '.00' . '</ins>' .
                        '  ' .
                        '<del>' . '$' . $item['deal'] . '.00' . '</del>' .
                        '</div>' .
                        '</div>' .
                        '</li>';
                }
            }
            ?>
        </ul>
    </div>
</div>
<div class="top-rated-products left-block-container col-xl-3 col-md-4">
    <div class="left-block-content">
        <div class="left-block-content-title">
            <h3 class="footer-card-title-line">Top Rated Products</h3>
        </div>
        <ul class="left-block-content-items">
            <?php
            // Row 3
            if (!empty($row3)) {
                foreach ($row3 as $item) {
                    echo '<li class="left-block-content-item">' .
                        '<div>' .
                        '<a>' .
                        "<img src=" . $item['image'] . ">" .
                        '</a>' .
                        '</div>' .
                        '<div class="left-block-content-info">' .
                        '<h5>' .
                        '<a>' .
                        $item['name'] .
                        '</a>' .
                        '<div class="star-ratting">' .
                        '<small class="fa-solid fa-star"></small>' .
                        '<small class="fa-solid fa-star"></small>' .
                        '<small class="fa-solid fa-star"></small>' .
                        '<small class="fa-solid fa-star"></small>' .
                        '<small class="fa-solid fa-star"></small>' .
                        '</div>' .
                        '</h5>' .
                        '<div class="left-block-content-price">' . '$' . $item['price'] . '.00' . '</div>' .
                        '</div>' .
                        '</li>';
                }
            }
            ?>
        </ul>
    </div>
</div>

<?php
// Close the connection
mysqli_close($connection);
?>
