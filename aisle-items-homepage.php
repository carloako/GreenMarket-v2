<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    header("Location: ../error.php?error=database connection error");
} else {
    $sql = "SELECT DISTINCT product_type FROM Products;";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $producttype = $row['product_type'];
            $name = ucfirst($producttype);
            $image_path = "images/aisle-images/$producttype.jpg";
            echo '<div class="col-12 col-sm-3">';
            echo "<a href=\"aisle-page/$producttype-page/$producttype.php\">";
            echo '  <div class="card text-center mx-3 my-3 my-sm-0" style="">';
            echo "      <img src=\"$image_path\" class=\"card-img-top\" alt=\"$producttype\">";
            echo '      <div class="card-body">';
            echo "          <h2>$name</h2>";
            echo '      </div>';
            echo '  </div>';
            echo '</a>';
            echo '</div>';
        }
    }
}
?>