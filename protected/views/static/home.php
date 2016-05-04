<?php include('head-index.php'); ?>

<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); ?>


<body class="col-lg-12" id="home">
<!-- <?php include_once("analytics.php") ?>
 -->


	<div class="home-upper-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
 			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-fronteras.png" alt="Logo Fronteras">

 			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" alt="Logo Bago " />

 		</div>
 	</div>

 	<div class="home-bottom-box col-lg-12 col-md-12 col-sm-12 col-xs-12">

 	<a href="#">

 		<div class="home-box col-lg-3 col-md-3 col-sm-6 col-xs-12">

			<div class="hoy-box square">
				<div hid="1">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-hoy.svg" alt="Hoy" />
				</div>
				<p>Hoy</p>		
			</div>
		</div>	
	</a>

	<a href="">
 		
 		<div  class="home-box col-lg-3 col-md-3 col-sm-6 col-xs-12">	
 			<div class="estemes-box square ">
 				<div hid="1">
 					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes.svg" alt="Este Mes" />


 				</div>
				<p>Este mes</p>
 			</div>
		
		</div>
  	</a>

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/producir">
		<div  class="home-box col-lg-3 col-md-3 col-sm-6 col-xs-12">	
 			<div class="producir-box square">
 				<div hid="1">
 					<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-producir.png" alt="Chat" /> -->
 				</div>
				<p>Producir +</p>
 			</div>
		
		</div>

	</a>

	<a href="">
		<div  class="home-box col-lg-3 col-md-3 col-sm-6 col-xs-12">	
 			<div class="ayuda-box square">
 				<div hid="1">
 					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-chat.svg" alt="Chat" />
 				</div>
				<p>Ayuda</p>
 			</div>
		
		</div>
	</a>
	 </div> 	




	
</body>

	<!-- FOOT -->
	<?php include ('foot.php'); ?>


</html>