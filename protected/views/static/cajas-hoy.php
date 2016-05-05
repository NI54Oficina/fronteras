
<!-- Tres cajas (mercado, clima, noticias del sector)-->
<div class="box-mercado-clima-noticias col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<!-- Mercado -->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>Mercados</p>
			<h3>Dólar oficial</h3>
			
			<!-- Compra & venta -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<!--Compra-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<h4>Compra</h4>
					<p>$14,400</p>
				</div>
			
				<!--Venta-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<h4>Venta</h4>	
					<p>$14,400</p>				
				</div>
				
			</div>
			
			<!-- Ampliar -->
			<h5><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/mercados">Ampliar</a></h5>
			
		</div>
	</div>
	
	<!-- Clima -->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Buenos Aires</h3>
			<h4>- Miércoles 17 - </h4>
			
			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<!--Clima imágen-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/clima-img.png" alt="Imágen Clima" />
				</div>
			
				<!--Clima datos-->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 small-boxes-mercado">
					<p>18º / 26º</p>	
					<p>Nublado</p>				
				</div>
				
			</div>			
			<!-- Ampliar -->
			<h5><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/clima">Ampliar</a></h5>
		</div>
	</div>	
	
	<!-- Noticias del sector -->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<a href=" <?php echo Yii::app()->getBaseUrl(true); ?>/noticias">
				
				<!--Contenedor título e imágen -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-noticias-sector">
					
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