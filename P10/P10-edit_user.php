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
      <form action="edit_user_action_page.php" method="post" name="form" id="form" style="margin-left:10%; margin-right:10%;">
        <div class="container">
          <h1>Edit profile</h1><br>
          <?php
          $xml = simplexml_load_file('../database.xml');
          $users = $xml->user;
          $email = "";
          $password = "";
          $fname = "";
          $lname = "";
          $address = "";
          $city = "";
          $postalcode = "";
          $phonenumber = "";
          $id = "";
          if (isset($_POST["email"])) {
            $targetEmail = $_POST["email"];
            $email = $targetEmail;
            foreach ($users as $user) {
              if ($targetEmail == $user->email) {
                $password = $user->password;
                $fname = $user->firstname;
                $lname = $user->lastname;
                $address = $user->address;
                $city = $user->city;
                $postalcode = $user->postalcode;
                $phonenumber = $user->phonenumber;
                $id = $user->id;
                break;
              }
            }
          }
          ?>
          <h4>Account information</h4><br>
          <label for="e-mail"><b>E-mail</b></label>
          <input type="hidden" name="id" <?php echo "value = \"$id\""; ?>>
          <input type="text" placeholder="Enter e-mail" name="e-mail" id="e-mail" <?php echo "value = \"$email\""; ?> required>

          <label for="Password"><b>Password</b></label>
          <input type="text" placeholder="Enter password" name="password" id="password" <?php echo "value = \"$password\""; ?> required>

          <label for="Repeat-password"><b>Repeat password</b></label>
          <input type="text" placeholder="Repeat password" name="repeat-password" id="repeat-password" required>
          <hr>
          <h4>Delivery information</h4><br>
          <label for="first-name"><b>First name</b></label>
          <input type="text" placeholder="Enter your first name" name="first-name" id="first-name" <?php echo "value = \"$fname\""; ?> required>

          <label for="last-name"><b>Last name</b></label>
          <input type="text" placeholder="Enter your last name" name="last-name" id="last-name" <?php echo "value = \"$lname\""; ?> required>

          <label for="Home-address"><b>Address</b></label>
          <input type="text" placeholder="Enter your address" name="home-address" id="home-address" <?php echo "value = \"$address\""; ?> required>

          <label for="City"><b>City</b></label>
          <input type="text" placeholder="Enter your city" name="city" id="city" <?php echo "value = \"$city\""; ?> required>

          <label for="Postal-code"><b>Postal code</b></label>
          <input type="text" placeholder="Enter your postal code" name="postal-code" id="postal-code" <?php echo "value = \"$postalcode\""; ?> required>

          <label for="phone-number"><b>Phone number</b></label>
          <input type="text" placeholder="Enter your phone number" name="phone-number" id="phone-number" <?php echo "value = \"$phonenumber\""; ?> required>

          <input type="button" id="btnsubmit" name="btnsubmit" value="Save">
        </div>
      </form>


      <!-- common footer section starts-->
      <section class="footer">
        <hr class="solid">
        <footer class="copyright">
          <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
        </footer>
    </div>
    </section>
    <!-- Install JavaScrip plugins and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      function submitForm() {
        if (countClicks === 1) {
          document.getElementById("form").submit();
        }
      }

      function countClick() {
        countClicks = 1;
        if (!checkEmail()) return;
        if (!checkPassword()) return;
        if (!checkSecondPassword()) return;
        if (!checkFirstName()) return;
        if (!checkLastName()) return;
        if (!checkAddress()) return;
        if (!checkCity()) return;
        if (!checkPostalCode()) return;
        if (!checkPhoneNumber()) return;
        submitForm();
      }

      function checkEmail() {
        var email = document.getElementById("e-mail");
        var match = (email.value).search(/^[.A-Za-z_0-9]+@\w+.\w+$/);
        if (match !== 0) {
          alert("Invalid email!");
          countClicks = 0;
          return 0;
        }
        return 1;
      }

      function checkPassword() {
        var password = document.getElementById("password");
        var match = (password.value).search(/^\w+$/);
        if (match !== 0) {
          alert("Invalid password!");
          countClicks = 0;
          return 0;
        }
        return 1;
      }

      function checkSecondPassword() {
        var secondPassword = document.getElementById("repeat-password");
        if (password.value != secondPassword.value) {
          alert("Confirm password again!")
          countClicks = 0;
          return 0;
        }
        return 1;
      }

      function checkFirstName() {
        var firstName = document.getElementById("first-name");
        var match = firstName.value.search(/^[ A-Za-z]+$/);
        if (match !== 0) {
          alert("Invalid first name!");
          countClicks = 0;
          return 0;
        }
        else {
          str = firstName.value;
          var arrayStr = str.split(" ");
          var newStr = "";
          for (var i = 0; i < arrayStr.length; i++){
            newStr += arrayStr[i].charAt(0).toUpperCase() + arrayStr[i].slice(1) + " ";
          }
          firstName.value = newStr.trim();
          return 1;
        }
      }

      function checkLastName() {
        var lastName = document.getElementById("last-name");
        var match = lastName.value.search(/^[ A-Za-z]+$/);
        if (match !== 0) {
          alert("Invalid last name!");
          countClicks = 0;
          return 0;
        }
        else {
          str = lastName.value;
          var arrayStr = str.split(" ");
          var newStr = "";
          for (var i = 0; i < arrayStr.length; i++){
            newStr += arrayStr[i].charAt(0).toUpperCase() + arrayStr[i].slice(1) + " ";
          }
          lastName.value = newStr.trim();
          return 1;
        }
      }

      function checkAddress() {
        var address = document.getElementById("home-address");
        var match = address.value.search(/^[ A-Za-z_0-9]+$/);
        if (match !== 0) {
          alert("Invalid home address!");
          countClicks = 0;
          return 0;
        }
        return 1;
      }

      function checkCity() {
        var city = document.getElementById("city");
        var match = city.value.search(/^[ A-Za-z_0-9]+$/);
        if (match !== 0) {
          alert("Invalid city!");
          countClicks = 0;
          return 0;
        }
        else {
          str = city.value;
          var arrayStr = str.split(" ");
          var newStr = "";
          for (var i = 0; i < arrayStr.length; i++){
            newStr += arrayStr[i].charAt(0).toUpperCase() + arrayStr[i].slice(1) + " ";
          }
          city.value = newStr.trim();
          return 1;
        }
      }

      function checkPostalCode() {
        var postalCode = document.getElementById("postal-code");
        var match = postalCode.value.search(/^\w\d\w *\d\w\d$/);
        if (match !== 0) {
          alert("Invalid postal code!");
          countClicks = 0;
          return 0;
        }
        else {
          str = postalCode.value.replace(/\s/g, "");
          var newStr = str.slice(0,3) + " " + str.slice(3);
          postalCode.value = newStr.toUpperCase();
          return 1;
        }
      }

      function checkPhoneNumber() {
        var phoneNumber = document.getElementById("phone-number");
        var match = phoneNumber.value.search(/^\d{3} ?-?\d{3} ?-?\d{4}$/);
        if (match !== 0) {
          alert("Invalid phone number!");
          countClicks = 0;
          return 0;
        }
        else {
          str = phoneNumber.value.replace(/[ ()-]/g, "");
          newStr = str.slice(0,3) + " " + str.slice(3, 6) + " " + str.slice(6);
          phoneNumber.value = newStr;
          return 1;
        }
      }

      // function checkFocus(){
      //   document.getElementById("e-mail").focus();
      // }
      document.getElementById("e-mail").addEventListener("blur", checkEmail);
      document.getElementById("password").addEventListener("blur", checkPassword);
      document.getElementById("repeat-password").addEventListener("blur", checkSecondPassword)
      document.getElementById("first-name").addEventListener("blur", checkFirstName);
      document.getElementById("last-name").addEventListener("blur", checkLastName);
      document.getElementById("home-address").addEventListener("blur", checkAddress);
      document.getElementById("city").addEventListener("blur", checkCity);
      document.getElementById("postal-code").addEventListener("blur", checkPostalCode);
      document.getElementById("phone-number").addEventListener("blur", checkPhoneNumber);
      document.getElementById("btnsubmit").addEventListener("click", countClick);
    </script>
</body>

</html>