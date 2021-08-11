<?php



include('../sessions.php');

include('../../../functions.php');



//otros

$product_detail = "";

$quantity_detail = "";

$environment_detail = "";

$group_detail = "";

$brand_detail = "";

//otros



//totales

$simbol_product = "";

$total_sum = 0;

$total_environment_sum = 0;

$total_vc_sum = 0;

$total_vc_environment_sum = 0;

$total_point_sum = 0;

$total_menudeo_sum = 0;

$total_menudeo_environment_sum = 0;

//totales



$_SESSION["products_checkout"] = array();

foreach($_SESSION['products-ae'] as $posicion => $products)

{

	list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);



	if($country_abi == 9) //Precios FULL Ecuador

	{

		$insert_case = "'F') and H0.pais = T0.pais), 0)";

		$insert_case_full = "'F') and H0.pais = T0.pais), 0)";



		$insert_case_code = "'F') and H0.pais = T0.pais)";

		$insert_case_code_full = "'F') and H0.pais = T0.pais)";

	}

	else

	{

		if($country_abi == 2 && $_SESSION["discount"] == 1)

		{

			$insert_case = "'EM') and H0.pais = T0.pais), 0)";

			$insert_case_full = "'FM') and H0.pais = T0.pais), 0)";



			$insert_case_code = "'EM') and H0.pais = T0.pais)";

			$insert_case_code_full = "'FM') and H0.pais = T0.pais)";

		}

		else

		{

			$insert_case = "'E') and H0.pais = T0.pais), 0)";

			$insert_case_full = "'F') and H0.pais = T0.pais), 0)";



			$insert_case_code = "'E') and H0.pais = T0.pais)";

			$insert_case_code_full = "'F') and H0.pais = T0.pais)";

		}

	}

	



	$conn = connect_mk();

	$sql = mysqli_query($conn, "SELECT T0.sku, T0.imagen, T0.nombre_original_producto, T0.puntos,

		T0.vc_sugerido,

		IFNULL((SELECT H0.vc_sugerido FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' WHEN REPLACE(T0.sku, 'M', '') = '1359' THEN '13591' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case as vc_entorno,

		IFNULL((SELECT H0.vc_sugerido FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case_full as vc_full,

		T0.precio_sugerido,

		IFNULL((SELECT H0.precio_sugerido FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' WHEN REPLACE(T0.sku, 'M', '') = '1359' THEN '13591' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case as precio_entorno,

		IFNULL((SELECT H0.precio_sugerido FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case_full as precio_full,

		T1.valor, T0.aplica_iva, T0.componentes, T0.inventariable, T0.inventario_actual, T0.inventario_minimo, T0.idcontrol_art, T2.moneda_simbolo, T0.entorno, T0.grupo,

		T0.menudeo,

		IFNULL((SELECT H0.menudeo FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' WHEN REPLACE(T0.sku, 'M', '') = '1359' THEN '13591' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case as menudeo_entorno,

		IFNULL((SELECT H0.menudeo FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case_full as menudeo_full,

		(SELECT H0.sku FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' WHEN REPLACE(T0.sku, 'M', '') = '1359' THEN '13591' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case_code as codigo_entorno,

		(SELECT H0.sku FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT(CASE WHEN REPLACE(T0.sku, 'M', '') = '13501' THEN '135011' ELSE REPLACE(T0.sku, 'M', '') END, $insert_case_code_full as codigo_full

		FROM

		control_art T0

		INNER JOIN

		control_iva T1 ON T0.pais = T1.pais

		INNER JOIN

		control_oficinas T2 ON T2.idcontrol_oficinas = T0.pais

		WHERE

		T0.sku = '$product_detail' AND	T0.pais = '$country_abi'") or die("10");

	disconnect($conn);

	$row = mysqli_fetch_row($sql);

	if($row > 0)

	{

		//totales

		$total = 0;

		$total_environment = 0;

		$total_full = 0;



		$total_vc = 0;

		$total_vc_environment = 0;

		$total_vc_full = 0;



		$total_menudeo = 0;

		$total_menudeo_environment = 0;

		$total_menudeo_full = 0;



		$total_point = 0;

		//totales



		$code_product = $row[0];

		$image_product = $row[1];

		$name_product = $row[2];

		$point_product = $row[3];

		$vc_product = $row[4];

		$vc_environment_product = $row[5];

		$vc_full_product = $row[6];

		$price_product = $row[7];

		$price_environment_product = $row[8];

		$price_full_product = $row[9];

		$iva_product = $row[10];

		$apply_iva_product = $row[11];

		$id_product = $row[16];

		$simbol_product = $row[17];

		$environment_product = $row[18];

		$group_product = $row[19];



		$menudeo_product = $row[20];

		$menudeo_environment_product = $row[21];

		$menudeo_full_product = $row[22];



		$code_environment_product = $row[23];

		$code_full_product = $row[24];



		if($apply_iva_product == 1)

		{

			$total = $price_product * $iva_product;

			$total_environment = $price_environment_product * $iva_product;

			$total_full = $price_full_product * $iva_product;

		}

		else

		{

			$total = $price_product;

			$total_environment = $price_environment_product;

			$total_full = $price_full_product;

		}



        //total por producto

		$total = $total * $quantity_detail;

		$total_vc = $vc_product * $quantity_detail;

		
		if($apply_iva_product == 0)

		{
			$total_menudeo = ($menudeo_product * $quantity_detail);
		}else{
			$total_menudeo = ($menudeo_product * $quantity_detail) * $iva_product;
		}

		

		if($country_abi == 9)

		{

			$total_environment = $total_full * $quantity_detail;

			$total_vc_environment = $vc_full_product * $quantity_detail;

			$total_menudeo_environment = ($menudeo_full_product * $quantity_detail) * $iva_product;



			$code_environment_product = $code_full_product;

		}elseif ($product_detail == "2515" || $product_detail == "2515E") {
			$total_environment = $total_environment * $quantity_detail;

			$total_vc_environment = $vc_environment_product * $quantity_detail;

			
			$total_menudeo_environment = $menudeo_environment_product * $quantity_detail;
		}
		

		else

		{

			$total_environment = $total_environment * $quantity_detail;

			$total_vc_environment = $vc_environment_product * $quantity_detail;

			
			$total_menudeo_environment = ($menudeo_environment_product * $quantity_detail) * $iva_product;
			
			

		}



		$total_point = $point_product * $quantity_detail;

        //total por producto



		if($total_environment == 0)

		{

			$total_environment = $total;

		}



        //totales

		$total_sum = $total_sum + $total;

		$total_vc_sum = $total_vc_sum + $total_vc;

		$total_menudeo_sum = $total_menudeo_sum + $total_menudeo;

		$total_point_sum = $total_point_sum + $total_point;

        //totales



		$concat_code = "";



		?>

		<div class="col-lg-3 col-md-4 col-sm-6" id="product-<?php echo $code_product ?>">

			<div class="col-item">

				<div class="photo">

					<button class="close" onclick="Delete_product('<?php echo $code_product ?>')" data-toggle="tooltip" data-placement="left" title="Eliminar" <?php if($code_product == "5031"){ ?> style="display: none;" <?php } ?>><i class="color-green fa fa-times-circle" aria-hidden="true"></i></button>

					<img src="http://tv-store.s3.amazonaws.com/Products/images/<?php echo $image_product ?>" alt="<?php echo $name_product ?>" width="200" class="img-responsive center-block">

				</div>

				<div class="info">

					<div class="row">

						<div class="price col-md-12 text-center center-block">

							<h5>

								<strong><?php echo Reduce_text($name_product, 50) ?></strong></h5>
								<!--PRODUCTS BACK ORDER-->
								<?php
								$conn = connect_new_tv();
								/*BUSCA EN LA TABLA DE EXCEPCIONES EL REGISTRO CON ESE SKU DEL MISMO PAIS*/
								$sql = mysqli_query($conn, "SELECT id FROM mitiendanikken.products where sku='$code_product'");
								$row = mysqli_fetch_row($sql);
								$id_product = $row[0];



								$sql_components = mysqli_query($conn, "SELECT is_inventoried,components FROM mitiendanikken.warehouses_products where product_id='$id_product' && country_id='$country_abi'");
								$row = mysqli_fetch_row($sql_components);
								$is_inventoried = $row[0];  
								$components = $row[1];



								if ($is_inventoried == 1 and  $components != "") {
									$sql = mysqli_query($conn, "SELECT current_inventory,blocked_inventory,minimum_inventory FROM mitiendanikken.warehouses_products where product_id='$id_product' && country_id='$country_abi'");
									$row = mysqli_fetch_row($sql);
									$inv_actual = $row[0];
									$inv_bloqueado = $row[1];
									$inv_minimo = $row[2];
									$ID=$inv_actual - $inv_minimo;
/*
			                         			echo 'el inventario inv_bloqueado es'.$inv_bloqueado."<br>";
			                         			echo 'el inventario inv_actual es'.$inv_actual."<br>";
			                         			echo 'el inventario inv_minimo es'.$inv_minimo."<br>";
			                         			echo 'la resta del inv_actual -  minimo es '.$ID."<br>";
			                         			*/
			                         			if ($ID <= $inv_bloqueado) {
			                         				?>
			                         				<h6 align="center"  style="color:#FE0000; font-weight: bold; font-size: 10px; position: relative;">PRODUCTO EN<br> ENTREGA POSTERGADA</h6>
			                         				<?php
			                         			}
			                         			
			                         		}elseif ($is_inventoried == 1 and $components == "") {
			                         			$sql = mysqli_query($conn, "SELECT current_inventory,blocked_inventory,minimum_inventory FROM mitiendanikken.warehouses_products where product_id='$id_product' && country_id='$country_abi'");
			                         			$row = mysqli_fetch_row($sql);
			                         			$inv_actual = $row[0];
			                         			$inv_bloqueado = $row[1];
			                         			$inv_minimo = $row[2];
			                         			$ID=$inv_actual - $inv_minimo;
/*
			                         			echo 'el inventario inv_bloqueado es'.$inv_bloqueado."<br>";
			                         			echo 'el inventario inv_actual es'.$inv_actual."<br>";
			                         			echo 'el inventario inv_minimo es'.$inv_minimo."<br>";
			                         			echo 'la resta del inv_actual -  minimo es '.$ID."<br>";
			                         			*/
			                         			if ($ID <= $inv_bloqueado) {
			                         				?>
			                         				<h6 align="center"  style="color:#FE0000; font-weight: bold; font-size: 10px; position: relative;">PRODUCTO EN<br> ENTREGA POSTERGADA</h6>
			                         				<?php
			                         			}
			                         			
			                         		}elseif ($is_inventoried == 0 and $components != "") {
			                         			
			                         			$sku_of_components = explode(",", $components);
			                         			//print_r($sku_of_components);
			                         			foreach ($sku_of_components as $value) {
			                         				
			                         				$sql = mysqli_query($conn, "SELECT id FROM mitiendanikken.products where sku='$value'");
			                         				$row = mysqli_fetch_row($sql);
						                        		//echo $row;
						                        		//exit;
			                         				
			                         				$id_product_component = $row[0];
			                         				//print_r($id_product_component);


			                         				$sql = mysqli_query($conn, "SELECT is_inventoried FROM mitiendanikken.warehouses_products where product_id='$id_product_component' && country_id='$country_abi'");
			                         				$row = mysqli_fetch_row($sql);
			                         				$es_inventariable_component = $row[0];
					                        			//echo($es_inventariable_component_excepcions_one);
			                         				if ($es_inventariable_component == 1) {
					                        				//echo 'entro al inv';

			                         					$sql = mysqli_query($conn, "SELECT current_inventory,blocked_inventory,minimum_inventory FROM mitiendanikken.warehouses_products where product_id='$id_product_component' && country_id='$country_abi'");
			                         					$row = mysqli_fetch_row($sql);
			                         					$inv_actual = $row[0];
			                         					$inv_bloqueado = $row[1];
			                         					$inv_minimo = $row[2];
			                         					$ID=$inv_actual - $inv_minimo;
/*
			                         			echo 'el inventario inv_bloqueado es'.$inv_bloqueado."<br>";
			                         			echo 'el inventario inv_actual es'.$inv_actual."<br>";
			                         			echo 'el inventario inv_minimo es'.$inv_minimo."<br>";
			                         			echo 'la resta del inv_actual -  minimo es '.$ID."<br>";
			                         			*/
			                         			if ($ID <= $inv_bloqueado) {
			                         				?>
			                         				<h6 align="center"  style="color:#FE0000; font-weight: bold; font-size: 10px; position: relative;">PRODUCTO EN<br> ENTREGA POSTERGADA</h6>
			                         				<?php
			                         			}
			                         		}

			                         	}
			                         }

			                         disconnect($conn);
			                         ?>
			                         <!--PRODUCTS BACK ORDER-->
			                         <h5 class="price-text-color">

			                         	<?php

			                         	if($rule_environment == 1)

			                         	{

			                         		if(($country_abi == 9))

			                         		{

			                         			$total_environment_sum = $total_environment_sum + $total;

			                         			$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         			$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;

			                         			?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         			$concat_code = $concat_code . $code_product . ",";

			                         			$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         		}

			                         		else

			                         		{

			                         			if($environment == "personal")

			                         			{

			                         				$validate_personal = 0;

			                         				$valor_array = explode(',', str_replace(" ", "", $environment_product));

			                         				foreach($valor_array as $llave => $value)

			                         				{

			                         					if($value == "PERSONAL")

			                         					{

			                         						$validate_personal = 1;

			                         					}

			                         				}



			                         				if($validate_personal == 1)

			                         				{

			                         					if($total != $total_environment)

			                         					{

			                         						$total_environment_sum = $total_environment_sum + $total_environment;

			                         						$total_vc_environment_sum = $total_vc_environment_sum + $total_vc_environment;

			                         						$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo_environment;



			                         						?>

			                         						<strong class="tachado"><?php echo $simbol_product . number_format($total, 2) ?></strong>

			                         						<strong><?php echo $simbol_product . number_format($total_environment, 2) ?></strong></h5>

			                         						<?php



			                         						$concat_code = $concat_code . $code_environment_product . ",";

			                         						$_SESSION['products_checkout']["$code_environment_product"]="$code_environment_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         					}

			                         					else

			                         					{

			                         						$total_environment_sum = $total_environment_sum + $total;

			                         						$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         						$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         						?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         						$concat_code = $concat_code . $code_product . ",";

			                         						$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         					}

			                         				}

			                         				else

			                         				{

			                         					$total_environment_sum = $total_environment_sum + $total;

			                         					$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         					$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         					?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         					$concat_code = $concat_code . $code_product . ",";

			                         					$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         				}

			                         			}

			                         			elseif($environment == "nutrition")

			                         			{

			                         				if($group_product == "NUTRICIONAL")

			                         				{

			                         					if($total != $total_environment)

			                         					{

			                         						$total_environment_sum = $total_environment_sum + $total_environment;

			                         						$total_vc_environment_sum = $total_vc_environment_sum + $total_vc_environment;

			                         						$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo_environment;



			                         						?>

			                         						<strong class="tachado"><?php echo $simbol_product . number_format($total, 2) ?></strong>

			                         						<strong><?php echo $simbol_product . number_format($total_environment, 2) ?></strong></h5>

			                         						<?php



			                         						$concat_code = $concat_code . $code_environment_product . ",";

			                         						$_SESSION['products_checkout']["$code_environment_product"]="$code_environment_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         					}

			                         					else

			                         					{

			                         						$total_environment_sum = $total_environment_sum + $total;

			                         						$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         						$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         						?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         						$concat_code = $concat_code . $code_product . ",";

			                         						$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         					}

			                         				}

			                         				else

			                         				{

			                         					$total_environment_sum = $total_environment_sum + $total;
			                         					$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         					$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         					?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         					$concat_code = $concat_code . $code_product . ",";

			                         					$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         				}

			                         			}

			                         			else

			                         			{

			                         				if(($total != $total_environment))

			                         				{

			                         					$total_environment_sum = $total_environment_sum + $total_environment;

			                         					$total_vc_environment_sum = $total_vc_environment_sum + $total_vc_environment;

			                         					$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo_environment;



			                         					?>

			                         					<small><strong class="tachado"><?php echo $simbol_product . number_format($total, 2) ?></strong></small>

			                         					<strong><?php echo $simbol_product . number_format($total_environment, 2) ?></strong></h5>

			                         					<?php



			                         					$concat_code = $concat_code . $code_environment_product . ",";

			                         					$_SESSION['products_checkout']["$code_environment_product"]="$code_environment_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         				}

			                         				else

			                         				{

			                         					$total_environment_sum = $total_environment_sum + $total;

			                         					$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         					$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         					?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         					$concat_code = $concat_code . $code_product . ",";

			                         					$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         				}

			                         			}

			                         		}

			                         	}

			                         	else

			                         	{

			                         		$total_environment_sum = $total_environment_sum + $total;

			                         		$total_vc_environment_sum = $total_vc_environment_sum + $total_vc;

			                         		$total_menudeo_environment_sum = $total_menudeo_environment_sum + $total_menudeo;



			                         		?><strong><?php echo $simbol_product . number_format($total, 2) ?></strong><?php



			                         		$concat_code = $concat_code . $code_product . ",";

			                         		$_SESSION['products_checkout']["$code_product"]="$code_product-$quantity_detail-$quantity_detail-$environment_detail-$group_detail-$brand_detail";

			                         	}

			                         	?>

			                         </div>

			                     </div>

			                     <div class="separator clear-left">

			                     	<div class="quantity">

			                     		<div class="input-group">

			                     			<span class="input-group-btn">

			                     				<button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[<?php echo $code_product ?>-<?php echo $environment_detail ?>-<?php echo $group_detail ?>-<?php echo $brand_detail ?>]" <?php if($code_product == "5031" || $code_product == "14412"){ ?> disabled <?php } ?>>

			                     					<span class="glyphicon glyphicon-minus"></span>

			                     				</button>

			                     			</span>

			                     			

			                     			<input type="text" name="quant[<?php echo $code_product ?>-<?php echo $environment_detail ?>-<?php echo $group_detail ?>-<?php echo $brand_detail ?>]" class="form-control input-number" value="<?php echo $quantity_detail ?>" min="1" max="10">

			                     			<span class="input-group-btn">

			                     				<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $code_product ?>-<?php echo $environment_detail ?>-<?php echo $group_detail ?>-<?php echo $brand_detail ?>]" <?php if($code_product == "5031" || $code_product == "14412"){ ?> disabled <?php } ?>>

			                     					<span class="glyphicon glyphicon-plus"></span>

			                     				</button>

			                     			</span>

			                     		</div>

			                     	</div>

			                     </div>

			                     <?php

			                     if($type_abi != "cl")

			                     {

			                     	?>

			                     	<div class="separator clear-left">

			                     		<p class="btn-add"><small><strong>VC:</strong><br/>

			                     			<?php

			                     			if($rule_environment == 1)

			                     			{

			                     				if($total != $total_environment)

			                     				{

			                     					echo number_format($total_vc_environment, 2);

			                     				}

			                     				else

			                     				{

			                     					echo number_format($total_vc, 2);

			                     				}

			                     			}

			                     			else

			                     			{

			                     				echo number_format($total_vc, 2);

			                     			}

			                     			?></small></p>

			                     			<p class="btn-details"><small><strong>Puntos:</strong><br/> <?php echo number_format($total_point, 2) ?></small></p>

			                     		</div>

			                     		<?php

			                     	}

			                     	?>

			                     	<div class="clearfix">

			                     	</div>

			                     </div>

			                 </div>

			             </div>

			             <?php

			         }

			     }



			     ?>



			     <!-- Funcion para la cantidad -->

			     <script>

			     	$('.btn-number').click(function(e)

			     	{

			     		e.preventDefault();

			     		fieldName = $(this).attr('data-field');

			     		type      = $(this).attr('data-type');

			     		var input = $("input[name='"+fieldName+"']");

			     		var currentVal = parseInt(input.val());

			     		if (!isNaN(currentVal)) {

			     			if(type == 'minus') {

			     				if(currentVal > input.attr('min')) {

			     					input.val(currentVal - 1).change();

			     				}

			     				if(parseInt(input.val()) == input.attr('min')) {

			     					$(this).attr('disabled', true);

			     				}



			     			} else if(type == 'plus') {



			     				if(currentVal < input.attr('max')) {

			     					input.val(currentVal + 1).change();

			     				}

			     				if(parseInt(input.val()) == input.attr('max')) {

			     					$(this).attr('disabled', true);

			     				}



			     			}

			     		} else {

			     			input.val(0);

			     		}

			     	});

			     	$('.input-number').focusin(function(){

			     		$(this).data('oldValue', $(this).val());

			     	});

			     	$('.input-number').change(function()

			     	{

			     		minValue =  parseInt($(this).attr('min'));

			     		maxValue =  parseInt($(this).attr('max'));

			     		valueCurrent = parseInt($(this).val());



			     		fieldName = fieldName.replace("quant[", "");

			     		fieldName = fieldName.replace("]", "");



			     		Change_quantity(fieldName, valueCurrent);



			     		name = $(this).attr('name');

			     		if(valueCurrent >= minValue) {

			     			$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')

			     		} else {

			     			alert('Sorry, the minimum value was reached');

			     			$(this).val($(this).data('oldValue'));

			     		}

			     		if(valueCurrent <= maxValue) {

			     			$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')

			     		} else {

			     			alert('Sorry, the maximum value was reached');

			     			$(this).val($(this).data('oldValue'));

			     		}

			     	});

			     	$(".input-number").keydown(function (e)

			     	{

    // Allow: backspace, delete, tab, escape, enter and .

    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||

         // Allow: Ctrl+A

         (e.keyCode == 65 && e.ctrlKey === true) || 

         // Allow: home, end, left, right

         (e.keyCode >= 35 && e.keyCode <= 39)) {

             // let it happen, don't do anything

         return;

     }

    // Ensure that it is a number and stop the keypress

    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

    	e.preventDefault();

    }

});

</script>

<script>Condition('<?php echo $environment ?>');</script>

<script>Total('<?php echo $simbol_product ?>', '<?php echo $total_sum ?>', '<?php echo $total_environment_sum ?>', '<?php echo $total_vc_sum ?>', '<?php echo $total_vc_environment_sum ?>', '<?php echo $total_point_sum ?>', '<?php echo $total_menudeo_sum ?>', '<?php echo $total_menudeo_environment_sum ?>', '<?php echo $total_vc_sum ?>', '<?php echo $total_vc_environment_sum ?>', '<?php echo $total_point_sum ?>');</script>

<!-- Funcion para la cantidad -->



<!-- Funcionalidad tooltip-->

<script>

	$(function () {

		$('[data-toggle="tooltip"]').tooltip()

	})

</script>

<!-- Funcionalidad tooltip-->