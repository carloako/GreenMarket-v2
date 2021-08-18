<?php
    session_start();
    header("Location: P4-shopping_cart.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    $productq = $_POST["productq"];
    $productID = $_POST["productID"];
    // $_SESSION["$productID"] = $productq;
    for ($i = 0; $i < count($_POST["productq"]); $i++){
        $_SESSION["$productID[$i]"] = $productq[$i];
    }
    $keys = array_keys($_SESSION);
    foreach ($keys as $key){
        if ($_POST["$key"] == "1"){
            unset($_SESSION["$key"]);
        }
    }
    ?>
</body>
</html>