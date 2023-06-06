<?php include "../session.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../head.php" ?>
  <!-- Custom Stylesheets -->
  <link href="../stylesheet.css" rel="stylesheet" />
  <link href="../P1_P2-style.css" rel="stylesheet" />

  <!-- JS file -->
  <script type="text/javascript" src="../home.js"></script>
</head>

<body>
  <div id="page-container">
    <div id="content-wrap">
      <?php include "../header.php" ?>
      <div class="m-4" >
        <div>
          <h1 class="hr-text">AISLES</h1>
        </div>
        <?php include "../aisle-items.php" ?>
      </div>
    </div>

    <?php include "../footer.php" ?>
  </div>
  <!-- Install JavaScrip plugins and Popper -->
  <script src="../extra/search.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>