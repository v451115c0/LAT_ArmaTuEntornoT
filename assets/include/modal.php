<!-- Buscador productos -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal-search">

	<div class="modal-dialog">

		<div class="modal-content">

			<div id="custom-search-input">

				<div class="input-group col-md-12 background-green">

					<input id="search" type="text" class="form-control input-lg" onkeyup="Search_product(this.value);" placeholder="Ingresa aquí el código, nombre o caracteristica del producto" autocomplete="off" autofocus />

					<span class="input-group-btn">

						<button class="btn btn-info btn-lg" type="button" data-dismiss="modal">

							<i class="fa fa-times fa-2x color-white" aria-hidden="true"></i>

						</button>

					</span>

				</div>

				<hr class="line-format">

				<div class="form-group">

					<div class="row">

						<div class="col-lg-12 search">

							<div id="search-product"><p class="help-block"><small>Sin resultados.</small></p></div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- Submarcas d ekenko fashion -->

<div class="modal fade" id="modal-kenko-fashion">

	<div class="modal-dialog modal-lg">

		<div class="modal-content brands-kenko-fashion">

			<div class="modal-body center-block text-center">

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/hoshi.png" onclick="Send_product_search('HOSHÍ')" alt="HOSHÍ"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/marui.png" onclick="Send_product_search('MARUI')" alt="MARUI"></div>

<?php if($country_abi != 10){ ?>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/bikubi.png" onclick="Send_product_search('BIKUBI')" alt="BIKUBI"></div>
<?php } ?>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/musubi.png" onclick="Send_product_search('MUSUBI')" alt="MUSUBI"></div>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/venus.png" onclick="Send_product_search('VENUS')" alt="VENUS"></div>

				<!--<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/duo_elegance.png" onclick="Send_product_search('DUO ELEGANCE')" alt="DUO ELEGANCE"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/kenko_classic.png" onclick="Send_product_search('KENKO CLASSIC')" alt="KENKO CLASSIC"></div>-->
<?php if($country_abi != 10){ ?>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/magnetic_fashion.png" onclick="Send_product_search('MAGNETIC FASHION')" alt="MAGNETIC FASHION"></div>
<?php } ?>
				<!--<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/marquesa.png" onclick="Send_product_search('MARQUESA')" alt="MARQUESA"></div>-->

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/milana.png" onclick="Send_product_search('MILANA')" alt="MILANA"></div>

				<!--<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/perfect_link.png" onclick="Send_product_search('PERFECT LINK')" alt="PERFECT LINK"></div>-->

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/power_band.png" onclick="Send_product_search('POWERBAND')" alt="POWERBAND"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/triphase.png" onclick="Send_product_search('BRAZALETES TRIPHASE')" alt="BRAZALETES TRIPHASE"></div>
<?php if($country_abi != 10){ ?>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/spiral.png" onclick="Send_product_search('SPIRAL')" alt="SPIRAL TECH BAND"></div>
<?php } ?>
				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/b_shine.png" onclick="Send_product_search('SHINE')" alt="B-SHINE"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/magduo.png" onclick="Send_product_search('MAGDUO')" alt="MAGDUO"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/dansei.png" onclick="Send_product_search('Dansei')" alt="Dansei"></div>

				<div style="cursor: pointer; display: inline-block;" data-dismiss="modal"><img src="img/brands-kenko-fashion/ikigai.png" onclick="Send_product_search('Ikigai')" alt="Ikigai"></div>



			</div>

		</div>

	</div>

</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#modal-search").on('shown.bs.modal', function(){
        $(this).find('#search').focus();
    });
});
</script>