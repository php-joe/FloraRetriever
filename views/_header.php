<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php-login-advanced</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="libraries/js/bootstrap.min.js"></script>
	<script src="libraries/js/conditional.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="libraries/css/custom.css">
	

	</style>
</head>
<body><br><br>
<div class="container">
<center><h2>Flora Retriever</h2></center><br>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    foreach ($login->errors as $error) {
        echo "<p class='alert alert-danger'>$error</p>\n";
    }

    foreach ($login->messages as $message) {
        echo "<p class='alert alert-info'>$message</p>\n";
    }
}
?>
