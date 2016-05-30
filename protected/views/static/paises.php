<?php 
$toGo=$_SERVER['SERVER_NAME']."/".$_SESSION['webRoot'];
$toGo= str_replace("//","/",$toGo);
header("Location: http://".$toGo);
if(false){ ?>
	<!-- VIDEO-->
		<!--JS-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/BigVideo/css/bigvideo.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/modernizr/modernizr-2.5.3.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/video.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/BigVideo/lib/bigvideo.js"></script>
</head>
<body>
<?php include_once("analytics.php") ?>
   <!-- BigVideo Dependencies -->
    
	<div style="width:100vw; min-height:100vh; z-index:10; position:relative;"> 
    <!-- BigVideo -->
    <div class="container-background-home" vpelement="1" vphelement="100"></div>

    <!-- Demo -->

     <script>
	 CheckDevice();
	    $(function() {
            if(!isMobile){
				var BV = new $.BigVideo({useFlashForFirefox:false});
				BV.init();
				BV.show('<?php echo Yii::app()->getBaseUrl(); ?>/video/home1.mp4',{ambient:true});
			}else{
				$(".container-background-home").css("background-image","url('<?php echo Yii::app()->getBaseUrl(true); ?>/img/fondo-bienvenidos.jpg')");
				//ScrollHome();
				
			}
	    });
    </script>
	<style>
	video{width:100% !important;}
	</style>

<div class="overlay-video" style="z-index:0;">
	
	</div>

	<!-- PAÍSES -->
	<div id="epigrafe-mobile"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png" style=""/></div>
	<p id="epigrafe-paises" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">LA EVOLUCIÓN DE LA <span style="color:#79C8EE;text-align: center; line-height: 35px;">SALUD ANIMAL</span></p>
	
	
	<div class="col-lg-1"></div>
	<div id="paises-home" class="col-lg-12 col-md-12 " style="color:white;margin-top:5%;">
	
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><p>Argentina</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/5/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><p>Bolivia</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/pt" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><p>Brasil</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/10/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><p>Costa Rica</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/11/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><p>Ecuador</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/12/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><p>El Salvador</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/13/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><p>Guatemala</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/14/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><p>Honduras</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/6/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><p>México</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/15/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><p>Nicaragua</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a	href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/16/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><p>Panamá</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a 	href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/17/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><p>Paraguay</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/18/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><p>Perú</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/19/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><p>Rep. Dominicana</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/20/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><p>Uruguay</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/21/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><p>Venezuela</p></a></div>
			
			<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 25px; padding-left: 70px;">
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" id="english-v-linea"></div>
				<a style="color:white;font-family:'arialregular';" href="<?php echo Yii::app()->getBaseUrl(true); ?>/en"><p style="display: inline-block;margin: 0;margin-top: 13px; margin-left: -40px; font-size: 15px; padding-bottom: 20px;">English version</p></a>
	</div>
</div>
</div>	
</body>
<?php } ?>