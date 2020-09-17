<?php 
  echo "<h2>Functions</h2>";

  function sayHello($name) {
    echo "Hello $name! Nice to meet you.<br />";
  }

  sayHello('Jasmine');
  sayHello('Scottiottidopalicius');

  function add5($num1) {
    echo "<br />Passed by value, the original number stays the same. <br />";
    return $num1 += 5;
  }

  function add12(&$num1) {
    echo "<br />Passed by reference with &, the original number is altered. <br />";
 
    return $num1 += 12;
  }

  $num = 0;
  

  add5($num);
  echo $num;
  add12($num);
  echo $num;

?>