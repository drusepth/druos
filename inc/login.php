<div id="login_container">
<div id="login_box">
	<div id="login_form">
		<table id="login_list">
		
			<?php
			$mysql = mysql_connect($mysql_location, $mysql_user, $mysql_password) or die("mysql error: " . mysql_error());
			mysql_select_db($mysql_prefix . $mysql_db);
			
			$query = "SELECT `Username`, `Avatar`, `PasswordHint` FROM `users`"; # ORDER BY `Username`
			$result = mysql_query($query) or die("mysql error: " . mysql_error());
			
			while ($user = mysql_fetch_row($result)) {
				?>
			<tr onclick="login_showLoginPassword('<?php echo $user[0]; ?>');">
				<script type="text/javascript">login_systemUsers[login_systemUsers.length] = '<?php echo $user[0]; ?>';</script>
				<td class="login_display_picture">
					<img src="images/users/avatars/<?php echo $user[0]; ?>.png" onclick="login_toggleLoginPassword('<?php echo $user[0]; ?>');" id="login_avatar_<?php echo $user[0]; ?>">
				</td>
				<td>
					<form onsubmit="login_process('<?php echo $user[0]; ?>');return false;">
					<name><?php echo $user[0]; ?></name>
					<div class="login_form_status" id="login_password_container_<?php echo $user[0]; ?>" style="display:none;">
						<input type="password" id="login_password_<?php echo $user[0]; ?>">
						<input type="button" value=">" onclick="login_process('<?php echo $user[0]; ?>');">
						<?php
							if ($user[2] != '' and $user[2] != '[No Password Hint]') {
						?>
						<input type="button" value="?" 
							onmouseover="Tip('<?php echo mysql_real_escape_string($user[2]); ?>',
							DURATION, 3000,
							LEFT, true,
							WIDTH, 200
							)" 
							onmouseout="UnTip()">
						<?php
							}
						?>
					</div>
					</form>
				</td>
			</tr>
			<?php
			}
			?>
			
		</table>
	</div>
	<div id="login_notice">
		DruOS is optimized for <a href="http://www.google.com/chrome">Google Chrome</a> and <a href="http://www.mozilla.com/en-US/firefox/">Firefox</a>.
	</div>
</div>
</div>
