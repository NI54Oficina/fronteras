<script>
isHome=true;
</script>
<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); ?>

 <?php include ('splash-home.php'); ?>

<body class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 ">


<section id="home"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 fadder">

<?php include_once("analytics.php") ?>


	<div class="home-upper-box col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12">

		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
 			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-fronteras.png" alt="Logo Fronteras">

 			<img class="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" alt="Logo Bago " />

 		</div>
 	</div>

 	<div class="home-bottom-box col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">

 	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/hoy">

 		<div class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">

			<div class="hoy-box square">
				<div hid="1">
					<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-hoy.svg" alt="Hoy" />
				</div>
				<p>Hoy</p>
			</div>
		</div>
	</a>

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/estemes">

 		<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">
 			<div class="estemes-box square ">
 				<div hid="1">
 					<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes.svg" alt="Este Mes" />


 				</div>
				<p>Este mes</p>
 			</div>

		</div>
  	</a>

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/producir">
		<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">
 			<div class="producir-box square">
 				<div hid="1">
 					<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-producir.png" alt="Chat" /> -->
 				</div>
				<p>Producir +</p>
 			</div>

		</div>

	</a>

	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/ayuda">
		<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">
 			<div class="ayuda-box square">
 				<div hid="1">
 					<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-chat.svg" alt="Chat" />
 				</div>
				<p>Ayuda</p>
 			</div>

		</div>
	</a>
	 </div>


</section>

</body>


	<!-- FOOT -->
	<?php include ('foot.php'); ?>

<!-- LOADING IN HOME -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 loader loader-home">

		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 loading-gif ">
			 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading2.gif">
		</div>

</div>

<!--  TERMINA LOADING HOME -->


</html>
