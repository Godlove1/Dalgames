<?php
include '../../includes/dbconn.php';
include '../../includes/delnin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>edit</title>
	<link rel="stylesheet" href="../../css/adminpanel.css">
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
				<a href="../adminpanel.php">Back To Admin Panel</a>
			</div>
		</header>
	</div>

	<div class="title">Edit nintendo</div>

	<div class="edit-wrapper">

		<div class="edit-cont">

			<table>
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Price</th>
					<th colspan="2">Actions</th>
				</tr>

				<?php
				$records = mysqli_query($conn, "select * from nintendo order by `id` DESC");
				if (mysqli_num_rows($records) > 0) {
					while ($data = mysqli_fetch_array($records)) {
						$imgPath = "../../includes/" . $data['images'];
				?>
				<!--/FETCHING-->

				<tr>
					<td class="img"><img src='<?php echo $imgPath ?>' alt="images"></td>
					<td><?php echo $data['filename']; ?></td>
					<td><?php echo $data['price']; ?></td>
					<td><?php echo $data['console']; ?></td>
					<td><a href="?deleteid=<?php echo $data["id"] ?>"> Delete</a></td>
				</tr>

				<?php }
				} ?>
			</table>

		</div>

	</div>






</body>

</html>
