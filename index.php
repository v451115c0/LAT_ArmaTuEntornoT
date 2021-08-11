<?php
exit('hola mundo');
include('assets/include/sessions.php');

?>

<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<title>Arma tu Entorno | Nikken LatinoamÃ©rica</title>



	<!-- No indexaciÃ³n -->

	<meta name="robots" content="noindex">

	<meta name="googlebot" content="noindex">

	<!-- No indexaciÃ³n -->



	<!-- Librerias nativas -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/respond.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">



	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Librerias nativas -->



	<!-- Librerias adicionales -->

	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Libreria de alertas -->

	<script type="text/javascript" src="plugins/alert/lib/alertify.js"></script>

	<link rel="stylesheet" href="plugins/alert/themes/alertify.core.css" />

	<link rel="stylesheet" href="plugins/alert/themes/alertify.default.css" />

	<!-- Librerias adicionales -->



</head>

<body>

<div class="fluid-container">

	<header>
		<div class="row">
			<div class="col-sm-4 col-xs-3">
				<?php if($country_abi==1){
				?>
					<img src="img/col.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==2){
				?>
					<img src="img/mex.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==3){
				?>
					<img src="img/per.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==4){
				?>
					<img src="img/ecu.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==5){
				?>
					<img src="img/pan.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==6){
				?>
					<img src="img/gtm.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==7){
				?>
					<img src="img/slv.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
				<?php if($country_abi==8){
				?>
					<img src="img/cri.png" align="left" width="50px" height="50px">
					<p align="left" class="desaparece" style=" color: white; ">
						<strong>Bienvenido(a)</strong> 
						<?php if($type_abi == "ab")
						{ echo "Asesor de Bienestar"; }
						elseif($type_abi == "cb")
							{ echo "Club de Bienestar"; }
						else{ echo "Cliente del Asesor de Bienestar"; }

						 echo "<br>".$name_abi ?>
						
					</p>
				<?php
				} ?>
			</div>
			<div class="col-sm-4 col-xs-3">
				<img class="logo-size" src="img/logo_white<?php if($country_abi == 9){ echo "_nikken"; } ?>.png"  alt="Nikken Latinoamérica"/>
			</div>
			<div class="col-sm-4 col-xs-6">
				<a title="Cerrar sessión" href="delete-session.php"><img align="right" src="img/nw.png" width="65px" height="45px" alt="Cerrar sessión"/></a>
			</div>
		</div>
		

	</header>

	<hr class="line">

	<div id="header-navbar" <?php if($country_abi == 9){ echo 'style="display: none;"'; } ?>></div>

	<hr>

	<!-- Header -->

	<section>

		<div class="row">

			<div <?php if($country_abi == 9){ ?> class="col-lg-12 text-center" <?php }else{ ?> class="col-lg-4 col-md-4 col-sm-5 col-xs-12 text-center" <?php } ?>>


				<!-- Mostrar condiciones -->

				<div id="condition" <?php if($country_abi == 9){ echo 'style="display: none;"'; } ?>></div>

				<!-- Mostrar condiciones -->

			</div>

			<div <?php if($country_abi == 9){ ?> class="col-lg-12"<?php }else{ ?> class="col-lg-8 col-md-8 col-sm-7 col-xs-12"<?php } ?>>

				<!-- Mostrar tipos de descuentos -->

				<?php

				if($country_abi == 1)

				{

					?>

					<div class="row text-center" <?php if($_SESSION["view_option"] == 1){ ?> style="display: none;"; <?php } ?>>

						<?php

						if($country_abi == 1 && $type_abi == "ab")

						{

							?>

							<h3 style="padding-bottom: 10px;">Â¡Selecciona el tipo de compra que deseas efectuar!</h3>

							<label class="radio-inline">

							  	<input type="radio" name="type" value="0" onclick="Change_discount(this.value);" <?php if($discount_abi == 0){ echo "checked"; } ?>> <small>Es una compra <strong>para mi cliente</strong></small>

							</label>

							<label class="radio-inline">

							  	<input type="radio" name="type" value="1" onclick="Change_discount(this.value);" <?php if($discount_abi == 1){ echo "checked"; } ?>> <small>Es una compra <strong>para mi</strong></small>

							</label>

							<?php

						}

						/*else

						{

							?>

							<h3 style="padding-bottom: 10px;">Â¡Selecciona el tipo de compra que deseas efectuar!</h3>

							<label class="radio-inline">

							  	<input type="radio" name="type" value="0" onclick="Change_discount(this.value);" <?php if($discount_abi == 0){ echo "checked"; } ?>> <small>Compra a precio <strong>Sugerido de contado</strong></small>

							</label>

							<label class="radio-inline">

							  	<input type="radio" name="type" value="1" onclick="Change_discount(this.value);" <?php if($discount_abi == 1){ echo "checked"; } ?>> <small>Compra a precio <strong>Sugerido de Lista a 6 meses</strong></small>

							</label>

							<?php

						}*/

						?>

						<hr style="border: 1px solid #609A4B; border-style: dashed; margin: 10px;">

					</div>

					<?php

				}

				?>

				<!-- Mostrar tipos de descuentos -->



				<!-- Mostrar productos -->

				<div class="row">

					<div id="view-products"></div>

				</div>

				<!-- Mostrar productos -->



				<!-- AÃ±adir al carrito -->

				<div class="row text-center">

					<hr style="border: 1px solid #609A4B; border-style: dashed; margin: 10px;">

					<div class="color-green" style="cursor: pointer;" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-shopping-basket fa-4x" aria-hidden="true"></i><br/><strong><small>Agregar producto</small></strong></div>

					<hr style="border: 1px solid #609A4B; border-style: dashed; margin: 10px;">

				</div>

				<!-- AÃ±adir al carrito -->



				<div class="row">

					<div id="total"></div>

				</div>



			</div>

		</div>

	</section>

	<!-- Header -->



	<!-- Footer -->

	<?php include('assets/include/footer.php'); ?>

	<!-- Footer -->



	<!-- Modal -->

	<?php include('assets/include/modal.php'); ?>

	<!-- Modal -->



	<?php



	if(isset($_GET["status"]))

    {

        if($_GET["status"] == "cancelada")

        {

            ?><script>alertify.error("Lo sentimos, la transacciÃ³n ha sido rechazada");  </script><?php

        }

        else

        {

            if($_GET["status"] == "pagada")

            {

            	$_SESSION['products-ae'] = array();

            	$_SESSION['products_checkout'] = array();

                ?><script>alertify.success("Gracias, la compra se ha generado correctamente");  </script><?php

            }

            else

            {

            	$_SESSION['products-ae'] = array();

            	$_SESSION['products_checkout'] = array();

                ?><script>alertify.alert("Gracias, la compra se encuentra en proceso de validaciÃ³n");  </script><?php

            }

        }

    }



	?>



	<!-- Librerias adicionales -->

	<script type="text/javascript" src="assets/js/interpretadorAjax.js"></script>

	<script type="text/javascript" src="assets/js/custom.js"></script>

	<script>Header('<?php echo $environment ?>');</script>

	<script>Condition('<?php echo $environment ?>');</script>

	<script>View_product();</script>

	<script type="text/javascript" src="js/inactivo.js"></script> <!-- CERRAR SESION INACTIVO -->

	<script> $.idle(600, function() {window.location.href = "https://mitiendanikken.com/"; }); </script><!-- CERRAR SESION INACTIVO -->

	<!-- Librerias adicionales -->

</div>

</body>

</html>