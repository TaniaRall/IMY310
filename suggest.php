<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>

<div id="suggest">
	Suggest restuarant:
	<form method="POST" action="suggestRestaurant.php" enctype="multipart/form-data">
		<label for="restuarantName">Restaurant Name:</label><br>
		<input type="text" id="restuarantName" name="name" value="Burgundies"/>
		<br>
		
		<label for="address">Restaurant Adress:</label><br>
		<input type="text" id="address" name="address" value="Burgundies"/>
		<br>
		
		<label for="telephone">Restaurant Telephone:</label><br>
		<input type="text" id="telephone" name="tel" value="Burgundies"/>
		<br>
		
		<label for="price">Restaurant Price Class:</label><br>
		<select id="price" name="price">
			<?php
				$result = mysqli_query($conn, "SELECT * FROM prices"); 
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
				foreach ($ans as $key => $value) {
					echo("<option value='".$ans[$key]['price_id']."'>".$ans[$key]['price_category']."</option>");
				}
			?>
		</select>
		<br>
		
		<label for"dres">Dress code:</label><br>
		<input type="text" id="dres" name="dres" value="Casual"/>
		<br>
		
		<label for"logo">Logo:</label><br>
		<input type="file" id="logo" name="logo"/>
		<br>

		<label for"you">Youtube:</label><br>
		<input type="text" id="you" name="you" value="Casual"/>
		<br>

		<label for="web">Restaurant Website:</label><br>
		<input type="text" id="web" name="web" value="Burgundies"/>
		<br>
		
		<label for="facebook">Restaurant Facebook:</label><br>
		<input type="text" id="facebook" name="fb" value="Burgundies"/>
		<br>
		
		<label for="twitter">Restaurant Twitter:</label><br>
		<input type="text" id="twitter" name="twitter" value="Burgundies"/>
		<br>
		
		<label for="restuarantFood">Restaurant Food Type:</label><br>
		<select id="restuarantFood" name="food">
				<?php
				$result = mysqli_query($conn, "SELECT * FROM food_categories"); 
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
				foreach ($ans as $key => $value) {
					echo("<option value='".$ans[$key]['food_id']."'>".$ans[$key]['food_category']."</option>");
				}
			?>
		</select>

		<br>
		<label for="venue">Venue:</label><br>
		<select name="venue">
			<option value="1">
				Sit Down
			</option>
			<option value="3">
				Delivery
			</option>
			<option value="2">
				Take-Away
			</option>
		</select>

		<br>
		<input type="submit" value="Submit"/>
	</form>
</div>