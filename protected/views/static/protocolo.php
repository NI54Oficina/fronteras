<?php
$protocolos= Protocolo::model()->findAll();

?>

<!-- REMATES GENERALES -->


<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<div class="col-xs-12 hidden-lg hidden-xl titulo-mobile-producir titulo-mobile"> <p> Genética > Protocolo de reproducción  </p> </div>


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs" >
	<div class="box-genetica border-shadow">
		<div class="box-genetica-inner ">
			<p class="center-to-parent color-genetica planes-h1">Protocolo de reproducción </p>
		</div>
	</div>
</div>


	<!-- Caja general -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:20px 30px; text-align:center;">

	<p class="hidden-lg  fecha-remates-mobile  color-title-prod">
	<button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span> </button>
	Prioridad
	<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"></span></button></p>

		<!-- Caja general fecha -->
		<div class="col-lg-2-7 col-md-12 col-sm-12 col-xs-12 col-xl-7 remates-box-2">






			<!-- Titulo FECHA -->
			<div class="title-prot color-title-prod hidden-xs hidden-sm hidden-md"> <h2>Prioridad</h2>
			</div>

			<!-- Caja fecha particular -->

				<!--Contenido -->
				<?php foreach($protocolos as $p){ ?>
				<div class="container-prot info-remates-mobile" hid="1">
					<img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/item-protocolo-01.svg" style="display: block; float: left;display: inline-block;     position: absolute;
    left: 0;">
					<p class="number-protocolo center-to-parent">
						<?php echo $p["prioridad"]; ?>
					</p>
				</div>

				<?php } ?>

		</div>



		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
	<!-- 	<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 fade-in-mobile"> -->

			<!-- Modalidad -->

			<div class=" col-xl-7 col-lg-2-7 col-md-6 col-sm-6 col-xs-6 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Nombre del producto</h2></div>
				<!--Contenido -->

				<div class="container-prot info-remates-mobile"  id="dias-prot" hid="1">
					<p class="center-to-parent">7 días con cipionato - Vaquillona</p>
				</div>

			</div>


			<!-- Consignatorio-->

			<div class="col-lg-2-7  col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 0</h2></div>
				<!--Contenido -->

				<div class="container-prot info-remates-mobile" hid="1">
					<p class="padd-prot center-to-parent">Colocar CRONIPRES MONODOSIS</p>
					<p class="orange">2 ml BIOESTROGEN</p>

				</div>

			</div>


			<!-- Lugar-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 7</h2></div>
				<!--Contenido -->

				<div class="container-prot info-remates-mobile" hid="1">
					<p class="padd-prot center-to-parent">Retirar CRONIPRES MONODOSIS</p>
					<p class="orange">1 ml CRONI-CIP</p>
					<p class="orange">2 ml ENZAPROST D-C</p>

				</div>

			</div>


			<!-- Provincia -->
			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 8</h2></div>
				<!--Contenido -->
				<div class="container-prot info-remates-mobile" hid="1">


				</div>


			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 9</h2></div>
				<!--Contenido -->
				<div class="container-prot info-remates-mobile" hid="1">
					<p class="padd-prot center-to-parent">IATF (48 hr)</p>

				</div>


			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 10</h2></div>
				<!--Contenido -->

				<div class="container-prot info-remates-mobile" hid="1">

				</div>

			</div>

		<!-- </div> -->

	</div>

</section>

<script>


$(document).ready(function () {
	turnOnButtonRemates();
});


</script>
