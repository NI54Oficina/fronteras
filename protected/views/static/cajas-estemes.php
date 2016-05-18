
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

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/mercados" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12 square" hid="1">
		<div class="maxbox-remgenerales maxboxes-inner-estemes  col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="6">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector " hid="5">
				<!-- Imágen-->
				<img class="center-to-parent estemes-img"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes-02.svg" alt="Noticias Sector" />
				<br />
			</div>
			
			<!--Título-->
			<h2 hid="4" >Remates generales</h2>
		

		</div>

	</div>
	</a>

	
	
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
	 <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/clima" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12 square" hid="1">
		<div class="maxbox-remcabania maxboxes-inner-estemes  col-lg-12 col-md-12 col-sm-12 col-xs-12" hid="6">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector " hid="5">
				<!-- Imágen-->
				<img class="center-to-parent estemes-img" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes-01.svg" alt="Noticias Sector" />
				<br />
			</div>
			
			<!--Título-->
			<h2 hid="4" >Remates cabañas</h2>
		

		</div>
	</div>	
	</a>
	


	<?php break; ?>
	<?php } } }}?>


	
	<!-- Noticias del sector -->
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/noticias" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="maxboxes col-lg-12 col-md-12 col-sm-12 col-xs-12 square" hid="1">

		<div class="maxbox-checkbox maxboxes-inner-estemes col-lg-12 col-md-12 col-sm-12 col-xs-12 " hid="6">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector " hid="5">
				<!-- Imágen-->
				<img class="center-to-parent estemes-img" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes-03.svg" alt="Noticias Sector" />
				<br />
			</div>
			
			<!--Título-->
			<h2 hid="4" >Checkbox</h2>
		

		</div>	
		
	</div>
</a>
</div>