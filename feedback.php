<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>

<div id="feedback">
	Feedback:
	<form method="post" action="saveFeedback.php">
		<label for="name">First name:</label><br>
		<input type="text" id="name" name="name" value="Anonymous"/>
		<br>
		
		<label for="feedback">Feedback</label> <br>
		<textarea id="feedbackText" placeholder="Write your feedback here" name="feedback"></textarea><br>
		<label for="mail">Contact me:</label>
		<input type="checkbox" name="mail" id="mail" checked="true"/>
		<br>
		<label for="email" class="mail">Email:</label>
		<input type="email" name="email" id="email" class="mail"/>
		<br>
		<input type="submit" value="Submit"/>
	</form>
</div>