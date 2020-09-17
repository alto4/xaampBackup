<?php 
  echo date('m/d/Y') . "<br />";

  // Set timezone 
  date_default_timezone_set('America/New_York');
  echo date('h:i:sa') . "<br />";

  $timestamp = mktime(10, 14, 53, 4, 12, 1993);
  
  echo "I was born on " . date('m/d/Y', $timestamp) . ".";

  $timestamp2 = strtotime('December 24, 2020');

  echo "<br />Christmas Eve will be on " . date("m/d/Y", $timestamp2) . ", like every other year.";
?>