<?php
include 'dbconn.php';
include 'consolescript.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<title>consoles</title>
</head>

<body>
	<!---menu-->
	<div class="menu">
		<div class="title">
			Dalgames<sup>&reg;</sup>
		</div>

	</div>
	<!--/menu-->

	<!--hero scetion-->
	<div class="hero">

		<div class="hero-info">
			<h1>WELCOME TO</h1>
			<h2>Dalgames&reg; ONLINE-GAME-RETAILER</h2>
			<p>FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="">SHOP</a>
			</button>
		</div>

		<div class="hero-image">
			<img src="bannerimgs/wall3.jpeg" alt="hero image">
		</div>


	</div>
	<!--/hero scetion-->

	<!--PRODUCT SECTION navbar-->
	<div class="products-navbar" id="new">
		<h2><span class="active">JUST</span> IN</h2>
		<!--navbar-->
		<div class="sub-product-navbar">
			<ul>
				<li><a href="index.php">All</a></li>
				<li><a href="xbox.php">Xbox</a></li>
				<li><a href="playstation.php">Playstation</a></li>
				<li><a href="nintendo.php">Nintendo</a></li>
				<li><a href="#" class="active">Consoles</a></li>
			</ul>
			<!--/navbar-->
		</div>
		<!--/navbar-wrapper-->
	</div>
	<!--/PRODUCT SECTION navbar-->

	<!--consoles TOP RATED GAMES-->
	<!--top rated games-->
	<div class="products">

		<!--FETCH AND SHOW IMG FROM DB-->
		<?php
		$records = mysqli_query($conn, "select * from consoles order by `id` DESC");
		if (mysqli_num_rows($records) > 0) {
			while ($data = mysqli_fetch_array($records)) {
		?>
		<!--/FETCHING-->

		<div class="product">

			<form method="post" action="console.php?action=add&id=<?php echo $data["id"]; ?>">


				<!--image container-->
				<div class="image-card">
					<img src="<?php echo $data['images']; ?>" loading="lazy">
				</div>
				<!--/image container-->


				<!--game details-->
				<div class="details">
					<!--name of game-->
					<p class="game-name">

						<?php echo $data['filename']; ?>
						<input type="hidden" name="name" value="<?php echo $data['filename']; ?> " />
					</p>
					<!--price of the game-->
					<p class="price">$ <span id="price">
							<input type="hidden" name="price" value="<?php echo $data['price']; ?> " />
							<?php echo $data['price']; ?>
						</span>
					</p>
				</div>
				<!--add to cart-->
				<div class="cart-button">
					<img src="icons/cart.png" width="18px">
					<input type="submit" name="add_to_cart" class="tocart" value=" Add to Cart" />
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
	<!---/END OF TOP RATED-->


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
				<p>Telephone : <a href="">(+1)234-323-706</a></p>
			</div>

			<!--social links-->
			<div class="social-media">
				<p>Follow us on our social media pages:</p>
				<ul>
					<li><a href="">
							<img src="icons/ig.png" alt="instagram"></a></li>
					<li><a href="">
							<img src="icons/fb.png" alt="facebook"></a></li>
					<li><a href="">
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

	</footer>
	<!--initialiaztion of coarousels for all pages-->


	<script src="js/addtocart.js"></script>
</body>

</html>
