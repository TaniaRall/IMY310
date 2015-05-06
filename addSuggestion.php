<?php include('partials/head.php'); ?>
<?php
	$name = $_GET['name'];
	$price = $_GET['price1'];
	$web = $_GET['web'];
	$fb = $_GET['fb'];
	$twitter = $_GET['twitter'];
	$dres = $_GET['dres'];
	$you = $_GET['you'];
	$logo = $_GET['logoName'];

	$result = mysqli_query($conn, "INSERT INTO restaurants "
 	." (Name, Price, Website, Facebook, Twitter, Dresscode, Youtube, logoPath) VALUES"
 	." ('".$name."', '".$price."', '".$web."', '".$fb."', '".$twitter."', '".$dres."', '".$you."', '".$logo."')") or die(mysqli_error($conn)); 

 	$result= mysqli_query($conn, "SELECT restaurant_id FROM restaurants WHERE Name = '".$name."'");
 	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
 	foreach ($ans as $value) {
 		$restaurant_id = $value['restaurant_id'];
 	}

 	$tel = $_GET['tel'];
 	$address = $_GET['address'];

 	$result = mysqli_query($conn, "INSERT INTO addresses "
 	." (restaurant, telephone, address) VALUES"
 	." ('".$restaurant_id."', '".$tel."', '".$address."')") or die(mysqli_error($conn)); 

 	$food = $_GET['food1'];

 	$result = mysqli_query($conn, "INSERT INTO food_link "
 	." (restaurant, food_type) VALUES"
 	." ('".$restaurant_id."', '".$food."')") or die(mysqli_error($conn)); 

 	$venue = $_GET['venue1'];
 	
 	$result = mysqli_query($conn, "INSERT INTO venue_link "
 	." (restaurant, venue_type) VALUES"
 	." ('".$restaurant_id."', '".$venue."')") or die(mysqli_error($conn)); 

 	$resID = $_GET['resID'];
 	$result = mysqli_query($conn, "DELETE FROM suggestions WHERE id = ".$resID);

 	header("Location: admin.php");
?>