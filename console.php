<?php include 'includes/dbconn.php';?>
<?php include 'includes/links.php'; ?>

<body>
<!--header/navbar/compulsory things-->
<?php include 'includes/header.php'; ?>
<?php include 'includes/productsnavbar.php'; ?>
<!--header/navbar/compulsory things-->

	<!--consoles TOP RATED GAMES-->
	<!--top rated games-->
	<div class="products">

		<!--FETCH AND SHOW IMG FROM DB-->
		<?php
		$records = mysqli_query($conn, "select * from consoles order by `id` DESC");
		if (mysqli_num_rows($records) > 0) {
			while ($data = mysqli_fetch_array($records)) {
				$imgPath = "includes/" . $data['images'];
		?>
		<!--/FETCHING-->

		<div class="product">

			<form method="post" action="console.php?action=add&id=<?php echo $data["id"]; ?>">


				<!--image container-->
				<div class="image-card">
					<img src="<?php echo $imgPath ?>" loading="lazy">
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
<?php include 'includes/basket.php'; ?>
	<!--/FLOATING SHOPPING CART -->


	<!--FOOTER-->
	<?php include 'includes/footer.php'; ?>
	<!--FOOTER-->

</body>
</html>
