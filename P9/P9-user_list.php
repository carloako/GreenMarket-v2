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
  <link href="../P9-style.css" rel="stylesheet" />
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

      <div class="dropdown">
        <button class="dropbtn" id="dropbtn">Menu</button>
        <div class="dropdown-content" id="dropdown-content">
          <a href="../P7/P7-product_list.html">Product List</a>
          <a href="../P9/P9-user_list.php">User List</a>
          <a href="../P11/P11-order_list.php">Order List</a>
        </div>
      </div>
      <!--sidebar-->
      <div class="sidenav">
        <a href="../P7/P7-product_list.html" class="sidenav-item">Product List</a>
        <a href="../P9/P9-user_list.php" class="sidenav-item">User List</a>
        <a href="../P11/P11-order_list.php" class="sidenav-item">Order List</a>
      </div>

      <!--main-->
      <div class="main">
        <div class="background">
          <div class="content">
            <div>
              <table>
                <caption>List of Users</caption>
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Additional Info</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $xml = simplexml_load_file('../private/database.xml');
                  $users = $xml->user;

                  foreach ($users as $user) {
                    echo "<tr>";
                    echo "<form action = \"delete_user_action.php\" method = \"post\">";
                    echo "<td data-label = \"First Name\">$user->firstname</td>";
                    echo "<td data-label = \"Last Name\">$user->lastname</td>";
                    echo "<td data-label = \"Email Address\" style = \"white-space:nowrap;overflow:hidden;text-overflow:ellipsis;\">$user->email</td>";
                    echo "<td data-label=\"Action\"><input type = \"submit\" class = \"edit-button\" value = \"Edit\" formaction = \"../P10/P10-edit_user.php\" style = \"\" name = \"edit-button\"><input type = \"hidden\" value = \"$user->email\" name = \"email\"></td>";
                    echo "<td data-label=\"Delete\"><input class = \"delete-icon\" type = \"image\" src = \"https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/lg/57/wastebasket_1f5d1.png\" id = \"\" value = \"\" name = \"delete-button\"></td>";
                    echo "</form>";
                    echo "</tr>";
                  }
                  // include '../private/update-db.php';
                  // updateDatabase();
                  ?>
                </tbody>
              </table>

              </table>
              <br>
              <form action="../P10/P10-edit_user.php" style="margin-left:10%;"> <input class="btn btn-primary" type="submit" value="Add a new user" />
              </form>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      function showMenu() {
        var content = document.getElementById("dropdown-content");
        if (content.style.display == "none") {
          content.style.display = "block";
        }
        else{
          content.style.display = "none";
        }
      }
      document.getElementById("dropbtn").onclick = showMenu;
      // document.getElementById("dropdown-content").onblur = function() {document.getElementById("dropdown-content").style.display = "none";};
    </script>
</body>

</html>