<?php
/* @var $this EstablecimientoController */
/* @var $model Establecimiento */

$this->breadcrumbs=array(
	'Establecimientos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Establecimiento', 'url'=>array('index')),
	array('label'=>'Create Establecimiento', 'url'=>array('create')),
	array('label'=>'View Establecimiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>Update Establecimiento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>