window.addEvent('domready', function(){ 

	

});

var login_systemUsers = [];
var login_loggedInUser = '';

function login_showLoginPassword (user) {
	login_hideAllLoginPasswords();
	document.getElementById("login_password_container_" + user).style.display = '';
	document.getElementById("login_password_" + user).focus();
}
function login_hideLoginPassword (user) {
	document.getElementById("login_password_container_" + user).style.display = 'none';
}
function login_toggleLoginPassword (user) {
	cur = document.getElementById("login_password_container_" + user).style.display;
	if (cur == '') {
		login_hideLoginPassword(user);
	} else {
		login_showLoginPassword(user);
	}
}
function login_hideAllLoginPasswords () {
	for (i = 0; i < login_systemUsers.length; i++) {
		login_hideLoginPassword(login_systemUsers[i]);
	}
}

function login_defaultval (id, val) {
	
	if (document.getElementById(id).value == val) {
		document.getElementById(id).value = '';
	}

}

function login_process(user) {
	var username = user;
	var password = this.document.getElementById("login_password_" + user).value;

	original_src = document.getElementById("login_avatar_" + user).src;
	document.getElementById("login_avatar_" + user).src = 'http://dev.ecomtastic.net/ntiresystems/Client/Images/Content/RadAjaxLoadingImage.gif';

	system_ajax_content_query('lib/login.php?user='+username+'&pass='+password, 'login_notice');

	document.getElementById("login_avatar_" + user).src = original_src;

	if (document.getElementById("login_notice").innerHTML == "Successfully logged in!") {
		login_success(username);
	}
}

function login_init() {
	
}

function login_success(user) {
	login_loggedInUser = user;
	system_delElement('login_container');
	system_showMenu('system_container');
	system_showApp('welcome');
}



