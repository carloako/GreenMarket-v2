<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    header("Location: ../error.php?error=database connection error");
} else {
    $productID = $_GET['productID'];
    $sql = "SELECT name, price, onsale, onsale_price, product_type FROM Products WHERE id = $productID;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $productName = $_GET['productName'];
    $productNameChanged = strcmp($productName, $row['name']) == 0 ? false : true;
    $updateSQL = "UPDATE Products  SET ";
    $anythingChanged = false;
    $count = 0;
    if ($productNameChanged) {
        $updateSQL .= " name = '" . $productName . "'";
        $count++;
    }
    $priceString = $_GET['price'] . "." . $_GET['decimalPrice'];
    $price = floatval($priceString);
    $priceChanged = $price != $row['price'];
    if ($priceChanged) {
        if ($count > 0) {
            $updateSQL .= ",";
        }
        $updateSQL .= " price = " . $price;
        $count++;
    }
    $onsale = $_GET['onsaleValue'];
    $onsaleChanged = $onsale != $row['onsale'];
    $onsalePriceChanged = false;
    if ($onsaleChanged) {
        if ($onsale == false) {
            if ($count > 0) {
                $updateSQL .= ",";
            }
            $updateSQL .= " onsale = " . $onsale;
            $updateSQL .= "," . " onsale_price = NULL";
        } else {
            if ($count > 0) {
                $updateSQL .= ",";
            }
            $updateSQL .= " onsale = " . $onsale;
            $onsalePriceString = $_GET['onsalePrice'] . "." . $_GET['decimalOnsalePrice'];
            $onsalePrice = floatval($onsalePriceString);
            $updateSQL .= "," . " onsale_price = " . $onsalePrice;
        }
    } else if ($onsale == true) {
        $onsalePriceString = $_GET['onsalePrice'] . "." . $_GET['decimalOnsalePrice'];
        $onsalePrice = floatval($onsalePriceString);
        $onsalePriceChanged = $onsalePrice != $row['onsale_price'];
        if ($onsalePriceChanged) {
            if ($count > 0) {
                $updateSQL .= ",";
            }
            $updateSQL .= " onsale_price = " . $onsalePrice;
        }
    }
    $updateSQL .= " WHERE id = $productID \n";
    if ($productNameChanged || $priceChanged || $onsaleChanged || $onsalePriceChanged) {
        $anythingChanged = true;
    }
    if ($anythingChanged) {
        if (mysqli_query($conn, $updateSQL)) {
            echo "update success";
        } else {
            echo "update failed";
        }
    }
    header("Location: backend.php");

    echo $updateSQL;
}
mysqli_close($conn);
?>