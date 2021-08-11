<?php

@session_name("armatuentorno");
@session_start();
$product = $_POST["product"];
$quantity = $_POST["quantity"];

list($product, $environment, $group, $brand) = explode('-', $product);

//Editar producto
$_SESSION['products-ae']["$product"]="$product-$quantity-$environment-$group-$brand";
//Editar producto

?>