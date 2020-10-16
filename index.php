
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

<!--logo-->
<div class="jumbotron text-center">
  <h1>MathNet</h1>
</div>

<!--mensaje-->
<div class="container"><p class="font-weight-bolder"></p></div>
<form action="index.php" method="post">
<div class="container"><div class="input-group">
      
      <input id="email" type="text" class="form-control" name="nombre" placeholder="nombre">
    </div>

  <textarea class="form-control" rows="5" id="comment" type="text" name="mensaje" placeholder="escriba un mensaje"></textarea>
  <input type="submit">
</div>
</form>
<!--fin mensaje-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mathnet";
//creating the conn 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("fallo la conexion: ". mysqli_connect_error());
}

$mensaje = mysqli_real_escape_string($conn, $_REQUEST['mensaje']);
$nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);

$sql = "INSERT INTO mensajes ( mensaje, nombre)
VALUES ('$mensaje','$nombre')";

if ($conn->query($sql) === TRUE) {
  echo '<div class="container"><div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Bien!</strong> Mensaje enviado
</div></div>';
} else {
  echo '<div class="container"><div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
</div></div>' . $sql . $conn->error;
}

$conn->close();
?>

<?php
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->conect_error) {
  die("Conection failed: " . $con->conect_error);
}

$sql = "SELECT id, nombre, mensaje FROM mensajes";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div class= "container"><table class="table table-striped"><thead><tr><th>user</th><th>message</th></tr></thead><tbody><tbody><tr><td>' . $row["nombre"]. '</td><td>'. $row["mensaje"].'</td></tr></tbody></div></div></body></html>' ;
  }
} else {
  echo "0 resultados";
}
$con->close();
?>




    
      
        
        
      
    
    
        
            



