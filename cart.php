<?php
include 'dbconn.php';
include 'sesscript.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<link rel="stylesheet" href="css/cart.css">
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
			<h1>Shopping Cart</h1>
			<h2>Dalgames&reg; E-GAME SHOP</h2>
			<p>HELPING YOU FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="index.php">Home</a>
			</button>
		</div>

		<div class="hero-image">
			<img src="icons/heroimg.png" alt="hero image">
		</div>

	</div>
	<!--/hero scetion-->














	<main>
		<div class="notice">
			<p>Please take a <span class="red">Screenshot of your cart</span> as it will be used as the <span
					class="red">Order ID</span>
				authenticate your
				purchase.
			</p>
		</div>
		<form method="post">
			<!--SHOPPING CART DETAIL/SUMMARY -->
			<h3>
				<u>Shopping Cart</u>
			</h3>
			<div class="table-responsive">
				<table>
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th>Total</th>
						<th>Action</th>
					</tr>

					<?php
					if (!empty($_SESSION["shopping_cart"])) {
						$total = 0;
						foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					?>
					<tr>
						<td class="ame"><?php echo $values["item_name"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"
								class="danger"><span>Remove</span></a></td>
					</tr>
					<?php
							$total = $total + $values["item_price"];
						}
						?>
					<tr>
						<td colspan="2" align="right">Total &nbsp;&nbsp;=></td>
						<td colspan="3" id="amt" align="right">$ <?php echo number_format($total, 2); ?></td>
					</tr>
					<?php
					}
					?>

				</table>
			</div>
			<!--END SHOPPING CART-->

			<!--proceed to check button-->

			<input type="submit" name="submit" value="PROCEED TO CHECKOUT" />
		</form>
	</main>




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
					<li><a href="">
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
</body>

</html>
