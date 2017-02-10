   <!-- BigVideo Dependencies -->
   
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->
	
    <script>
		CheckDevice();
	    $(function() {
			if(!isMobile){
				var BV = new $.BigVideo({useFlashForFirefox:false});
				BV.init();
				BV.show('<?php echo Yii::app()->getBaseUrl(true); ?>/video/home1.mp4',{ambient:true});
			}else{
				//$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-bienvenidos.jpg')");
				ScrollHome();
				
			}
	    });
	
	
	$(window).scroll(function() {
		ScrollHome();
	});
	
	function ScrollHome(){
		if(isMobile){
			if (checkVisible($('#titulo-mapa h1'))||checkVisible($('#info-mapa'))) {
				//$('#wrapper').css("background-color", "#4f4");
				console.log("visible");
				$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-filiales.jpg')");
			} else if (checkVisible($('.h1-inst-home'))||checkVisible($('.bienvenidos'))){
				$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-bienvenidos.jpg')");
			} else if (checkVisible($('#titulo-vad'))||checkVisible($('.input-vad'))){
				$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-vademecum.jpg')");
			} else if (checkVisible($('#btn-rev'))){
				$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-revista.jpg')");
			}
		}
		
	}
	
		
    </script>
	
	<div class="container-background-home fadder" vpelement="1" vphelement="100" style="opacity:1;"></div>
	
	<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 content-home fadder" style="display:inline-block;opacity:1;">
	<div class="overlay-video" style="z-index:0;" vpelement="1" vphelement="100" >
	
	</div>
	<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
		<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6" >
		<!-- TEXTO -->
			<div class="general-texto-home-header" >
				<h1 class="h1-home-ev bienvenidos"><?php echo Textos::model()->GetText(1); ?></h1>
			</div>
	
		</div>
	
		<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 redes-home-video">
			<!--<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="color:white;float:left;padding:10px;opacity:0.8;">Español</a>
			<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="color:white;float:left;padding:10px;opacity:0.8;">Portugues</a>!-->
			<?php include('redes-sociales-home-header.php'); ?> 
	
		</div>
		
	</div>
	
	
		
		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:auto; text-align:center" align="center">
			<img style="margin-right: 1%"src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png" alt="logo-bago"  class="logo-blanco" />		
			<div  class="border-video"></div>
		</div>


		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 container-h1-home" style="">
			<h1 class="h1-home-ev row laevolucion" style="text-transform: uppercase;margin-right:0;margin-left:0;margin-top:0;"><?php echo Textos::model()->GetText(2); ?></h1>
			<h1 class="h1-home-ev salud-animal row" style="text-transform: uppercase;margin-right:0;margin-left:0;"><?php echo Textos::model()->GetText(3); ?></h1>
		</div>
		
		<!-- FLECHA -->
		
		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 container-flecha" style=""><p id="arrowdown" class="scroll-down" style="display:inline-block;"><a href="#complements" class="animate"></a></p></div>
		</div>
		<!-- TEXTO  PRIMERA SECCION-->
		<script>
		isHome=true;
		</script>
		<style>
		#navbar-main{
			display:none;
		}
		video{width:100% !important;}
		</style>
		<?php include('header.php'); ?>
		<div class="general-texto-home-header div-inst fadder" id="complements" style="opacity:1;">

			<h1  class="h1-inst-home" ><img class="img-punto-home" src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-home.png"  style="margin-right:8px;text-transform: uppercase;"/><?php echo Textos::model()->GetText(5);?></h1>
			<img   class="img-punto-home" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/punto-home.png"  /><br>
			<div class="border-inst"></div><br>
			<p  class="p-inst-home"></br></p>
			
		</div>

	
	
	
<!-- <img   class="img-punto-home" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/punto-home.png"  /> -->