<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$password = "";
$nombreBD = "registrar";



// Create connection
$conn = mysqli_connect($nombreservidor, $nombreusuario, $password, $nombreBD);
// Check connection
if (!$conn) {
  die("Connection failed: Error De conexion!..." . mysqli_connect_error());
}
    echo ("Conexion Exitosa!....");
    echo "<br>";



?>

