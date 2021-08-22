<?php
    session_start();
    header("Location: P4-shopping_cart.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $xml = simplexml_load_file('../database.xml');
        $newcart = $xml->addChild("cart");
        $products = $xml->product;
        $keys = array_keys($_SESSION);
        $session = session_id();
        $newcart->addChild("session",$session);
        foreach($keys as $key){
            $productname;
            foreach($products as $product){
                if ($key == $product->product_number){
                    $productname = $product->name;
                    break;
                }
            }
            $newcart->addChild(strtolower($productname),$_SESSION["$key"]);
        }
        session_unset();
        $xml->asXML('../database.xml');
    ?>
</body>
</html>