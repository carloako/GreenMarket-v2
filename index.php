<?php
session_start();
$namevisibility = "display:none;";
if (isset($_SESSION['username'])) {
	$namevisibility = "display:inline;";
}
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include "head.php" ?>
	<!-- Custom Stylesheets -->
	<link href="stylesheet.css" rel="stylesheet" />
	<link href="P1-style.css" rel="stylesheet" />
	<link href="P1_P2-style.css" rel="stylesheet" />

	<!-- JS file -->
	<script type="text/javascript" src="home.js"></script>
</head>

<body>
	<div id="page-container">
		<div id="content-wrap">
			<?php include "header.php" ?>

			<!-- main content -->

			<!-- img -->
			<section class="home" id="home">
				<div class="image">
					<img src="homepage-img.jpg" alt="">
				</div>
				<div class="content">
					<h2>Montreal's best selection</h2>
					<br />
					<a href="P2-P3/aisles.html" class="btn">Start shopping</a>
				</div>
			</section>
			<!-- press start -->
		</div>

		<!-- deals -->

		<hr class="horizontal-rule">

		<div class="container-fluid" style="width:95%">
			<div class="position-relative shadow mb-3">
				<a href="../extra/deals.html" class="disabled-anchor">
					<img src="truck.jpg" class="w-100 rounded-3" alt="Truck">
					<div class="position-absolute bottom-0 start-0">
						<p class="p-0 m-0" style="font-size: 3vw;font-weight:800;color:white;"><br />MORE DEALS!<br /><br /></p>
					</div>
				</a>
			</div>
			<div>
				<h1 class="hr-text">ON SALE THIS WEEK</h2>
			</div>
			<div class="container-fluid my-4" style="width:100%;">
				<div class="row">
					<?php include "onsale-items.php" ?>
				</div>
			</div>
			<div>
				<h1 class="hr-text">AISLES</h1>
			</div>
			<div class="center-table whitebg whole-bd">
				<div class="center-table-container">
					<div class="center-table-items item-bottom-bd">
						<a class="items" href="P2-P3/john/fruits.php">
							<img src="P2-P3/aisles_images/fruits.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Fruits</h3>
						</a>
					</div>
					<div class="center-table-items item-bottom-bd">
						<a class="items" href="P2-P3/francis/beverages.php">
							<img src="P2-P3/aisles_images/beverages.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Beverages</h3>
						</a>
					</div>
					<div class="center-table-items item-bottom-bd">
						<a class="items" href="P2-P3/eve/prepared-meals.php">
							<img src="P2-P3/aisles_images/meals.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Meals</h3>
						</a>
					</div>
					<div class="center-table-items item-bottom-bd">
						<a class="items" href="P2-P3/ulas/snacks-aisle.php">
							<img src="P2-P3/aisles_images/snacks.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Snacks</h3>
						</a>
					</div>
				</div>
			</div>
			<div class="container-fluid my-4" style="width:100%;">
				<div class="row">
					<?php include "aisle-items-homepage.php" ?>
				</div>
			</div>
		</div>
		<br /><br />
		<!-- common footer section starts-->
		<?php include "footer.php" ?>
	</div>
	<!-- Install JavaScript plugins and Popper -->
	<script src="extra/search.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="extra/search.js"></script>
</body>

</html>