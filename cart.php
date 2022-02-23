<?php
include 'includes/dbconn.php';

if (isset($_POST["submit"])){

	if (!empty($_SESSION["shopping_cart"])) {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
	$check = mysqli_query($conn, "insert into orders(`items`,`prices`) values(
		'$values[item_name]','$values[item_price]')");
		}
	}
	if ($check) {
		header("Location:checkout.php");
	} else {
		echo "<script>
		alert('error uploading data');
		</script>";
	}
}
?>
<!--head-->
<?php include 'includes/links.php'; ?>

<body>
<!--header/navbar/compulsory things-->
<?php include 'includes/header.php'; ?>
<!--header/navbar/compulsory things-->


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
<?php include 'includes/footer.php'; ?>

</body>
</html>
