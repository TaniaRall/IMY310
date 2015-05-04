<div id="information">
	<!--img src="NightSky.jpg" alt="Restaurant Logo" height="150" width="150">
	<div id="googleMap">
		Map goes here
	</div-->
	<?php $name = $_GET['Name'];

	 	$result = mysqli_query($conn, "SELECT * FROM restaurants" 
		." INNER JOIN venue_link on venue_link.restaurant = restaurant_id "
 		." INNER JOIN food_link on food_link.restaurant = restaurant_id"
 		." INNER JOIN prices on price_id = Price "
 		//." INNER JOIN food_categories on food_id = food_type"
 		." WHERE restaurant_id = $name "//Price <= $price AND venue_type = $venue AND food_type = $foodType"
 		. " GROUP BY restaurant_id ");
		 	
	 	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		//echo(mysqli_error($conn));
	 	foreach ($ans as $key => $value) {

	 	echo("<img class='logo' width='150' height='150' src='logos/".$value['logoPath']."'' alt='Restaurant Logo' />") ?>
		<span class="rest-name">Name: <?php echo($value['Name']); ?></span><br>
		 <span class="dresscode">Dresscode: <?php echo($value['Dresscode']); ?></span><br>
		<?php if(!empty($value['Website'])) echo("<a href='".$value['Website']."'>".$value['Website'] ."</a><br>"); ?>
		<?php if(!empty($value['Facebook'])) echo("<a href='".$value['Facebook']."'>".$value['Facebook']."</a><br>"); ?>
		<?php if(!empty($value['Twitter'])) echo("<a href='".$value['Twitter']."'>".$value['Twitter']."</a><br>"); ?>
		<?php if(!empty($value['Youtube'])) echo("<a href='".$value['Youtube']."'>".$value['Youtube']."</a><br>"); ?>
		<span class="price">Price Range: <?php echo($value['price_category']) ?></span><br>
		<?php //TODO - Query for food type
		//TODO - Query for adresses
		//TODO - Query for venue - type ?>
		<!--span class="price">Food Category: <?php echo($value['food_category']) ?></span><br> -->
		<?php } ?>
</div>
<input type='button' value='Back' id='backPrev'>
