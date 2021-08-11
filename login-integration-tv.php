<?php 

include('functions.php'); /*Funciones*/

/*vars*/
@$type = base64_decode($_GET["type"]);
$code_abi = "";
$name_abi = "";
$country_abi = "";
$phone_abi = "";
$cellular_abi = "";
$email_abi = "";
$type_client = "";
/*vars*/

if($type == "TVNCI")
{
	/*Ingreso como Asesor*/
	$code_abi = base64_decode($_GET["sap_code"]);
	$email_abi = base64_decode($_GET["email"]);
	$country_abi = $_GET["country"];
	$type_client = "ab";

	/*consultar asesor*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_ab($code_abi);
	/*consultar asesor*/

	$name_abi = $name_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;
}
elseif($type == "TVNCLUB")
{
	/*Ingreso como Club*/
	$code_abi = base64_decode($_GET["sap_code"]);
	$email_abi = base64_decode($_GET["email"]);
	$type_client = "cb";

	/*consultar club*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_ab($code_abi);
	/*consultar club*/

	$country_abi = $country_abi_query;
	$name_abi = $name_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;
}
elseif($type == "TVNCLIENT" || $type == "TVPCLIENT")
{
	/*Ingreso como Cliente pero no por TVP*/
	$email_abi = base64_decode($_GET["email"]);
	$type_client = "cl";

	/*consultar cliente*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_client($email_abi);
	/*consultar cliente*/

	$code_abi = $code_abi_query;
	$name_abi = $name_abi_query;
	$country_abi = $country_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;
}

if($code_abi != "")
{
	session_name("armatuentorno");
	session_start();

	$_SESSION["code"] = $code_abi;
	$_SESSION["name"] = $name_abi;
	$_SESSION["country"] = $country_abi;
	$_SESSION["phone"] = $phone_abi;
	$_SESSION["cellular"] = $cellular_abi;
	$_SESSION["email"] = $email_abi;
	$_SESSION["kit"] = 0;
	$_SESSION["type"] = $type_client;
	$_SESSION["discount"] = 0;
	$_SESSION["environment"] = "kitchen";
	$_SESSION["rule_environment"] = 0;
	$_SESSION["view_option"] = 0;
	$_SESSION["money"] = Type_money($country_abi);
	$_SESSION['products-ae'] = array();
	$_SESSION['products_checkout'] = array();



	header("location: index.php");
	exit;
}

header ("Location: " . $_SERVER['HTTP_REFERER']);
exit;

?>