<?php

$words = array("travel", "car", "dog", "word", "heart", "sound", "pretzel", "music", "guitar", "windmill", "chicken",
	"milk", "water", "snowman", "waterfall", "rainbow", "pencil", "ladder", "poster", "computer", "traffic", 
	"galaxy", "avocado", "watermelon", "airplane", "giant", "telescope", "duck", "monitor", "toliet");

#var_dump($words);

$pwd = array_rand($words);
var_dump($pwd);
?>
