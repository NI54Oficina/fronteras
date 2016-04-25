<!DOCTYPE HTML>
<?php $lang="";
	if(!isset($_SESSION["lng"])){
		$lang="es";
	}else{
		$lang=  $_SESSION["lng"];
	} ?>
<html lang="<?php echo $lang; ?>">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<meta name="description" content="Biogénesis Bagó es una empresa de biotecnología que investiga, elabora y comercializa productos y servicios veterinarios, destinados a asegurar la salud y mejorar la productividad de los rodeos de carne y leche">
	
	
	<?php
	
	$metas= MetatagPage::model()->findAllByAttributes(array('idPage'=>$data));	
	
	
	if($metas){
	foreach($metas as $m){
		$code= Metatag::model()->findByPk($m->idMetatag);
		$variable=$m->dat;
		/*$variable= Textos::model()->findByPk($variable);
		if($variable){
			$variable= $variable[$lang];
		}else{
			$variable="";
		}*/
		$variable= Textos::model()->GetText($variable,$lang);
		if($code){
			$code=$code->code;
			$code= str_replace("[variable]",$variable,$code);
			echo $code;
		}
	}
	}
	
	?>
	

	<!--FAV ICON-->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" rel="shortcut icon" />
<!--	<meta property="og:title" content="Biogénesis Bagó Facebook Pagina Oficial " /> 
	<meta property="og:url" content="https://www.facebook.com/BiogenesisBago/" >

}-->
	<!--JQUERY-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"/></script>!-->
   <!-- <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>!-->
	
	<!-----BOOTSTRAP-->
		
		<!--CSS-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
		

		<!--JS-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		

		
	<!--PARALLAX SKROLLR-->
		
		<!--CSS-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-parallax.css">
		<!--<link rel="stylesheet prefetch" href="http://iprodev.github.io/Scrollax.js/assets/css/main.css">-->
		<!--<link rel="stylesheet" href="http://codepen.io/assets/reset/normalize.css">!-->
		<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style>
		<!-- TERMINA CSS PARALLAX-->
		
		<!--JS-->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scrollax.min.js "></script>
		<!--<link rel="alternate" type="application/json+oembed" href="http://codepen.io/api/oembed?url=http://codepen.io/iprodev/pen/rVPrdr&amp;format=json" title="Background Smooth Parallax Effect">
		<script type="text/javascript">
			jQuery(document).ready(function($){
				'use strict';
				$.Scrollax();
			});
		</script>!-->
		<script>
			window.console = window.console || function(t) {};
		</script> <!-- TERMINA JS PARALLAX-->
		
	<!-- TERMINA  PARALLAX-->
		
	<!--LINEA DE TIEMPO-->
	
		<!--CSS-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/linea-tiempo.css">
		
		<!--JS-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script> 

		
	<!-- JS PROPIO -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js "></script>
	
	<!--CSS PROPIO-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheet.css"> <!-- general / interior pagina -->

		<script>
		$(document).ready(function () {
			
			$("body").on("click",".link-menu",function(evt){
				var attr = $(this).attr('down');
				var blank=false;
				// For some browsers, `attr` is undefined; for others,
				// `attr` is false.  Check for both.
				if (typeof attr !== typeof undefined && attr !== false) {
					eval(attr);
				}
				if (typeof CheckSub !== 'undefined' && $.isFunction(CheckSub)) {
					CheckSub();
				}
				attr = $(this).attr('target');
				if (typeof attr !== typeof undefined && attr !== false) {
					if(attr=="_blank"){
						blank=true;
					}
				}
				if (evt.ctrlKey||blank){
					window.open($(this).attr("href"));
				}else{
					
					window.location= $(this).attr("href");
				}
			});
		});
		</script>
	
