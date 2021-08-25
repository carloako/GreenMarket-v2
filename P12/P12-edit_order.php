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
        <a href="../P1/index.php" class="logo"><img src="../green_market-logo-backend.png" id="market-name">
        </a>
      </div>
    </header>
<p><br/></p>
<p><br/></p>

<!--sidebar-->
<div class="sidenav">
  <a href="../P7/P7-product_list.html">Product List</a>
  <a href="../P9/P9-user_list.html">User List</a>
  <a href="../P11/P11-order_list.html">Order List</a>
</div>

<!--main-->
<div class="main">
	<div style="margin-left:10%; margin-right:10%;">
    <h2>Edit order</h2>
        <p><br/></p><p><br/></p>
        <?php
          $xml = simplexml_load_file('../database.xml');
          $orders = $xml->order;
          $id = "";
          $ordernumber = "";
          $email = "";
          $address = "";
          $paymentmethod = "";
          if (isset($_POST["id"])) {
            $targetOrder = $_POST["id"];
            foreach ($orders as $order) {
              if ($targetOrder == $order->id) {
                $id = $order->id;
                $ordernumber = $order->ordernumber;
                $email = $order->email;
                $address = $order->address;
                $paymentmethod = $order->paymentmethod;
                break;
              }
            }
          }
          // echo "$paymentmethod";
          ?>
		<form class="edit-order-form form-check" action = "edit_order_action.php" id = "form" name = "form" method = "post">
			<div class="form-group">
      <input type = "hidden" id = "id" name = "id" <?php echo "value = \"$id\""; ?>>
				<label for="order-id">Order ID</label>
				<input type="text" class="form-control" id="ordernumber" name = "ordernumber" <?php echo "value = \"$ordernumber\""; ?> required>
			</div>
			<div class="form-group">
				<label for="order-id">Email address</label>
				<input type="text" class="form-control" id="email" name = "email" <?php echo "value = \"$email\""; ?> required>
			</div>
			<div class="form-group">
				<label for="order-id">Address</label>
				<input type="text" class="form-control" id="address" name = "address" <?php echo "value = \"$address\""; ?> required>
			</div>
			<div class="form-group dropdown">
				<label for="order-id">Payment method</label>
        <input type = "hidden" id = "paymentmethod" name = "paymentmethod" <?php echo "value = \"$paymentmethod\""; ?>>
				<button class="edit-btn btn btn-secondary dropdown-toggle" type="button" id="paymentDropdownBtn" name = "paymentDropdownBtn"
					data-bs-toggle="dropdown" aria-expanded="false" <?php echo "value = \"$paymentmethod\""; ?>>
					<?php
                        if ($paymentmethod) {
                            echo "$paymentmethod";
                        }
                        else {
                            echo "None";
                        }
                    ?>
				</button>
				<ul class="payment-dropdown dropdown-menu" aria-labelledby="paymentDropdownBtn">
					<li><a class="payment-dropdown-item dropdown-item" href="#" id = "visa">Visa</a></li>
					<li><a class="payment-dropdown-item dropdown-item" href="#" id = "mc">Mastercard</a></li>
					<li><a class="payment-dropdown-item dropdown-item" href="#" id = "paypal">Paypal</a></li>
				</ul>
        <button style="float: right;" type = "button"  id = "btnsubmit" name = "btnsubmit" class="edit-btn btn btn-primary">Save</button>
			</div>
		</form>
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
<script>
      function submitForm() {
        if (countClicks === 1) {
          document.getElementById("form").submit();
        }
      }

      function countClick() {
        countClicks = 1;
        if (!checkOrderNumber()) return;
        if (!checkEmail()) return;
        if (!checkAddress()) return;
        if (!checkPaymentMethod()) return;
        submitForm();
      }

      function checkOrderNumber() {
        // var email = document.getElementById("e-mail");
        // var match = (email.value).search(/^[.A-Za-z_0-9]+@\w+.\w+$/);
        // if (match !== 0) {
        //   alert("Invalid order id!");
        //   countClicks = 0;
        //   return 0;
        // }
        return 1;
      }

      function checkEmail() {
        var email = document.getElementById("email");
        var match = (email.value).search(/^[.A-Za-z_0-9]+@\w+.\w+$/);
        if (match !== 0) {
          alert("Invalid email!");
          countClicks = 0;
          return 0;
        }
        return 1;
      }
      function checkAddress() {
        var address = document.getElementById("address");
        var match = address.value.search(/^[ A-Za-z_0-9]+$/);
        if (match !== 0) {
          alert("Invalid address!");
          countClicks = 0;
          return 0;
        }
        return 1;
      }

      function checkPaymentMethod(){
          var paymentMethod = document.getElementById("paymentmethod").value.toLowerCase();
          // document.getElementById("test").value = paymentMethod;
          if (paymentMethod != "visa" && paymentMethod != "mastercard" && paymentMethod != "paypal"){
              alert("Invalid payment method!");
              countclicks = 0;
              return 0;
          }
          return 1;
      }
      
      function changeToVisa() {
        document.getElementById("paymentmethod").value = "Visa";
        document.getElementById("paymentDropdownBtn").innerHTML = "Visa";
      }
      function changeToMc() {
        document.getElementById("paymentmethod").value = "Mastercard";
        document.getElementById("paymentDropdownBtn").innerHTML = "Mastercard";
      }
      function changeToPaypal() {
        document.getElementById("paymentmethod").value = "Paypal";
        document.getElementById("paymentDropdownBtn").innerHTML = "Paypal";
      }

      // function checkFocus(){
      //   document.getElementById("e-mail").focus();
      // }
      document.getElementById("ordernumber").addEventListener("blur", checkOrderNumber);
      document.getElementById("email").addEventListener("blur", checkEmail);
      document.getElementById("address").addEventListener("blur", checkAddress);
      document.getElementById("visa").addEventListener("click", changeToVisa);
      document.getElementById("mc").addEventListener("click", changeToMc);
      document.getElementById("paypal").addEventListener("click", changeToPaypal);
    //   document.getElementById("payment").addEventListener("blur", checkFirstName);
      document.getElementById("btnsubmit").addEventListener("click", countClick);
      // document.getElementById("test").addEventListener("click", checkPaymentMethod);
    </script>
</body>
</html>