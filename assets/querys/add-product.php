<?php

@session_name("armatuentorno");
@session_start();
include('../../functions.php');

$product = $_POST["product"];
$environment_product = $_POST["environment"];
$group = $_POST["group"];
$brand = $_POST["brand"];

//Agregar producto
$_SESSION['products-ae']["$product"]="$product-1-$environment_product-$group-$brand";
//Agregar producto

//Validar reglas de entorno
echo Valite_environment();
//Validar reglas de entorno
?>