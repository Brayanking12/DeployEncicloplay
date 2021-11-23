<?php
include("../modelo/conexion.php");

session_start();

//asignar las varibles
$numrdoc=$_POST['numero'];
$nombape=$_POST['nombre'];
$pass=$_POST['pass'];



//consulta
$sql="SELECT COUNT(*) as contar from personas where  numrdoc='$numrdoc' and  nombape='$nombape' and  pass='$pass'";
$consulta=mysqli_query($conn,$sql);

$lista=mysqli_fetch_array($consulta);

if($lista['contar']>0){
	$_SESSION['nombape']=$nombape;
	header("location:../vista/pagina1.php");
    //die("El usuario existe!....");


}else{
    die("Usuario y/o Contraseña!... Información de Usuario invalida");
}



?>