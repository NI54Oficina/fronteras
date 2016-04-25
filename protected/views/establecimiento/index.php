<?php
/* @var $this EstablecimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Establecimientos',
);

$this->menu=array(
	array('label'=>'Create Establecimiento', 'url'=>array('create')),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>Establecimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
