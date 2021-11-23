<?php

include("conexion.php");
$con=conectar();

$id_doc=$_GET['id'];

$sql="DELETE FROM estudiante  WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estudiante.php");
    }
?>
