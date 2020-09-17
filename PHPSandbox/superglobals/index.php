<?php include 'server-info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Info</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>Server & File Info</h1>

  <?php if($server): ?>
    <ul class="list-group">
      <?php foreach($server as $key => $value){
        echo "<li class='list-group-item'><strong>$key:</strong> $value</li>";
      }?>
    </ul>

  <?php endif; ?>

  <hr/>

  <h1>Client Info</h1>

<?php if($client): ?>
  <ul class="list-group">
    <?php foreach($client as $key => $value){
      echo "<li class='list-group-item'><strong>$key:</strong> $value</li>";
    }?>
  </ul>

<?php endif; ?>
</body>
</html>