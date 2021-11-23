<?php
include("conexion.php");
$con=conectar();

$id_doc=$_POST['id_doc'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$genero=$_POST['genero'];
$grado=$_POST['grado'];


$sql="INSERT INTO estudiante VALUES('$id_doc','$nombres','$apellidos','$genero','$grado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: estudiante.php");
    
}else {
}
?>