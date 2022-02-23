<?php
include 'dbconn.php';

if (isset($_POST["submit"])) {
	$chk = $_POST['pay'];
	for ($i = 0; $i < sizeof($chk); $i++) {

		$check = mysqli_query($conn, "insert into checkouts(fname,lname,company,country,stat,zip,phone,email,notes,paymethod) values('$_POST[fname]','$_POST[lname]','$_POST[company]','$_POST[country]','$_POST[stat]','$_POST[zip]','$_POST[phone]','$_POST[email]','$_POST[note]','$chk[$i]')");
	}

	if ($check) {
		header("Location:../index.php");
	} else {
		echo "<script>
alert('an error ocuured please try again');
</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/mainstyle.css">
	<link rel="stylesheet" href="../css/checkout.css">
	<!--owl carousel-->
	<!--end carousle style-->
	<title>checkout</title>
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
			<h1>CHECKOUT</h1>
			<h2>Dalgames&reg; E-GAME SHOP</h2>
			<p>HELPING YOU FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="../index.php">Go Back Home</a>
			</button>
		</div>

	</div>
	<!--/hero scetion-->

	<main>
		<!--shooping cart / checkout-->
		<div class="checkout-wrapper">
			<!--checkout wrapper-->
			<h1><span class="bill">BILLING</span> DETAILS</h1>

			<div class="billing-info">

				<form method="post" enctype="multipart/form-data">
					<fieldset>
						<!--name of the file-->
						<div class="field">
							<label>Firstname<sup>*</sup></label>
							<input type="text" name="fname" class="field" required>
						</div>
						<div class="field">
							<label>Lastname<sup>*</sup></label>
							<input type="text" name="lname" class="field" required>
						</div>
						<div class="field">
							<label>Phone Number<sup>*</sup></label>
							<input type="text" name="phone" class="field" required>
						</div>
						<div class="field">
							<label>Email Address<sup>*</sup></label>
							<input type="email" name="email" class="field" required>
						</div>
						<div class="field">
							<label>State/Region<sup>*</sup></label>
							<input type="text" name="stat" class="field" required>
						</div>
						<div class="field">
							<label>Zip Code<sup>*</sup></label>
							<input type="text" name="zip" class="field" required>
						</div>

					</fieldset>

			</div>
			<!--mathod of payment-->
			<div class="payment">
				<h1><u><span class="pay">Payment</span> Options</u></h1>
				<div class="warning">
					<p class="orderid"></p>
					<p>@&nbsp; Please Select your Prefered payment method and the account details will be sent to you by our
						agent
						via email and sms to complete the trasanction.</p>
					<p>@&nbsp; Please use your order Id as reference. Your order
						will not be shipped out untill we have received your funds</p>

					<div class="payers">

						<div class="pay">
							<input type="checkbox" name="pay[]" value="cashapp">
							<p>CashApp</p>
						</div>

						<div class="pay">
							<input type="checkbox" name="pay[]" value="zelle">
							<p>zelle</p>
						</div>

						<div class="pay">
							<input type="checkbox" name="pay[]" value="googlepay">
							<p>google pay</p>
						</div>

						<div class="pay">
							<input type="checkbox" name="pay[]" value="applepay">
							<p>apple pay</p>
						</div>
						<div class="pay">
							<input type="checkbox" name="pay[]" value="paypal">
							<p>paypal</p>
						</div>
						<div class="pay">
							<input type="checkbox" name="pay[]" value="bitcoin">
							<p>bitcoin(10% discount on all Cryptocurrency)</p>
						</div>
					</div>
					<p class="orderid"></p>
				</div>
				<!--place order-->
				<button type="submit" value="PLACE ORDER" id="order" name="submit">PLACE YOUR ORDER</button>
			</div>
			<!--end of checkout wrapper-->
			</form>
		</div>


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
							<img src="../icons/ig.png" alt="instagram"></a></li>
					<li><a href="">
							<img src="../icons/fb.png" alt="facebook"></a></li>
					<li><a href="">
							<img src="../icons/twi.png" alt="twitter"></a></li>
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
<?php mysqli_close($conn); ?>
