<?php
  $highscoreFile = './highscore.txt'; 
  $Highscore = (int) file_get_contents($highscoreFile);
  $Score = (int) $_POST["ScoreKey"];

  if($Score > $Highscore)
  {
    file_put_contents ($highscoreFile, $Score);
    echo "New high score updated successfully\nHigh score is: " . $Score;
  }
  else
  {
      echo $Score ." is not a new high score\nHigh score is: ". $Highscore;
  }
?>
