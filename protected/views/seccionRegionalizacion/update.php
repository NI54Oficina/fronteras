<?php
/* @var $this SeccionRegionalizacionController */
/* @var $model SeccionRegionalizacion */

$this->breadcrumbs=array(
	'Seccion Regionalizacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeccionRegionalizacion', 'url'=>array('index')),
	array('label'=>'Create SeccionRegionalizacion', 'url'=>array('create')),
	array('label'=>'View SeccionRegionalizacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeccionRegionalizacion', 'url'=>array('admin')),
);
?>

<h1>Update SeccionRegionalizacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>