<?php

include('../sessions.php');
include('../../../functions.php');

//valores
$simbol = $_POST["simbol"];
$total = $_POST["total"];
$total_environment = $_POST["total_environment"];
$total_vc = $_POST["total_vc"];
$total_vc_environment = $_POST["total_vc_environment"];
$total_point = $_POST["total_point"];
$total_retail = $_POST["total_retail"];
$total_retail_environment = $_POST["total_retail_environment"];
$total_vc = $_POST["total_vc"];
$total_vc_environment = $_POST["total_vc_environment"];
$total_point = $_POST["total_point"];
//valores

?>
<div class="col-lg-5 col-md-12 text-center condition-bar">
	<?php
	if($country_abi == 9){}
	else
	{
		?>
		<small><strong>CONDICIÓN PARA DESCUENTO</strong></small>
		<div class="progress">
	      	<div data-percentage="0%" style="width: <?php if($rule_environment == 1){ echo "100"; }else{ echo Valite_environment_bar(); } ?>%;" class="progress-bar progress-bar-<?php if($rule_environment == 1){ echo "success"; }else{ echo "warning"; } ?> loading" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	    </div>
	    <?php
	    if($rule_environment == 1)
	    {
	    	?><small><strong>¡Genial!</strong>, ahora puedes disfrutar de los beneficios de arma tu entorno.</small><?php
	    }
	    else
	    {
	    	?><small>Aún te falta adicionar productos para <strong>obtener los beneficios</strong> de arma tu entorno.</small><?php
	    }
	}
	?>
</div>
<div class="col-lg-7 col-md-12 text-right value">
	<div class="form-group">
		<?php
		if($rule_environment == 1)
		{
			?><h2><strong><span style="font-size: 15px;">TOTAL:</span> <?php echo $simbol . number_format($total, 2) ?></strong></h2><?php
			if(($country_abi == 9) && $type_abi == "cl"){}
			else
			{
				if($discount_abi == 1 && $country_abi == 1)
				{
					?>
					<h2><strong><span style="font-size: 15px;">DESCUENTO ENTORNO:</span> -<?php echo $simbol . number_format($total - $total_environment, 2); if(($total - $total_environment) == 0){ ?><script>View_product();</script><?php } ?></strong></h2>

					<h2><strong><span style="font-size: 15px;">DESCUENTO 20%</span>: -<?php echo $simbol . number_format($total_retail_environment, 2) ?></strong></h2>
					<h2><strong>TOTAL A PAGAR: <u><?php echo $simbol . number_format($total_environment - $total_retail_environment, 2) ?></u></strong></h2>
					<?php
				}
				else if($country_abi == 9)
				{
					?>
					<h2 style="display: none;"><strong><span style="font-size: 15px;">DESCUENTO ENTORNO:</span> -<?php echo $simbol . number_format($total - $total_environment, 2) ?></strong></h2>
					<h2><strong>TOTAL A PAGAR: <u><?php echo $simbol . number_format($total_environment, 2) ?></u></strong></h2>
					<?php
				}
				else
				{
					?>
					<h2><strong><span style="font-size: 15px;">DESCUENTO ENTORNO:</span> -<?php echo $simbol . number_format($total - $total_environment, 2); if(($total - $total_environment) == 0){ ?><script>View_product();</script><?php } ?></strong></h2>
					<h2><strong>TOTAL A PAGAR: <u><?php echo $simbol . number_format($total_environment, 2) ?></u></strong></h2>
					<?php
				}
			}
			if($type_abi == "ab")
			{
				?><h2 style="margin: 0;"><strong><span style="font-size: 13px;">TOTAL PUNTOS: <?php echo number_format($total_point, 2) ?></span></strong></h2><h2 style="margin: 0;"><strong><span style="font-size: 13px;">TOTAL VC(Volumen de calculo): <?php echo $simbol . number_format($total_vc_environment, 2) ?></span></strong></h2><?php
			}
		}
		else
		{
			if($discount_abi == 1 && $country_abi == 1 && $type_abi != "cl")
			{
				?>
				<h2><strong><span style="font-size: 15px;">TOTAL:</span> <?php echo $simbol . number_format($total, 2) ?></strong></h2>
				<h2><strong><span style="font-size: 15px;">DESCUENTO 20%:</span> -<?php echo $simbol . number_format($total_retail, 2) ?></strong></h2>
				<h2><strong><span style="font-size: 15px;">TOTAL A PAGAR:</span> <u><?php echo $simbol . number_format($total - $total_retail, 2) ?></u></strong></h2>
				<?php
			}
			else
			{
				?><h2><strong>TOTAL A PAGAR: <u><?php echo $simbol . number_format($total, 2) ?></u></strong></h2><?php
			}

			if($type_abi == "ab")
			{
				?><h2 style="margin: 0;"><strong><span style="font-size: 13px;">TOTAL PUNTOS: <?php echo number_format($total_point, 2) ?></span></strong></h2><h2 style="margin: 0;"><strong><span style="font-size: 13px;">TOTAL VC(Volumen de calculo): <?php echo $simbol . number_format($total_vc, 2) ?></span></strong></h2><?php
			}
		}
		?>
	</div>
	<div class="form-group">
		<div class="btn-toolbar demoPadder" role="toolbar">
			<?php
			if($type_abi == "ab")
			{
				?><button type="button" onclick="Cotizacion();" id="btn-process-cotizacion" class="btn btn-default btn-lg" <?php if($total < 1){ echo "disabled"; } ?>><i class="fa fa-calculator" aria-hidden="true"></i> Generar cotización</button><?php
			}
			?>
			<button type="button" onclick="Checkout();" id="btn-process-checkout" class="btn btn-default btn-lg" <?php if($total < 1){ echo "disabled"; } ?>><i class="fa fa-shopping-basket" aria-hidden="true"></i> Proceder a pagar</button>
		</div>
	</div>
</div>