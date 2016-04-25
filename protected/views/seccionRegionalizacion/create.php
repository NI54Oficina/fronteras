<?php
/* @var $this SeccionRegionalizacionController */
/* @var $model SeccionRegionalizacion */

$this->breadcrumbs=array(
	'Seccion Regionalizacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeccionRegionalizacion', 'url'=>array('index')),
	array('label'=>'Manage SeccionRegionalizacion', 'url'=>array('admin')),
);
?>

<h1>Create SeccionRegionalizacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>