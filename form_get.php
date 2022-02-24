<?php
	$curHighscore = file_get_contents('./highscore.txt');
	echo "Current high score is: " . $curHighscore;
?>