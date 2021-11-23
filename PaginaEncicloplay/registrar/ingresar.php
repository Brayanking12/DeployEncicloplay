<?php
include ("conexion.php");
$resultado=2;
if(isset($_POST['registro'])){
  $eres=($_REQUEST['eres']);
$tipod=($_REQUEST['tipod']);
$numerdoc=($_POST['numero']);
$nomb=($_POST['nombre']);
$ape=($_POST['apellido']);
$gen=($_REQUEST['genero']);
$gra=($_POST['grado']);
     $pass=($_POST['pass']);
     
     $consulta="insert into registro (eres,tipod,numerdoc,nomb,ape,gen,gra,pass) values ('$eres','$tipod','$numerdoc','$nomb','$ape','$gen','$gra','$pass')";
        $resultado=mysqli_query($conn,$consulta);
        if($resultado==1){
                echo "<br>";
                die("El usuario se ha registrado!...");
}else{
                if($resultado<1){
                        echo "<br>";
                        die("El usuario ¡No! se pudo registrar... Revisar Error");
                }
            }
    }
    mysqli_close($conn);
    ?>
