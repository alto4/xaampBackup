<?php 
  $age = 100;
  $score = 5;

  echo 'You did ' .($score > 10 ? 'well' : 'okay') . '.';

  echo 'For your age, you did: ' . ($score > 10 ? ($age < 10 ? 'amazingly well!' : 'very well'): ($age > 10 ? 'poorly' : 'pretty okay'))

?>