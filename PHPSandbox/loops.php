<?php 
  echo "<h2>Loops</h2>
    <p>There are 4 types of loops used in PHP: for, while, do-while, and foreach loops.</p>";

  // for loop
  for($i = 0; $i < 10; $i++) {
    $iteration = $i + 1;
    echo "Iteration #" . $iteration . "<br />";

    if($i === 9) {
      echo "And we're done!";
    }
  }

  // while loop
  $numOfRounds = 7;
  $currentRound = 1;
  while($currentRound <= $numOfRounds){
    echo "It's round $currentRound. ";
    
    if($currentRound !== $numOfRounds) {
      echo "Here we go!<br />";
    } else {
      echo "Final round folks!<br />";
    }

    $currentRound++;
  }

  // do-while loop
  $i = 1;

  do {
    echo "It's iteration $i <br />";
    $i++;
  }
  while($i < 1);

  // foreach 
  $parents = ['Dad' => 58, 'Janet' => 50, 'Mom' => 56, 'Glenn' => 55];

  foreach($parents as $parent => $age) {
    echo "$parent is $age years old. <br />";
  }

?>