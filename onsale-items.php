<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    header("Location: ../error.php?error=database connection error");
} else {
	$sql = "SELECT name, price, onsale_price, id FROM Products WHERE onsale = TRUE;";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $image_path = "images/product-images/" . strtolower($name) . ".jpg";
            $price = $row['price'];
            $onsaleprice = $row['onsale_price'];
            $productid = $row['id'];
            echo '<div class="col-12 col-sm-3">';
            echo "<a href=\"product-page/product.php?productID=$productid\">";
            echo '  <div class="card text-center mx-3 my-3 my-sm-0" style="">';
            echo "      <img src=\"$image_path\" class=\"card-img-top\" alt=\"$name\">";
            echo '      <div class="card-body">';
            echo "          <h2 class=\"card-title\">$name</h5>";
            echo "          <p class=\card-text\">$price</p>";
            echo "          <p class=\"card-text\">Price: $onsaleprice$</p>";
            echo '      </div>';
            echo '  </div>';
            echo '</a>';
            echo '</div>';
        }
    }
}
