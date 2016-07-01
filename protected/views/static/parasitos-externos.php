<?php
$nota = Notas::model()->findByAttributes(array("id"=>3,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-enfermedades titulo-mobile"> <p> Parásitos externos </p> </div>

<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Parásitos externos</p>
		</div>
	</div>
</div>


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-container-producir">

	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 selector-side" >
		<form method="post">
         	<select name="parext-select" class="parext-select" id="parext-selector">
				<option value="" selected disabled>Parásitos externos</option>
				<option value="parasitos-externos-2">Bicheras</option>
				<option value="parasitos-externos-3">Garrapatas</option>
				<option value="parasitos-externos-4">Moscas, Tábanos y Mosquitos</option>
				<option value="parasitos-externos-5">Piojos</option>
				<option value="parasitos-externos-6">Sarna</option>
				<option value="parasitos-externos-7">Ura</option>
			</select>




		</form>

		<div class="enfermedades-inside-title square hidden-xs">
			<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-to-parent changed-name">

				Parásitos externos
				<!-- <li>Bicheras</li>
				<li>Garrapatas</li>
				<li>Moscas, Tábanos y Mosquitos</li>
				<li>Piojos</li>
				<li>Sarna</li>
				<li>Ura</li> -->
			</h2>
		</div>
	</div>

	<div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 enfermedades-inside-container">

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
