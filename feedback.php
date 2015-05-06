<?php
$PageTitle = "Send us Feedback" ;
include "partials/menu.php";
?>

Feedback:
<form>
	<label for="name">First name:</label><br>
	<input type="text" id="name" name="name" value="Anonymous"/>
	<br>
	
	<label for="feedback">Feedback</label> <br>
	<textarea id="feedback" placeholder="Write your feedback here"></textarea><br>
</form>
<?php include "partials/footer.php" ?>