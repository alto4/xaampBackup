<?php 
  if(filter_has_var(INPUT_GET, 'data')) {
    echo 'Found data';
  } else {
    echo 'No data found.';
  }

  // filter_has_var, filter_input
  if(filter_has_var(INPUT_GET, 'data')) {
    $email = $_GET['data'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo '<br /> The email ' . $email;

    if(filter_input(INPUT_GET, 'data', FILTER_VALIDATE_EMAIL)) {
      echo ' is valid. ';
    } else {
      echo ' is invalid.';
    }
  }

?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data" />
  <button type="submit">Submit</button>
</form>