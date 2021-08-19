<?php
    $xml = simplexml_load_file('../private/database.xml');
    $products = $xml->product;
    print_r($_SESSION);
    $keys = array_keys($_SESSION);
    $count = 0;
    foreach ($keys as $key){
        $name;
        $quantity;
        foreach ($products as $product){
            if ($product->product_number == $key){
                $name = $product->name;
                $price = $product->price;
                break;
            }
        }
        $picturename = strtolower($name);
        $quantity = $_SESSION["$key"];
        echo "<div class=\"box-sc\">";
        echo "<img src=\"../P2-P3/images/$picturename.jpg\" alt=\"$name\" width = \"200\" height = \"200\">";
        echo "<h3>$name</h3>";
        echo "<div class=\"$quantity\">";
        echo "<span> Quantity : </span>";
        echo "<input type=\"number\" value=\"$quantity\" size = \"5\" name = \"productq[]\" id = \"$key\" min = \"0\"><input type = \"button\" name = \"plus\" value = \"+\">";
        echo "<input type = \"hidden\" name = \"productID[]\" value = \"$key\">";
        echo "<input type = \"hidden\" name = \"price[]\" value = \"$price\">";
        echo "</div>";
        echo "<div class=\"price\">\$$price<span></span></div>";
        echo "<button type = \"submit\" name = \"$key\"class=\"btn dlt\" value = \"0\" onclick = \"this.value = 1;\">Delete item</button>";
        echo "<a href=\"#\" class=\"btn\">Continue shopping</a>";
        echo "</div>";
        $count++;
    }
?>