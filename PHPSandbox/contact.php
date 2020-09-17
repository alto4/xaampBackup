<?php 

  // Check for submit 
  if(filter_has_var(INPUT_POST, 'submit')){
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Debug form data and ensure it's being recieved
    echo "Recieved data: <br /> 
          Name = $name <br />
          Email = $email <br />
          Message = $message ";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
  <nav class="navbar navbar-default bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand">ACME</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="" />
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea type="text" name="message" class="form-control" value=""></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form> 
  </div>
</body>
</html>