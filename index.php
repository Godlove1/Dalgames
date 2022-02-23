<?php include 'includes/dbconn.php';?>
<!--head-->
<?php include 'includes/links.php'; ?>

<body>
<!--header/navbar/compulsory things-->
<?php include 'includes/header.php'; ?>
<?php include 'includes/banners.php'; ?>
<?php include 'includes/productsnavbar.php'; ?>
<!--header/navbar/compulsory things-->


	<!--NEW PRODUCTS SECTION detail/images -->
<?php include 'includes/parts/newprods.php'; ?>
	<!--END of PRODUCTS WRAPPER-->

	<!--FEATURED GAMES SECTION-->
	<?php include 'includes/parts/featured.php'; ?>
	<!--END OF FEATURED AMESG-->

	<!--TOP RATED GAMES-->
<?php include 'includes/parts/rated.php'; ?>
	<!---/END OF TOP RATED-->

	<!--FLOATING SHOPPING CART -->
<?php include 'includes/basket.php'; ?>
	<!--/FLOATING SHOPPING CART -->

	<!--FOOTER-->
<?php include 'includes/footer.php'; ?>


</body>
	<script src="js/login.js"></script>
</html>
