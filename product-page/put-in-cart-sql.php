<?php
include "../session.php";
include "../connect-to-database.php";
echo "asdasdsa";
if (!$conn) {
    header("Location: ../error.php?error=database connection error");
} else {
    echo "2";
    $productID = $_POST['productID'];
    echo "3";
    if (!isset($_SESSION['username'])) {
        header("Location: product.php?error=You need to login to save into shopping cart!&productID=$productID");
    } else {
        echo "4";
        $username = $_SESSION['username'];
        $quantity = $_POST['quantity'];
        $sql = "INSERT INTO Shopping_Cart (username, productID, quantity) VALUES ('$username', $productID, $quantity)";
        echo "5";
        if (mysqli_query($conn, $sql)) {
            header("Location: product.php?productID=$productID&success=Item successfully put in cart!");
        } else {
            header("Location: ../error.php?error=Insert data to database error.");
        }
        echo "6";
    }
}
?>
