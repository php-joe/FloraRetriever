<div class="col-md-4 col-md-offset-4">
<h4><?php echo WORDING_EDIT_USER_DATA; ?></h4>
</hr>
	<h4><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h4>

	<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
	<form role="form" method="post" action="?edit">
		<div class="form-group">
			<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
			<input id="user_name" class="form-control" type="text" name="user_name"
			pattern="[a-zA-Z0-9]{2,64}" required />
			<br>
			<center><input type="submit" name="user_edit_submit_name" class="btn btn-default" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
			<br><br>(<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)</center>
				<br>
		</div>
	</form><hr/>

	<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
	<form role="form" method="post" action="?edit">
		<div class="form-group">
			<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
			<input id="user_email" class="form-control" type="email" name="user_email" required />
			<br>
			<center>
			<input type="submit" name="user_edit_submit_email" class="btn btn-default" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
			<br><br>(<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)</center>
		</div>
	</form><hr/>

	<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
	<form method="post" action="?edit">
		<label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
		<input id="user_password_old" type="password" name="user_password_old" class="form-control" pattern=".{6,}" required autocomplete="off" />
		<br>
		<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
		<input id="user_password_new" type="password" name="user_password_new" class="form-control" pattern=".{6,}" required autocomplete="off" />
		<br>
		<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" type="password" name="user_password_repeat" class="form-control" pattern=".{6,}" required autocomplete="off" />
		<br>
		<center>
		<input type="submit" name="user_edit_submit_password" class="btn btn-default" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
	</form>
</fieldset><br/><br><hr />
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
</center>
</form>
