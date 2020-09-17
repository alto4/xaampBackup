<?php 

  require("./includes/constants.php");
  require("./includes/db.php");

  function dump($arg) {
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
  }

  $conn = db_connect();

  $user_select_stmt = pg_prepare($conn, "user_select" ,"SELECT * FROM users WHERE EmailAddress = $1");

  $result = pg_execute($conn, "user_select", array("scottalton@gmail.com"));

  if(pg_num_rows($result) == 1) {
    echo "Record of user found.";
  } else {
    echo "Record not found.";
  }
?>