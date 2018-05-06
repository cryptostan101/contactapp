<?php include 'server-info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Server Info</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="index.php"> My Website</a>
            <a class="navbar-brand" href="display-info.php"> Server Info</a>

        </div>
     </div>
   </nav>

  <div class="container">

    <h1> Server & File Info  </h1>
    <?php if($server): ?>

      <ul class="list-group">

        <?php foreach($server as $key => $value ): ?>

          <li class="list-group-item">
              <strong> <?php echo $key; ?> </strong>  <?php echo $value; ?>
          </li>

        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h1> Client Info  </h1>
    <?php if($client): ?>

      <ul class="list-group">

        <?php foreach($client as $key => $value ): ?>

          <li class="list-group-item">
              <strong> <?php echo $key; ?> </strong>  <?php echo $value; ?>
          </li>

        <?php endforeach; ?>
      </ul>
    <?php endif; ?>



  </div>
</body>
</html>
