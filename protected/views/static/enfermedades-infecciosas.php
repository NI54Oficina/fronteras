<?php
$nota = Notas::model()->findByAttributes(array("id"=>1,"seccion"=>"enfermedad"));

?>

<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	

<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Enfermedades</p>
		</div>
	</div>
</div>	


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-enfermedades">

	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 selector-side" > 
		<form method="post">
         	<select name="enfermedades-select" class="enfermedades-select" id="test-selector">
				<option value="" selected disabled>Enfermedades</option>
				<option value="test1">Enfermedad 1</option>
				<option value="test2">Enfermedad 2</option>	
				<option value="test3">Enfermedad 3</option>	
				<option value="test4">Enfermedad 4</option>	
			</select>
					 
		</form>
		
		<div class="enfermedades-inside-title square">
			<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-to-parent">
				<?php echo $nota->titulo; ?>
			</h2>
		</div>
	</div>

	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
	
		<div id="test1" class="test-1" style="display:none">SELECT 1</div>	
		<div id="test2" class="test-1" style="display:none"> SELECT 2</div>
		<div id="test3" class="test-1" style="display:none"> SELECT 3</div>
		<div id="test4" class="test-1" style="display:none"> SELECT 4</div>
	

	<!-- Contenido de la enfermedad -->
	
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
	
<script>
$(document).on("ready", function(){
	changeContent();
	
});


function changeContent(){

    $('#test-selector').change(function(){
        $('.test-1').hide();
        $('#' + $(this).val()).show();
    });
	console.log("salida enfermedades");

}
 
  
</script>
	
</section>












