<!-- <?php
$error = false;
  if(isset($_POST['login'])) {
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $password = md5($_POST['password']);
    if(file_exists('users/' . $username . 'xml')) {
      $xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
      if(isset($_SESSION['admin'])) {
        $xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
        if($password == '5f4dcc3b5aa765d61d8327deb882cf99') {
          session_start();
          $_SESSION['username'] = $username;
          header('Location: ../index.php');
          die;
        }
      }
      if($password == $xml->password) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: ../index.pxp');
        die;
      }
    }
    $error = true;
  }
?> -->
<?php include "../session.php" ?>


<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
<p><br/></p>
<p><br/></p>

<!-- Common header section ends here -->

<!-- P5: Login section starts here -->

<h2>User Login page</h2>
<!-- login box part -->
    <form method="post" action="login_procedure.php" style="border: 1px">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter username"
          name="username"
          id="username"
          required
        />

        <label for="password"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter password"
          name="password"
          id="password"
          required
        />
        <p>
          <!-- <?php
          if($error) {
            echo'<p>Invalid username and/or password.</p>';
          }
          ?> -->
          <a href="../extra/forgotpassword.html" style="font-size:80%; float: right;">Forgot your password?</a>
        </p>
        
        <input id="loginBtn" class="loginBtn" type="submit" value="Log in" name="login">
      </div>
      
      <!-- create an account link -->
      <div class="container signin">
        <p style="font-size:90%;">
          Not a member yet?
          <a href="../P6/P6-sign_up.php" id="signin"> Create an account</a>
       </p>
      </div>
    </form>




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
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  </div>
  </body>
  </html>
