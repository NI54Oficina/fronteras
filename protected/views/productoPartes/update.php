<?php
/* @var $this ProductoPartesController */
/* @var $model ProductoPartes */

$this->breadcrumbs=array(
	'Producto Partes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoPartes', 'url'=>array('index')),
	array('label'=>'Create ProductoPartes', 'url'=>array('create')),
	array('label'=>'View ProductoPartes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductoPartes', 'url'=>array('admin')),
);
?>

<h1>Update ProductoPartes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>