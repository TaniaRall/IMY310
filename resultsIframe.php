<?php include('head.php'); ?>
 <?php
 	$price = $_GET['price'];
 	$foodType = $_GET['food'];
 	$venue = $_GET['venue'];

 	$result = mysqli_query($conn, "SELECT * FROM restaurants" 
 	." INNER JOIN venue_link on venue_link.restaurant = restaurant_id "
 	." INNER JOIN food_link on food_link.restaurant = restaurant_id"
 	." INNER JOIN prices on price_id = Price "
 	//." INNER JOIN food_categories on food_id = food_type"
 	." WHERE Price <= $price AND venue_type = $venue AND food_type = $foodType"
 	. " GROUP BY restaurant_id ");
			
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo(mysqli_error($conn));
	if(count($ans) == 0)
	{
		echo("<p>No entries matched your search</p><br/>");
	}
	foreach ($ans as $key => $value) { ?>
		<div class="result">
			<form method="get" action="detailedResultChangePage.php">
				<?php $name = $value['restaurant_id']; ?>
				<?php echo("<img class='logo' width='100' height='100' src='logos/".$value['logoPath']."' alt='Restaurant Logo' />"); ?>
				<span class="rest-name">Name: <?php echo($value['Name']); ?></span><input type="text" hidden="hidden" name="Name" value="<?php echo($value['restaurant_id']); ?>"/><br>
			 	<!--span class="dresscode">Dresscode: <?php echo($value['Dresscode']); ?></span><br>
				<!--?php echo("<a href='".$value['Website']."'>".$value['Website'] ."</a>"); ?><br>
				<?php echo("<a href='".$value['Facebook']."'>".$value['Facebook'] ."</a>"); ?><br>
				<?php echo("<a href='".$value['Twitter']."'>".$value['Twitter'] ."</a>"); ?><br>
				<?php echo("<a href='".$value['Youtube']."'>".$value['Youtube'] ."</a>"); ?><br-->
				<span class="price">Price Range: <?php echo($value['price_category']) ?></span><br>
				<?php //TODO - Query for food type
				//TODO - Query for adresses
				//TODO - Query for venue - type ?>
				<!--span class="price">Food Category: <?php echo($value['food_category']) ?></span><br> -->
				<?php
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
			</form>
		</div>
<?php ;
	}
 ?>
<?php
	echo("<input type='button' value='Back' id='back'>");
?>