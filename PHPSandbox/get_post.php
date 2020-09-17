<?php 
  if(isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name . "<br />";
  } 

  if(isset($_POST['email'])) {
    $email = htmlentities($_POST['email']);
    echo $email . "<br />";
  } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET and POST</title>
</head>
<body>
  <h1>GET and POST</h1>

  <form method="POST" action="get_post.php">
    <div>
      <label>Name: </label><br />
      <input type="text" name="name" />
    </div>
    <div>
      <label>Email: </label><br />
      <input type="text" name="email" />
    </div>

    <input type="submit" value="Submit" />

  </form>
</body>
</html>