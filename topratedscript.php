<?php
if(isset($_POST["submit"])){ 
	$var1=rand(1111,9999);
	$var2=rand(1111,9999);
	$var3=$var1.$var2;
	$var3=md5($var3);

	$filen=$_FILES["file"]["name"];
	$dst="uploads/".$var3.$filen;
	$dst_db="uploads/".$var3.$filen;

	move_uploaded_file($_FILES["file"]["tmp_name"],$dst);
	$check=mysqli_query($conn,"insert into topratedgames(filename,images,price,stars,console) values('$_POST[name]','$dst_db','$_POST[price]','$_POST[star]','$_POST[console]')");


	if($check){
		echo "<script>
		alert('data succesfully uploaded');
		</script>";
	}else{
		echo "<script>
		alert('error uploading data');
		</script>";
	}
}
?>
