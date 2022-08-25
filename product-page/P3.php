<?php
    $code = $_GET["productID"];
    $xml = simplexml_load_file('../../private/database.xml');
    $product = $xml->product;
    $name;
    $price;
    $description;
    $desc1;
    $desc2;
    $picturename;
    for ($i = 0; $i <= count($product); $i++){
        if ($code == $product[$i]->id && ($product[$i]->attributes()->category == "fruits" || $product[$i]->attributes()->category == "beverages" || $product[$i]->attributes()->category == "snacks" || $product[$i]->attributes()->category == "meals")){
            $name = $product[$i]->name;
            $price = $product[$i]->price;
            $stringdesc = $product[$i]->description;
            $desc1 = substr($stringdesc,0,strlen($stringdesc)/2);
            $desc2 = substr($stringdesc,strlen($stringdesc)/2);
            break;
        }
    }
    $picturename = strtolower($name);
    if (isset($_SESSION["$code"])) {
        $quantity = $_SESSION["$code"];
      } else {
        $quantity = 1;
      }
    $total = $price * $quantity;
?>