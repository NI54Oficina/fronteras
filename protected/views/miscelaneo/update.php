<?php
/* @var $this MiscelaneoController */
/* @var $model Miscelaneo */

$this->breadcrumbs=array(
	'Miscelaneos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Miscelaneo', 'url'=>array('index')),
	array('label'=>'Create Miscelaneo', 'url'=>array('create')),
	array('label'=>'View Miscelaneo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Miscelaneo', 'url'=>array('admin')),
);
?>

<h1>Update Miscelaneo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>