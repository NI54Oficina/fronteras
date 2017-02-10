<!--FAV ICON-->
	<link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" rel="shortcut icon" />

		
		<!--CSS-->
		<link type="text/css"  rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
		<link type="text/css"  rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom-icons.css">
		

		<!--JS-->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		


		<script>
			window.console = window.console || function(t) {};
		</script> <!-- TERMINA JS PARALLAX-->
		
	
		<!--JS-->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile-events.min.js"></script>
		 

		
	<!-- JS PROPIO -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js "></script>
	
	<!--CSS PROPIO-->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheet.css"> <!-- general / interior pagina -->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xl.css"> <!-- sp -->
		<link type="text/css"  rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lg.css"> <!-- lg -->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/md.css"> <!-- md -->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sm.css"> <!-- sm -->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xs.css"> <!-- xs -->
		<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sp.css"> <!-- sp -->


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