<?php
include 'dbconn.php';
if (isset($_POST["submit"])) {
	
	$filen = $_FILES["file"]["name"];
	$dst = "uploads/" . $filen;
	$dst_db = "uploads/". $filen;


	move_uploaded_file($_FILES["file"]["tmp_name"], $dst);
	$check = mysqli_query($conn, "insert into xbox(filename,images,price,console) values('$_POST[name]','$dst_db','$_POST[price]','$_POST[console]')");


	if ($check) {
		echo "<script>
		alert('data succesfully uploaded');
		</script>";
	} else {
		echo "<script>
		alert('error uploading data');
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
	<title>Admin-Xbox games edit</title>
	<link rel="stylesheet" href="../css/uploadstyle.css">
</head>

<body>
	<header>
		<a href="../adminboard/adminpanel.php">Back To Dashboard </a>
	</header>
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>New Xbox Game</legend>
			<!--name of the file-->
			<label>Name of File :</label>
			<input type="text" name="name" class="field" required><br>
			<!--select image-->
			<label>Choose Image To upload :</label>
			<input type="file" name="file" class="upload-btn" required><br>
			<!--/select image-->
			<!--price-->
			<label for="price">Price of Game :</label>
			<input type="text" name="price" class="field" required><br>
			<!--/price-->
			<!--Console-->
			<label for="console">Console : </label>
			<input type="text" name="console" class="field" required><br><br>
			<!--/console-->
			<!--Submit button-->
			<input type="submit" value="submit" class="submit-btn" name="submit">
			<!--/submit button-->
		</fieldset>
	</form>

</body>

</html>

<?php mysqli_close($conn); ?>
