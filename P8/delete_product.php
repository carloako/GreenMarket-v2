<?php
  $xml = new DOMDocument("1.0", "UTF-8");
  $xml->formatOutput = true;
  $xml->preserveWhiteSpace = false;
  $xml->load("../private/database.xml");

  $category = $_GET['category'];
  $id = $_GET['id'];

  $xpath = new DOMXPATH($xml);

  foreach ($xpath->query("/Grocery/product[@category = '$category' and id = '$id']")as $node) {
    $node->parentNode->removeChild($node);
  }

  $xml->save("../private/database.xml");
  header("Location: ../P7/P7-product_list.html");
 ?>
