<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>
<div id="adminBack">
	<?php
		$result = mysqli_query($conn, "SELECT * FROM suggestions");
				
		$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);

		if(count($ans) == 0)
		{
			echo("<h2>No new suggestions</h2><br/>");
		}

		foreach ($ans as $value) 
		{
		?>
			<form method="get">
				<input type="text" hidden="hidden" name="resID" value="<?php echo($value['id']); ?>"/>
				<label for="restuarantName">Restaurant Name:</label><br>
				<input type="text" id="restuarantName" name="name" value="<?php echo($value['name']); ?>"/>
				<br>
		
				<label for="address">Restaurant Adress:</label><br>
				<input type="text" id="address" name="address" value="<?php echo($value['address']); ?>"/>
				<br>
		
				<label for="telephone">Restaurant Telephone:</label><br>
				<input type="text" id="telephone" name="tel" value="<?php echo($value['telephone']); ?>"/>
				<br>
		
				<label for="price">Restaurant Price Class:</label><br>
				<input type="text" hidden="hidden" name="price1" value="<?php echo($value['prices']); ?>"/>
				<input type="text" id="price" name="price" value="<?php 
					$result = mysqli_query($conn, "SELECT * FROM prices WHERE price_id = ".$value['prices']); 
					$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
					foreach ($ans as $val) {
						echo($val['price_category']);
					}
				 ?>"/>
				<br>
		
				<label for="web">Restaurant Website:</label><br>
				<input type="text" id="web" name="web" value="<?php echo($value['website']); ?>"/>
				<br>
				
				<label>Logo:</label><br>
				<input type="text" name="logoName" hidden="hidden" value="<?php echo($value['logo']);?>"/>
				<?php echo("<img class='logo' width='150' height='150' src='logos/".$value['logo']."'' alt='Restaurant Logo' />") ?>
				<br>

				<label for="facebook">Restaurant Facebook:</label><br>
				<input type="text" id="facebook" name="fb" value="<?php echo($value['facebook']); ?>"/>
				<br>
				
				<label for="twitter">Restaurant Twitter:</label><br>
				<input type="text" id="twitter" name="twitter" value="<?php echo($value['twitter']); ?>"/>
				<br>
				
				<label for="restuarantFood">Restaurant Food Type:</label><br>
				<input type="text" hidden="hidden" value="<?php echo($value['food']); ?>" name="food1"/>
				<input type="text" id="restuarantFood" name="food" value="<?php 
					$result = mysqli_query($conn, "SELECT * FROM food_categories WHERE food_id = ".$value['food']); 
					$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
					foreach ($ans as $val) {
						echo($val['food_category']);
					}
				 ?>"/>
				<br>

				<label for"dres">Dress code:</label><br>
				<input type="text" id="dres" name="dres" value="<?php echo($value['dresscode']); ?>"/>
				<br>

				<label for"you">Youtube:</label><br>
				<input type="text" id="you" name="you" value="<?php echo($value['youtube']); ?>"/>
				<br>

				<label for="venue">Venue:</label><br>
				<input type="text" hidden="hidden" value="<?php echo($value['venue']); ?>" name="venue1"/>
				<input type="text" id="venue" name="venue" value="<?php 
					$result = mysqli_query($conn, "SELECT * FROM venue_categories WHERE venue_id = ".$value['venue']); 
					$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
					foreach ($ans as $val) {
						echo($val['venue_name']);
					}
				 ?>"/>

				<br>
				<input type="submit" value="Accept" class="accept buttons"/>
				<br>
				<input type="submit" value="Deny" class="deny buttons"/>
				<br>
			</form>
		<?php
			}
		?>
</div>