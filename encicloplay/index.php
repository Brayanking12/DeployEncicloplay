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
					<a class="nav-link font-color-general mr-lg-3 ml-3" href="http://localhost/PaginaEncicloplay">Inicio</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="#nosotros">Nosotros</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="#misionyvision ">Mision y Vision</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="http://localhost/PaginaEncicloplay/encicloplay/index.php">Iniciar Sesion</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="http://localhost/PaginaEncicloplay/registrar/index.php">Registrate</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-color-general mr-3 ml-3" href="#perfil">Perfil</a>
				</li>
				
			</ul>
		</div>
	</nav>

	<!-- FIN NAVBAR -->   

<form method="post"action="controlador/validar.php">

      <h1>Iniciar en Encicloplay</h1>
        <h4>Numero de documento:</h4>
      <input class="controls" type="text" name="numero"  placeholder="Numero de Documento"  required>  
     <h4>Nombre y apellido:</h4>
      <input class="controls" type="text" name="nombre" placeholder="Nombre y Apellido" required>
      <h4>contraseña:</h4>
      <input class="controls" type="Password" name="pass"  placeholder="Contraseña" required>
      

        <input class="botons" type="submit" name="button" id="button" value="INICIAR SESION" name="registro">
      
      
         
        
   
</form>
</body> 