<?php 
include "../session.php";
include "find-product.php";

if (isset($_GET['error'])) {
  $error = "";
  $errorMsg = $_GET['error'];
} else {
  $error = "visually-hidden";
  $errorMsg = "";
}
if (isset($_GET['success'])) {
  $sucess = "";
  $successMsg = $_GET['success'];
} else {
  $success = "visually-hidden";
  $successMsg = "";
}
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $productID = $_GET['productID'];
  $sql = "SELECT quantity FROM Shopping_Cart WHERE username = '$username' AND productID = '$productID'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
      $quantity = $row['quantity'];
      $total = $quantity * $price;
    }
  }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../head.php" ?>
  <link href="../stylesheet.css" rel="stylesheet" />
  <link href="../P3-description-style.css" rel="stylesheet" />
</head>

<body id="body">
  <?php include "../header.php" ?>
  <div class="background">
    <div class="content">
      <div class="alert alert-warning d-flex align-items-center <?php echo $error ?>" role="alert">
        <div class="">
          <?php echo $errorMsg ?>
        </div>
      </div>
      <div class="alert alert-success <?php echo $success ?>" role="alert">
        <?php echo $successMsg ?>
      </div>
      <div class="row grid-container whitebg whole-bd">
        <div class="item1">
          <?php echo "<img src=\"../images/product-images/$imageName.jpg\" width=\"200\" height=\"200\"></br>"; ?>
          <?php echo "<h3>$productName</h3>"; ?>
          <hr style="width:200px;" align="left" />
          <?php printf("%s%.2f%s", "<p class = \"description\">\$", $price, "</p>"); ?>
        </div>
        <div class="item2">
          <h3>Product Description</h3>
          <?php
          echo "<p id = \"description\">$description<span id = \"dots\">...</span><span id = \"more\">$desc2</span></p>";
          ?>
          <button type="button" onclick="readMore();" id="readmore">More Description</button>
        </div>
        <div class="item3">
          <form action="put-in-cart-sql.php" method="post">
            <div class="atc"><label for="quantity">Quantity: </label>
              <input class="plus-minus-button" type="button" value="-" id="minus">
              <input type="text" style="text-align:center;padding:2px;border:none;" size="5" name="quantity" id="quantity" value="<?php echo "$quantity"; ?>" />
              <input class="plus-minus-button" type="button" value="+" id="plus">
            </div>
            <div class="atc"><label for="subtotal">Total: </label><input type="text" style="" id="subtotal" name="subtotal" value="<?php printf("\$%.2f", $total) ?>" readonly></div>
            <div class="atc"><input type="submit" id="submit" value="Add to Cart" /></div>
            <?php
            echo "<input type = \"hidden\" id = \"productID\" name = \"productID\" value = \"$productID\" readonly>";
            echo "<input type = \"hidden\" id = \"hidden-price\" name = \"hidden-price\" value = \"$price\" readonly>";
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- common footer section starts  -->
  <?php include "../footer.php" ?>
  <!-- Install JavaScrip plugins and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="P3.js"></script>
</body>

</html>