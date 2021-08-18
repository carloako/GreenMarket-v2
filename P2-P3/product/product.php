<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Green Market</title>
  <meta charset="utf-8" name="viewport" content="width = device-width, initial-scale = 1" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
  <!-- install Bootstrap 4 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Custom Stylesheets -->
  <link href="stylesheet.css" rel="stylesheet" />
  <link href="P3-description-style.css" rel="stylesheet" />
</head>

<body id="body">
  <header>
    <div class="header-1">
      <!-- facebook and instagram shortcut logos -->
      <div class="follow">
        <a href="#" class="fab fa-facebook" style="font-size: 24px"></a>
        <a href="#" class="fab fa-instagram" style="font-size: 24px"></a>
      </div>
    </div>

    <div class="header-2">
      <!-- main carrot logo and search bar -->
      <a href="P1/index.html" class="logo">
        <i class="fas fa-carrot" id="favicon"></i><img src="../../../green_market-logo.png" id="market-name">
      </a>
      <a href="../P1/index.html" class="logo" id="title">
        <i class="fas fa-carrot" id="favicon"></i>Concordia U. Green Market
      </a>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search product" />
        <a href="#"><label for="search-bar" class="fas fa-search"></label></a>
      </form>
    </div>

    <div class="nav">
      <!-- menu bars -->

      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../../index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Aisle
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../fruits.html">Fruits</a></li>

                  <li><a class="dropdown-item" href="../../ulas/snacks-aisle.html">Snacks</a></li>
                  <li><a class="dropdown-item" href="../../francis/beverages.html">Beverages</a></li>
                  <li><a class="dropdown-item" href="../../eve/prepared-meals.html">Prepared meals</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Deals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Services</a>
              </li>
            </ul>
          </div>
          <span id="user-login"><a href="../../../P5/P5-login.html">Sign up</a></span>
          <span id="shopping-cart"><a href="../../../P4/P4-shopping_cart.html" class="fas fa-shopping-cart" id="shopping-cart"></a></span>
        </div>
      </nav>
    </div>
  </header>
  <div class="background">
    <div class="content">
      <?php include "productphp.php" ?>
      <div class="row grid-container whitebg whole-bd">
        <div class="item1">
          <?php echo "<img src=\"../images/$picturename.jpg\" width=\"200\" height=\"300\"></br>"; ?>
          <?php echo "<h3>$name</h3>"; ?>
          <hr style="width:200px;" align="left" />
          <?php printf("%s%.2f%s", "<p class = \"description\">\$", $price, "</p>"); ?>
        </div>
        <div class="item2">
          <h3>Product Description</h3>
          <?php
          echo "<p id = \"description\">$desc1<span id = \"dots\">...</span><span id = \"more\">$desc2</span></p>";
          ?>
          <button type="button" onclick="readMore();" id="readmore">More Description</button>
        </div>
        <div class="item3">
          <form action="put_in_cart.php" method="post">
            Quantity: <input type="button" value="-" id="minus"><input type="text" name="quantity" id="quantity" /><input type="button" value="+" id="plus"> &nbsp; &nbsp; <input type="submit" id="submit" value="Add to Cart" />
            <label for="subtotal">Total: </label><input type="text" id="subtotal" name="subtotal" readonly>
            <?php
            echo "<input type = \"hidden\" name = \"productID\" value = \"$code\" readonly>";
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- common footer section starts  -->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <p id="title-footer">Quick links</p>
        <p><a href="../../../index.html">Home</a></p>
        <p><a href="../about.html">About us</a></p>
        <p><a href="../contact.html">Contact</a></p>
      </div>

      <div class="box">
        <p id="title-footer">Follow us:</p>
        <p><a href="https://facebook.com">Facebook</a></p>
        <p><a href="https://instagram.com">Instagram</a></p>
      </div>
    </div>
    <div>
      <p><br /></p>
      <footer class="copyright">
        <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
      </footer>
    </div>
  </section>
  <!-- Install JavaScrip plugins and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    function subtotalCalc() {
      var price = <?php echo "$price"; ?>;
      var x = price * parseInt(document.getElementById("quantity").value);
      document.getElementById("subtotal").value = "$" + x.toFixed(2);
    }
    function loadQuantity() {
      <?php
      if (isset($_SESSION["$code"])) {
        $quantity = $_SESSION["$code"];
        echo "document.getElementById(\"quantity\").value = $quantity";
      } else {
        echo "document.getElementById(\"quantity\").value = 0";
      }
      ?>
    }
  </script>
  <script src = "productfunctions.js"></script>
  <script src = "productlisteners.js"></script>
</body>

</html>