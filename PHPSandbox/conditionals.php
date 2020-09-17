<?php 
  echo "<h2>Conditions and Comparison Operators</h2>";

  $num = 21;

  if($num > 10) {
    if($num > 20) {
      echo "Number is greater than 20.";
    } else {
      echo "Number is greater than 10.";
    }
  } else if ($num > 5) {
    echo "Number is greater than 5 but less than 10.";
  } else {
    echo "Number is lower than or equal to 5.";
  }











?>