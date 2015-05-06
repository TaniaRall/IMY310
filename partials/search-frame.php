<?php require_once('connection.php'); ?>
<form method="get" action="results.php">
	<label for="Price">Maximum Price Range</label>
	<br/>
	<select id="Price" name="price">
		<?php
			$result = mysqli_query($conn, "SELECT * FROM prices"); 
			$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
			foreach ($ans as $key => $value) {
				echo("<option value='".$ans[$key]['price_id']."'>".$ans[$key]['price_category']."</option>");
			}
		?>
	</select>
	<br/>
	<br/>
	<label for="FoodType">Food Type</label>
	<br/>
	<select id="FoodType" name="food">
		<?php
			$result = mysqli_query($conn, "SELECT DISTINCT food_id, food_category FROM food_categories INNER JOIN food_link on food_id = food_link.food_type");
			$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
			foreach ($ans as $key => $value) {
				echo("<option value='".$ans[$key]['food_id']."'>".$ans[$key]['food_category']."</option>");
			}
		?>
	</select>
	<br/>
	<br/>
	<label for="Venue">Venue</label>
	<br/>
	<select id="Venue" name="venue">
		<?php
			$result = mysqli_query($conn, "SELECT * FROM venue_categories"); 
			$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
			foreach ($ans as $key => $value) {
				echo("<option value='".$ans[$key]['venue_id']."'>".$ans[$key]['venue_name']."</option>");
			}
		?>
	</select>
	<br/>
	<br/>
	<input id="submitSearch" type="submit" value="Submit"/>
</form>