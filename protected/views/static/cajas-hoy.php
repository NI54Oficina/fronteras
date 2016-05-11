
<!-- Tres cajas (mercado, clima, noticias del sector)-->
<div class="box-mercado-clima-noticias col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<!-- Mercado -->
	<?php
	
	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://webservice.fyo.com/PortalIndEconomicosHomeProcedure.svc/agrupado',false,$context);
	$col=0;
	if($data){
	$array = json_decode($data,true);
	$item= $array[0];
	?>
	<div class="maxboxes col-lg-4 col-md-4 col-sm-6 col-xs-12" hid="1">
		<div class="maxbox-mercados maxboxes-inner col-lg-12 col-md-12 col-sm-12 col-xs-12">


		<div class="boxhoy-mercados col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="2">
			<p>Mercados</p>
			<h3>Dólar oficial</h3>
		</div>	


			<!-- Compra & venta -->
			<div class="mercados-moneda col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<!--Compra-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<h4>Compra</h4>
					<p>$<?php echo $item["Items"][0]["Compra"]; ?></p>
				</div>
			
				<!--Venta-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado" hid="3">
					<h4>Venta</h4>	
					<p>$<?php echo $item["Items"][0]["Venta"]; ?></p>				
				</div>
				
			</div>
			
			<!-- Ampliar -->
			<div class="maxbox-ampliar col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h5 class="center-to-parent"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/mercados">Ampliar</a></h5>
			</div>
			
		</div>
	</div>
	
	<?php } ?>
	<?php include("session-clima.php"); ?>
	<!-- Clima -->
	<?php 
	if($data){
		
		$array = json_decode($data,true);
		$fecha = $array[0];
		foreach($fecha as $f){
		if(count($f)>1){
		foreach($f as $f2){
	 ?>
	<div class="maxboxes col-lg-4 col-md-4 col-sm-6 col-xs-12" hid="1">
		<div class="maxbox-clima maxboxes-inner  col-lg-12 col-md-12 col-sm-12 col-xs-12">


		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="2">
			<h3><?php  echo $localidades[$_SESSION["localidad"]]; ?></h3>
			<h4>-  <?php echo $f2["FechaDescripcion"] ?>  -</h4>
		</div>

			<!-- Clima datos & clima imágen -->
			<div class="clima-pronostico  col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="3">
				
				<!--Clima imágen-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/clima/<?php echo $f2['Valores'][0]["IDTipoClima"]; ?>.svg" alt="Imágen Clima" />
				</div>
			
				<!--Clima datos-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<p><?php echo $f2['Valores'][0]["Tmin"]; ?> / <?php echo $f2['Valores'][0]["Tmax"]; ?></p>	
					<p><?php echo $f2['Valores'][0]["TipoClima"]; ?></p>				
				</div>
				
			</div>			
			<!-- Ampliar -->
			<div class="maxbox-ampliar col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<h5 class="center-to-parent"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/clima">Ampliar</a></h5>
			</div>

		</div>
	</div>	
	<?php break; ?>
	<?php } } }}?>


	
	<!-- Noticias del sector -->
	<div class="maxboxes col-lg-4 col-md-4 col-sm-6 col-xs-12" hid="1">
		

		<div class="maxbox-noticias maxboxes-inner  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		<div class="center-to-parent">
		<a href="" class="">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		

		<a href="javascript:void(0)"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<a href=" <?php echo Yii::app()->getBaseUrl(true); ?>/noticias">

				
				<!--Contenedor título e imágen -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector ">
					
					<!-- Imágen-->
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/noticias-sector.png" alt="Noticias Sector" />
					
					<br />
					
					<!--Título-->
					<h4>Noticias del sector</h4>
					
				</div>
			
		</a>
		
		</div>
		</div>
	</div>	

</div>