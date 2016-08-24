var system_systemMenuList = [];
system_systemMenuList[0] = 'system_start_menu';

window.addEvent('domready', function() {

	/*
	system_hideMenu('system_start_menu');
	
	$('system_menu_start').addEvent('click', function(e){
		system_toggleMenu('system_start_menu');
	});
	
	$('system_desktop').addEvent('click', function(e){
		system_hideAllSystemMenus();
	});
	*/

});

function system_system_toggleMenu (id) {
	if (document.getElementById(id).style.display == 'none') {
		document.getElementById(id).style.display = '';
	} else {
		document.getElementById(id).style.display = 'none';
	}
}

function system_hideAllSystemMenus () {
	for (i = 0; i < system_systemMenuList.length; i++) {
		system_hideMenu(system_systemMenuList[i]);
	}
}
function system_delElement(id) {
	var element = document.getElementById(id);
	var parent = element.parentNode;
	parent.removeChild(element);
}
function system_hideMenu (id) {
	document.getElementById(id).style.display = 'none';
}
function system_showMenu (id) {
	var element = document.getElementById(id);
	element.style.display = 'block';
	
}
function system_showApp (appname) {
	var newapp = document.createElement('div');
	var id = 'global_app_container_' + appname;
	newapp.setAttribute('id', id);
	newapp.innerHTML = '<h1>lol</h1>';
	document.body.appendChild(newapp);
	
	system_ajax_content_query('app/'+appname+'/main.php', id);

}
function system_ajax_content_query (content_url, result_container) {
	// This function requires the mootools library already loaded.
	// The function will get the content in the file content_url and place
	// it in the element with the id defined by result_container.
	// Example usage: ajax_query("games/metroid/kreig.php", "walkthrough_container");
	var req = new Request({
		url: content_url,
		onSuccess: function(txt){
			$(result_container).set('html', txt);
		},
		onFailure: function(){
			$(result_container).set('text', 'Unexpected error.  Please contact the system administrator if this problem persists.');
		}
	});
	req.send();
}