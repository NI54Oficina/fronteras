<?php
/* @var $this MetatagController */
/* @var $model Metatag */

$this->breadcrumbs=array(
	'Metatags'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Metatag', 'url'=>array('index')),
	array('label'=>'Create Metatag', 'url'=>array('create')),
	array('label'=>'View Metatag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Metatag', 'url'=>array('admin')),
);
?>

<h1>Update Metatag <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>