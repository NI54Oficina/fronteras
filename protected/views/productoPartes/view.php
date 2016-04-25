<?php
/* @var $this ProductoPartesController */
/* @var $model ProductoPartes */

$this->breadcrumbs=array(
	'Producto Partes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductoPartes', 'url'=>array('index')),
	array('label'=>'Create ProductoPartes', 'url'=>array('create')),
	array('label'=>'Update ProductoPartes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductoPartes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoPartes', 'url'=>array('admin')),
);
?>

<h1>View ProductoPartes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
