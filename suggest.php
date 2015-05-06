<?php
$PageTitle = "Suggest a restaurant" ;
include("menu.php");
?>
Suggest restuarant:
<form>
	<label for="restuarantName">Restaurant Name:</label><br>
	<input type="text" id="restuarantName" name="name" value="Burgundies"/>
	<br>
	
	<label for="address">Restaurant Adress:</label><br>
	<input type="text" id="address" name="name" value="Burgundies"/>
	<br>
	
	<label for="telephone">Restaurant Telephone:</label><br>
	<input type="text" id="telephone" name="name" value="Burgundies"/>
	<br>
	
	<label for="telephone">Restaurant Price Class:</label><br>
	<select name="price" >
		<option value="superCheap">Super Cheap</option>
		<option value="budget">Budget</option>
		<option value="middleClass">Middle class</option>
		<option value="pricey">Pricey</option>
		<option value="bigSpender">Big Spender</option>
	</select>
	<br>
	
	<label for="web">Restaurant Website:</label><br>
	<input type="text" id="web" name="name" value="Burgundies"/>
	<br>
	
	<label for="facebook">Restaurant Facebook:</label><br>
	<input type="text" id="facebook" name="name" value="Burgundies"/>
	<br>
	
	<label for="twitter">Restaurant Twitter:</label><br>
	<input type="text" id="twitter" name="name" value="Burgundies"/>
	<br>
	
	<label for="restuarantName">Restaurant Name:</label><br>
	<input type="text" id="restuarantName" name="name" value="Burgundies"/>
	<br>
</form>
<?php include("footer.php") ?>