<?php
$remates= Remates::model()->findAll();
?>





<!-- REMATES GENERALES -->
<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-estemes titulo-mobile"> <p> Este mes > Remates Cabañas </p> </div>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<h1 class="hidden-xs">Remates generales</h1>
	
	<!-- Caja general -->
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

	
	
		<!-- Caja general fecha -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p class="hidden-lg hidden-sm hidden-md fecha-remates-mobile color-generales">Miercoles 18 Mayo del 2016</p>


			<!-- Titulo FECHA -->
			<div class="title-remates color-generales hidden-xs"> <h2>Fecha</h2></div>
		
			<!-- Caja fecha particular -->
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-generales hidden-xs">
				
				<div class=" center-to-parent ">
					
					<p>Miércoles</p>
					<p>18</p>
					<p>Mayo del 2016</p>
					</div>
					
					
			</div>
			

			</div>	

		
		</div>
		
		
		
		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
		
			<!-- Modalidad -->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 remates-box">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Modalidad</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-modalidad"><?php echo $remate["modalidad"]; ?></div>
				<?php } ?>
			</div>
			
		
			<!-- Consignatorio-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 remates-box">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Consignatorio</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-consignatorio">
					<p><?php echo $remate["consignatario"]; ?></p>
				</div>
				<?php } ?>	
			</div>
			
		
			<!-- Lugar-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 remates-box">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Lugar</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-lugar">
					<p><?php echo $remate["lugar"]; ?></p>
					<p><?php echo $remate["detalle"]; ?></p>
				</div>
				<?php } ?>
			</div>
			
		
			<!-- Provincia -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 remates-box">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Provincia</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-provincia"><?php echo $remate["provincia"]; ?></div>
				<?php } ?>
			</div>
		
			<!-- Cabezas-->
			
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-12 remates-box">
			
				<!-- Titulo -->
				<div class="title-remates color-generales"><h2>Cabezas</h2></div>
				<!--Contenido -->
				<?php foreach($remates as $remate){ ?>
				<div class="container-cabezas">
					<p><?php echo $remate["cabezas"]; ?></p>
				</div>
				<?php } ?>
			</div>
			
			
		</div>
	
	</div>


	<div class="div-de-prueba">
		

<li style="display:none;">hola1</li>
<li style="display:none;" >hola2</li>
<li style="display:none;" >hola3</li>
<li style="display:none;" >hola4</li>
<li style="display:none;" >hola5</li>

<button class="boton-prueba">
	PRUEBA
</button>


	</div>

</section>

<script>

$(document).ready(function () {
	index=0;

 $('.div-de-prueba li').eq(index).css("display","block");
    console.log("esto funciona");
    $(".boton-prueba").click(function(){
    	$('.div-de-prueba li').css("display","none");
		$('.div-de-prueba li').eq(++index).css("display","block");
	})

});



</script>