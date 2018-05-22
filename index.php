<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<html>
<head>
	<title>Willy Wonka World Wide: An Ecommerce Online Candy Shopping Website</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="agile-login">
				<ul>

				<?php
				$servername = "localhost";
				$username = "root";
				$password = "mysql";
				$database = "WillyWonkaWorldWide";
				$conn = new mysqli($servername, $username, $password, $database);
				// Check connection
				if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
				}

				$sql="SELECT firstName FROM customers WHERE sessionActive=1";
				$run = mysqli_query($conn, $sql) or die('error getting query');

				if (mysqli_num_rows($run) == 0) {
					echo "<li><a href='registered.html'> Create Account </a></li>";
					echo "<li><a href='login.html'>Login</a></li>";
					echo "<li><a href='managerlogin.html'>Manager Login</a></li>";

			  } else   {
			      while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
							$firstName = $row['firstName'];
						}
						echo "<li><h3><a href='index.php'>Hi, $firstName!</a></h3></li>";
						echo "<li><a href='logout.php'>Logout</a></li>";
			  }
				?>

				</ul>
			</div>
			<div class="product_list_header">
				<form action="logincheck.php" method="post" class="last">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+123) 867 5309</li>

				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Willy Wonka World Wide</a></h1>
			</div>
			<div class="w3l_search">
				<form action="search.php" method="post">
					<input type="search" name="Search" placeholder="Search for a Product..." required="">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
					<div class="clearfix"></div>
				</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
				</div>
				<nav class="navbar navbar-default">
  			<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="act">Home</a></li>
						<li><a href="chocolate.php">Chocolate</a></li>
						<li><a href="nuts.php">Nuts</a></li>
						<li><a href="caramel.php">Caramel</a></li>
						<li><a href="gummy.php">Gummy</a></li>
						<li><a href="hard.php">Hard</a></li>
						<li><a href="fruity.php">Fruity</a></li>
						<li><a href="minty.php">Minty</a></li>
						<li><a href="licorice.php">Licorice</a></li>
						<li><a href="sour.php">Sour</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- //navigation -->
	<!-- main-slider -->
	<ul id="demo1">
		<li>
			<img src="images/11.jpg" alt="" />
			<!--Slider Description example-->
			<div class="slide-desc">
				<h3>Now, Buy All Candy With Us Online</h3>
			</div>
		</li>
		<li>
			<img src="images/22.jpg" alt="" />
			<div class="slide-desc">
				<h3>Now, Buy All Candy With Us Online</h3>
			</div>
		</li>

		<li>
			<img src="images/44.jpg" alt="" />
			<div class="slide-desc">
				<h3>Contact Us For a Visit to the Factory!</h3>
			</div>
		</li>
	</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h2>Top Selling Nation-Wide</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<!-- <ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Regional Best-Selling</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">National Best-Selling</a></li>
					</ul> -->
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<!-- <div class="agile-tp">
								<h5>The following are the top most ordered products nation-wide</h5>
							 	<p class="w3l-ad">The following are some of our most-liked products in your region</p>
							</div> -->
							<div class="agile_top_brands_grids">

							<?php

								$servername = "localhost";
					      $username = "root";
					      $password = "mysql";
					      $database = "WillyWonkaWorldWide";
					      $conn = new mysqli($servername, $username, $password, $database);
					      // Check connection
					      if ($conn->connect_error) {
					          die("Connection failed: " . $conn->connect_error);
					      }
								//else{
										//echo "<p><font color=\"red\">Connected successfully!</font></p>";
								//}

								$sqlget = "SELECT product.productID, product.productName, price.price, product.iconImage FROM `orders` JOIN `product` ON orders.productID = product.productID JOIN price on product.priceID = price.priceID GROUP by product.productID ORDER by COUNT(orders.quantity) DESC LIMIT 6";
								$sqldata = mysqli_query($conn, $sqlget) or die('error getting query');
								$rowCount =0;

								while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
									$rowCount++;

									$productID = $row['productID'];
									$productName = $row['productName'];
									$price = $row['price'];
									$icon = $row['iconImage'];

									echo "<div class='col-md-4 top_brand_left'>";
									echo "<div class='hover14 column'>";
									echo "<div class='agile_top_brand_left_grid'>";
									echo "<div class='agile_top_brand_left_grid1'>";
									echo "<figure>";
									echo "<div class='snipcart-item block'>";
									echo "<div class='snipcart-thumb'>";
									echo "<img src= 'data:image/png;base64,".base64_encode( $row['iconImage'] )." '/>";
									echo "<p>". $productName . "</p>";
									echo "<h4>".$price."</h4>";
									echo "</div>";
									echo "<div class='snipcart-details top_brand_home_details'>";
			              echo "<form action='logincheck.php' method='post'>";
			              echo "<fieldset>";
			                  echo "<input type='hidden' name='cmd' value='submit' />";
			                  echo "<input type='hidden' name='productID' value='$productID' />";
			                  echo "<input type='submit' name='submit' value='Add to cart' class='button' />";
			              echo "</fieldset>";
			              echo "</form>";
										echo "</div>";
										echo "</div>";
										echo "</figure>";
										echo "</div>";
										echo "</div>";
										echo "</div>";
										echo "</div>";

										if($rowCount%3 == 0){
		                  echo "<div class='clearfix'> </div>";
		                  echo "</div>";
		                  echo "<div class='agile_top_brands_grids'>";
		                }
								}

							?>

							<!-- <div class="clearfix"> </div>
							</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
							<h5>Nation-wide</h5>
							<p class="w3l-ad">Here are our best-selling products throughout the country right now</p>
							</div>
							<div class="agile_top_brands_grids">

									$servername = "localhost";
						      $username = "root";
						      $password = "mysql";
						      $database = "WillyWonkaWorldWide";
						      $conn = new mysqli($servername, $username, $password, $database);
						      // Check connection
						      if ($conn->connect_error) {
						          die("Connection failed: " . $conn->connect_error);
						      }
									//else{
										//echo "<p><font color=\"red\">Connected successfully!</font></p>";
									//}

									$sqlget="SELECT * from product LIMIT 6";
									$sqldata = mysqli_query($conn, $sqlget) or die('error getting query');
									$rowCount = 0;

									while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){

										$productID = $row['productID'];
										$productName = $row['productName'];
										$priceID = $row['priceID'];
										$rowCount++;

										echo "<div class='col-md-4 top_brand_left'>";
										echo "<div class='hover14 column'>";
										echo "<div class='agile_top_brand_left_grid'>";
										echo "<div class='agile_top_brand_left_grid1'>";
										echo "<figure>";
										echo "<div class='snipcart-item block'>";
										echo "<div class='snipcart-thumb'>";
										echo "<img src= 'data:image/png;base64,".base64_encode( $row['iconImage'] )." '/>";
										echo "<p>". $productName . "</p>";
										echo "<h4>$4.00</h4>";
										echo "</div>";
										echo "<div class='snipcart-details top_brand_home_details'>";
				              echo "<form action='#' method='post'>";
				              echo "<fieldset>";
				                  echo "<input type='hidden' name='cmd' value='_cart' />";
				                  echo "<input type='hidden' name='add' value='1' />";
				                  echo "<input type='hidden' name='business' value=' ' />";
				                  echo "<input type='hidden' name='item_name' value='Hershey Chocolate Bar' />";
				                  echo "<input type='hidden' name='amount' value='4.00' />";
				                  echo "<input type='hidden' name='discount_amount' value='1.00' />";
				                  echo "<input type='hidden' name='currency_code' value='USD' />";
				                  echo "<input type='hidden' name='return' value=' ' />";
				                  echo "<input type='hidden' name='cancel_return' value=' ' />";
				                  echo "<input type='submit' name='submit' value='Add to cart' class='button' />";
				              echo "</fieldset>";
				              echo "</form>";
											echo "</div>";
											echo "</div>";
											echo "</figure>";
											echo "</div>";
											echo "</div>";
											echo "</div>";
											echo "</div>";

											if($rowCount%3 == 0){
			                  echo "<div class='clearfix'> </div>";
			                  echo "</div>";
			                  echo "<div class='agile_top_brands_grids'>";
			                }
									}

								?> -->

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //top-brands -->

	<!--About Us-->
	<div class="brands">
		<div class="container">
			<h3>About Us</h3>
				<div class="clearfix"></div>
				<br><br><p>Willy Wonka World Wide (WWWW) specializes in selling candy of various types (chocolate, gummy, etc.) all over America. Shop with us and get all the candy you need!</p>
			</div>
		</div>
	</div>
	<!--//brands-->

	<!-- //footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>135N Bellefield Avenue <span>Pittsburgh, PA</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:wonkywilly@world.com">wonkywilly@world.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+(123) 867 5309</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Categories</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="chocolate.php">Chocolate</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="nuts.php">Nuts</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="caramel.php">Caramel</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="gummy.php">Gummy</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="hard.php">Hard</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<br><br><br>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="fruity.php">Fruity</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="minty.php">Minty</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="licorice.php">Licorice</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="sour.php">Sour</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">

						<?php
						$servername = "localhost";
						$username = "root";
						$password = "mysql";
						$database = "WillyWonkaWorldWide";
						$conn = new mysqli($servername, $username, $password, $database);
						// Check connection
						if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
						}

						$sql="SELECT firstName FROM customers WHERE sessionActive=1";
						$run = mysqli_query($conn, $sql) or die('error getting query');

						if (mysqli_num_rows($run) == 0) {
							echo "<li><i class='fa fa-arrow-right' aria-hidden='true'></i><a href='registered.html'>Create Account</a></li>";
							echo "<li><i class='fa fa-arrow-right' aria-hidden='true'></i><a href='login.html'>Login</a></li>";

					  } else   {
							echo "<li><i class='fa fa-arrow-right' aria-hidden='true'></i><a href='logincheck.php'>My Cart</a></li>";
							echo "<li><i class='fa fa-arrow-right' aria-hidden='true'></i><a href='logout.php'>Logout</a></li>";
					  }
						?>

					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p>© 2017 Super Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>

	</div>
	<div class="footer-botm">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer -->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- top-header and slider -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}
	</script>
	<!-- main slider-banner -->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo1').skdslider({
				'delay': 5000,
				'animationSpeed': 2000,
				'showNextPrev': true,
				'showPlayButton': true,
				'autoSlide': true,
				'animationType': 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
			});

		});
	</script>
	<!-- //main slider-banner -->
</body>

</html>
