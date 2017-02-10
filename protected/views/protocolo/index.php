<?php
/* @var $this ProtocoloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protocolos',
);

$this->menu=array(
	array('label'=>'Create Protocolo', 'url'=>array('create')),
	array('label'=>'Manage Protocolo', 'url'=>array('admin')),
);
?>

<h1>Protocolos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
