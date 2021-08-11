<?php

@session_name("armatuentorno");
@session_start();
include('../../functions.php');

$email_abi = $_SESSION["email"];
$discount_abi = $_SESSION["discount"];
$country_abi = $_SESSION["country"];
$kit_abi = $_SESSION["kit"];
$environment = $_SESSION["environment"];
$type = $_SESSION["type"];

$products_checkout = "";

foreach($_SESSION['products_checkout'] as $posicion => $products)
{
	list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);

	$products_checkout = $products_checkout . $product_detail . ":" . $quantity_detail . ";";
}

$products_checkout = substr($products_checkout, 0, -1);

if($discount_abi == 1 && $country_abi == 1)
{
	$discount_abi = "SD";
}
else
{
	$discount_abi = "S";
}

$data = base64_encode($email_abi . "&" . $products_checkout . "&" . $discount_abi . "&" . $environment . "&" . $country_abi . "&" . $type);

if($kit_abi == 1)
{
	echo "https://nikkenlatam.com/services/checkout/redirect.php?app=incorporacion&data=$data";
}
else
{
	echo "https://nikkenlatam.com/services/checkout/redirect.php?app=armatuentorno&data=$data";
}

?>