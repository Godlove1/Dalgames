<?php
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
	
