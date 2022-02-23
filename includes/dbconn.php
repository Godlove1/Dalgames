<?php
session_start();
$server='localhost';
$user="root";
$password="";
$dbname="dalgames";
$conn=mysqli_connect($server,$user,$password,$dbname) or die("error connecting  to database ");



//add to cart fucntionality


if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["name"],
				'item_price'		=>	$_POST["price"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["name"],
			'item_price'		=>	$_POST["price"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '';
			}
		}
	}
}

?>
