
 <?php
 	$price = $_GET['price'];
 	$foodType = $_GET['food'];
 	$venue = $_GET['venue'];

 	$result = mysqli_query($conn, "SELECT * FROM restaurants
 	 INNER JOIN venue_link on venue_link.restaurant = restaurant_id
 	 INNER JOIN food_link on food_link.restaurant = restaurant_id
 	 INNER JOIN prices on price_id = Price
 	 WHERE Price <= $price AND venue_type = $venue AND food_type = $foodType
 	 GROUP BY restaurant_id
 	 ORDER BY Price DESC ");
			
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo(mysqli_error($conn));
	if(count($ans) == 0)
	{
		echo("<p>No entries matched your search</p><br/>");
	}
	foreach ($ans as $key => $value) { ?>
		<div class="result">

            <a href="detailedResultChangePage.php?id=<?php echo($value['restaurant_id']);?>"><?php echo("<img class='logo' src='logos/".$value['logoPath']."' alt='Restaurant Logo' />"); ?></a>
            <!--div class="small-details"><span class='label'>Name</span> <?php echo($value['Name']); ?> <br>
            <span class='label'>Price-Range</span> <?php echo($value['price_category']); ?></div-->
		</div>
<?php ;
	}
 ?>
<?php
	echo("<input type='button' value='Back' id='back'>");
?>