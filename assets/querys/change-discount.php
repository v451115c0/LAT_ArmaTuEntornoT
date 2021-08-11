<?php

@session_name("armatuentorno");
@session_start();
$discount = $_POST["value"];
$country = $_SESSION["country"];
$_SESSION["discount"] = $discount;

if($country  == 2)
{
	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
	    list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);

	    if($discount == 1)
		{
			if(substr($product_detail, -1) == "M")
			{}
			else
			{
				//Eliminar producto
				unset($_SESSION['products-ae'][$product_detail]);
				//Eliminar producto

				$product_detail = $product_detail . "M";
				$_SESSION['products-ae']["$product_detail"]="$product_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";
			}
		}
		elseif(substr($product_detail, -1) == "M")
		{
			//Eliminar producto
			unset($_SESSION['products-ae'][$product_detail]);
			//Eliminar producto

			$product_detail = substr($product_detail, 0, -1);
			$_SESSION['products-ae']["$product_detail"]="$product_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";
		}
	}
}


?>