<?php
/* @var $this SeccionRegionalizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seccion Regionalizacions',
);

$this->menu=array(
	array('label'=>'Create SeccionRegionalizacion', 'url'=>array('create')),
	array('label'=>'Manage SeccionRegionalizacion', 'url'=>array('admin')),
);
?>

<h1>Seccion Regionalizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
