
<html lang="en">
<head>
  <title>PHP crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<!--body init-->
<body>
<?php
$user = "el usuario lo deve introducir desde el input";
$mensaje = $_POST["mensaje"];
?>
<!--logo-->
<div class="jumbotron text-center">
  <h1>MathNet</h1>
</div>

<!--mensaje-->
<div class="container"><p class="font-weight-bolder"></p></div>
<form action="index.php" method="post">
<div class="container"><div class="input-group">
      
      <input id="email" type="text" class="form-control" name="email" placeholder="name">
    </div>

  <textarea class="form-control" rows="5" id="comment" type="text" name="mensaje" placeholder="escriba un mensaje"></textarea>
  <input type="submit">
</div>
</form>
<!--fin mensaje-->

<div class= "container">
<div class="table-responsive-sm">
<table class="table table-striped">
    <thead>
      <tr>
        <th>user</th>
        <th>message</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_POST["name"]; ?></td>
            <td><?php echo $_POST["mensaje"]; ?></td>
        </tr>
    </tbody>
    </div>
    </div>
</body>
</html>
