<?php
/* @var $this ProtocoloController */
/* @var $model Protocolo */

$this->breadcrumbs=array(
	'Protocolos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Protocolo', 'url'=>array('index')),
	array('label'=>'Manage Protocolo', 'url'=>array('admin')),
);
?>

<h1>Create Protocolo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>