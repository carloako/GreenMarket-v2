<?php
// session_start();
header("Location: ../P11/P11-order_list.php");
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    $xml = simplexml_load_file('../database.xml');
    $targetID = $_POST["id"];
    $orders = $xml->order;
    // echo ($users == "");
    if (count($orders) > 0) {
        if ($targetID !== "") {
            foreach ($orders as $order) {
                if ($targetID == $order->id) {
                    $order->ordernumber = $_POST["ordernumber"];
                    $order->email = $_POST["email"];
                    $order->address = $_POST["address"];
                    $order->paymentmethod = $_POST["paymentmethod"];
                    break;
                }
            }
        } else {
            $checkidexists = true;
            $newid;
            while ($checkidexists) {
                $newid = rand(100, 999);
                foreach ($orders as $order) {
                    if ($newid == $order->id) {
                        $checkidexists = true;
                        break;
                    } else {
                        $checkidexists = false;
                    }
                }
            }
            $neworder = $xml->addChild("order");
            $neworder->addChild("id", $newid);
            $neworder->addChild("ordernumber", $_POST["ordernumber"]);
            $neworder->addChild("email", $_POST["email"]);
            $neworder->addChild("address", $_POST["address"]);
            $neworder->addChild("paymentmethod", $_POST["paymentmethod"]);
        }
    } else {
        echo "false";
        $neworder = $xml->addChild("order");
        // $newid = rand(100,999);
        $neworder->addChild("ordernumber", $_POST["ordernumber"]);
        $neworder->addChild("email", $_POST["email"]);
        $neworder->addChild("address", $_POST["address"]);
        $neworder->addChild("paymentmethod", $_POST["paymentmethod"]);
    }
    $xml->asXML('../database.xml');
    ?>
</body>

</html>