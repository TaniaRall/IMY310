<?php include('head.php'); ?>
<div id="information">
	<?php $name = $_GET['Name'];

	 	$result = mysqli_query($conn, "SELECT * FROM restaurants" 
		." INNER JOIN venue_link on venue_link.restaurant = restaurant_id "
 		." INNER JOIN food_link on food_link.restaurant = restaurant_id"
 		." INNER JOIN prices on price_id = Price "
 		." INNER JOIN addresses on addresses.address_id = restaurant_id "
 		." WHERE restaurant_id = $name "//Price <= $price AND venue_type = $venue AND food_type = $foodType"
 		. " GROUP BY restaurant_id ");
		 	
	 	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);

	 	foreach ($ans as $key => $value) {
	 	echo("<img class='logo' width='150' height='150' src='logos/".$value['logoPath']."'' alt='Restaurant Logo' />") ?>
		<span class="rest-name">Name: <?php echo($value['Name']); ?></span><br>
		<span class="dresscode">Dresscode: <?php echo($value['Dresscode']); ?></span><br>
		<?php if(!empty($value['Website'])) echo("Website: <a href='".$value['Website']."'>".$value['Website'] ."</a><br>"); ?>
		<?php if(!empty($value['Facebook'])) echo("Facebook: <a href='".$value['Facebook']."'>".$value['Facebook']."</a><br>"); ?>
		<?php if(!empty($value['Twitter'])) echo("Twitter: <a href='".$value['Twitter']."'>".$value['Twitter']."</a><br>"); ?>
		<?php if(!empty($value['Youtube'])) echo("Youtube: <a href='".$value['Youtube']."'>".$value['Youtube']."</a><br>"); ?>
		<span class="price">Price Range: <?php echo($value['price_category']) ?></span><br>
		<?php echo("Address: ".$value['address']); ?><br/>
		<?php echo("Tel: ".$value['telephone']); ?><br/>
				
		<?php 

		//$result2 = mysql_query($conn, "SELECT * FROM venue_categories");//, venue_link, restaurants WHERE venue_link.venue_type = venue_id AND venue_link.restaurant = restaurants.restaurant_id");
		$result2 = mysqli_query($conn, "SELECT * FROM venue_link" 
		." INNER JOIN restaurants on restaurants.restaurant_id = restaurant "
 		." WHERE restaurant_id = restaurant AND restaurant = $name");//AND restaurant = restaurant_id");

		$ans2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

		echo("Venue: ");
		$i = 0;
		foreach($ans2 as $val)
		{
			$i++;

			if($val['venue_type'] == 1)
			{
				echo("Sit Down");
			}
			else if($val['venue_type'] == 2)
			{
				echo("Take-Away");
			}
			else
			{
				echo("Delivery");
			}
			if(count($ans2) > 1 && $i != count($ans2))
			{
				echo(", ");
			}
			else
			{
				echo(" ");
			}
		}
		?>
		<!--span class="price">Food Category: <?php echo($value['food_category']) ?></span><br> -->
		<?php } ?>
	<div id="googleMap">
		Map goes here
	</div>
</div>
<input type='button' value='Back' id='backPrev'>
