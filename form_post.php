<?php
	$highscoreFile = './highscore.txt';
	$curHighscore = (int) file_get_contents($highscoreFile);
	$curScore = (int) $_POST["curScoreKey"];
	if($curScore > $curHighscore){
		file_put_contents($highscoreFile, $curScore);
		echo "New high score updated successfully\nHigh score is: " . $curScore;
	}
	else{
		echo $curScore . " is not a new high score\nHigh score is: " . $curHighscore;
	}
?>