<?php
/* @var $this MetatagController */
/* @var $model Metatag */

$this->breadcrumbs=array(
	'Metatags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Metatag', 'url'=>array('index')),
	array('label'=>'Manage Metatag', 'url'=>array('admin')),
);
?>

<h1>Create Metatag</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>