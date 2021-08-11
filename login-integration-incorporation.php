<?php

include('functions.php');

if(isset($_GET["email"]))
{
	if($_GET["email"] != "")
	{
		/*vars*/
		$email = base64_decode($_GET["email"]);
		/*vars*/

		list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_club($email);

		if($code_abi_query != "")
		{
			session_name("armatuentorno");
			session_start();

			$_SESSION["code"] = $code_abi_query;
			$_SESSION["name"] = $name_abi_query;
			$_SESSION["country"] = $country_abi_query;
			$_SESSION["phone"] = $phone_abi_query;
			$_SESSION["cellular"] = $cellular_abi_query;
			$_SESSION["email"] = $email;
			$_SESSION["kit"] = 1;
			$_SESSION["type"] = "cb";
			$_SESSION["discount"] = 0;
			$_SESSION["environment"] = "kitchen";
			$_SESSION["rule_environment"] = 0;
			$_SESSION["view_option"] = 0;
			$_SESSION["money"] = Type_money($country_abi);
			$_SESSION['products-ae'] = array();
			$_SESSION['products_checkout'] = array();

			//Agregar producto KIT de inicio

			
			$_SESSION['products-ae']["5031"]="5031-1---";
			//Agregar producto KIT de inicio

			header("location: index.php");
			exit;
		}
	}
}

header ('Location: https://mitiendanikken.com/');
exit;

?>