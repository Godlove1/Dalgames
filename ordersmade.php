<?php
include 'dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/adminpanelstyle.css">
	<link rel="stylesheet" href="css/chek.css">
</head>

<body>

	<header>
		<h2>Dalgames <sup>&reg;</sup></h2>
		<div class="ball">
			<a href="index.php">Back To Site</a>
		</div>
	</header>

	<div class="sidenav-wrapper">
		<div class="sidenav">
			<h3>ORDERS / CHECKOUTS</h3>
		</div>
	</div>

	<div class="checkouts">

		<div class="det">

			<div class="user-info">

				<!--FETCH AND SHOW IMG FROM DB-->
				<?php
			$records = mysqli_query($conn, "select * from checkouts order by `userid`");
			if (mysqli_num_rows($records) > 0) {
				while ($data = mysqli_fetch_array($records)) {
			?>
				<!--/FETCHING-->



				<table>
					<tr>
						<th>User ID</th>
						<th>F.Name</th>
						<th>L.Name </th>
						<th>Company</th>
						<th>Country</th>
						<th>State</th>
						<th>Zip</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Notes</th>
						<th>PayMethod</th>
						<th>Time</th>
					</tr>

					<tr>
						<td><?php echo $data['userid']; ?></td>
						<td><?php echo $data['fname']; ?></td>
						<td><?php echo $data['lname']; ?></td>
						<td><?php echo $data['company']; ?></td>
						<td><?php echo $data['country']; ?></td>
						<td><?php echo $data['stat']; ?></td>
						<td><?php echo $data['zip']; ?></td>
						<td><?php echo $data['phone']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['notes']; ?></td>
						<td><?php echo $data['paymethod']; ?></td>
						<td><?php echo $data['timeoforder']; ?></td>
					</tr>
				</table>

				<?php
				}
			}
			?>
			</div>


			<div class="user-info">
				<!--FETCH AND SHOW IMG FROM DB-->
				<?php
			$records = mysqli_query($conn, "select * from orders");
			if (mysqli_num_rows($records) > 0) {
				while ($data = mysqli_fetch_array($records)) {
			?>
				<!--/FETCHING-->

				<table class="t">
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th>Time2cart </th>
					</tr>

					<tr>
						<td><?php echo $data['items']; ?>
						<td><?php echo $data['prices']; ?></td>
						<td><?php echo $data['timeoforder']; ?></td>
					</tr>

				</table>

				<?php
				}
			}
			?>
			</div>

		</div>
	</div>

</body>

</html>
