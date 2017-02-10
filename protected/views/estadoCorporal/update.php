<?php
/* @var $this EstadoCorporalController */
/* @var $model EstadoCorporal */

$this->breadcrumbs=array(
	'Estado Corporals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoCorporal', 'url'=>array('index')),
	array('label'=>'Create EstadoCorporal', 'url'=>array('create')),
	array('label'=>'View EstadoCorporal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EstadoCorporal', 'url'=>array('admin')),
);
?>

<h1>Update EstadoCorporal <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>