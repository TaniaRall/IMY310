<html>
	<head>
		<?php include('partials/head.php'); ?>
	</head>
	<body>
		<?php include ("partials/menu.php"); ?>
		<form id="loginForm" action="logMeIn.php" method="post">
			<div id="log">
				<label for="userName">Username:</label>
				<br/>
				<input id="userName" name="userName" type="text" value="admin"/>
				<br/><br/>
				<label for="password">Password:</label>
				<br/>
				<input type="password" name="password" id="password" value="admin"/>
				<br/>
				<br/>
				<input type="submit" value="Submit" id="submitSearch"/>
			</div>
		</form>
	</body>
</html>
