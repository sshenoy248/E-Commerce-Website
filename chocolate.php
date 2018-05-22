<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
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
						<li><a href="index.php" class="act">Home</a></li>
						<li class="active"><a href="chocolate.php">Chocolate</a></li>
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

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Chocolate</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!--- products --->
	<div class="products">
		<div class="container">
			<div class="col-md-12 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
						<form action="sorting.php" method="post">
							<select name="sorting">
								<option value="Default"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
								<option value="popularity"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option>
								<option value="lowToHigh"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price: Low to High</option>
								<option value="highToLow"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price: High to Low</option>
							</select>
							<input type='hidden' name='page' value='chocolate' />
							<input name="submit" type="submit" value="View"/>
						</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
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

						$sortType= $_GET["sortType"];
						$categoryID=1;

						if($sortType== Null){
							$sortType='Default';
							$categoryID =1;
						}
						if($sortType== 'Default'){
							$sql="SELECT product.productID,product.productName, product.iconImage, price.price FROM `product` JOIN price ON product.priceID = price.priceID WHERE product.type1 = $categoryID OR product.type2 = $categoryID;";
							$run = mysqli_query($conn, $sql) or die('error getting query');
						} else if($sortType== 'popularity'){
						  $sql= "SELECT product.productID,product.productName, product.iconImage, price.price FROM `product` JOIN price ON product.priceID = price.priceID JOIN orders ON orders.productID = product.productID WHERE product.type1 = $categoryID OR product.type2 = $categoryID GROUP by product.productID ORDER by COUNT(orders.quantity) DESC";
						  $run = mysqli_query($conn, $sql) or die('error executing query');
						} else if($sortType== 'lowToHigh'){
						  $sql= "SELECT product.productID,product.productName, product.iconImage, price.price FROM `product` JOIN price ON product.priceID = price.priceID WHERE product.type1 = $categoryID OR product.type2 = $categoryID ORDER BY price.price ASC";
						  $run = mysqli_query($conn, $sql) or die('error executing query');
						} else if($sortType== 'highToLow'){
						  $sql= "SELECT product.productID,product.productName, product.iconImage, price.price FROM `product` JOIN price ON product.priceID = price.priceID WHERE product.type1 = $categoryID OR product.type2 = $categoryID ORDER BY price.price DESC";
						  $run = mysqli_query($conn, $sql) or die('error executing query');
						}

            $rowCount = 0;

            while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
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

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- products --->

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

			$().UItoTop({ easingType: 'easeOutQuart' });

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
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});
</script>
<!-- //main slider-banner -->

</body>
</html>
