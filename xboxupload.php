<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Xbox games edit</title>
	<link rel="stylesheet" href="css/uploadstyle.css">
</head>

<body>
	<header>
		<a href="adminpanel.php">Back To Dashboard </a>
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
			<!--PRODUCT DEXSCRIPTION--
			<label for="description">Add Description:</label>
			<input type="text" name="description" class="field" required><br>
			/PRODUCT DESCRIPTION-->
			<!--Submit button-->
			<input type="submit" value="submit" class="submit-btn" name="submit">
			<!--/submit button-->
		</fieldset>
	</form>

</body>

</html>


<!--PHP SCRIPT TO show IMAGES from DATABASE-->

<?php
include 'dbconn.php';
include 'xboxscript.php';
?>

<?php
$records = mysqli_query($conn, "select * from xbox");
while ($data = mysqli_fetch_array($records)) {
?>
<div class="uploaded-img" style="width: 200px; height: 300px;">
	<img src="<?php echo $data['images']; ?>" width=" 100%" height="100%">
	<?php echo $data['filename']; ?>
	<?php echo $data['console']; ?>
	<?php echo $data['price']; ?>
</div>
<?php } ?>
<?php mysqli_close($conn); ?>
