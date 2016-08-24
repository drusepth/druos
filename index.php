<?php
	session_start();
	
	require_once("settings.php");
	
?>
<html>
<head>
	<title>DruOS :: version 2.0.3</title>
	
	<link rel="shortcut icon" href="favicon.ico" /> 
	
<?php
	include_once("header_includes.php");
?>

</head>
<body>
<script type="text/javascript" src="js/wz_tooltip.js"></script>
<?php 
	#<script type="text/javascript" src="js/wz_dragdrop.js"></script>
?>

<div id="background"><img src="images/backgrounds/6.jpg" height="100%" width="100%" id="background_image"></div>

<?php 
	include_once("inc/login.php");
	
	include_once("inc/system.php");
	
	#include_once("app/welcome.php");
?>


<div id="login_cursive_logo"></div>

</body>
</html>