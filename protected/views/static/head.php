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

		
		<!--CSS-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
		

		<!--JS-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		


		<script>
			window.console = window.console || function(t) {};
		</script> <!-- TERMINA JS PARALLAX-->
		
	
		<!--JS-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		 

		
	<!-- JS PROPIO -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js "></script>
	
	<!--CSS PROPIO-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheet.css"> <!-- general / interior pagina -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lg.css"> <!-- lg -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/md.css"> <!-- md -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sm.css"> <!-- sm -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xs.css"> <!-- xs -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sp.css"> <!-- sp -->

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
	
