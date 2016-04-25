<?php
/* @var $this PpartesRegionalizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ppartes Regionalizacions',
);

$this->menu=array(
	array('label'=>'Create PpartesRegionalizacion', 'url'=>array('create')),
	array('label'=>'Manage PpartesRegionalizacion', 'url'=>array('admin')),
);
?>

<h1>Ppartes Regionalizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
