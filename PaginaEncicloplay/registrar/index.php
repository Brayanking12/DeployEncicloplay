
<!DOCTYPE html>
<html>
<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/f1.css">
</head>
<body>
<doctype html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Underdog&display=swap" rel="stylesheet">

  <!-- nuestros estilos-->
  <link rel="stylesheet" type="text/css" href="estilos/f1.css">

  <!-- iconos de friconix-->
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
<link rel="icon" href="img/bombilla.png" >
  <title>Encicoplay</title>
</head>
<body>


  <!-- INICIO SECCIÓN INFORMES -->
  <div class="container-fluid bg-color-info font-color-general" id="inicio">
    <div class="row">
      <div class="col-12 col-lg-6 text-center text-lg-left my-3 pl-5">
        Pagina de Aprendizaje
      </div>

      <div class="col-12 col-lg-6 text-center text-lg-right my-3 pr-5">
        Encicloplay <span class="font-weigth-bolder"><i class="fi-xnsuxl-smartphone-solid"></i> <a href="http://localhost/PaginaEncicloplay/encicloplay/CRUD/estudiante.php"> Acceso a Instructores</a></span> 
      </div>
    </div>
  </div>

  <!-- FIN SECCIÓN INFORMES -->


	<!-- INICIO NAVBAR -->
	<nav class="navbar navbar-expand-lg sticky-top bg-light">
		<span class="brand-name">Encicloplay</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="font-color-general"><i class="fi-xwsrxl-ellipsis"></i></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-lg-3 ml-3" href="../index.html">Inicio</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="#nosotros">Nosotros</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="#misionyvision ">Mision y Vision</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="../PaginaEncicloplay/inicio2/index.php">Iniciar Sesion</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="../PaginaEncicloplay/registrar/index.php">Registrate</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="../PaginaEncicloplay/perfil/index.php">Perfil</a>
				</li>
				
			</ul>
		</div>
	</nav>

	<!-- FIN NAVBAR -->      
    <form method="post">
    <?php
        $eres="";
        $tipod="";
        $numero="";
        $nombre="";
        $apellido="";
        $genero="";
        $grado="";
        $pass="";
        if(isset($_POST['nombre'])){
          $eres= $_REQUEST['eres'];
          $tipod= $_REQUEST['tipod'];
          $numero= $_POST['numero'];
          $nombre= $_POST['nombre'];
          $apellido= $_POST['apellido'];
          $genero= $_REQUEST['genero'];
          $grado= $_POST['grado'];
          $pass= $_POST['pass'];
          $campos = array();

          if($eres==""){
             array_push($campos,"El campo eres no puede estar vacio");
          }
          if($tipod==""){
            array_push($campos,"El campo tipo de documento no puede estar vacio");
          }
          if($numero==""){
            array_push($campos,"El campo numero de documento no puede estar vacio");
          }
          if($nombre==""){
            array_push($campos,"El campo nombre de documento no puede estar vacio");
          }
          if($apellido==""){
            array_push($campos,"El campo apellido de documento no puede estar vacio");
          }
          if($genero==""){
            array_push($campos,"El campo genero de documento no puede estar vacio");
          }
          if($grado==""){
            array_push($campos,"El campo grado de documento no puede estar vacio");
          }
          if($pass==""){
            array_push($campos,"El campo grado de password no puede estar vacio, ni tener menos de 6caracteres ");
          }

          if(count($campos) >0){
            echo"<div class='error'>";
            for($i =0; $i < count($campos); $i++){
              echo"<li>".$campos[$i]."</li>";
            }
          
          }else{
            echo"div class='correcto'>
                   datos correctos ";
          }

          echo"</div>";


        }

      ?>
      
      <h1>Registrate</h1>
    <h4>Eres:</h4>
    <select class="controls" name="eres" required>
          <option value="instructor">Instructor</option>
          <option value="alumno">Alumno</option>
        </select>
        <h4>Tipo de Documento:</h4>
    <select class="controls" name="tipod" required>
          <option value="Ti">Ti</option>
          <option value="CC">CC</option>
        </select>
        <h4>Numero de documento:</h4>
      <input class="controls" type="text" name="numero"  placeholder="Numero de Documento" required>
     <h4>Nombres:</h4>
      <input class="controls" type="text" name="nombre" placeholder="Nombres" required>
      <h4>Apellidos:</h4>
      <input class="controls" type="text" name="apellido" placeholder=" Apellidos" required>
      <select class="controls" name="genero" required>
          <option value="Mujer">Mujer</option>
          <option value="Hombre">Hombre</option>
        </select>
        <h4>Grado:</h4>
      <input class="controls" type="text" name="grado" placeholder="¿En que grado estas?" required>
      <h4>contraseña:</h4>
      <input class="controls" type="Password" name="pass"  placeholder="pass" required>
      

        <input class="botons" type="submit"  value="Registrar"  name="registro">
      <input class="botons" type="submit"  value="consultar" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  >

    </form>
         <?php
          include("ingresar.php");  
        ?>

 

</body>
</html>