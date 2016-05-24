<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notas', 'url'=>array('index')),
	array('label'=>'Manage Notas', 'url'=>array('admin')),
);
?>

<h1>Crear Notas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>