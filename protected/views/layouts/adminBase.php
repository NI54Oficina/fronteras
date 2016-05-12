<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropzone.css">
	
	
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/datatables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/summernote/summernote.css">
 
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css">

	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js"></script>
	
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/summernote/summernote.min.js"></script>
	
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/ckeditor/ckeditor.js"></script>!-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.js"></script>
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/datatables/datatables.js"></script>


	<title>Biogénesis Bagó</title>
</head>

<body >

<div class="row main-row">



<div class="loading"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif"></div>
<div class="col-md-2"></div>


<div class="col-md-10 fadder" style="display:inline-block;padding-left:40px;padding-right:40px;">

	

	<?php echo $content; ?>

	<div class="clear"></div>
	<div id="footer"></div>
	
</div><!-- page -->

<script>
$(document).ready(function(){
	var baseUrl="<?php echo Yii::app()->getBaseUrl(true); ?>/";
	var hPort= ($(window).height()/2)-100;
	var controlPressed=false;
	$(".loading img").css("margin-top",hPort+"px");
	
	$( "body" ).keydown(function( event ) {
		if ( event.which == 17 ) {
			controlPressed=true;
			
		}
	});
	
	$( "body" ).keyup(function( event ) {
		if ( event.which == 17 ) {
			controlPressed=false;
		}
	});
	
	$("body").on("click",".item",function(){
		console.log($(this).attr("src"));
		
		if(typeof $(this).attr("src") === 'undefined'){
			$(this).find("~.item-list").eq(0).toggle(100);
		}else{
			if(!controlPressed){
				window.location= baseUrl+$(this).attr("src");
			}else{
				window.open(baseUrl+$(this).attr("src"),'_blank');
			}
		}
		//
	});
});
</script>
</div>
</body>
</html>
