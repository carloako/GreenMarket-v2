<?php
    session_start();
    // header("Location: P4-shopping_cart.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $productID = $_POST["productID[]"];
        echo "$productID";
        unset($_SESSION["$productID"]);
    ?>
</body>
</html>