<!-- <?php
      $errors = array();
      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $homeaddress = $_POST['homeaddress'];
        $city = $_POST['city'];
        $postalcode = $_POST['postalcode'];
        if (file_exists('users/' . $username . 'xml')) {
          $errors[] = 'The username already exists.';
        }
        if ($username == '') {
          $errors[] = 'Please enter a username.';
        }
        if ($email == '') {
          $errors[] = 'Please enter your e-mail address.';
        }
        if ($password == '' || $repeatpassword == '') {
          $errors[] = 'Please enter your password twice';
        }
        if ($password != $repeatpassword) {
          $errors[] = 'The passwords do not match';
        }
        if ($firstname == '') {
          $errors[] = 'Please enter your first name.';
        }
        if ($lastname == '') {
          $errors[] = 'Please enter your last name.';
        }
        if ($homeaddress == '') {
          $errors[] = 'Please enter your adress.';
        }
        if ($city == '') {
          $errors[] = 'Please enter your city.';
        }
        if ($postalcode == '') {
          $errors[] = 'Please enter your postal code.';
        }
        if (count($errors) == 0) {
          $xml = new SimpleXMLElement('<user></user');
          $xml->addChild('email', $email);
          $xml->addChild('password', md5($password));
          $xml->addChild('firstname', $firstname);
          $xml->addChild('lastname', $lastname);
          $xml->addChild('homeaddress', $homeaddress);
          $xml->addChild('city', $city);
          $xml->addChild('postalcode', $postalcode);
          $xmml->adXML('users/' . $username . '.xml.');
          header('Location: ../index.php');
          die;
        }
      }
      ?> -->

<?php
$errorVisibility = "display:none;";
if (isset($_GET['error'])) {
  $errorVisibility = "display:block;";
}
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

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
</head>

<body>
  <div id="page-container">
    <div id="content-wrap">
      <header>
        <div class="header-2">
          <!-- main logo and search bar -->
          <a href="../index.php" class="logo"><img src="../green_market-logo-backend.png" id="market-name">
          </a>
        </div>
      </header>
      <p><br /></p>
      <p><br /></p>
      <div style=<?php echo $errorVisibility ?>>
        <p>Error: <?php echo $_GET['error'] ?></p>
      </div>
      <h2>Sign up</h2>
      <form id="signup-form" method="post" action="sign_up.php" onsubmit="return checkPassword();" style="border: 1px">
        <?php
        if (count($errors) > 0) {
          echo '<ul>';
          foreach ($errors as $e) {
            echo '<li>' . $e . '</li>';
          }
        }
        ?>
        <div class="container">
          <input class="btn btn-outline-secondary btn-small" type="reset" value="Reset" />

          <h3>Account information</h3>
          <p><br /></p>
          <label for="e-mail"><b>E-mail</b></label>
          <input type="text" placeholder="Enter e-mail" name="email" id="email" required />

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter username" name="username" id="username" required />
          <p id="username-error"></p>

          <label for="Password"><b>Password (8 characters minimum)</b></label>
          <input type="password" placeholder="Enter password" name="password" id="password" minlength="8" required />

          <label for="Repeat-password"><b>Repeat password</b></label>
          <input type="password" placeholder="Repeat password" name="repeatpassword" id="repeatpassword" required />
          <p id="password-error"></p>
          <hr />
          <h3>Delivery Information</h3>
          <p><br /></p>
          <label for="first-name"><b>First name</b></label>
          <input type="text" placeholder="Enter your first name" name="firstname" id="firstname" required />

          <label for="last-name"><b>Last name</b></label>
          <input type="text" placeholder="Enter your last name" name="lastname" id="lastname" required />

          <label for="Home-address"><b>Address</b></label>
          <input type="text" placeholder="Enter your address" name="homeaddress" id="homeaddress" required />

          <label for="City"><b>City</b></label>
          <input type="text" placeholder="Enter your city" name="city" id="city" required />

          <div>
            <p id="pc-error"></p>
          </div>

          <label for="Postal-code"><b>Postal code</b></label>
          <input type="text" placeholder="Enter your postal code" name="postalcode" id="postalcode" required />
          <p><br /></p>

          <p>
            <br />
            By creating an account you agree to our
            <a href="#">Terms & Privacy</a>.
          </p>
          <br />
          <input type="submit" value="Sign up" />
        </div>

        <div class="container signin">
          <p>
            Already have an account?
            <a href="../P5/P5-login.php" id="signin">Sign in</a>.
          </p>
        </div>
      </form>

    </div>
    <!-- common footer section starts  -->
    <section class="footer">
      <hr class="solid">
      <div>
        <footer class="copyright">
          <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
        </footer>
      </div>
    </section>
    <!-- Install JavaScrip plugins and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
  <script>
    // check postal code
    var pcTextField = document.getElementById('postalcode');
    var errorPC = document.getElementById('pc-error');
    pcTextField.addEventListener("change", checkPC);

    function checkPC() {
      var postalCode = pcTextField.value;
      var result = postalCode.search(/[A-Z][0-9][A-Z]-[0-9][A-Z][0-9]/i)
      if (result == -1) {
        pcTextField.value = "";
        errorPC.innerHTML = "Invalid postal code. Format should be like A1A-1B1";
      } else {
        pcTextField.value = postalCode.toUpperCase();
        errorPC.innerHTML = "";
      }
    }

    // check password for change and submit;
    let passwordTF = document.getElementById('password');
    let repeatpasswordTF = document.getElementById('repeatpassword');
    let errorPassword = document.getElementById('password-error');
    passwordTF.addEventListener("change", checkPassword);
    repeatpasswordTF.addEventListener("change", checkPassword);

    function checkPassword() {
      var password = passwordTF.value;
      var rpassword = repeatpasswordTF.value;
      let passwordString = password.toString();
      let rpasswordString = rpassword.toString();
      let result = passwordString.localeCompare(rpasswordString);
      if (result != 0) {
        errorPassword.innerHTML = "not matching";
        return false;
      } else {
        errorPassword.innerHTML = "matching";
      }
    }

    // check username if it already exists
    // let usernameTF = document.getElementById('username');
    // let errorUsername = document.getElementById('username-error');
    // usernameTF.addEventListener("change", checkUsername);

    // function checkUsername() {
    //   let username = usernameTF.value;
    //   if (username.length == 0) {
    //     return false;
    //   } else {
    //     const xmlhttp = new XMLHttpRequest();
    //     xmlhttp.onload = function() {
    //       let usernameExists = (this.responseText === "true");
    //       if (usernameExists) {
    //         errorUsername.innerHTML = "Username already exists.";
    //       } else {

    //       }
    //     xmlhttp.open("GET", "checkusername.php?username=" + username);
    //     xmlhttp.send();
    //   }
    // }
  </script>
</body>

</html>