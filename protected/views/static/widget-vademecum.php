<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-desktop hidden-sm hidden-xs" id="table-vad" style="height:auto;overflow:hidden;text-align:left;">
	<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" style="float:right;">
	
	<form action="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/search/" method="post" style="float:right;width:96%;">

	<input type="text" class="buscador" name="arg" style="" />

	<button  id="btn-buscador-vademecum" style="width:10%;margin-left:1%;background-size:90% auto; background-position:right; margin-top: -5px;">
		
	</button>
	</form>
	<?php $secciones=[1,6,3,4,2,5,9,11,7,10,8];

	foreach($secciones as $value){
		$auxProducto= Producto::model()->findByAttributes(array('seccion'=>$value,"pais"=>$pais));
		if($auxProducto){
			
		
		?>
		<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" >
		<img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/<?php 
		if($value==$idSeccion){
			echo "gotas-menu-chico-".$normalizado.".png";
		}else{
			echo 'widget-vademecum.png';
		}
		?>" alt="quienes somos" />

		</div>

		<div id="menu-vademecum">

		<a  href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id<?php echo $value; ?>">
		<p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion($value); ?>
		</p>
		</a>
		</div>	

	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;">
		
	</div>
	</div>
		<?php
	}
	}
	?>
	</div>
</div>