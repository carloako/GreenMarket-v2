<?php

  if(isset($_REQUEST['save'])){
    $image = $_FILES['image'];

    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageType = $_FILES['image']['type'];

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $productName = strtolower($_REQUEST['name']);

    $imageNameNew = $productName.".".$imageActualExt;

    $imageDestination = '../P2-P3/images/'.$imageNameNew;

    move_uploaded_file($imageTmpName, $imageDestination);

    $xml = new DOMDocument("1.0", "UTF-8");
    $xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
    $xml->load("../private/database.xml");

    $category = $_REQUEST['category'];
    $id = $_REQUEST['id'];

    $xpath = new DOMXPATH($xml);

    foreach ($xpath->query("/Grocery/product[id = '$id']")as $node) {
      $node->parentNode->removeChild($node);
    }

    $xml->save("../private/database.xml");
    $xml->load("../private/database.xml");

    $rootTag = $xml->getElementsByTagName("Grocery")->item(0);

    $itemTag = $xml->createElement("product");

    $categoryAttribute = $xml->createAttribute("category");
    $categoryAttribute->value = $_REQUEST['category'];

    $idTag = $xml->createElement("id", $_REQUEST['id']);
    $nameTag = $xml->createElement("name", $_REQUEST['name']);
    $priceTag = $xml->createElement("price", $_REQUEST['price']);
    $quantityTag = $xml->createElement("quantity", $_REQUEST['quantity']);
    $descriptionTag = $xml->createElement("description", $_REQUEST['description']);
    // $imgUrlTag = $xml->createElement("imgUrl", $imageDestination);

    $itemTag->appendChild($categoryAttribute);
    $itemTag->appendChild($idTag);
    $itemTag->appendChild($nameTag);
    $itemTag->appendChild($priceTag);
    $itemTag->appendChild($quantityTag);
    $itemTag->appendChild($descriptionTag);
    // $itemTag->appendChild($imgUrlTag);

    $rootTag->appendChild($itemTag);

    $xml->save("../private/database.xml");

    header("Location: ../P7/P7-product_list.html");
  }
?>
