<section id="contenedor" class=" veterinaria col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 section">

<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-producir titulo-mobile"> <p> Producir + > Red veterinaria </p> </div>

	<div class="map-box  col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs ">

   <!-- IFRAME DE MAPA, SETEAR LA LOCACION CORRECTA -->
	<!-- <iframe class="square col-lg-12 col-md-12 col-sm-12 col-xs-12 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.096023338846!2d-58.72043858429925!3d-34.42431595553572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca1f2712699bd%3A0x3985a0fecc05b5c6!2zQmlvZ8OpbmVzaXMgQmFnw7MgU0E!5e0!3m2!1ses!2sar!4v1461785162869"  frameborder="1" >-->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/veterinarias-mapa.svg" alt="Mapa Argentina" />
	 </iframe>

	</div>


	<div class="red-box col-lg-6 col-md-6 col-sm-6 col-xs-12">

		    <img class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hidden-xs " src="<?php echo Yii::app()->request->baseUrl; ?>/img/gota-veterinarias.svg" alt="Red Veterinaria">


		  <div class="red-form col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div id="provincia">

				<form method="post">
         			 <select name="provincias">
					 <option value="" selected disabled>Provincia</option>
					 <?php
					 $provincias= Provincia::model()->findAll();
					 foreach($provincias as $provincia){
						 if($provincia->veterinarias==1){
					 ?>
					 <option value="<?php echo $provincia->id; ?>"><?php echo $provincia->nombre; ?> </option>
					 <?php }} ?>

          			</select>

				</form>

			 </div>

			 <div id="localidad" style="display:none;">

				<form method="post">
         			 <select name="localidad" >


         			 <option value="" selected disabled>Seleccione localidad</option>

					 </select>

				</form>



		 	 </div>
				<div id="noVeterinarias" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none;">
					<p  >No hay veterinarias adheridas en esta provincia.</p>
				</div>
		 	 <div id="info-veterinaria" class="info-mapa  col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none;">
					<!--- El html se genera por php, no se le pueden agregar clases aca, queda el code solo de ejemplo para ver la estructura !-->
				 <h1>Nombre de la Red veterinaria</h1>
				 <p>Provincia, Ciudad</p>
				 <p>Direccion (con altura incluida)</p>
				 <p>Telefono principal (sin celulares)</p>

		 	 </div>

		 </div>

	</div>

	<div class="map-box  col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-lg hidden-sm hidden-md ">

   <!-- IFRAME DE MAPA, SETEAR LA LOCACION CORRECTA -->
	<!-- <iframe class="square col-lg-12 col-md-12 col-sm-12 col-xs-12 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.096023338846!2d-58.72043858429925!3d-34.42431595553572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca1f2712699bd%3A0x3985a0fecc05b5c6!2zQmlvZ8OpbmVzaXMgQmFnw7MgU0E!5e0!3m2!1ses!2sar!4v1461785162869"  frameborder="1" >-->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/veterinarias-mapa.svg" alt="Mapa Argentina" />
	 </iframe>

	</div>

	<script>
	$( "#provincia form select" ).change(function() {
		console.log("change");
		$("#localidad").hide();
		$("#info-veterinaria").hide();
		$("#noVeterinarias").hide();
		$.post( "http://<?php echo $_SERVER['SERVER_NAME']; if(isset($_SESSION['webRoot'])){ echo '/'.$_SESSION['webRoot'];}else{ '/';} ?><?php echo $_SESSION["short"] ?>/getLocalidades/id/"+$(this).val(), function( data ) {
			console.log(data);
			if(data=="-1"){
				$("#localidad").hide();
				$("#noVeterinarias").show();
				//$("#localidad form select").html("No hay veterinarias adheridas en esta localidad.");
			}else if(data=="1"){
				$("#localidad").hide();
				$("#info-veterinaria").hide();
				$.post( "http://<?php echo $_SERVER['SERVER_NAME']; if(isset($_SESSION['webRoot'])){ echo '/'.$_SESSION['webRoot'];}else{ '/';} ?><?php echo $_SESSION["short"] ?>/getVeterinariaByProvincia/id/"+$( "#provincia form select" ).val(), function( data ) {
					$("#info-veterinaria").html(data);
					$("#info-veterinaria").show();
				});
			}else{
				$("#localidad form select").html(data);
				$("#localidad").show();
			}
		});
	});

	$( "#localidad form select" ).change(function() {

		$("#info-veterinaria").hide();
		$.post( "http://<?php echo $_SERVER['SERVER_NAME']; if(isset($_SESSION['webRoot'])){ echo '/'.$_SESSION['webRoot'];}else{ '/';} ?><?php echo $_SESSION["short"] ?>/getVeterinaria/id/"+$(this).val(), function( data ) {
			$("#info-veterinaria").html(data);
			$("#info-veterinaria").show();
		});
	});
	</script>

</section>
