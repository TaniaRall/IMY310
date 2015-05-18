<?php include('partials/head.php'); ?>
<?php
	$name = $_POST['userName'];
	$pass = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '".$name."' AND password = '".$pass."'"); 

 	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);

 	if(count($ans) == 1)
 	{
 		$_SESSION['admin'] = true;
 		?>
 		<script type='text/javascript'>
			window.location = "index.php";
		</script>
		<?php
 	}
 	else
 	{
 		?>
 		<script type='text/javascript'>
			alert("Login failed. Please try again.");
			window.location = "login.php";
		</script>
		<?php
 	}
?>

