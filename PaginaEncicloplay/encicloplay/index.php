<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>inicio de sesion</title>
    <link rel="stylesheet" type="text/css" href="estilos/f1.css">
</head>
<body>
<br>
<br>
<form method="post"action="controlador/validar.php">

      <h1><tt>Iniciar en Encicloplay</h1>
        <h4>Numero de documento:</h4>
      <input class="controls" type="text" name="numero"  placeholder="Numero de Documento"  required>  
     <h4>Nombre y apellido:</h4>
      <input class="controls" type="text" name="nombre" placeholder="Nombre y Apellido" required>
      <h4>contraseña:</h4>
      <input class="controls" type="Password" name="pass"  placeholder="pass" required>
      

        <input class="botons" type="submit" name="button" id="button" value="Iniciar"  align="center" name="registro">
      </tt>
      
         
        
   
</form>
</body>