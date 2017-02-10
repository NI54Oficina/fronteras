<?php
$nota = Notas::model()->findByAttributes(array("id"=>$data,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Enfermedades</p>
		</div>
	</div>
</div>



	<!-- Título -->
	<h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-producir-inside color-sanidad"><?php echo $nota->titulo; ?></h1>


	<!-- Contenido de la enfermedad -->
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 enfermedades-inside-container">

	<?php echo $nota->texto; ?>

	</div>


	<!-- WIDGET-->
	<?php include_once("widget-enfermedades.php") ?>

</section>
