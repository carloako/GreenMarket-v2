<?php
    session_start();
    header("Location: P4-shopping_cart.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $productID = $_POST["productID"];
        $quantity = $_POST["quantity"];
        $_SESSION["$productID"] = $quantity;
    ?>
</body>
</html>