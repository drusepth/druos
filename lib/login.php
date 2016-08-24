<?php
	require_once("../settings.php");
	
	$mysql = mysql_connect($mysql_location, $mysql_user, $mysql_password) 
		or die("mysql error: " . mysql_error());
	mysql_select_db($mysql_prefix . $mysql_db);
	
	if (isset($_GET['user']) and isset($_GET['pass'])) {
		$user = $_GET['user'];
		$pass = $_GET['pass'];
	} else {
		header("Location: ../index.php");
		die;
	}
	
	#if ($user == 'Guest') {
	#	echo "The guest account has been temporarily disabled.";
	#	die;
	#}
	
	$query = sprintf("SELECT * FROM `users` WHERE `Username` = '%s' AND `Password` = '%s' LIMIT 1",
		mysql_real_escape_string($user),
		mysql_real_escape_string($pass)
	);
	
	$result = mysql_query($query) or die("Mysql error: " . mysql_error());
	
	if (mysql_num_rows($result) == 1) {
		echo "Successfully logged in!";
	} else {
		echo "Login Failure: invalid password.";
	}
	
?>