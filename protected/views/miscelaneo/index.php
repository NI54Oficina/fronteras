<?php
/* @var $this MiscelaneoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Miscelaneos',
);

$this->menu=array(
	array('label'=>'Create Miscelaneo', 'url'=>array('create')),
	array('label'=>'Manage Miscelaneo', 'url'=>array('admin')),
);
?>

<h1>Miscelaneos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
