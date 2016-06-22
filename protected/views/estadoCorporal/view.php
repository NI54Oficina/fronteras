<?php
/* @var $this EstadoCorporalController */
/* @var $model EstadoCorporal */

$this->breadcrumbs=array(
	'Estado Corporals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EstadoCorporal', 'url'=>array('index')),
	array('label'=>'Create EstadoCorporal', 'url'=>array('create')),
	array('label'=>'Update EstadoCorporal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EstadoCorporal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoCorporal', 'url'=>array('admin')),
);
?>

<h1>View EstadoCorporal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'raza',
		'estado',
		'indice',
		'info',
		'grafica',
	),
)); ?>
