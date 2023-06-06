<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn){
    header("Location: ../error.php?error=database connection error");
} else {
    $sql = "SELECT name, price, id FROM Products WHERE product_type = 'fruits'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        echo '<div>';
        echo "  <h1 class=\"hr-text\">FRUITS</h1>";
        echo '</div>';
        echo '<div class="container-fluid my-4 p-4 border border-4 rounded-3 bg-white" style="width:100%;">' . "\n";
        echo '  <div class="row">' . "\n";
        while ($row = mysqli_fetch_assoc($result)) {
            $productName = $row['name'];
            $price = $row['price'];
            $productID = $row['id'];
            $productLink = "../../product-page/product.php?productID=$productID";
            $imageName = strtolower($productName);
            $imagePath = "../../images/product-images/$imageName.jpg";
            echo '      <div class="col-12 col-sm-3">' . "\n";
            echo "          <a href=\"$productLink\">" . "\n";
            echo '              <div class="card text-center mx-3 my-3">' . "\n";
            echo "                  <img src=\"$imagePath\" class=\"card-img-top\" alt=\"$productName\">" . "\n";
            echo '                  <div class="card=body">' . "\n";
            echo "                      <h2 class=\"card-title\">$productName</h2>" . "\n";
            echo "                      <p class=\"card-text\">Price: $price</p>" . "\n";
            echo '                  </div>' . "\n";
            echo '              </div>' . "\n";
            echo '          </a>' . "\n";
            echo '      </div>' . "\n";
        }
        echo '  </div>' . "\n";
        echo '</div>'. "\n";
    }
}
mysqli_close($conn);
?>