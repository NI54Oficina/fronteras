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

			 <div id="localidad"  >

				<form method="post">
         			 <select name="localidad" >


         			 <option value="" selected disabled>Seleccione localidad</option>
					 <?php 
					 $localidades = Ciudad::model()->findAll();
					 foreach($localidades as $localidad){
						 ?>
						 <option class="localidad" value="<?php echo strtolower($localidad->nombre); ?>" provincia="<?php echo strtolower($localidad->provincia); ?>"><?php echo $localidad->nombre; ?></option>
						 <?php
					 }
					 ?>

					 </select>

				</form>



		 	 </div>
			 <div id="localidad2"  style="display:none;">

				<form method="post">
         			 <select name="localidad" >


         			 <option value="" selected disabled>Seleccione localidad</option>
					 <?php 
					 $localidades = Ciudad::model()->findAll();
					 foreach($localidades as $localidad){
						 ?>
						 <option class="localidad" value="<?php echo strtolower($localidad->nombre); ?>" provincia="<?php echo strtolower($localidad->provincia); ?>"><?php echo $localidad->nombre; ?></option>
						 <?php
					 }
					 ?>

					 </select>

				</form>



		 	 </div>
				<div id="noVeterinarias" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none;">
					<p  >No hay veterinarias adheridas en esta provincia.</p>
				</div>
			
			<?php 
			$veterinarias= Veterinarias::model()->findAll();
			if($veterinarias){
				foreach($veterinarias as $veterinaria){
			?>
			 <div id="info-veterinaria" class="info-mapa  col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none;" ciudad="<?php echo strtolower($veterinaria->ciudad); ?>">
				<h1><?php echo $veterinaria->cuenta; ?></h1>
				 <p><?php echo $veterinaria->provincia; ?>, <?php echo $veterinaria->ciudad; ?></p>
				 <p><?php echo $veterinaria->direccion; ?> <?php echo $veterinaria->altura; ?></p>
				 <p><?php echo $veterinaria->telefono; ?></p>
			 </div>
			<?php
				}
			}
			?>
		 	

		 	

		 </div>

	</div>

	<div class="map-box  col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-lg hidden-sm hidden-md ">

   <!-- IFRAME DE MAPA, SETEAR LA LOCACION CORRECTA -->
	<!-- <iframe class="square col-lg-12 col-md-12 col-sm-12 col-xs-12 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.096023338846!2d-58.72043858429925!3d-34.42431595553572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca1f2712699bd%3A0x3985a0fecc05b5c6!2zQmlvZ8OpbmVzaXMgQmFnw7MgU0E!5e0!3m2!1ses!2sar!4v1461785162869"  frameborder="1" >-->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/veterinarias-mapa.svg" alt="Mapa Argentina" />
	 </iframe>

	</div>

	<?php if(false){ ?>
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
	<?php } ?>
	
	<script>
	$.fn.quickChange = function(handler) {
    return this.each(function() {
        var self = this;
        self.qcindex = self.selectedIndex;
        var interval;
        function handleChange() {
            if (self.selectedIndex != self.qcindex) {
                self.qcindex = self.selectedIndex;
                handler.apply(self);
            }
        }
        $(self).focus(function() {
            interval = setInterval(handleChange, 100);
        }).blur(function() { window.clearInterval(interval); })
        .change(handleChange); //also wire the change event in case the interval technique isn't supported (chrome on android)
    });
	};
	
	
	
	$( "#provincia form select" ).change(function() {
		$("#localidad").show();
		//$(".localidad").hide();
		$("#localidad2").show();
		$("#localidad select").html(" ");
		$("#localidad select").append('<option value="" selected disabled>Seleccione localidad</option>');
		$("#localidad select").append($("#localidad2 [provincia='"+$( "#provincia option:selected" ).attr("value")+"']").show());
		$("#localidad2").hide();
						$("#info-veterinaria").hide();
		/*$("[provincia='"+$( "#provincia option:selected" ).attr("value")+"']").show();
		$("body").append($( "#provincia option:selected" ).text());
		$("body").append($( "#provincia option:selected" ).attr("value"));
		$("body").append($(this).val());
		console.log("change");
		$(".info-mapa").hide();
		$("#localidad").show();
		$( "#localidad form select" ).val("");
		$("#info-veterinaria").hide();
		$("#noVeterinarias").hide();
		$(".localidad").hide();
		$("[provincia='"+$( "#provincia option:selected" ).attr("value")+"']").show();
		$("#info-veterinaria").hide();*/
	});
	
	

	$( "#localidad form select" ).change(function() {
		//$("body").append($( "#localidad option:selected" ).text());
		//$("body").append($( "#localidad option:selected" ).attr("value"));
		//$("body").append($(this).val());
		$("#info-veterinaria").show();
		$(".info-mapa").hide();
		console.log($(this).val());
		$("[ciudad='"+$( "#localidad option:selected" ).attr("value")+"']").show();
	});
	
	
	</script>
</section>
