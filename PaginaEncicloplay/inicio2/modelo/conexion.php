<?php
$nombreservidor = "localhost";
$nombreusuario = "u991668360_enciclo";
$password = "Brayan123";
$nombreBD = "u991668360_encicloplay";



// Create connection
$conn = mysqli_connect($nombreservidor, $nombreusuario, $password, $nombreBD);
// Check connection
if (!$conn) {
  die("Connection failed: Error De conexion!..." . mysqli_connect_error());
}
    echo ("Conexion Exitosa!....");
    echo "<br>";



?>

