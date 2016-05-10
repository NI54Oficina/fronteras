
<!-- General cajas clima-->
<div class="box-clima col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<!-- Clima -->
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" hid="1">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-clima">
			
				
				<form method="post" id="formClima">
				<?php include("selector-localidades.php"); ?>
			</form>
		</div>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clima-title">
			
				<h1 class="center-to-parent">CLIMA</h1>
			
		</div>
		
	</div>
	
	<!-- Clima 2-->
	<?php 
	if($data){
		
		$array = json_decode($data,true);
		$fecha = $array[0];
		foreach($fecha as $f){
		if(count($f)>1){
		foreach($f as $f2){
	 ?>
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="1">
			<h3 class="fecha-descripcion"><?php echo $f2["FechaDescripcion"] ?>
			</h3>
			
			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<!--Clima imágen-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/clima/<?php echo $f2['Valores'][0]["IDTipoClima"]; ?>.svg" alt="Imágen Clima" />
				</div>
			
				<!--Clima datos-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<p><?php echo $f2['Valores'][0]["Tmin"]; ?></p><p> | </p><p><?php echo $f2['Valores'][0]["Tmax"]; ?></p>	
					<p><?php echo $f2['Valores'][0]["VelViento"]; ?></p>				
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
			<p>No se han encontrado informes del clima para la ciudad solicitada. Por favor intente más tarde.</p>
			
			</div>
		</div>
		<?php
	} ?>
</div>
<script>
$( "#localidad" ).change(function() {
  $("#formClima").submit();
});
</script>