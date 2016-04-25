<?php
if($code=500){
	$code=404;
}
$auxError= ErrorMsg::model()->findByAttributes(array("codigo"=>$code,"idoma"=>$_SESSION["lng"]));
if($auxError){
	$message= $auxError->texto;
}

?>
<div id="container-error" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div id="container-type-error" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		
		<div id="container-error-title"><div class="point-error"></div><h1>ERROR</h1><div class="point-error"></div></div>

		<div id="error-number">
	
			<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/numeros-error-01.png" alt="" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/numeros-error-02.png" alt="" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/numeros-error-01.png" alt="" />!-->
			<?php 
			$code=strval($code);
			for($a=0;$a<3;$a++){
				$c= $code[$a];
				?>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/numero-error-<?php echo $c; ?>.png" alt="" />
				<?php
			}
			?>

		</div>
		
	</div>
	
	<div id="container-text-error" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	
		<h2><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?></h2>
		
		<div id="error-border"></div>
		
		<div id="error-description">
		
			<p><?php echo CHtml::encode($message); ?></p>
		
		</div>
	
	</div>
	
	
</div>