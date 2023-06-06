<?php include "../session.php";
include "../connect-to-database.php";
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
$overviewBox = "";
if (!isset($_SESSION['username'])) {
  $overviewBox = "visually-hidden";
} else {
  if (!$conn) {
    header("Location: ../error.php?error=Database connection error.");
  } else {
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM Shopping_Cart WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
      $overviewBox = "visually-hidden";
    }
  }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../head.php" ?>
  <!-- Custom Stylesheets -->
  <link href="../stylesheet.css" rel="stylesheet" />
  <link href="../P4-style.css" rel="stylesheet" />
</head>

<body>
  <div id="page-container">
    <div id="content-wrap">
      
      <?php include "../header.php" ?>

      <!-- P4 shopping cart section starts -->
      <div class="alert alert-warning d-flex align-items-center <?php echo $error ?>" role="alert">
        <div class="">
          <?php echo $errorMsg ?>
        </div>
      </div>
      <div class="alert alert-success <?php echo $success ?>" role="alert">
        <?php echo $successMsg ?>
      </div>
			<div>
				<h1 class="hr-text">Shopping Cart</h2>
			</div>
      <section class="product" id="product">
        <div class="box-container-sc">
          <p class="sc-empty" id="sc-empty-text">Shopping cart empty!</p>
          <form id="scform" class = "scform" method="post" action="delete_item.php">

            <!-- read cart -->
            <?php include "read-cart-sql.php" ?>

          </form>
          <!-- <input type="button" id="btn-save-changes" value="Save Changes"> -->
        </div>
        <div class="overviewprice-box <?php echo $overviewBox ?>" id="overviewprice-box">
          <div class="overviewprice">
            <form id="form-payment" action="add-order-sql.php" method="post">
              <p><b>Total(w/o tax):</b> <span id="totalwotax"></span></p>
              <p><b>GST/HST:</b> <span id="gst"></span></p>
              <hr />
              <p><b>Total:</b> <span id="total"></span></p>
              <input type="hidden" name="totalinput" id="totalinput">
              <input type="submit" value = "Order">
            </form>
          </div>
        </div>
      </section>
    </div>
    <!-- shopping cart section ends -->

    <!-- common footer section starts-->
    <?php include "../footer.php" ?>
  </div>

  <!-- Install JavaScrip plugins and Popper -->
  <script src="../extra/search.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="P4.js"></script>
  <script>
    // check user and cart
    function checkUser() {
      <?php
      if (session_id() == "0") {
        echo "alert(\"You must be logged in to place an order\")";
      } else if (count($_SESSION) == 0) {
        echo "alert(\"Cart Empty\");";
      } else {
        echo "document.getElementById(\"form-payment\").submit();";
      }
      ?>
    }

    // make event handlers for plus buttons with php
    var plusButtons = document.getElementsByName("plus");
    <?php
    for ($i = 0; $i < count($_SESSION); $i++) {
      echo "plusButtons[$i].onclick = function (){qButtons[$i].value = parseInt(qButtons[$i].value) + 1;calculateTotal()};";
    }
    ?>

    // make event handlers for minus buttons with php
    var minusButtons = document.getElementsByName("minus");
    <?php
    for ($i = 0; $i < count($_SESSION); $i++) {
      echo "minusButtons[$i].onclick = function (){if(qButtons[$i].value != 1){qButtons[$i].value = parseInt(qButtons[$i].value) - 1;calculateTotal()}};";
    }
    ?>
  </script>
</body>

</html>