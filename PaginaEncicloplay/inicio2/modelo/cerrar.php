<?php

if(isset($_POST['button'])){

	session_start();
	session_destroy();
	echo "sesion cerrada.. ..";
	header("Location:../index.php");
	exit();
	}

?>
