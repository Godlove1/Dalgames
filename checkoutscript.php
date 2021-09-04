<?php
if(isset($_POST["submit"])){ 
	$chk=$_POST['pay'];
	for($i=0;$i<sizeof($chk);$i++){
	
	$check=mysqli_query($conn,"insert into checkouts(fname,lname,company,country,stat,zip,phone,email,notes,paymethod) values('$_POST[fname]','$_POST[lname]','$_POST[company]','$_POST[country]','$_POST[stat]','$_POST[zip]','$_POST[phone]','$_POST[email]','$_POST[note]','$chk[$i]')");
	}
	
	if($check){
echo "<script>alert('YOUR ORDER HAS BEEN RECEIVED. AN EMAIL AND SMS WILL BE SENT TO YOU BY OUR AGENT TO COMPLETE YOUR PURCHASE')</script>";
		header("Location:index.php");
}else{
echo "<script>
alert('error uploading data');
</script>";
}
}
