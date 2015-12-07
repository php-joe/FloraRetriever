<div class="col-md-4 col-md-offset-4">
	<form class="form" role="form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
		<div class="form-group">
			<label for="user_name"><?php echo WORDING_USERNAME; ?></label>
			<input id="user_name" class="form-control" type="text" name="user_name" required autofocus /><br>
		</div>

		<div class="form-group">
			<label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
			<input id="user_password" class="form-control" type="password" name="user_password" autocomplete="off" required /><br/>
		</div>
		<div class="form-group">
			<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
			<label for="user_rememberme" style=" display:inline;"><?php echo WORDING_REMEMBER_ME; ?></label>
		</div><br>
		<div class="form-group">
			<center>
			<input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" class="btn btn-default"></button><br><br>
			</center>
		</div>
	</form>
</fieldset><br/><center>
<?php echo (ALLOW_USER_REGISTRATION ? '<a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>&nbsp;&nbsp;|&nbsp;&nbsp;' : ''); ?>
<a href="?password_reset"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a></center>
<br><br><center>
<a href="flora/webprotect/index.php" class="btn btn-default" role="button">Guest Flora Record</a>
<a href="birds/webprotect/index.php" class="btn btn-default" role="button">Guest Bird Record</a><center>
</div>
