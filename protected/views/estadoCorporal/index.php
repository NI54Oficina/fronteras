<?php
/* @var $this EstadoCorporalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Corporals',
);

$this->menu=array(
	array('label'=>'Create EstadoCorporal', 'url'=>array('create')),
	array('label'=>'Manage EstadoCorporal', 'url'=>array('admin')),
);
?>

<h1>Estado Corporals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
