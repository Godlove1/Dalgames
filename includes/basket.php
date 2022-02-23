	<?php
	if (!empty($_SESSION["shopping_cart"])) {
		$cart_count = count(array_keys($_SESSION["shopping_cart"]));
	?>
	<div class="float-cart">
		<div class="shopping-cart">
			<a href="./cart.php">
				<img src="icons/cart.png" alt="floating cart"></a>
			<p id="count"><?php echo $cart_count; ?></p>
		</div>
	</div>
	<?php
	}
	?>