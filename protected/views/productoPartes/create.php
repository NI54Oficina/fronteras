<?php
/* @var $this ProductoPartesController */
/* @var $model ProductoPartes */

$this->breadcrumbs=array(
	'Producto Partes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoPartes', 'url'=>array('index')),
	array('label'=>'Manage ProductoPartes', 'url'=>array('admin')),
);
?>

<h1>Create ProductoPartes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>