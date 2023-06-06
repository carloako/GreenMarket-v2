<?php
include "../session.php";
include "../connect-to-database.php";
if (!$conn) {
    header("Location: ../error.php?error=Database connection error.");
} else {
    $sql = "SELECT order_ID FROM Orders ORDER BY order_ID DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $availableNum = $row['id'] + 1;
        }
    } else {
        $availableNum = 1;
    }
    $username = $_SESSION['username'];
    $totalPrice = $_POST['totalinput'];
    $insertSQL = "INSERT INTO Orders (order_ID, username, total_price) VALUES ($availableNum, '$username', $totalPrice)";
    if (mysqli_query($conn, $insertSQL)) {
        // add items to orders
        $sql = "SELECT productID, quantity FROM Shopping_Cart WHERE username = '$username'";
        $result2 = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_assoc($result2)) {
                $productID = $row['productID'];
                $quantity = $row['quantity'];
                $insertSQL = "INSERT INTO Order_Items (order_ID, productID, quantity) VALUES ($availableNum, $productID, $quantity)";
                if (!mysqli_query($conn, $insertSQL)) {
                    header("Location: shopping_cart.php?error=Error adding an item to database.");
                }
            }
        } else {
            header("Location: shopping_cart.php?error=Empty shopping cart.");
        }
        // remove shopping cart
        $deleteSQL = "DELETE FROM Shopping_Cart WHERE username = '$username'";
        if (!mysqli_query($conn, $deleteSQL)) {
            header("Location: shopping_cart.php?error=Shopping cart removal error.");
        }
        header("Location: shopping_cart.php?success=Order is successfully added.");
    } else {
        header("Location: shopping_cart.php?error=Order is not added.");
    }
}
?>