<?php
include "../session.php";
include "../connect-to-database.php";

if (!$conn) {
    header("Location: ../error.php?error=Database connection error.");
} else {
    $username = $_SESSION['username'];
    $productID = $_POST['productID'];
    $sql = "DELETE FROM Shopping_Cart WHERE username = '$username' AND productID = $productID";

    if (mysqli_query($conn, $sql)) {
        header("Location: shopping_cart.php?success=Item is successfully removed from your shopping cart.");
    } else {
        header("Location: shopping_cart.php?error=Item is not removed from your shopping cart.");
    }
}
?>