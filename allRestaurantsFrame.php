
 <?php

 	$price = $_GET['price'];
 	$foodType = $_GET['food'];
 	$venue = $_GET['venue'];

 	$result = mysqli_query($conn, "SELECT * FROM restaurants
      INNER JOIN addresses on addresses.restaurant = restaurant_id
 	 ORDER BY Name DESC ");
			
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