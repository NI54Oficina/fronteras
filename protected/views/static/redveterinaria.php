<section id="veterinaria" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<div class="map-box col-lg-6 col-md-6 col-sm-12 col-xs-12">

   <!-- IFRAME DE MAPA, SETEAR LA LOCACION CORRECTA -->
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.096023338846!2d-58.72043858429925!3d-34.42431595553572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca1f2712699bd%3A0x3985a0fecc05b5c6!2zQmlvZ8OpbmVzaXMgQmFnw7MgU0E!5e0!3m2!1ses!2sar!4v1461785162869"  frameborder="1" s allowfullscreen>
	 </iframe>
		
	</div>

	
	<div class="red-box col-lg-6 col-md-6 col-sm-12 col-xs-12">

		    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-veterinaria.png" alt="Red Veterinaria">
		
			
		  <div class="red-form">
			<div id="provincia">

				<form method="post">
         			 <select name="provincias">
         			 <option value="provincia">Provincia </option>
           			<option value="baires">Buenos Aires </option>
           			<option value="tucuman">Tucuman </option>
           			<option value="santiagoDelEstero"> Santiago del Estero </option>
           			<option value="baires">Buenos Aires </option>
           			<option value="salta"> Salta</option>
          			<option value="entreRios">Entre Rios</option>
          			<option value="laPampa">La Pampa</option>
          			</select>
          			
				</form>

			 </div>

			 <div id="localidad">

				<form method="post">
         			 <select name="localidad" >
         			 <option value="localidad">Localidad </option>
         		     <option value="baires">Buenos Aires </option>
           			<option value="tucuman">Tucuman </option>
           			<option value="santiagoDelEstero"> Santiago del Estero </option>
          			 <option value="baires">Buenos Aires </option>
           			<option value="salta"> Salta</option>
          			<option value="entreRios">Entre Rios</option>
          			<option value="laPampa">La Pampa</option>
         			 </select>

				</form>

		 	 </div>

		 </div>

	</div>


	
</section>