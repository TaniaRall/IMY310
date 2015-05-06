<?php include('partials/head.php'); ?>
<?php 
	$resID = $_GET['resID'];
 	$result = mysqli_query($conn, "DELETE FROM suggestions WHERE id = ".$resID);

 	header("Location: admin.php");
 ?>