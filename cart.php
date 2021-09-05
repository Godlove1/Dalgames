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
			<h1>Shopping Cart</h1>
			<h2>Dalgames&reg; E-GAME SHOP</h2>
			<p>HELPING YOU FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="index.php">Home</a>
			</button>
		</div>

		<div class="hero-image">
			<img src="bannerimgs/mg.jpg" alt="hero image">
		</div>

	</div>
	<!--/hero scetion-->
	<main>
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
</body>

</html>
