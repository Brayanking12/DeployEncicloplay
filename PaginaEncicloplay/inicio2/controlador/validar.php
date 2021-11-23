
<?php
include("../modelo/conexion.php");

session_start();

//asignar las varibles
$nomb=$_POST['nombre'];
$numerdoc=$_POST['numero'];
$pass=$_POST['pass'];




//consulta
$sql="SELECT COUNT(*) as contar from registro where nomb='$nomb' and numerdoc='$numerdoc' and   pass='$pass'";
$consulta=mysqli_query($conn,$sql);

$lista=mysqli_fetch_array($consulta);

if($lista['contar']>0){
	$_SESSION['nomb']=$nomb;
    
	header("location:../vista/pagina1.php");
    die("El usuario existe!....");


}else{
    die("Error de autenticacion");
}



?>