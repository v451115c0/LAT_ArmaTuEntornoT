<?php

@session_name("armatuentorno");
@session_start();
include('../../functions.php');

$product = $_POST["product"];

//Eliminar producto
unset($_SESSION['products-ae'][$product]);
//Eliminar producto

//Validar reglas de entorno
Valite_environment();
//Validar reglas de entorno
?>