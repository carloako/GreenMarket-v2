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
    $currentFolder = getcwd();
    $posOfSlash = strpos($currentFolder, '/') + 1;
    $currentFolder = substr($currentFolder, $posOfSlash);
    $posOfSlash = strpos($currentFolder, '/');
    while ($posOfSlash) {
        $posOfSlash += 1;
        $currentFolder = substr($currentFolder, $posOfSlash);
        $posOfSlash = strpos($currentFolder, '/');
    }
    $rootFolder = "GreenMarket-v2";
    $aisleFolder = "aisle-page";
    $aislePage = "";
    $imagePrefix = "";
    if (!strcmp($currentFolder, $rootFolder)){
        $aislePage = $aisleFolder . "/";
        $imagePrefix = "";
    } else if (!strcmp($currentFolder, $aisleFolder)) {
        $aislePage = "";
        $imagePrefix = "../";
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $producttype = $row['product_type'];
            $name = ucfirst($producttype);
            $image_path = $imagePrefix . "images/aisle-images/$producttype.jpg";
            $hrefPath = $aislePage . $producttype . "-page/" . $producttype . ".php";
            echo '<div class="container-fluid my-4" style="width:100%;">';
            echo '<div class="row">';
            echo '<div class="col-12 col-sm-3">';
            echo "<a href=\"$hrefPath\">";
            echo '  <div class="card text-center mx-3 my-3 my-sm-0" style="">';
            echo "      <img src=\"$image_path\" class=\"card-img-top\" alt=\"$producttype\">";
            echo '      <div class="card-body">';
            echo "          <h2>$name</h2>";
            echo '      </div>';
            echo '  </div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}
