<?php
session_name("armatuentorno");
	session_start();
if($_SESSION["email"]=="servicio.mex@nikkenlatam.com"){
	header("location: index-respaldo.php");
	exit;
}else{
	header('Location: https://services.nikken.com.mx/mantenimiento');
}


?>