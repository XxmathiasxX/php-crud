
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
$mensaje = "hola wenas esto es php";
?>
<!--logo-->
<div class="jumbotron text-center">
  <h1>MathNet</h1>
</div>
<!--mensaje-->
<div class="container"><p class="font-weight-bolder">ingrese el mensaje here:</p></div>
<div class="container">
  <label for="comment">mensaje:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
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
            <td>random</td>
            <td><?= $mensaje ?></td>
        </tr>
        <tr>
            <td>mathias</td>
            <td>hola que talka</td>
        </tr>
    </tbody>
    </div>
    </div>
</body>
</html>
