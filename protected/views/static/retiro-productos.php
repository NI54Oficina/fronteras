<?php


$retiros= Retiro::model()->findAll();

?>
 <section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	
	
<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Días de retiro de productos veterinarios </p>
		</div>
	</div>
</div>
	
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 retiro-container">
	<!-- Caja general -->
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

	
	
		<!-- País -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		
			<p class="hidden-lg hidden-sm hidden-md fecha-remates-mobile color-retiro-productos"> 
			<button class="boton-prueba-atras"> < </button>
			Argentina
			<button class="boton-prueba"> > </button></p>
		


			<!-- Titulo -->
			<div class="title-remates color-retiro-productos hidden-xs"> <h2></h2></div>
		
			<!-- Caja país particular -->
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-retiro-productos hidden-xs">
				
				<div class=" center-to-parent ">
					<p>Argentina</p>
				</div>
					
					
			</div>
			

			</div>	

		
		</div>
		
		
		
		<!-- Caja general: img producto, prodcutos senasa, nombre comercial, retiro en carne,  retiro en leche -->
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 fade-in-mobile">
		
			<!-- Img producto-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2></h2></div>
				<!--Contenido -->
				<?php foreach($retiros as $retiro){ ?>
				<div class="container-modalidad info-remates-mobile" hid="1">
				
				<img style="width:80%;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/dias-retiro-aciendelplus.svg">
				</div>
				<?php } ?>
			</div>
			
		
			<!-- Producto Senasa-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2>Producto Senasa</h2></div>
				<!--Contenido -->
				<?php foreach($retiros as $retiro){ ?>
				<div class="container-consignatorio info-remates-mobile" hid="1">
					
					<p class=" "><?php echo $retiro->producto; ?></p>
					
				</div>
				<?php } ?>
			</div>
			
		
			<!-- Nombre Comercial Reg -->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2>Nombre Comercial Reg</h2></div>
				<!--Contenido -->
				<?php foreach($retiros as $retiro){ ?>
				<div class="container-lugar info-remates-mobile" hid="1">
				
					<p class="" id="retiro-producto-p-1"><?php echo $retiro->nombreComercial; ?></p>
					
				</div>
				<?php } ?>
			</div>
			
		
			<!-- Retiro en carne -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2> Retiro en carne</h2></div>
				<!--Contenido -->
				<?php foreach($retiros as $retiro){ ?>
				<div class="container-provincia  info-remates-mobile" hid="1">
					<p  id="retiro-producto-p-2"><?php echo $retiro->retiroCarne; ?></p>
				
				</div>
				<?php } ?>

			</div>
		
			<!-- Retiro en leche -->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-12 col-xl-5 remates-box containerColumnas">
			
				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2> Retiro en leche</h2></div>
				<!--Contenido -->
				<?php foreach($retiros as $retiro){ ?>
				<div class="container-cabezas info-remates-mobile" hid="1">
					
					<p class="" id="retiro-producto-p-3"><?php echo $retiro->retiroLeche; ?></p>
					
				</div>
				<?php } ?>
			</div>
			
			
		</div>
	
	</div>
	</div>
	
</section>