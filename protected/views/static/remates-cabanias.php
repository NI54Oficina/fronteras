<?php
//$imagen-modalidad[0] = "modalidades-internet";
//$imagen-modalidad[1] = "modalidades-presencial";
//$imagen-modalidad[2] = "modalidades-televisado";

//$imagen-provincia[0] = "provincias-buenos-aires";
//$imagen-provincia[1] = "provincias-la-pampa";

//las imagenes estan en la carpeta publica.

$Criteria = new CDbCriteria();
$Criteria->condition = "categoria = 'general'";
$remates= Remates::model()->findAll($Criteria);

?>





<!-- REMATES CABAÑAS-->
<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-estemes titulo-mobile"> <p> Este mes > Remates Cabañas </p> </div>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<h1 class="hidden-xs">Remates cabañas</h1>
	
	<!-- Caja general -->
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

	
	
		<!-- Caja general fecha -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		
			<p class="hidden-lg hidden-sm hidden-md fecha-remates-mobile color-cabanias"> 
			<button class="boton-prueba-atras"> < </button>
			Miercoles 18 Mayo del 2016
			<button class="boton-prueba"> > </button></p>
		


			<!-- Titulo FECHA -->
			<div class="title-remates color-cabanias hidden-xs"> <h2>Fecha</h2></div>
		
			<!-- Caja fecha particular -->
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-cabanias hidden-xs">
				
				<div class=" center-to-parent ">
					
					<p>Miércoles</p>
					<p>18</p>
					<p>Mayo del 2016</p>
				</div>
					
					
			</div>
			

			</div>	

		
		</div>
		
		
		
		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 fade-in-mobile">
		
			<!-- Modalidad -->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-cabanias"><h2>Modalidad</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-modalidad info-remates-mobile" hid="1">
				
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/modalidades-internet.svg">
				<?php echo $remate["modalidad"]; ?></div>
				<?php } ?>
			</div>
			
		
			<!-- Consignatorio-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-cabanias"><h2>Consignatorio</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-consignatorio info-remates-mobile" hid="1">
					<p class=" "><?php echo $remate["consignatario"]; ?></p>
				</div>
				<?php } ?>	
			</div>
			
		
			<!-- Lugar-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-cabanias"><h2>Lugar</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-lugar info-remates-mobile" hid="1">
					<p class=""><?php echo $remate["lugar"]; ?></p>
					<p class=""><?php echo $remate["detalle"]; ?></p>
				</div>
				<?php } ?>
			</div>
			
		
			<!-- Provincia -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-cabanias"><h2>Provincia</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-provincia  info-remates-mobile" hid="1"><?php echo Provincia::model()->findByPk( $remate["provincia"])->nombre; ?>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/provincias-buenos-aires.svg"></div>
				
				<?php } ?>
			</div>
		
			<!-- Cabezas-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-12 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-cabanias"><h2>Cabezas</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-cabezas info-remates-mobile" hid="1">
					<p class=""><?php echo $remate["cabezas"]; ?></p>
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