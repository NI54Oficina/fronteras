<?php
$nota = Notas::model()->findByAttributes(array("id"=>4,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	

<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Parásitos internos</p>
		</div>
	</div>
</div>	


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-enfermedades">

	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 selector-side" > 
		<form method="post">
         	<select name="parext-select" class="parext-select" id="parext-selector">
				<option value="" selected disabled>Parásitos externos</option>
				<option value="parasitos-internos-1">Bicheras</option>
				<option value="parasitos-internos-2">Etiología</option>	
				<option value="parasitos-internos-3">Garrapatas</option>	
				<option value="parasitos-internos-4">Moscas, Tábanos y Mosquitos</option>	
				<option value="parasitos-internos-5">Piojos</option>	
				<option value="parasitos-internos-6">Sarna</option>	
				<option value="parasitos-internos-7">Ura</option>	
			</select>
		
		
		
		
		</form>
		
		<div class="enfermedades-inside-title square">
			<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-to-parent">
				<?php echo $nota->titulo; ?>
			</h2>
		</div>
	</div>

	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 

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