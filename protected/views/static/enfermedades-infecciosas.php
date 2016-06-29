<?php
$nota = Notas::model()->findByAttributes(array("id"=>1,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-enfermedades titulo-mobile"> <p> Enfermedades infecciosas</p> </div>

<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Enfermedades infecciosas</p>
		</div>
	</div>
</div>


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-container-producir">

	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 selector-side" >
		<form method="post">
         	<select name="enfermedades-select" class="enfermedades-select" id="enfermedades-selector">
				<option value="" selected disabled>Enfermedades</option>
				<option value="enfermedades-infecciosas-1">Complejo Respiratorio Bovino</option>
				<option value="enfermedades-infecciosas-2">Diarrea Neonatal</option>
				<option value="enfermedades-infecciosas-3">Enfermedades clostridiales</option>
				<option value="enfermedades-infecciosas-4">Queraconjuntivitis infecciosa bovina</option>
			</select>

		</form>

		<div class="enfermedades-inside-title square hidden-xs">
			<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-to-parent">
				<?php echo $nota->titulo; ?>
			</h2>
		</div>
	</div>

	<div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 enfermedades-inside-container">

		<p class="relleno-enfermedad" >
			Seleccione una enfermedad
		</p>


	<?php echo $nota->texto; ?>

	</div>

	</div>

</div>



 <!-- TODA LA INFO COMENTADA -->


<?php if(false){ ?>



	<!-- Título -->
	<h2 class="enfermedades-inside-title col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $nota->titulo; ?></h2>


	<!-- Contenido de la enfermedad -->
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 enfermedades-inside-container">

	<?php echo $nota->texto; ?>

	</div>


	<!-- WIDGET-->
	<?php include_once("widget-enfermedades.php") ?>

<?php } ?>



</section>
<script>
setTimeout(function(){
changeContent();
},100);
</script>