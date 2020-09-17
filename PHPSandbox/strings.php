<?php 
  // substr()
  echo substr("I am Scott", 5, 6);

  // strlen()
  $str1 = "          Apples and meatballs for breakfast";
  echo  "<br />" . strlen($str1) . "<br />";
  
  // strpos()
  echo strpos("I am Scott", "Scott");

  // trim()
  $trimmed = trim($str1);
  echo "<br />The origin string is " . strlen($str1) . " and the trimmed string is " . strlen($trimmed) . ' characters long.';

  // strtoupper and strtolower
  $uppercaseStr1 = strtoupper($str1);
  echo "<br /> $uppercaseStr1";
  $lowercaseStr1 = strtolower($str1);
  echo "<br /> $lowercaseStr1";

  // ucwords()
  $propercaseStr1 = ucwords($str1);
  echo "<br />$propercaseStr1 <br />";

  // str_replace()
  echo str_replace('meatballs', 'bagels', $str1);
  
  // is_string()
  echo "<br />" . is_string($str1);
?>