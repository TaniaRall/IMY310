<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.2.min.js"></script>
		<script src="script.js" type="text/javascript"></script>
		<?php require_once('connection.php'); ?>
	</head>
	<body>
		<?php include "menu.php"; ?>
		<div id="BaconFinder">
			<?php include "baconFinder.php"; ?>
		</div>
		<div id="content">
			<?php include "detailedResult.php"; ?>
		</div>
	</body>
</html>
