<?php include('head-index.php'); ?>

<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); ?>


<body style="width: 100%;  text-align: center; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/logo-fronteras.png);"  id="home">
<!-- <?php include_once("analytics.php") ?>
 -->



	<div class="home-upper-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
 		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-fronteras.png" alt="Logo Fronteras">
 		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" alt="Logo Bago " />
 	</div>

 	<div class="home-bottom-box col-lg-12 col-md-12 col-sm-12 col-xs-12">

 		<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">

			<div class="hoy-box">
				<div>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-hoy.svg" alt="Hoy" />
				</div>
				<div></div>		
			</div>
		</div>	

 		
 		<div  class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">	
 			<div class="estemes-box ">
 				<div>
 					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-estemes.svg" alt="Este Mes" />


 				</div>
				<div></div>
 			</div>
		
		</div>


		<div  class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">	
 			<div class="producir-box ">
 				<div></div>
				<div></div>
 			</div>
		
		</div>

		<div  class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">	
 			<div class="ayuda-box">
 				<div>
 					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-chat.svg" alt="Chat" />
 				</div>
				<div></div>
 			</div>
		
		</div>

	 </div> 	




	
</body>

	<!-- FOOT -->
	<?php include ('foot.php'); ?>


</html>