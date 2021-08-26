<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Green Market</title>
	<meta charset="utf-8" name="viewport" content="width = device-width, initial-scale = 1.0" />
	<!-- Swiper CDN -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- font awesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
	<!-- install Bootstrap 4 CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
			<header>

				<div class="header-1">
					<a href="#" class="fab fa-facebook" style="font-size: 24px"></a>
					<a href="#" class="fab fa-instagram" style="font-size: 24px"></a>
				</div>

				<div class="header-2">
					<a href="index.php" class="logo"><img src="green_market-logo.png" id="market-name"></a>
					<div class="searching-container">
						<form onsubmit="return search()" class="search-bar-container">
							<input type="text" id="search-bar" placeholder="Search product">
							<a href="#" class="fas fa-search">
							</a>
						</form>
					</div>
				</div>
				<!-- menu bars -->
				<div class="nav" id="nav-theme">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="container-fluid">
							<a class="navbar-brand" href="#"></a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="index.php">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="P2-P3/aisles.html">Aisles</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="extra/deals.html">Deals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="extra/services.html">Services</a>
									</li>
								</ul>
								<div class="user-shopping">
									<span id="shopping-cart">
										<a href="P4/P4-shopping_cart.php" class="fas fa-shopping-cart"></a>
									</span>
									<span id="user-login">
										<a href="P5/P5-login.php" class="fas fa-user"></a>
									</span>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>

			<p><br /></p>
			<p><br /></p>

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
		<br /><br />
		<hr style="width: 100%;" class="solid">
		<br /><br />

		<div class="container">
			<a href="../extra/deals.html">
				<img src="truck.jpg" alt="Truck" style="width:100%;border-radius:30px;">
				<div class="center-left">
					<p style="font-size: 3vw;font-weight:bold"><br />MORE DEALS!<br /><br /></p>
				</div>
			</a>
		</div>
		<div class="" style="white-space:nowrap;">
			<h2 class="text-divider" id="divider">ON SALE THIS WEEK
				<hr style="display:inline-block; width: 100%;" class="solid" />
			</h2>
		</div>
		<div class="center-table whitebg whole-bd">
			<div class="center-table-container">
				<div class="center-table-items item-bottom-bd">
					<form id = "form1" action="P2-P3/product/product.php" method="get">
						<input type="hidden" name="productID" value="006">
						<a class="items" onclick = "document.getElementById('form1').submit()">
							<img src="P2-P3/images/strawberries.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Strawberries</h3>
						</a>
						<div style="width:200px;margin:auto;">
							<p class="sale">5$/piece</p>
							<p class="description before-price">10$/piece</p>
						</div>
					</form>
				</div>
				<div class="center-table-items item-bottom-bd">
					<form id = "form2" action="P2-P3/product/product.php" method="get">
						<input type="hidden" name="productID" value="007">
						<a class="items" onclick = "document.getElementById('form2').submit()">
							<img src="P2-P3/images/melons.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Melons</h3>
						</a>
						<div style="width:200px;margin:auto;">
							<p class="sale">4.99$/piece</p>
							<p class="description before-price">7.99$/piece</p>
						</div>
					</form>
				</div>
				<div class="center-table-items item-bottom-bd">
					<form id = "form3" action="P2-P3/product/product.php" method="get">
						<input type="hidden" name="productID" value="008">
						<a class="items" onclick = "document.getElementById('form3').submit()">
							<img src="P2-P3/images/watermelon.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Watermelons</h3>
						</a>
						<div style="width:200px;margin:auto;">
							<p class="sale">6.99$/piece</p>
							<p class="description before-price">15.99$/piece</p>
						</div>
					</form>
				</div>
				<div class="center-table-items item-bottom-bd">
					<form id = "form4" action="P2-P3/product/product.php" method="get">
						<input type="hidden" name="productID" value="009">
						<a class="items" onclick = "document.getElementById('form4').submit()" >
							<img src="P2-P3/images/mango.jpg" width="200" height="300" class="item-images"></br>
							<h3 class="item-name">Mangoes</h3>
						</a>
						<div style="width:200px;margin:auto;">
							<p class="sale">3.99$/piece</p>
							<p class="description before-price">10.5$/piece</p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="" style="white-space:nowrap;">
			<h2 class="text-divider" id="divider">AISLES
				<hr style="display:inline-block; width: 100%;" class="solid" />
			</h2>
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
		<br /><br />
		<!-- common footer section starts-->
		<section class="footer">
			<hr class="solid">
			<div class="box-container">
				<div class="box">
					<p id="title-footer" id="link">Quick links</p>
					<p><a href="index.php" id="link">Home</a></p>
					<p><a href="extra/about.html" id="link">About us</a></p>
					<p><a href="extra/contact.html" id="link">Contact</a></p>
				</div>

				<div class="box">
					<p id="title-footer">Follow us:</p>
					<p><a href="https://facebook.com" id="link">Facebook</a></p>
					<p><a href="https://instagram.com" id="link">Instagram</a></p>
				</div>
			</div>
			<footer class="copyright">
				<p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
			</footer>
	</div>
	</section>
	<!-- Install JavaScript plugins and Popper -->
	<script src="extra/search.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="extra/search.js"></script>
</body>

</html>
