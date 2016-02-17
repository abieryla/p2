<?php

$_GET;

# Array of words for password
$words = array("travel", "car", "dog", "word", "heart", "sound", "pretzel", "music", "guitar", "windmill", "chicken",
	"milk", "water", "snowman", "waterfall", "rainbow", "pencil", "ladder", "poster", "computer", "traffic", 
	"galaxy", "avocado", "watermelon", "airplane", "giant", "telescope", "duck", "monitor", "toliet");

# Array of special characters
$specialChars = array("$", "#", "@", "!", "%", "&");

# array for random password
$pwd = [];

# get user input of number of words to generate in password
if (empty($_GET)) {
	$numwords = 3;
}
else {
	$numwords = $_GET["pwdlength"];
	if(!(is_numeric($numwords))) {
		$error = "Invalid number. Enter number between 0-9.";
	}
}



# Check if user wants number in password, default is no (num = 0)
if (empty($_GET["number"])) {
	$num = 0;
}
else {
	$num = rand(0,9);
}


# check if user wants a special character in password, default is no (spec = 0)
if (isset($_GET["special"])) {
	$specindex = array_rand($specialChars);
	$spec = $specialChars[$specindex];
}



## choose random word

for($x = 1; $x <= $numwords; $x++) {
        $index = array_rand($words);
        $pwd[$x] = $words[$index];
}

?>
