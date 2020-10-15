<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mensajes";
//creating the conn 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("fallo la conexion: ". mysqli_connect_error());
}
echo "conexion exitosa ";

$sql = "INSERT INTO mathnet (id, name, mensaje)
VALUES ('', 'matias', 'hello')";

if ($conn->query($sql) === TRUE) {
  echo "añadido exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>