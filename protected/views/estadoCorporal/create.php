<?php
/* @var $this EstadoCorporalController */
/* @var $model EstadoCorporal */

$this->breadcrumbs=array(
	'Estado Corporals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoCorporal', 'url'=>array('index')),
	array('label'=>'Manage EstadoCorporal', 'url'=>array('admin')),
);
?>

<h1>Create EstadoCorporal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>