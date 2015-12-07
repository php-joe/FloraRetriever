	<div class="col-md-4 col-md-offset-4">
	<center><p>Welcome! <?php echo WORDING_YOU_ARE_LOGGED_IN_AS . '<b>' . $_SESSION['user_name'] . '.'; ?></b></p><br></center>
<fieldset>
	<legend>Flora Records</legend><br><center>
	<?php echo ($_SESSION['user_access_level'] == 255 ? '<a href="flora/webprotect/flora.php" class="btn btn-default" role="button">'. "View Flora Records" .'</a>' : ''); ?>
	<?php echo ($_SESSION['user_access_level'] == 255 ? '<a href="flora/webprotect/flora.php?action=add_flora" class="btn btn-default" role=button">'. "Create Flora Record" .'</a>' : ''); ?>
	<?php echo ($_SESSION['user_access_level'] != 255 ? '<a href="flora/webprotect/user.php" class="btn btn-default" role="button">'. "View Flora Records" .'</a>' : ''); ?>
	<?php echo ($_SESSION['user_access_level'] != 255 ? '<a href="flora/webprotect/user.php?action=add_flora" class="btn btn-default" role=button">'. "Create Flora Record" .'</a>' : ''); ?>
<br><br><br></center>


	<fieldset>
		<legend>Bird Records</legend><br><center>
		<?php echo ($_SESSION['user_access_level'] == 255 ? '<a href="birds/webprotect/bird.php" class="btn btn-default" role="button">'. "View Bird Records" .'</a>' : ''); ?>
		<?php echo ($_SESSION['user_access_level'] == 255 ? '<a href="birds/webprotect/bird.php?action=add_bird" class="btn btn-default" role=button">'. "Create Bird Record" .'</a>' : ''); ?>
		<?php echo ($_SESSION['user_access_level'] != 255 ? '<a href="birds/webprotect/user.php" class="btn btn-default" role="button">'. "View Bird Records" .'</a>' : ''); ?>
		<?php echo ($_SESSION['user_access_level'] != 255 ? '<a href="birds/webprotect/user.php?action=add_bird" class="btn btn-default" role=button">'. "Create Bird Record" .'</a>' : ''); ?>


<br><br><br></center>
	<legend><?php echo WORDING_EDIT_USER_DATA; ?></legend>
	<center><p><b>Username: </b><?php echo $_SESSION['user_name']; ?></p>
	<p><b>Email: </b><?php echo $_SESSION['user_email']; ?></p></center>
</fieldset><br/><center>
<a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?edit"><?php echo WORDING_EDIT_USER_DATA; ?></a>
<?php echo (ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255 ? '<br/><a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>' : ''); ?>
</center></div>
