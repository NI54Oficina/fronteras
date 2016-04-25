<?php
/* @var $this PpartesRegionalizacionController */
/* @var $model PpartesRegionalizacion */


$this->menu=array(
	array('label'=>'List Partes Regionalizacion', 'url'=>array('index')),
	array('label'=>'Manage Partes Regionalizacion', 'url'=>array('admin')),
);
?>

<h1>Create Partes Regionalizacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>