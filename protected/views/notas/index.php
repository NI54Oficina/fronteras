<?php
/* @var $this NotasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notases',
);

$this->menu=array(
	array('label'=>'Create Notas', 'url'=>array('create')),
	array('label'=>'Manage Notas', 'url'=>array('admin')),
);
?>

<h1>Notases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
