<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Market</title>
    <meta
      charset="utf-8"
      name="viewport"
      content="width = device-width, initial-scale = 1"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
    />
    <!-- install Bootstrap 4 CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Custom Stylesheets -->
    <link href="../stylesheet.css" rel="stylesheet" />
    <link href="../P5_P6-style.css" rel="stylesheet" />
    <link href="../P7_P12-style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="page-container">
      <div id="content-wrap">
    <header>
      <div class="header-2">
        <!-- main logo and search bar -->
        <a href="../P1/index.html" class="logo"><img src="../green_market-logo-backend.png" id="market-name">
        </a>
      </div>
    </header>
<p><br/></p>
<p><br/></p>

<!--sidebar-->
<div class="sidenav">
  <a href="../P7/P7-product_list.html" class="sidenav-item">Product List</a>
  <a href="../P9/P9-user_list.html" class="sidenav-item">User List</a>
  <a href="../P11/P11-order_list.html" class="sidenav-item">Order List</a>
</div>

<!--main-->
<div class="main">
<br/>
<br/>
  <div style="margin-left:10%; margin-right:10%;">
    <div class="product-edit">
      <h2 style="padding:0;">Edit a product</h2>
      <br>

      <form class="" action="add_product.php" method="POST" enctype="multipart/form-data">
        <label for="image">Upload a product photo:</label><br/><br/>
        <label for="image" class="btn btn-primary">Choose file<br>
        <input type="file" id="image" name ="image" accept=".jpg, .jpeg, .png, .bmp, .gif" value=""></label><br><br>
        <label for="category">Aisle:</label>
        <select id="category" required name="category">
            <option disabled selected hidden> - select one - </option>
            <option value="beverages" <?php if($_POST["category"] == 'beverages'){echo("selected");}?>>Beverages</option>
            <option value="fruits" <?php if($_POST["category"] == 'fruits'){echo("selected");}?>>Fruits</option>
            <option value="meals" <?php if($_POST["category"] == 'meals'){echo("selected");}?>>Meals</option>
            <option value="snacks" <?php if($_POST["category"] == 'snacks'){echo("selected");}?>>Snacks</option>
            </select> <br><br>
        <label for="id">Product ID:</label><br>
        <input type="number" required name="id" size="5" value = <?php echo $_POST["id"]; ?>><br>
        <label for="name">Product name:</label>
        <input type="text" required name="name" size="5" value = <?php echo $_POST["name"]; ?>><br>
        <label for="price">Product price:</label><br>
        <input type="number" required name="price" min="0" placeholder="$ 0.00" step=".01" size="5" value = <?php echo $_POST["price"]; ?>><br>
        <label for="quantity">Inventory stock:</label>
        <input type="text" required name="quantity" size="2" value = <?php echo $_POST["quantity"]; ?>><br>
        <label for="description">Description:</label><br>
        <textarea required id = "styled" name="description" rows="8" cols="50"><?php echo $_POST["description"]; ?></textarea><br>
        <input class="btn btn-primary" name="save" type="submit" value="Save">
      </form>

    </div>
  </div>
</div>

<!-- common footer section starts-->
<section class="footer">
  <hr class="solid">
    <footer class="copyright">
      <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
    </footer>
  </div>
</section>
<!-- Install JavaScrip plugins and Popper -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
</body>
</html>
