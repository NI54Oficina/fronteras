			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(14); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nuestras-plantas-oscura-01.png" style="width:100vw;" />	
			</div>
			
<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	
<div id="plantas-transicion" class="fadder">

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div  class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa">Tour Biogenesis 360 °</h2>	
		<div id="barra-institucional"></div>
		</div>
	</div>
	</div>
	
<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">

	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:0;">
	
	<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text inner-text-2" style="text-shadow:none;padding-top:0;margin-bottom:3%;">	
		
		
		
		
	
		<div  class="  col-lg-6 col-md-6 col-sm-12 col-xs-12 inner-text container-lista-360" style="text-shadow:none;padding-top:0;margin-bottom:2.5%;" id="360-inside">	
			<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vista/exterior" target="_blank">
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen-360-exterior.png"  />
			</a>
		</div>
	
		<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner-text container-lista-360" style="text-shadow:none;padding-top:0;margin-bottom:2.5%;">	
			<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vista/camara" target="_blank">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen-360-camara.png"  />
			</a>
		</div>

		<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner-text container-lista-360" style="text-shadow:none;padding-top:0;margin-bottom:2.5%;">	
			<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vista/empaque" target="_blank">
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen-360-empaque.png"/>
		
		</div>

		<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner-text container-lista-360" style="text-shadow:none;padding-top:0;margin-bottom:2.5%;">	
			<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vista/sala" target="_blank">
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen-360-sala.png"  />
			</a>
		</div>

		<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner-text container-lista-360" style="text-shadow:none;padding-top:0;margin-bottom:2.5%;">	
			<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vista/pasillo" target="_blank">
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen-360-pasillo.png"  />
			</a>
		</div>		
		</div>
		</div>
	</div>
</div>		
	<?php include('widget.php'); ?>
	
	<script type="text/javascript">
		$(document).ready(function(){
		$("#plantas-transicion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "4s",
			windowarea: "50%"
		}); 
		
		});
	</script>