<?php
/* @var $this ProtocoloController */
/* @var $model Protocolo */

$this->breadcrumbs=array(
	'Protocolos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Protocolo', 'url'=>array('index')),
	array('label'=>'Create Protocolo', 'url'=>array('create')),
	array('label'=>'Update Protocolo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Protocolo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Protocolo', 'url'=>array('admin')),
);
?>

<h1>View Protocolo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'dia0',
		'dia7',
		'dia8',
		'dia9',
		'dia10',
		'prioridad',
	),
)); ?>
