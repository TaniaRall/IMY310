<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.2.min.js"></script>
		<script src="script.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include "menu.php"; ?>
		<form id="loginForm">
			<label for="userName">Username:</label>
			<br/>
			<input id="userName" type="text"/>
			<br/><br/>
			<label for="password">Password:</label>
			<br/>
			<input type="password" id="password"/>
			<br/>
			<br/>
			<input type="submit" value="Submit"/>
		</form>
	</body>
</html>
