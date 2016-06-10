<?php

//$imagen-modalidad[0] = "modalidades-internet";
//$imagen-modalidad[1] = "modalidades-presencial";
//$imagen-modalidad[2] = "modalidades-televisado";

//$imagen-provincia[0] = "provincias-buenos-aires";
//$imagen-provincia[1] = "provincias-la-pampa";

//las imagenes estan en la carpeta publica.

$Criteria = new CDbCriteria();
$Criteria->condition = "categoria = 'Generales'";
$remates= Remates::model()->findAll($Criteria);

?>





<!-- REMATES GENERALES -->


<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<div class="col-xs-12 hidden-lg hidden-xl titulo-mobile-estemes titulo-mobile"> <p> Este mes > Remates Generales </p> </div>

<h1 class="hidden-xs hidden-md hidden-sm">Remates generales</h1>

	<!-- Caja general -->
	<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">



		<!-- Caja general fecha -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		  <!-- fECHA EN MOBILE -->
			<p class="hidden-lg  fecha-remates-mobile color-generales">
			<button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span> </button>
			Miercoles 18 Mayo del 2016
			<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"></span></button></p>
		 <!-- TERMINA FECHA MOBILE -->


			<!-- Titulo FECHA -->
			<div class="title-remates color-generales hidden-xs hidden-sm hidden-md"> <h2>Fecha</h2></div>

			<!-- Caja fecha particular -->

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-generales hidden-xs hidden-md hidden-sm">

				<div class=" center-to-parent ">

					<p>Miércoles</p>
					<p>18</p>
					<p>Mayo del 2016</p>

				</div>


			</div>


			</div>


		</div>



		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
		<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 fade-in-mobile">

			<!-- Modalidad -->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Modalidad</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-modalidad info-remates-mobile" hid="1">
					<img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/modalidades-presencial.svg">
				</div>
				<?php } ?>
			</div>


			<!-- Consignatorio-->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Consignatorio</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-consignatorio info-remates-mobile" hid="1">
					<p class="center-to-parent"><?php echo $remate["consignatario"]; ?></p>
				</div>
				<?php } ?>
			</div>


			<!-- Lugar-->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Lugar</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-lugar info-remates-mobile" hid="1">
					<p class=""><?php echo $remate["lugar"]; ?></p>
					<p class=""><?php echo $remate["detalle"]; ?></p>
				</div>
				<?php } ?>
			</div>


			<!-- Provincia -->
			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Provincia</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-provincia  info-remates-mobile" hid="1">
				<img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/provincias-la-pampa.svg"></div>
				<?php } ?>

			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-5 col-md-12 col-sm-12 col-xs-12 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Cabezas</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-cabezas info-remates-mobile" hid="1" <?php if($remate->suspendido!=""){ ?> style="background-color:red;" <?php } ?> >
					<p class="center-to-parent"><?php echo $remate["cabezas"]; ?></p>
				</div>
				<?php } ?>

			</div>


		</div>

	</div>

</section>

<script>


$(document).ready(function () {
	turnOnButtonRemates();
});


</script>
