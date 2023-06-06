<?php
if (!isset($_GET['productID'])) {
    header("Location: ../error.php?error=productID is not set");
}
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    header("Location: ../error.php?error=database connection error");
}
 else {
    $productID = $_GET['productID'];
    $sql = "SELECT name, price, onsale_price, onsale FROM Products Where id = $productID;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $productName = $row['name'];
            $imageName = strtolower($productName);
            $isOnSale = $row['onsale'] == 1 ? true : false;
            $price = 0;
            if ($isOnSale) {
                $price = $row['onsale_price'];
            } else {
                $price = $row['price'];
            }
        }
    }
}
?>