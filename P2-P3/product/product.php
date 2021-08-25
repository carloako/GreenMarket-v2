<?php
// session_id("1");
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
  <link href="../../stylesheet.css" rel="stylesheet" />
  <link href="../../P3-description-style.css" rel="stylesheet" />
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
      <a href="../../index.html" class="logo">
        <i class="fas fa-carrot" id="favicon"></i><img src="../../green_market-logo.png" id="market-name">
      </a>
      <a href="../../index.html" class="logo" id="title">
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
                <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../aisles.html">Aisles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Deals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Services</a>
              </li>
            </ul>
          </div>
          <span id="user-login"><a href="../../P5/P5-login.html">Sign up</a></span>
          <span id="shopping-cart"><a href="../../P4/P4-shopping_cart.php" class="fas fa-shopping-cart" id="shopping-cart"></a></span>
        </div>
      </nav>
    </div>

  </header>
  <div class="background">
    <div class="content">

      <!-- read xml in php -->
      <?php include "P3.php" ?>

      <div class="row grid-container whitebg whole-bd">
        <div class="item1">
          <?php echo "<img src=\"../images/$picturename.jpg\" width=\"200\" height=\"200\"></br>"; ?>
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
            <div class="atc"><label for="quantity">Quantity: </label>
              <input class="plus-minus-button" type="button" value="-" id="minus">
              <input type="text" style="text-align:center;padding:2px;border:none;" size="5" name="quantity" id="quantity" value="<?php echo "$quantity"; ?>" />
              <input class="plus-minus-button" type="button" value="+" id="plus">
            </div>
            <div class="atc"><label for="subtotal">Total: </label><input type = "text" style="" id="subtotal" name="subtotal" value = "<?php printf("\$%.2f", $total) ?>" readonly></div>
            <div class="atc"><input type="submit" id="submit" value="Add to Cart" /></div>
                <?php
                echo "<input type = \"hidden\" id = \"productID\" name = \"productID\" value = \"$code\" readonly>";
                echo "<input type = \"hidden\" id = \"hidden-price\" name = \"hidden-price\" value = \"$price\" readonly>";
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
        <p><a href="../../index.html">Home</a></p>
        <p><a href="../../extra/about.html">About us</a></p>
        <p><a href="../../extra/contact.html">Contact</a></p>
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
  <script src="P3.js"></script>
</body>

</html>