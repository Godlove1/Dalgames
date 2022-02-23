<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../css/adminpanel.css">
</head>

<body>
	<!-- header bar-->
	<div class="header-wrapper">
		<header>
			<div class="admin-stat">
				<p>logged in as Admin!</p>
			</div>
			<div class="logo">
				<h2>Dalgames <sup>&reg;</sup></h2>
			</div>
			<div class="tosite">
				<a href="../index.php">Back To Site</a>
			</div>
		</header>
	</div>

	<!--body of the admin panel-->
	<div class="nav-wrapper">

		<div class="cta-navs">
			<div class="nav left">
				<h3>Add Products to site</h3>

				<div class="tab">
					<a href="../includes/newproductupload.php" class="white">Add New Products</a>
				</div>

				<div class="tab">
					<a href="../includes/playstationupload.php" class="gold">Add Playstation </a>
				</div>

				<div class="tab">
					<a href="../includes/topratedupload.php" class="white">Add Top Rated </a>
				</div>

				<div class="tab">
					<a href="../includes/nintendoupload.php" class="gold">Add Nintendo</a>
				</div>

				<div class="tab">
					<a href="../includes/consoleupload.php" class="white">Add Consoles </a>
				</div>

				<div class="tab">
					<a href="../includes/featgamesupload.php" class="gold">Add Featured Games</a>
				</div>

				<div class="tab">
					<a href="../includes/xboxupload.php" class="white">Add Xbox</a>
				</div>

			</div>

			<div class="nav right">
				<h3>Edit Products on Site</h3>

				<div class="tab">
					<a href="update/editnewproducts.php" class="white">Edit New Products</a>
				</div>

				<div class="tab">
					<a href="update/editps.php" class="gold">Edit Playstation </a>
				</div>

				<div class="tab">
					<a href="update/editoprated.php" class="white">Edit Top Rated </a>
				</div>

				<div class="tab">
					<a href="update/editnin.php" class="gold">Edit Nintendo</a>
				</div>

				<div class="tab">
					<a href="update/editconso.php" class="white">Edit Consoles </a>
				</div>

				<div class="tab">
					<a href="update/editfeat.php" class="gold">Edit Featured Games</a>
				</div>

				<div class="tab">
					<a href="update/editxbox.php" class="white">Edit Xbox</a>
				</div>

			</div>
		</div>

	</div>




</body>

</html>
