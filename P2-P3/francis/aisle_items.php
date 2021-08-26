<?php 
    $xml = simplexml_load_file('../../private/database.xml');
    $product = $xml->product;
    $no = 1;
    for($i = 0; $i < count($product);$i++){
        if ($product[$i]->attributes()->category == "beverages"){
            $name = $product[$i]->name;
            $price = $product[$i]->price;
            $pnumber = $product[$i]->id;
            echo '<div class = "aisle-box-items" style = "align:left;">';
            echo '<div class = "aisle-box-items-contents">';
            echo '<form id = "product_form" method = "get" action = "../product/product.php">';
            echo "<a class = 'items' href = 'javascript:{}' onclick = 'document.getElementsByTagName(\"form\")[$no].submit();'>";
            echo "<img src = \"../images/".strtolower($name).".jpg\" width = \"200\" height = \"200\"></br>";
            echo "<h3>$name</h3>";
            echo "<input type = \"hidden\" name = \"productID\" value = \"$pnumber\" readonly>";
            echo '</a>';
            echo '<hr style = "<hr style = "width:250px;margin:0;"/>';
            echo "<p class = \"description\">$$price";
            echo '</form>';
            echo '</div>';
            echo '</div>';
            $no += 1;
        }
    }
?>