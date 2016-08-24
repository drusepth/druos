var system_allSystemGUI = [];
system_allSystemGUI[0] = 'login_box';
system_allSystemGUI[1] = 'system_monitor';

var system_shownSystemGUI = [];

function hidesystem_allSystemGUI() {
	
	for (i = 0; i < system_allSystemGUI.length; i++) {
		document.getElementById(system_allSystemGUI[i]).style.display = 'none';
	}

}

function hideGUI(gui) {
	
	document.getElementById(gui).style.display = 'none';

}

function showGUI(gui) {

	<?php
		if (isset($_GET['debug'])) {
	?>
		alert("Debug: showing GUI: " + gui);
	<?php
		} 
	?>

	document.getElementById(gui).style.display = '';

}

function showSystemGUI(gui) {

	<?php
		if (isset($_GET['debug'])) {
	?>
		alert("Debug: showing system GUI: " + gui);
	<?php
		} 
	?>

	document.getElementById(gui).style.display = '';
	system_shownSystemGUI.push(gui);

}