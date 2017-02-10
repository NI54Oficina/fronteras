
<!-- General cajas clima-->
<div class="box-clima col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">

	<!-- Clima -->
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 box-clima-title fill-element " hid="1" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-clima fixedChildren">


				<form method="post" id="formClima" >
				<?php include("selector-localidades.php"); ?>
				</form>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clima-title fillerChildren hidden-xs">

				<h1 class="center-to-parent">Clima</h1>

		</div>

	</div>


	<!-- Clima 2-->
	
	<?php
	//echo $dataClima;
	if($dataClima){
		
		$array = json_decode($dataClima,true);
		$fecha = $array[0];
		foreach($fecha as $f){
		if(count($f)>1){
		foreach($f as $f2){
	 ?>

	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6" hid="1">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-inner"   >

			<h3 class="fecha-descripcion"><?php echo $f2["FechaDescripcion"] ?>
			</h3>

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-data">

				<!--Clima imágen-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/clima/<?php echo $f2['Valores'][0]["IDTipoClima"]; ?>.svg" alt="Imágen Clima" />
				</div>

				<!--Clima datos-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado clima-datos">
					<p><?php echo $f2['Valores'][0]["Tmin"]; ?></p>
					<p> | </p>
					<p><?php echo $f2['Valores'][0]["Tmax"]; ?>
					</p>
					<p><?php echo $f2['Valores'][0]["VelViento"]; ?>
					</p>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-clima">
					<h4><?php echo $f2['Valores'][0]["TipoClima"]; ?></h4>
					<p><?php echo $f2['Valores'][0]["Comentario"]; ?></p>
				</div>

			</div>


		</div>
	</div>
		<?php } } } }else{
		?>

		<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>No se han encontrado informes del clima para la ciudad solicitada. Por favor intente más tarde.
			</p>

		</div>
		</div>
		<?php
	} ?>


</div>
</div>
</div>
<script>
/*$( "#localidad-clima" ).change(function() {
  $("#formClima").submit();
});*/
</script>
