<?php

@session_name("armatuentorno");
@session_start();
include('../../functions.php');

$email_abi = $_SESSION["email"];
$discount_abi = $_SESSION["discount"];
$country_abi = $_SESSION["country"];
$products = json_encode($_SESSION['products-ae']);
$products_environment = json_encode($_SESSION["products_checkout"]);

$data = base64_encode($email_abi . "&" . $products . "&" . $products_environment . "&" . $discount_abi . "&" . $country_abi . "&ae");
echo "https://nikkenlatam.com/cotizador/?data=$data";

?>