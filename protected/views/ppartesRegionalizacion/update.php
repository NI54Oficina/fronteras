<?php
/* @var $this PpartesRegionalizacionController */
/* @var $model PpartesRegionalizacion */


$this->menu=array(
	array('label'=>'List Partes Regionalizacion', 'url'=>array('index')),
	array('label'=>'Create Partes Regionalizacion', 'url'=>array('create')),
	array('label'=>'View Partes Regionalizacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Partes Regionalizacion', 'url'=>array('admin')),
);
?>

<h1>Update Partes Regionalizacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>