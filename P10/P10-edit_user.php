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
<!-- <p><br/></p>
<p><br/></p>

<p><br/></p>
<p><br/></p> -->
        <form action="edit_user_action_page.php" method = "post" style="margin-left:10%; margin-right:10%;">
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
                    if (isset($_POST["email"])){
                        $targetEmail = $_POST["email"];
                        $email = $targetEmail;
                        foreach($users as $user){
                            if($targetEmail == $user->email){
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
                    <input type = "hidden" name = "id" <?php echo "value = \"$id\"";?> >
                    <input type="text" placeholder="Enter e-mail" name="e-mail" id="e-mail" <?php echo "value = \"$email\""; ?>  required>

                    <label for="Password"><b>Password</b></label>
                    <input type="text" placeholder="Enter password" name="password" id="password" <?php echo "value = \"$password\"";?> required>

                    <label for="Repeat-password"><b>Repeat password</b></label>
                    <input type="text" placeholder="Repeat password" name="Repeat-password" id="Repear-password" required>
                <hr>
                <h4>Delivery information</h4><br>
                    <label for="first-name"><b>First name</b></label>
                    <input type="text" placeholder="Enter your first name" name="first-name" id="first-name" <?php echo "value = \"$fname\"";?> required>

                    <label for="last-name"><b>Last name</b></label>
                    <input type="text" placeholder="Enter your last name" name="last-name" id="last-name" <?php echo "value = \"$lname\"";?> required>

                    <label for="Home-address"><b>Address</b></label>
                    <input type="text" placeholder="Enter your address" name="home-address" id="home-address" <?php echo "value = \"$address\"";?> required>

                    <label for="City"><b>City</b></label>
                    <input type="text" placeholder="Enter your city" name="city" id="city" <?php echo "value = \"$city\"";?> required>

                    <label for="Postal-code"><b>Postal code</b></label>
                    <input type="text" placeholder="Enter your postal code" name="postal-code" id="postal-code" <?php echo "value = \"$postalcode\"";?> required>

                    <label for="phone-number"><b>Phone number</b></label>
                    <input type="text" placeholder="Enter your phone number" name="phone-number" id="phone-number" <?php echo "value = \"$phonenumber\"";?> required>

                    <input type="submit" value="Save">
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
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
</body>
</html>