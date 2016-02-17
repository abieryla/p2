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
		<input type='text' name='pwdlength' size="5" maxlength="1"><br>
		
		Add a number? 
		<input type='checkbox' name='number'><br>
		Add a special character?
		<input type='checkbox' name='special'><br>

		<input type='submit' value='Generate a password!'>
	</form>


<!-- Generate Password  using logic.php and print to screen (default to display 3 words) -->
	
	<table>
	   <tr>
	      <td>
		   <?php $length = count($pwd); ?>
	<!-- print out words -->
		   <?php for($x = 1; $x <= $length; $x++): ?>
		   	<?php if($x < $length): ?>
		   		<?php echo $pwd[$x]; ?> -
		   	<?php else: ?>
		   		<?php echo $pwd[$x]; ?>
	<!-- check for number -->
				<?php if($num != 0): ?>
					<?php echo $num; ?>
				<?php endif; ?>
	<!-- check for special character -->
				<?php if(isset($spec)): ?>
                                        <?php echo $spec; ?>
                                <?php endif; ?>

		   	<?php endif; ?>
		   <?php endfor; ?>
	      </td>
	   </tr>
	</table>

	<!-- check for valid input and display error if necessary -->
	<?php if(isset($error)): ?>
		<?php echo $error; ?>
	<?php endif; ?>

</body>
</html>
