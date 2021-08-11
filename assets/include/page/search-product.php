<?php



include('../sessions.php');

include('../../../functions.php');



$product = $_POST["value"];





//vars

$insert_mex = "";

$insert_mex_full = "";



//Logica para méxico productos 6 MESES

if($country_abi == 2 && $discount_abi == 1)

{

    $insert_mex = " AND SUBSTRING(sku, -1) = 'M'";

    $insert_mex_full = " AND SUBSTRING(H0.sku, -1) = 'M'";

}

elseif($country_abi == 2)

{

    $insert_mex = "AND SUBSTRING(sku, -1) != 'M'";

    $insert_mex_full = "AND SUBSTRING(H0.sku, -1) != 'M'";

}

//Logica para méxico productos 6 MESES



//MOSTRAR PRODUCTOS SEGÚN PRODUCTO DEL ENTORNO

if($product == "ALMOHADA" || $product == "Almohada")

{

	$insert_product = "(sku in ('1308', '1311')) AND ";

}

elseif($product == "SLEEP MASK")

{

	$insert_product = "(sku in ('16821', '1255', '2200', '1254','1290','1291','1254')) AND ";

}

elseif($product == "KENKO SLEEP COMFORTER ")

{

	$insert_product = "(sku in ('1264', '1265', '1266')) AND ";

}

elseif($product == "NUTRICION")

{

	$insert_product = "(sku in ('15553','15554','15575','15575b','15581','15472','2513','2514','15565')) AND ";

}

elseif($product == "MAGNETIC FASHION")

{

	$insert_product = "T0.subgrupo_sap = 'KENKO MAGNETIC FASHION' AND ";

}
elseif($product == "Pi Water"){

	$insert_product = "(sku in ('13651','136518')) AND ";
}

else

{

	$insert_product = "(nombre_original_producto LIKE '%$product%' OR tags LIKE '%$product%' OR sku LIKE '%$product%' OR grupo LIKE '%$product%' OR sublinea LIKE '%$product%') AND ";

}

//MOSTRAR PRODUCTOS SEGÚN PRODUCTO DEL ENTORNO



//Paquetes full

if($type_abi == "cl")

{

	$insert_product_full = "";

	$insert_subquery_product_full = "";

}

else

{

	$insert_product_full = " and SUBSTRING(T0.sku, 1, 1) != 'F'";

	$insert_subquery_product_full = " and SUBSTRING(H0.sku, 1, 1) != 'F'";

}

//Paquetes full



$conn = connect_mk();

$sql = mysqli_query($conn, "SELECT DISTINCT sku, imagen, nombre, entorno, grupo, marca FROM (SELECT CASE WHEN full != '' THEN full else sku end AS sku, imagen as imagen, nombre as nombre, entorno as entorno, grupo as grupo, marca as marca FROM (SELECT

    sku as sku, imagen as imagen, nombre_original_producto as nombre, entorno as entorno, grupo as grupo, T0.marca as marca, (SELECT H0.sku FROM control_art H0 WHERE H0.pais = T0.pais and H0.sku = CONCAT('F', T0.sku) AND (H0.valido_desde <= DATE(NOW()) AND (H0.valido_hasta = '0000-00-00 00:00:00' OR H0.valido_hasta > DATE(NOW()))) AND H0.precio_sugerido > 0 AND H0.autoship <> 1 AND H0.esta_activo = 1 AND H0.aplica_tv = 1 AND H0.tipo_sap != 'Promoción' and SUBSTRING(H0.sku, -1) != 'E' and SUBSTRING(H0.sku, -1) != 'F' and SUBSTRING(H0.sku, -1) != 'EM' and SUBSTRING(H0.sku, -1) != 'FM' $insert_mex_full $insert_subquery_product_full) as full

FROM

    control_art T0 INNER JOIN control_iva T1 ON T0.pais = T1.pais INNER JOIN control_marcas T2 ON T0.marca = T2.idcontrol_marcas

WHERE

$insert_product

T0.pais = '$country_abi' AND

(T0.valido_desde <= DATE(NOW()) AND (T0.valido_hasta = '0000-00-00 00:00:00' OR T0.valido_hasta > DATE(NOW())))

AND T0.precio_sugerido > 0

AND T0.autoship <> 1

AND T0.esta_activo = 1

AND T0.aplica_tv = 1






AND SUBSTRING(sku, -1) != 'E' and SUBSTRING(sku, -1) != 'F' and SUBSTRING(sku, -1) != 'EM' and SUBSTRING(sku, -1) != 'FM' $insert_mex $insert_product_full LIMIT 20) AS query) as subquery") or die("0");

disconnect($conn);

if(mysqli_num_rows($sql) == 0)

{

	if($product != "")

	{

		?><p class="help-block"><small>Lo sentimos, el código, nombre, característica del producto <strong>no existe, no aplica o se encuentra descontinuado</strong>.</small></p><?php

	}

}

else

{

	if($product != "")

	{

		?><strong><small>Productos encontrados (<?php echo mysqli_num_rows($sql); ?>):</small></strong><?php

		echo "<ul>";

		while($row = mysqli_fetch_row($sql))

		{

			if($row[0] == "14412" && $_SESSION["kit"] != 1){ continue; }

			if(($row[0] == "135036" || $row[0] == "135816" || $row[0] == "136446" || $row[0] == "13706" || $row[0] == "13726" || $row[0] == "13736" || $row[0] == "13746" || $row[0] == "13756" || $row[0] == "138316" || $row[0] == "138456" || $row[0] == "138476" || $row[0] == "138486" || $row[0] == "13866" || $row[0] == "13896" || $row[0] == "14396" || $row[0] == "14446" || $row[0] == "146616" || $row[0] == "49306" || $row[0] == "49316" || $row[0] == "49326" || $row[0] == "49336" || $row[0] == "49346" || $row[0] == "49356" || $row[0] == "49366" || $row[0] == "136456") && $country_abi == 5)

			{

				continue;

			}

			

			?>

				<li><div onclick="Add_product('<?php echo $row[0] ?>', '<?php echo $row[3] ?>', '<?php echo $row[4] ?>', '<?php echo $row[5] ?>');" style="cursor: pointer;" data-toggle="tooltip" data-placement="left" title="Agregar producto"><small><strong><?php echo $row[0] ?></strong> - <?php echo $row[2] ?></small></div></li>

			<?php

		}

		echo "</ul>";

	}

	else

	{

		?><p class="help-block"><small>Sin resultados.</small></p><?php

	}

}



?>



<!-- Funcionalidad tooltip-->

<script>

	$(function () {

	  $('[data-toggle="tooltip"]').tooltip()

	})

</script>

<!-- Funcionalidad tooltip-->