<?php 
    $xml = simplexml_load_file('../../private/database.xml');
    $product = $xml->product;
    for($i = 0; $i < count($product);$i++){
        if ($product[$i]->type == "snacks"){
            $name = $product[$i]->name;
            $price = $product[$i]->price;
            $pnumber = $product[$i]->product_number;
            $no = $i + 1;
            echo '<div class = "aisle-box-items" style = "align:left;">';
            echo '<div class = "aisle-box-items-contents">';
            echo '<form id = "product_form" method = "get" action = "../product/product.php">';
            echo "<a class = 'items' href = 'javascript:{}' onclick = 'document.getElementsByTagName(\"form\")[$no].submit();'>";
            echo "<img src = \"fruits_images/$name.jpg\" width = \"200\" height = \"300\"></br>";
            echo "<h3>$name</h3>";
            echo "<input type = \"hidden\" name = \"productID\" value = \"$pnumber\" readonly>";
            echo '</a>';
            echo '<hr style = "<hr style = "width:250px;margin:0;"/>';
            echo "<p class = \"description\">$$price";
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
    }
?>