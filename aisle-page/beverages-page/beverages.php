<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Market</title>
    <meta
      charset="utf-8"
      name="viewport"
      content="width = device-width, initial-scale = 1.0"
    />
	<!-- Swiper CDN -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
	<!-- font awesome CDN -->
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
    <link href="../../stylesheet.css" rel="stylesheet" />
    <link href="../../P3-style-aisle.css" rel="stylesheet"/>

	<!-- JS file -->
	<script type="text/javascript" src="../../home.js"></script>
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
		  <a href="../../index.php" class="logo"><img src="../../green_market-logo.png" id="market-name"></a>
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
							<a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../P2-P3/aisles.html">Aisles</a>
						</li>
						<li class="nav-item">
              <a class="nav-link" href="../../extra/deals.html">Deals</a>
						</li>
						<li class="nav-item">
              <a class="nav-link" href="../../extra/services.html">Services</a>
						</li>
					</ul>
					<div class="user-shopping">
					<span id="shopping-cart">
						<a href="../../P4/P4-shopping_cart.php" class="fas fa-shopping-cart"></a>
					</span>
					<span id="user-login">
						<a href="../../P5/P5-login.php" class="fas fa-user"></a>
					</span>
					</div>
				</div>
			</div>
		</nav>
	  </div>
    </header>

    <div class = "" style = "overflow:hidden; white-space:nowrap;margin:1%">
			<h2>Beverages <hr style = "display:inline-block; width: 100%;"/></h2>
		</div>
		<div>
			<div class = "aisle-box whitebg whole-bd">
				<?php include "aisle_items.php"?>
			</div>
		</div>


<!-- common footer section starts  -->

<section class="footer">
  <div class="box-container">
    <div class="box">
      <p id="title-footer">Quick links</p>
      <p><a href="../../index.php">Home</a></p>
      <p><a href="../../extra/about.html">About us</a></p>
      <p><a href="../../extra/contact.html">Contact</a></p>
    </div>

    <div class="box">
      <p id="title-footer">Follow us:</p>
      <p><a href="https://facebook.com">Facebook</a></p>
      <p><a href="https://instagram.com">Instagram</a></p>
    </div>
  </div>
  <div>
      <p><br/></p>
    <footer class="copyright">
      <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
    </footer>
  </div>
</section>
<!-- Install JavaScrip plugins and Popper -->
<script src="../../extra/search.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
</body>
</html>
