<?php
include 'dbconn.php';
include 'nintendoscript.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<!--owl carousel-->
	<!--end carousle style-->
	<title>Dalgames &reg;</title>
</head>

<body>

	<!--header navbar-->
	<div class="top-header">
		<!--left side-->
		<div class="left">
			10% Discount On Payment With Cryptocurrency
		</div>
		<!--right side-->
		<div class="right">
			<!--currency-->
			<div class="currency">
				Currency
				<div class="dropdown">
					<p>USD</p>
					<p>EURO</p>
				</div>
			</div>
			<!--language-->
			<div class="language">
				Language
				<div class="dropdown">
					<p>English</p>
					<p>French</p>
				</div>
			</div>
			<!-- 
			cta button login/join--
			<div class="cta">
				<p></p>
				<p><a href="#">Signin/Join</a></p>
			</div>
		-->
			<!--discount-->
			<div class="discount">
				10% Discount On Payment With Cryptocurrency
			</div>
		</div>
		<!--/right side-->
	</div>
	<!--/header navbar-->

	<!---menu-->
	<div class="menu">
		<!--menu 
		<div class="hamburger" id="menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	-->
		<div class="title">
			Dalgames<sup>&reg;</sup>
		</div>

	</div>
	<!--/menu-->


	<!--hero scetion-->
	<div class="hero">

		<div class="hero-info">
			<h1>WELCOME TO</h1>
			<h2>Dalgames&reg; E-GAME SHOP</h2>
			<p>HELPING YOU FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="">BUY NOW</a>
			</button>
		</div>

		<div class="hero-image">
			<img src="icons/heroimg.png" alt="hero image">
		</div>

	</div>
	<!--/hero scetion-->


	<!--product banners--
	<div class="banners">

		<div class="banner b1" style="background-image: url('bannerimgs/mg.png');">
			<h2><span class="banner-keyword">AMAZING GAMES </span>AT MIND BLOWING PRICES</h2>
		</div>

		<div class="banner b2" style="background-image: url('bannerimgs/wall.png');">
			<h2><span class="banner-keyword">AMAZING GAMES </span>AT MIND BLOWING PRICES</h2>
		</div>

		<div class="banner b3" style="background-image: url('bannerimgs/sale.jpg');">
			<h2><span class="banner-keyword">AMAZING GAMES </span>AT MIND BLOWING PRICES</h2>
		</div>

	</div>
	/product banners-->


	<!--PRODUCT SECTION navbar-->
	<div class="products-navbar" id="new">
		<h2><span class="active">NEW</span> PRODUCTS</h2>
		<!--navbar-->
		<div class="sub-product-navbar">
			<ul>
				<li><a href="index.php">All</a></li>
				<li><a href="xbox.php">Xbox</a></li>
				<li><a href="playstation.php">Playstation</a></li>
				<li><a href="#" class="active">Nintendo</a></li>
				<li><a href="console.php">Consoles</a></li>
			</ul>
			<!--/navbar-->
		</div>
		<!--/navbar-wrapper-->
	</div>
	<!--/PRODUCT SECTION navbar-->


	<!--nintendo detail/images -->
	<div class="top-rated-games">
		<!--FETCH AND SHOW IMG FROM DB-->
		<?php
		$records = mysqli_query($conn, "select * from nintendo order by `id` ASC");
		if (mysqli_num_rows($records) > 0) {
			while ($data = mysqli_fetch_array($records)) {
		?>
		<!--/FETCHING-->

		<div class="product">

			<form method="post" action="nintendo.php?action=add&id=<?php echo $data["id"]; ?>">

				<div class="tester">
					<!--image container-->
					<div class="image-card">
						<img src="<?php echo $data['images']; ?>" loading="lazy">
					</div>
					<!--/image container-->
					<div class="wrapper">
						<!--game details-->
						<div class="details">
							<!--name of game-->
							<p class="game-name">
								<?php echo $data['filename']; ?>
								<input type="hidden" name="name" value="<?php echo $data['filename']; ?> " />
							</p>
							<!--console type-->
							<p class="console">
								<?php echo $data['console']; ?>
							</p>
							<!--price of the game-->
							<p class="price">$ <span id="price">
									<?php echo $data['price']; ?>
									<input type="hidden" name="price" value="<?php echo $data['price']; ?> " />
								</span>
							</p>
						</div>
						<!--add to cart-->
						<div class="cart-button">
							<img src="icons/cart.png" width="25px">
							<input type="submit" name="add_to_cart" value=" Add to Cart" class="tocart" />
						</div>
					</div>
				</div>
				<!--end of product-->
			</form>
		</div>
		<!--end of product-->
		<?php }
		}
		?>
		<!--end of PHP WHILE LOOP-->
	</div>
	<!--END of PRODUCTS WRAPPER-->


	<!--FLOATING SHOPPING CART -->
	<?php
	if (!empty($_SESSION["shopping_cart"])) {
		$cart_count = count(array_keys($_SESSION["shopping_cart"]));
	?>
	<div class="float-cart">
		<div class="shopping-cart">
			<a href="cart.php">
				<img src="icons/cart.png" alt="floating cart"></a>
			<p id="count"><?php echo $cart_count; ?></p>
		</div>
	</div>
	<?php
	}
	?>
	<!--/FLOATING SHOPPING CART -->


	<!--FOOTER-->
	<footer>

		<!-- CONTACT-->
		<div class="contact foot">
			<!--phone-->
			<div class="phone">
				<p>Contact us : <a href="tel:+14844718107">(+1)484-4718-107</a></p>
			</div>

			<!--social links-->
			<div class="social-media">
				<p>Follow us on :</p>
				<ul>
					<li><a href="instagram.com/pallygames">
							<img src="icons/ig.png" alt="instagram"></a></li>
					<li><a href="https://www.facebook.com/pallygames/-107773448135655/">
							<img src="icons/fb.png" alt="facebook"></a></li>
					<li><a href="twitter.com/dalifard4">
							<img src="icons/twi.png" alt="twitter"></a></li>
				</ul>
			</div>
			<!--end od contact-->
		</div>
		<!--END OF CONTACT-->

		<!--CREDITS-->
		<div class="credit foot">
			<p>&copy; Copyright&nbsp;<span class="year"></span>
				<span class="end-credit">&nbsp;Dalgames&reg;</span>
				- All Rights reserved
			</p>
		</div>
		<!--CREDITS-->


		<!--PAYMENT METHODS PICS-->
		<div class="pay-pics">
			<img src="icons/pp.png" alt="paypal">
			<img src="icons/ap.png" alt="applepay">
			<img src="icons/bit.png" alt="bitcoin">
			<img src="icons/gpay.png" alt="googleapp">
			<img src="icons/cashapp.png" alt="cashapp">
			<img src="icons/zelle.png" alt="zelle">
		</div>
		<!--/PAYMENT METHODS PICS-->

	</footer>

	<!--initialiaztion of coarousels for all pages-->


	<script src="js/addtocart.js"></script>
</body>

</html>
