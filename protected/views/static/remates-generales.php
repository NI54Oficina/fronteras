<?php
$remates= Remates::model()->findAll();

?>
<?php foreach($remates as $remate){ ?>
<?php echo $remate["fecha"]; ?>
<?php } ?>

<!-- REMATES GENERALES -->
<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-estemes titulo-mobile"> <p> Este mes > Remates Cabañas </p> </div>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<h1 class="hidden-xs">Remates generales</h1>
	
	<!-- Caja general -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"c>
	
		<!-- Caja general fecha -->
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<p class="hidden-lg hidden-sm hidden-md fecha-remates-mobile color-generales">Miercoles 18 Mayo del 2016</p>
			<!-- Titulo FECHA -->
			<div class="title-remates color-generales hidden-xs"> <h2>Fecha</h2></div>
		
			<!-- Caja fecha particular -->
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-generales hidden-xs">
				
				<p>Miércoles</p>
				<p>18</p>
				<p>Mayo del 2016</p>
				
			
			</div>
			
		
		</div>
		
		
		
		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
		
			<!-- Modalidad -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Modalidad</h2></div>
				<!--Contenido -->
				<div class="container-modalidad"></div>
			
			</div>
		
		
			<!-- Consignatorio-->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Consignatorio</h2></div>
				<!--Contenido -->
				<div class="container-consignatorio">
					<p>Néstor Hugo Fuentes S.A</p>
				</div>
			
			</div>
		
		
			<!-- Lugar-->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Lugar</h2></div>
				<!--Contenido -->
				<div class="container-lugar">
					<p>Bernasconi</p>
					<p>Néstor Hugo Fuentes S.A</p>
				</div>
			
			</div>
			
		
			<!-- Provincia -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Provincia</h2></div>
				<!--Contenido -->
				<div class="container-provincia"></div>
			
			</div>
		
		
			<!-- Cabezas-->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-12">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Cabezas</h2></div>
				<!--Contenido -->
				<div class="container-cabezas">
					<p>900</p>
				</div>
			
			</div>
			
			
		</div>
	
	</div>

</section>