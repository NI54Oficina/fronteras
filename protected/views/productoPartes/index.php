<?php
/* @var $this ProductoPartesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto Partes',
);

$this->menu=array(
	array('label'=>'Create ProductoPartes', 'url'=>array('create')),
	array('label'=>'Manage ProductoPartes', 'url'=>array('admin')),
);
?>

<h1>Producto Partes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
