<?php include('partials/head.php'); ?>
<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$price = $_POST['price'];
	$web = $_POST['web'];
	$fb = $_POST['fb'];
	$twitter = $_POST['twitter'];
	$food = $_POST['food'];
	$venue = $_POST['venue'];
	$dres = $_POST['dres'];
	$you = $_POST['you'];

	$target = $_SERVER['DOCUMENT_ROOT'] . "/imy310/logos/";
	$target = $target.basename($_FILES['logo']['name']);
	$logo = ($_FILES['logo']['name']);

 	$result = mysqli_query($conn, "INSERT INTO suggestions "
 	." (name, address, telephone, prices, website, facebook, twitter, food, venue, dresscode, youtube, logo) VALUES"
 	." ('".$name."', '".$address."', '".$tel."', '".$price."', '".$web."', '".$fb."', '".$twitter."', '".$food."', '".$venue."', '".$dres."', '".$you."', '".$logo."')"); 

 	if(!move_uploaded_file($_FILES['logo']['tmp_name'], $target))
 	{
 		/*echo"File could not be uploaded";*/
 	}
?>
<?php include ("partials/menu.php"); ?>
<div id="info">
	<h2 id="infoText">Thank you for your suggestion.</h2>
</div>
<!--input type="button" id="back" value="Done"/-->