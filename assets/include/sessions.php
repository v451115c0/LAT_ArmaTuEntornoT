<?php

@session_name("armatuentorno");
@session_start();

if(empty($_SESSION["code"]))
{	
	if($_SERVER['HTTP_REFERER'] == "")
	{
		header ('Location: https://mitiendanikken.com/');
		exit;
	}
	else
	{
		header ("Location: " . $_SERVER['HTTP_REFERER']);
		exit;
	}
}
else
{
	//vars
	$environment = $_SESSION["environment"];
	$name_abi = $_SESSION["name"];
	$type_abi = $_SESSION["type"];
	$country_abi = $_SESSION["country"];
	$rule_environment = $_SESSION["rule_environment"];
	$discount_abi = $_SESSION["discount"];
	//$code_sponsor_abi_query = $_SESSION["sponsor"];
	$code_sponsor_abi_query = 9845903;
}

?>