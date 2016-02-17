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

	<!-- Form that user will use to input password settings -->
	<form action='index.php' method='GET'>
		Enter number of words in password (0-9): 
		<input type='text' name='numWords' size="5" maxlength="1"><br>
		
		Add a number? 
		<input type='checkbox' name='option' value='number'><br>
		Add a special character?
		<input type='checkbox' name='option' value='special'><br>

		<input type='submit' value='Generate a password!'>
	</form>

	<!-- Generate Password  using logic.php and print to screen -->
	<?php $length = count($pwd); ?>
	<?php for($x = 1; $x <= $length; $x++): ?>
		<?php if($x < $length): ?>
			<?php echo $pwd[$x]; ?> -
		<?php else: ?>
			<?php echo $pwd[$x]; ?>
		<?php endif; ?>
	<?php endfor; ?>
</body>
</html>
