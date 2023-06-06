<?php

include "../connect-to-database.php";

if (!$conn) {
    header("Location: ../error.php?Database connection error.");
} else {
    $productName = $_GET['productName'];
    $priceString = $_GET['price'] . "." . $_GET['decimalPrice'];
    $price = floatval($priceString);
    $productType = $_GET['productType'];
    $onsale = $_GET['onsaleValue'];
    if ($onsale) {
        $onsalePriceString = $_GET['onsalePrice'] . "." . $_GET['decimalOnsalePrice'];
        $onsalePrice = floatval($onsalePriceString);
        $sql = "INSERT INTO Products (name, price, product_type, onsale, onsale_price) VALUES ('$productName', $price, '$productType', $onsale, $onsalePrice)";
    } else {
        $sql = "INSERT INTO Products (name, price, product_type) VALUES ('$productName', $price, '$productType')";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: backend.php?success=Item added successfully in the database.");
    } else {
        header("Location: backend.php?error=Item not added in the database.");
    }
}

?>