<?php
/* @var $this ProductoController */
/* @var $model Producto */


$this->menu=array(
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que quiere borrar este producto?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
$id=$model->id;

$seccion=Seccion::model()->findByPk($model->seccion)->nombre;
		$imagenSeccion=strtolower($seccion);
		$imagenSeccion=str_replace('ó',"o",$imagenSeccion);
		$imagenSeccion=str_replace('é',"e",$imagenSeccion);
		$imagenSeccion=str_replace('á',"a",$imagenSeccion);
		$imagenSeccion=str_replace('í',"i",$imagenSeccion);
		$imagenSeccion=str_replace('ú',"u",$imagenSeccion);
		$seccionImage=  str_replace(' ',"-",$imagenSeccion).".png";

?>

<div><img src="<?php echo Yii::app()->getBaseUrl(true).'/images/'.$seccionImage; ?>" style="display:inline-block;width:25px; margin-top:-14px;" /><h2 style="font-family:Arial;font-weight:bold;font-size:30px;color:#404040;background-color:transparent;display:inline-block;padding-left:5px;"><?php echo $seccion; ?></h2></div>

<div style="border-bottom:1px;border-bottom-style:solid;border-bottom-color:#646464;margin-bottom:30px;"></div>

<?php
$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));

	?>
	<img style="max-width:200px;max-height:400px;width:49%"src="<?php echo Yii::app()->getBaseUrl(true); ?>/imagen/<?php echo $imagen->id; ?>">
	
	<div class="targets">
	<?php
	$target= $model->target;
	if($target[0]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/caballo.png">';
	}else{
		//echo '<img src="images/caballo.png" style="opacity:0.2;">';
	}
	if($target[1]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/cabra.png">';
	}else{
		//echo '<img src="images/cabra.png" style="opacity:0.2;">';
	}
	if($target[2]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/chancho.png">';
	}else{
		//echo '<img src="images/chancho.png" style="opacity:0.2;">';
	}
	if($target[3]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/conejo.png">';
	}else{
		//echo '<img src="images/conejo.png" style="opacity:0.2;">';
	}
	if($target[4]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gallina.png">';
	}else{
		//echo '<img src="images/gallina.png" style="opacity:0.2;">';
	}
	if($target[5]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/perro.png">';
	}else{
		//echo '<img src="images/perro.png" style="opacity:0.2;">';
	}
	if($target[6]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gato.png">';
	}else{
		//echo '<img src="images/gato.png" style="opacity:0.2;">';
	}
	if($target[7]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/oveja.png">';
	}else{
		//echo '<img src="images/oveja.png" style="opacity:0.2;">';
	}
	if($target[8]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/pez.png">';
	}else{
		//echo '<img src="images/pez.png" style="opacity:0.2;">';
	}
	if($target[9]!=0){
		echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/vaca.png">';
	}else{
		//echo '<img src="images/vaca.png" style="opacity:0.2;">';
	}
	
	?>
	</div>
	
	<style>
	.targets{
		width:49%;
		max-width:200px;
		display:inline-block;
		float:right;
	}
	.targets img{
		width:35%;
	}
	</style>


<h3 style="font-family:'DaxlineBlack';"><?php echo $model->nombre; ?></h3>


<?php

$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));

foreach($contenidos as $contenido){
	?><div>
	<h3><?php echo ProductoPartes::model()->findByPk($contenido->parte)->nombre; ?></h3>
	<p><?php echo $contenido->text; ?></p>
	</div>
	<?php
}

?>
