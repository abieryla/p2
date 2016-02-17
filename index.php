<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='p2.css' type='text/css'>
	<?php require('logic.php'); ?>
</head>

<body>
	<h1> Password Generator </h1>
	<form action='index.php' method='GET'>
		Enter number of words in password (0-9): 
		<input type='text' name='numWords' size="5" maxlength="1"><br>
		<input type='submit' value='Generate a password!'>
	</form>

</body>
</html>
