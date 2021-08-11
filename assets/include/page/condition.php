<?php



//vars

include('../sessions.php');

include('../../../functions.php');



Valite_environment();



if($environment == "room")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Habitación</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Habitación</b>"

    data-content='<div class="text-justify"><img src="img/room.png" alt="Habitación" style="float: left; padding: 0 10px 0 0"><small>Es el espacio más privado y acogedor de la casa en el que pasamos la mayor parte del tiempo para relajarnos y descansar. Es un ambiente que debe ser propicio para la recuperación y renovación mental, emocional y física.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_room_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge uno de los siguientes productos</strong></small></p>

	<div class="row">

		

		<?php 



		if($country_abi != 4)

		{

			?>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/room-1.png" onclick="Send_product_search('KENKO FIT')" class="img-responsive center-block" alt="KENKO FIT"><span class="help-block text-environment">Kenko&reg; Fit Sleep Pad</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/room-2.png" onclick="Send_product_search('LUXURY MATTRESS')" class="img-responsive center-block" alt="LUXURY MATTRESS"><span class="help-block text-environment">Kenko&reg; Luxury Mattress</span></div></div>
<?php 



			if($country_abi != 5)

			{

				?>
			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/room-3.png" onclick="Send_product_search('KENKO SLEEP COMFORTER ')" class="img-responsive center-block" alt="KENKO SLEEP COMFORTER "><span class="help-block text-environment">Kenko® Dream Comforter</span></div></div>

			<?php
}
		}

		else

		{

			?>

			<div class="col-lg-12"><div style="cursor: pointer;"><img src="img/environment/room-1.png" onclick="Send_product_search('KENKO FIT')" class="img-responsive center-block" alt="KENKO FIT"><span class="help-block text-environment">Kenko&reg; Fit Sleep Pad</span></div></div>

			<?php

		}



		?>

	</div>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_room_environment_two() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">2°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">
			<?php 



			if($country_abi != 5)

			{

				?>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/room-3.png" onclick="Send_product_search('KENKO SLEEP COMFORTER ')" class="img-responsive center-block" alt="KENKO SLEEP COMFORTER "><span class="help-block text-environment">Kenko&reg; Dream Comforter</span></div></div>

			
				<!--div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 format-col"><div style="cursor: pointer;"><img src="img/environment/room-5.png" onclick="Send_product_search('Makura')" class="img-responsive center-block" alt="Kenko Dream ó Kenko Fit Sleep Pillow"><span class="help-block text-environment">Kenko&reg; Sleep Makura</span></div></div-->
				
			

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 format-col"><div style="cursor: pointer;"><img src="img/environment/room-9.png" onclick="Send_product_search('Oyasumi')" class="img-responsive center-block" alt="Kenko Dream ó Kenko Fit Sleep Pillow"><span class="help-block text-environment">Kenko&reg; Sleep Oyasumi</span></div></div>

			<?php 

}

		if($country_abi != 10 and $country_abi != 4)

		{

			?>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/PetPad_EntornoB.png" onclick="Send_product_search('KENKO SLEEP PET PAD')" class="img-responsive center-block" alt="KENKO SLEEP PET PAD"><span class="help-block text-environment">Kenko Sleep Pet Pad</span></div></div>

			<?php

		}
?>
			<!--17 Julio-->
			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenkomacaron.png" onclick="Send_product_search('KENKO SLEEP MACARON')" class="img-responsive center-block" alt="KENKO DREAM MACARON"><span class="help-block text-environment">Kenko Sleep Macaron</span></div></div>

		</div>

	</div>

	<?php

}

if($environment == "kitchen")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Cocina</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Cocina</b>"

    data-content='<div class="text-justify"><img src="img/kitchen.png" alt="Cocina" style="float: left; padding: 0 10px 0 0"><small>Es el lugar donde con amor y dedicación se preparan las mejores recetas con las que se alimenta la familia. Los nutrientes que nos brinda la naturaleza en el agua, las frutas y verduras, son los protagonistas de cada preparación. Es el espacio para adquirir hábitos de alimentación y prácticas responsables, que mejoran nuestra calidad de vida y salud.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_kitchen_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/kitchen-1.png" onclick="Send_product_search('Pimag Waterfall')" class="img-responsive center-block" alt="Pimag Waterfall"><span class="help-block text-environment">Pimag&reg; Waterfall</span></div></div>
			
			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/kitchen-2.png" onclick="Send_product_search('Pi Water')" class="img-responsive center-block" alt="Pi Water"><span class="help-block text-environment">Pi&reg; Water</span></div></div>

			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/kitchen-3.png" onclick="Send_product_search('Pimag Aqua Pour Deluxe')" class="img-responsive center-block" alt="Pimag Aqua Pour Deluxe"><span class="help-block text-environment">Pimag&reg; Aqua Pour Deluxe</span></div></div>

		</div>

	</div>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_kitchen_environment_two() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">2°</span> Selecciona el siguiente producto</strong></small></p>

		<div class="row">

			<div class="col-lg-12"><div style="cursor: pointer;"><img src="img/environment/kitchen-4.png" onclick="Send_product_search('Pimag Optimizer')" class="img-responsive center-block" alt="Pimag Optimizer"><span class="help-block text-environment">Pimag&reg; Optimizer</span></div></div>

		</div>

	</div>

	<?php

}

if($environment == "office")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Oficina</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Oficina</b>"

    data-content='<div class="text-justify"><img src="img/office.png" alt="Oficina" style="float: left; padding: 0 10px 0 0"><small>Para mucha gente que trabaja, la oficina representa su segunda casa. Es el lugar en donde se pasa una gran parte del día. Sin embargo, la exigencia a obtener resultados y cumplir con las tareas a tiempo produce estrés. Es ahí en donde la atención, enfoque y concentración deben estar al 100% para convertir ideas en proyectos, y materializar nuestra creatividad.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_office_environment_two() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/office-1.png" onclick="Send_product_search('Kenko Seat')" class="img-responsive center-block" alt="Kenko Seat"><span class="help-block text-environment">Ki Kenko&reg; Seat</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/office-2.png" onclick="Send_product_search('KenkoLight')" class="img-responsive center-block" alt="Kenko Light"><span class="help-block text-environment">Kenko&reg; Light</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/office-3.png" onclick="Send_product_search('Kenko Air')" class="img-responsive center-block" alt="Kenko Air"><span class="help-block text-environment">Kenko&reg; Air Purifier</span></div></div>

		</div>

	</div>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_office_environment_three() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">2°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/office-4.png" onclick="Send_product_search('Pimag Waterfall')" class="img-responsive center-block" alt="Pimag Waterfall"><span class="help-block text-environment">Pimag&reg; Waterfall</span></div></div>

			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/office-5.png" onclick="Send_product_search('Pi Water')" class="img-responsive center-block" alt="Pi Water"><span class="help-block text-environment">Pi&reg; Water</span></div></div>

			<div class="col-lg-4 col-sm-12 col-xs-12 col-md-12"><div style="cursor: pointer;"><img src="img/environment/office-6.png" onclick="Send_product_search('Pimag Aqua Pour Deluxe')" class="img-responsive center-block" alt="Pimag Aqua Pour Deluxe"><span class="help-block text-environment">Pimag&reg; Aqua Pour Deluxe</span></div></div>

		</div>

	</div>

	<?php

}

if($environment == "living-room")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Sala</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Sala</b>"

    data-content='<div class="text-justify"><img src="img/living-room.png" alt="Sala" style="float: left; padding: 0 10px 0 0"><small>Es el lugar donde se reúne la familia y se comparte con amigos. Es un espacio lleno de vida que se presta para jugar, trabajar, relajarse y entretenerse. La sala transmite un sentido de bienvenida, determina el ambiente del resto del hogar e invita a quedarse.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_living_room_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Selecciona el siguiente producto</strong></small></p>

		<div class="row">

			<div class="col-lg-12"><div style="cursor: pointer;"><img src="img/environment/living-1.png" onclick="Send_product_search('Kenko Air')" class="img-responsive center-block" alt="Kenko Air"><span class="help-block text-environment">Kenko&reg; Air Purifier</span></div></div>

		</div>

	</div>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_living_room_environment_two() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">2°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="col-lg-2 hidden-sm"></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/living-2.png" onclick="Send_product_search('KenkoLight')" class="img-responsive center-block" alt="Kenko Light"><span class="help-block text-environment">Kenko&reg; Light</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/living-3.png" onclick="Send_product_search('Kenko Seat')" class="img-responsive center-block" alt="Kenko Seat"><span class="help-block text-environment">Ki Kenko&reg; Seat</span></div></div>

			<div class="col-lg-2 hidden-sm"></div>

		</div>

	</div>

	<?php

}
//Escolar
if($environment == "escolar")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Escolar</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Escolar</b>"

    data-content='<div class="text-justify"><img src="img/school.png" alt="Cocina" style="float: left; padding: 0 10px 0 0"><small>Contar con un espacio adecuado que promueva la concentración de nuestros hijos es esencial para el aprendizaje, la salud y el desarrollo de los más pequeños. Crear un espacio óptimo permitirá que la experiencia de estudiar en casa, sea más agradable y productiva, mejorará  la capacidad de atención, reducirá la fatiga y proporcionará  mayor energía y bienestar. </small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_escolar_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="row">
			<div class="col-lg-2 hidden-sm"></div>
			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenko_light_escolar.png" onclick="Send_product_search('KenkoLight')" class="img-responsive center-block" alt="Kenko Light"><span class="help-block text-environment">Kenko&reg; Light</span></div></div>
			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenko_seat_escolar.png" onclick="Send_product_search('Kenko Seat')" class="img-responsive center-block" alt="Kenko Seat"><span class="help-block text-environment">Ki Kenko&reg; Seat</span></div></div>
			<div class="col-lg-2 hidden-sm"></div>
		</div>

		</div>

	</div>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_escolar_environment_two() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">2°</span> Escoge uno de los siguientes productos</strong></small></p>

		<div class="row">

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/botella_escolar.png" onclick="Send_product_search('Pimag Botella')" class="img-responsive center-block" alt="Botella Deportiva"><span class="help-block text-environment">Botella Deportiva</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/spiral_tech_band_escolar.png" onclick="Send_product_search('SPIRAL TECH BAND')" class="img-responsive center-block" alt="Spiral"><span class="help-block text-environment">Spiral</span></div></div>

			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenko_seat_escolar.png" onclick="Send_product_search('Kenko Seat')" class="img-responsive center-block" alt="Kenko Seat"><span class="help-block text-environment">Ki Kenko&reg; Seat</span></div></div>
			
			<div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenko_air_escolar.png" onclick="Send_product_search('Kenko Air')" class="img-responsive center-block" alt="Kenko Air"><span class="help-block text-environment">Kenko&reg; Air Purifier</span></div></div>
			
			<?php if($country_abi ==2 )
              { ?>
			<!--div class="col-lg-4 col-sm-6 col-xs-6 col-md-6"><div style="cursor: pointer;"><img src="img/environment/kenko_ground_escolar.png" onclick="Send_product_search('KENKOGROUND')" class="img-responsive center-block" alt="Kenko Ground"><span class="help-block text-environment">Kenko Ground</span></div></div-->
		<?php } ?>
			

		</div>

	</div>

	<?php

}
//Escolar

if($environment == "personal")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno Personal</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Personal</b>"

    data-content='<div class="text-justify"><img src="img/office.png" alt="Personal" style="float: left; padding: 0 10px 0 0"><small>Es el ambiente que acompaña y caracteriza a cada individuo. Cada persona elige cómo construir su entorno, en el que intervienen aspectos como hábitos de alimentación, actividades, prácticas deportivas, imagen personal, y la forma cómo se interactúa con cada espacio físico.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">
<!--CHILE se agrego esta parte para modificar el emnsaje solo cuando sea CHILE -->
		<?php 
		if($country_abi == 10)

		{
			?>
			<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_personal_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 5 unidades.</strong></small><br/><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno Personal <strong>no aplican para el descuento especial</strong>, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p>
			<?php
		}else{
			?>

			<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_personal_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 5 unidades de cualquier producto de las marcas abajo relacionadas. Puedes combinar o puede ser de la misma referencia.</strong></small><br/><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno Personal <strong>no aplican para el descuento especial</strong>, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p>
			<?php 
		}
		?>

	<!--p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_personal_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 5 unidades de cualquier producto de las marcas abajo relacionadas. Puedes combinar o puede ser de la misma referencia.</strong></small><br/><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno Personal <strong>no aplican para el descuento especial</strong>, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p-->

		<div class="form-group">

			<div class="row">
				<!-- CHILE ejemplo para ocultar una seccion en el enorno personal 
				-->
				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" ><div style="cursor: pointer;"><img src="img/environment/personal-1.png" onclick="Send_product_search('KENKO BALANCE')" class="img-responsive center-block" alt="KENKO BALANCE"></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" ><div style="cursor: pointer;"><img src="img/environment/personal-3.png" onclick="Send_product_search('KENKOTHERM')" class="img-responsive center-block" alt="KENKO THERM"></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4"><div style="cursor: pointer;"><img src="img/environment/personal-6.png" onclick="Send_product_search('SLEEP MASK')" class="img-responsive center-block" alt="KENKO SLEEP" ></div></div>

				

			</div>

		</div>

		<div class="form-group">

			<div class="row">

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4"><div style="cursor: pointer;" data-toggle="modal" data-target="#modal-kenko-fashion"><img src="img/environment/personal-7.png" class="img-responsive center-block" alt="KENKO FASHION"></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4"><div style="cursor: pointer;"><img src="img/environment/personal-5.png" onclick="Send_product_search('PIMAG BOTELLA DEPORTIVA')" class="img-responsive center-block" alt="PIMAG"></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi == 10 || $country_abi == 4){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer;"><img src="img/environment/personal-4.png" onclick="Send_product_search('TRUE ELEMENTS')" class="img-responsive center-block" alt="TRUE ELEMENTS"></div></div>


				

			</div>

		</div>

	</div>

	<?php

}

if($environment == "nutrition")

{

	?>

	<h2>Condición mínima para <strong>Armar tu entorno de Nutrición</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom"

    title="<b>Entorno Personal</b>"

    data-content='<div class="text-justify"><img src="img/office.png" alt="Personal" style="float: left; padding: 0 10px 0 0"><small>Es el ambiente que acompaña y caracteriza a cada individuo. Cada persona elige cómo construir su entorno, en el que intervienen aspectos como hábitos de alimentación, actividades, prácticas deportivas, imagen personal, y la forma cómo se interactúa con cada espacio físico.</small></div>'>

    <i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

	<hr class="line-format">

	<div class="form-group">

	<p class="help-block padding-bottom"><small><i class="color-green fa <?php if(Valite_nutrition_environment_one() == 0){ echo "fa-circle-o"; }else{ echo "fa-check-circle-o"; } ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 3 unidades de la marca KENZEN. Puedes combinar productos o seleccionar varios de la misma referencia.</strong></small><br/><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno de Nutrición no aplican para el descuento especial, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p>

		<div class="form-group">

			<div class="row">

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi != 11){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/2513.png" onclick="Send_product_search('KENZEN NATURAL BALANCE VAINILLA')" class="img-responsive center-block" alt="2513"><span class="help-block text-environment">Kenzen Natural Balance Vainilla</span></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi != 11){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/2514.png" onclick="Send_product_search('KENZEN NATURAL BALANCE COCOA')" class="img-responsive center-block" alt="2514"><span class="help-block text-environment">Kenzen Natural Balance Cocoa</span></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi == 2 || $country_abi == 3){}else{ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/15472.png" onclick="Send_product_search('KENZEN OMEGA')" class="img-responsive center-block" alt="15472"><span class="help-block text-environment">Kenzen Omega Green Dha</span></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4"><div style="cursor: pointer; height: 215px;"><img src="img/environment/15553.png" onclick="Send_product_search('KENZEN JADE GREENZYMES FRASCO')" class="img-responsive center-block" alt="15553"><span class="help-block text-environment">Kenzen Jade Greenzymes Frasco</span></div></div>

				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi == 5){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/15554.png" onclick="Send_product_search('KENZEN JADE GREENZYMES SOBRES')" class="img-responsive center-block" alt="15554"><span class="help-block text-environment">Kenzen Jade Greenzymes Sobres</span></div></div>

				

				<!-- SE AGREGA PARA COL EL ITEM 2515 24/02/2021 -->
				<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi != 1){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/2515.png" onclick="Send_product_search('KENZEN NUTRI BALANCE VAINILLA AREQUIPE')" class="img-responsive center-block" alt="2515"><span class="help-block text-environment">Kenzen Nutribalance Vainilla Arequipe</span></div></div>

				<!-- Se eliminaron los productos ciaga se realizo un respaldo en caso de alguna modificaci�n -->

				<!--div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if($country_abi == 4 || $country_abi == 5 ){ ?>style="display: none;"<?php } ?>><div style="cursor: pointer; height: 215px;"><img src="img/environment/15581.png" onclick="Send_product_search('LACTOFERRIN GOLD 1.8')" class="img-responsive center-block" alt="15581"><span class="help-block text-environment">Lactoferrin Gold 1.8</span></div></div-->

			</div>

		</div>

	</div>

	<?php

}

?>

<!-- Funcionalida popover -->

<script>

	$(function(){

    // Enables popover

    $('[data-toggle="popover"]').popover({

    container: 'body'

});

});

</script>

<!-- Funcionalida popover -->

<!-- Funcionalidad tooltip-->

<script>

	$(function () {

	  $('[data-toggle="tooltip"]').tooltip()

	})

</script>

<!-- Funcionalidad tooltip-->