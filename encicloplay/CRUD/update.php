<?php

include("conexion.php");
$con=conectar();

$id_doc=$_POST['id_doc'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$genero=$_POST['genero'];
$grado=$_POST['grado'];

$sql="UPDATE estudiante SET  nombres='$nombres',apellidos='$apellidos',genero='$genero',grado='$grado' WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estudiante.php");
    }
?>