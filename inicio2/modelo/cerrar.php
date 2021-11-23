<?php

if(isset($_POST['button'])){

	session_start();
	session_destroy();
	echo "sesion cerrada....";
	header("Location: http://localhost/encicloplay/index.php");
	exit();
}
 


?>