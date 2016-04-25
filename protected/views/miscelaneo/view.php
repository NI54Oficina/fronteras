<?php
/* @var $this MiscelaneoController */
/* @var $model Miscelaneo */

$this->breadcrumbs=array(
	'Miscelaneos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Miscelaneo', 'url'=>array('index')),
	array('label'=>'Create Miscelaneo', 'url'=>array('create')),
	array('label'=>'Update Miscelaneo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Miscelaneo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Miscelaneo', 'url'=>array('admin')),
);
?>

<h1>View Miscelaneo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'key',
		'value',
	),
)); ?>
