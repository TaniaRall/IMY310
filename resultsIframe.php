
 <?php


 	$price = $_GET['price'];
 	$foodType = $_GET['food'];
 	$venue = $_GET['venue'];

 	$result = mysqli_query($conn, "SELECT * FROM restaurants
 	 INNER JOIN venue_link on venue_link.restaurant = restaurant_id
 	 INNER JOIN food_link on food_link.restaurant = restaurant_id
 	 INNER JOIN addresses on addresses.restaurant = restaurant_id
 	 INNER JOIN prices on price_id = Price
 	 WHERE Price <= $price AND venue_type = $venue AND food_type = $foodType
 	 ORDER BY Price DESC ");
			
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo(mysqli_error($conn));
	if(count($ans) == 0)
	{
		echo("<p>No entries matched your search</p><br/>");
	}
	foreach ($ans as $key => $value) {
        formatResult($value);
	}
 ?>
<?php
	echo("<input type='button' value='Back' id='back'>");
?>