<?php
	$conn = new mysqli("localhost", "root", "", "restaurants");
	session_start();

	if(!isset($_SESSION['admin']))
		$_SESSION['admin'] = false;
?>