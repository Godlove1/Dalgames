<?php

if (isset($_GET['deleteid'])) {
	$selectSql = "select * from nintendo where id=" . $_GET['deleteid'];
	$rsSelect = mysqli_query($conn, $selectSql);
	$getRow = mysqli_fetch_assoc($rsSelect);

	$getIamgeName = $getRow['images'];

	$createDeletePath = "../../includes/" . $getIamgeName;

	if (unlink($createDeletePath)) {
		$deleteSql = "delete from nintendo where id = " . $getRow['id'];
		$rsDelete = mysqli_query($conn, $deleteSql);

		if ($rsDelete) {
			echo "";
		}
	} else {
		echo "Unable to delete Image";
	}
}
?>
