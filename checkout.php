<?php
include 'includes/dbconn.php';

if (isset($_POST["submit"])) {
	$chk = $_POST['pay'];
	for ($i = 0; $i < sizeof($chk); $i++) {

		$check = mysqli_query($conn, "insert into checkouts(fname,lname,company,country,stat,zip,phone,email,notes,paymethod) values('$_POST[fname]','$_POST[lname]','$_POST[company]','$_POST[country]','$_POST[stat]','$_POST[zip]','$_POST[phone]','$_POST[email]','$_POST[note]','$chk[$i]')");
	}

	if ($check) {
		header("Location:index.php");
	} else {
		echo "<script>
alert('an error ocuured please try again');
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

	<!--FOOTER-->
<?php include 'includes/footer.php'; ?>

</body>

</html>
<?php mysqli_close($conn); ?>
