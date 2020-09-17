<?php
  echo "<h1>Arrays</h1>";
// i) Indexed Arrays
  $fruits = array('Bananas', 'Oranges', 'Lemons', 'Kiwi');
  echo "We have " . count($fruits) . " types of fruit in stock today.";
  echo "<br />I'd recommend the " . $fruits[3] . '.';

  // ii) Associative Arrays
  $ripeness = ['Bananas' => 'ripe', 'Oranges' => 'sweet', 'Lemons' => 'juicy', 'Kiwi' => 'large'];
  echo "<br />The " . $fruits[1] . " are also nice and " . $ripeness['Oranges'] . " today.";

  // iii) Multi-dimensional array
  $inventory = array(
    array('Bananas', 12, 20),
    array('Oranges', 20, 22),
    array('Lemons', 67, 55),
  );

  echo "<br />Let me see here...<br />";
  echo "We have " . $inventory[1][2] . " " . $inventory[1][0] . " left in stock.";

  $total = $inventory[1][2] * .77;

  echo "<br />Here we are. You're total comes to $$total. <br />";
  echo "Have a great day!";

?>
