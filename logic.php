<?php

$_GET;

# Array of words for password
$words = array("travel", "car", "dog", "word", "heart", "sound", "pretzel", "music", "guitar", "windmill", "chicken",
	"milk", "water", "snowman", "waterfall", "rainbow", "pencil", "ladder", "poster", "computer", "traffic", 
	"galaxy", "avocado", "watermelon", "airplane", "giant", "telescope", "duck", "monitor", "toliet");

# array for random password
$pwd = [];

# get user input of number of words to generate in password
if (empty($_GET)) {
	$numwords = 3;
}
else {
	$numwords = $_GET["pwdlength"];
}

for($x = 1; $x <= $numwords; $x++) {
	## Choose random word
	$index = array_rand($words);
	$pwd[$x] = $words[$index];
}
?>
