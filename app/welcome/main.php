<div id="app_welcome_container" class="app">
	<script type="text/javascript" src="js/welcome.js"></script>
	<link rel="stylesheet" href="css/welcome.css" type="text/css" />	
	
	<div class="app_title" id="app_welcome_title_bar">
		Welcome
		<div class="app_toolbox">
			<img title="Close" src="images/system/toolbox_arrow_down.png">
		</div>
	</div>
	<div class="app_content">
		<div id="welcome_content_left_column">
			<div><a href="#">Take the Tour</a></div>
			<div><a href="#">Create Your Profile</a></div>
			<div><a href="#">Edit Settings</a></div>
			<div><a href="#">Invite Friends</a></div>
			<div><a href="#">DevBlog</a></div>
		
		</div>
	
		<div id="welcome_content_right_column">
		
			<h1 class="content_title_1">DruOS Home</h1>
			
			<div id="welcome_content_dynamic_content">
			
				<div class="content_tip">
					<div class="content_title_3">Tip of the Day</div>
					Running DruOS in Firefox?  Try pressing F11 for a true OS-like experience!
				</div>
			
				<p>
					DruOS is an online experience like none you've ever seen before.  A DruOS 
					account gives you immense power over your wants and needs.  With every account,
					<strong>3MB</strong> of free storage space is provided.  With this space comes
					powerful tools to share, edit, and manage your files, directly online.  There's
					no software to download or buy!
				</p>
				<p>
					All members are treated to a huge community of both competitive and laid-back
					gamers.  DruOS incorporates <strong>an arcade of games</strong>, complete with unlockable
					achievements and high scores!
				</p>
				<p>
					Applications from all around the net are being incorporated into DruOS.  Web messengers
					like ebuddy for <strong>MSN, AIM, Yahoo, and MySpace</strong> are one example.  
				</p>
				<p>
					Fauxfox
					is a <strong>web proxy</strong> that gives you a smooth browsing experience, whether you
					want to search securely and anonymously, or whether you just want to bypass work or 
					school firewalls for sites like Facebook or MySpace.
				</p>
		
			</div>
		
		</div>
		
	</div>

</div>

<script type="text/javascript">
	var divTitle = document.getElementById("app_welcome_title_bar"); 
	var divWindow = document.getElementById("app_welcome_container"); 
	Drag.init(divTitle, divWindow);	
</script>