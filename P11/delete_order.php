<?php
    // session_start();
    header("Location: P11-order_list.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $xml = simplexml_load_file('../database.xml');
        $orders = $xml->order;
        $targetID= $_POST["id"];
        foreach($orders as $order){
            if ($targetID == $order->id){
                $dom = dom_import_simplexml($order);
                $dom->parentNode->removeChild($dom);
                break;
            }
        }
        $xml->asXML('../database.xml');
    ?>
</body>
</html>