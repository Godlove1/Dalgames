<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<link rel="stylesheet" href="css/checkout.css">
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
			<h1>CHECKOUT</h1>
			<h2>Dalgames&reg; E-GAME SHOP</h2>
			<p>HELPING YOU FIND THE YOUR NEXT GAME</p>
			<!--cta to buy-->
			<button>
				<a href="index.php">Home</a>
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
							<label>Company(Optional):</label>
							<input type="text" name="company" class="field">
						</div>

						<div class="field">
							<label>Country<sup>*</sup></label>
							<input type="text" name="country" class="field" required>
						</div>
						<div class="field">
							<label>State/Region<sup>*</sup></label>
							<input type="text" name="stat" class="field" required>
						</div>
						<div class="field">
							<label>Zip Code<sup>*</sup></label>
							<input type="text" name="zip" class="field" required>
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
							<label>Notes for order (Optional)</label>
							<input type="text" name="note" class="field">
						</div>
						<!--Submit button--
						<input type="submit" value="submit" class="submit-btn" name="submit">
						--/submit button-->
					</fieldset>

			</div>
			<!--mathod of payment-->
			<div class="payment">
				<h1><u><span class="pay">Payment</span> Options</u></h1>
				<div class="warning">
					<p class="orderid">Order Id: </p>
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
				<p>Contact us : <a href="tel:+14844718107">(+1)484-4718-107</a></p>
			</div>

			<!--social links-->
			<div class="social-media">
				<p>Follow us on :</p>
				<ul>
					<li><a href="instagram.com/pallygames">
							<img src="icons/ig.png" alt="instagram"></a></li>
					<li><a href="https://www.facebook.com/pallygames/-107773448135655/">
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

	<script src="detail.js"></script>
</body>

</html>
<?php
include 'dbconn.php';
include 'checkoutscript.php';
?>
<?php mysqli_close($conn); ?>
