<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>
<?php
	$name = $_POST['name'];
	$feedback = $_POST['feedback'];
	if(isset($_POST['mail']))
	{
		$mail = true;
	}
	else
	{
		$mail = false;
	}

	$email = $_POST['email'];

	$result = mysqli_query($conn, "INSERT INTO feedback "
 	." (name, feedback, mail, email) VALUES"
 	." ('".$name."', '".$feedback."', '".$mail."', '".$email."')") or die(mysqli_error($conn)); 
?>
<div id="info">
	<h2 id="infoText">Thank you for your feedback.</h2>
</div>