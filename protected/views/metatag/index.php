<?php
/* @var $this MetatagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Metatags',
);

$this->menu=array(
	array('label'=>'Create Metatag', 'url'=>array('create')),
	array('label'=>'Manage Metatag', 'url'=>array('admin')),
);
?>

<h1>Metatags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
