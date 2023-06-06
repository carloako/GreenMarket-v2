<?php
$xml = simplexml_load_file('../private/database.xml');
$products = $xml->product;
$keys = array_keys($_SESSION);
$count = 0;
foreach ($keys as $key) {
    $name;
    $quantity;
    foreach ($products as $product) {
        if ($product->id == $key) {
            $name = $product->name;
            $price = $product->price;
            break;
        }
    }
    $picturename = strtolower($name);
    $quantity = $_SESSION["$key"];
    echo "<div class=\"box-sc\">";
    echo "<img src=\"../P2-P3/images/$picturename.jpg\" alt=\"$name\" width = \"200\" height = \"200\" style = 'border-radius:10px;'>";
    echo "<h3>$name</h3>";
    echo "<div class=\"$quantity\">";
    echo "<div><span style = \"font-size:19px;\">Quantity: </span>
            <input class=\"plus-minus-button\" type=\"button\" value=\"-\" name = \"minus\" id=\"\">
            <input type=\"number\" value=\"$quantity\" size = \"3\" name = \"productq[]\" id = \"$key\" min = \"0\" readonly>
            <input class=\"plus-minus-button\" type=\"button\" value=\"+\" id=\"\" name = \"plus\"></div>";
    echo "<input type = \"hidden\" name = \"productID[]\" value = \"$key\">";
    echo "<input type = \"hidden\" name = \"price[]\" value = \"$price\">";
    echo "</div>";
    echo "<div class=\"price\"><span>Price: </span> \$$price</div>";
    echo "<button type = \"submit\" name = \"$key\" class=\"btn dlt\" onclick = \"this.value = 1\">Delete item</button>";
    echo "<a href=\"../index.php\" class=\"btn\">Continue shopping</a>";
    echo "</div>";
    $count++;
}
?>