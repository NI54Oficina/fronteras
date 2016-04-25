<?php
/* @var $this MiscelaneoController */
/* @var $model Miscelaneo */

$this->breadcrumbs=array(
	'Miscelaneos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Miscelaneo', 'url'=>array('index')),
	array('label'=>'Manage Miscelaneo', 'url'=>array('admin')),
);
?>

<h1>Create Miscelaneo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>