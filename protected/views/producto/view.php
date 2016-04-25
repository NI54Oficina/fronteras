<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que quiere borrar este producto?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
$id=$model->id;

?>


<h1><?php echo $model->nombre; ?></h1>

<?php
$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
	if($imagen){
	?>
	<img style="max-width:400px;max-height:400px;"src="<?php echo Yii::app()->getBaseUrl(true); ?>/imagen/view/<?php echo $imagen->id; ?>"><hr>
	<?php
	
	}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>

<hr>

<h2>Contenido</h2>
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
