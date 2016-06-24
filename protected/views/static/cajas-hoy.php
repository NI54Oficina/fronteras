
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

	$dataMercado = @file_get_contents('http://webservice.fyo.com/PortalIndEconomicosHomeProcedure.svc/agrupado',false,$context);
	$col=0;
	if($dataMercado){
	$array = json_decode($dataMercado,true);
	$item= $array[0];
	?>

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/mercados" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="1">
		<div class="maxbox-mercados maxboxes-inner col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="6">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hoy-box-upper" hid="5">
		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="4">
			<p>- Mercados -</p>
		</div>


			<!-- Compra & venta -->
			<div class="mercados-moneda col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="h3-merc">Indicadores</h3>
			<h3 class="h3-merc">Ganado</h3>
			<h3 class="h3-merc">Monedas</h3>
			<h3 class="h3-merc">Granos</h3>
				<!--Compra-->
				<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<h4>Compra</h4>
					<p>$<?php echo $item["Items"][0]["Compra"]; ?></p>
				</div>-->

				<!--Venta-->
				<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado" hid="3">
					<h4>Venta</h4>
					<p>$<?php echo $item["Items"][0]["Venta"]; ?></p>
				</div>-->

			</div>
			</div>
			<!-- Ampliar -->

			<div class="maxbox-ampliar col-lg-12 col-md-12 col-sm-12 col-xs-12"hid="4"  >

			<h5><br>+</h5>
			</div>

		</div>

	</div>
	</a>



	<?php } ?>
	<?php include("session-clima.php"); ?>
	<!-- Clima -->
	<?php
	if($dataClima){

		$array = json_decode($dataClima,true);
		$fecha = $array[0];
		foreach($fecha as $f){
		if(count($f)>1){
		foreach($f as $f2){
	 ?>
	 <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/clima" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="1">
		<div class="maxbox-clima maxboxes-inner  col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="6">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hoy-box-upper" hid="5">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="2" style="margin-bottom: 5%;">
			<h4>-  <?php echo $f2["FechaDescripcion"] ?>  -</h4>


		</div>

			<!-- Clima datos & clima imágen -->
			<div class="clima-pronostico  col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="3">
					<h3><?php  echo $localidades[$localidad]; ?></h3>
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
			</div>
			<!-- Ampliar -->
			<div class="maxbox-ampliar col-lg-12 col-md-12 col-sm-12 col-xs-12"hid="4"  >
				<h5><br>+</h5>
			</div>

		</div>
	</div>
	</a>



	<?php break; ?>
	<?php } } }}?>



	<!-- Noticias del sector -->
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/noticias" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="1">


		<div class="maxbox-noticias maxboxes-inner  col-lg-12 col-md-12 col-sm-12 col-xs-12 " hid="6">





		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector " >


				<!-- HARDCODEO DE MOMENTO - HAY QUE EDITARLO -->
					<!-- Imágen-->
					<img class="" style="margin-top:20%;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/noticias-sector.png" alt="Noticias Sector" />

					<br />
		</div>
					<!--Título-->


					<h4 hid="4" >
					Noticias </br> del sector
					</h4>


	</div>
	</div>
</a>
</div>
