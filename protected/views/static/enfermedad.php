<?php
$nota = Notas::model()->findByAttributes(array("id"=>$data,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	
	
		<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12" >
			<div class="box-sanidad-2">
				<div class="box-sanidad-inner">
					<p class="long-word" id="planes-h1">Enfermedades</p>
				</div>
			</div>
		</div>	
	

	<!-- Título -->
	<h2 class="enfermedades-inside-title"><?php echo $nota->titulo; ?></h2>
	
	
	<!-- Contenido de la enfermedad -->
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 enfermedades-inside-container">
	
	<?php echo $nota->texto; ?>
	
	</div>
	
	
	<!-- WIDGET-->
	<?php include_once("widget-enfermedades.php") ?>
	
</section>