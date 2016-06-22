<?php
/* @var $this ProtocoloController */
/* @var $model Protocolo */

$this->breadcrumbs=array(
	'Protocolos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Protocolo', 'url'=>array('index')),
	array('label'=>'Create Protocolo', 'url'=>array('create')),
	array('label'=>'View Protocolo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Protocolo', 'url'=>array('admin')),
);
?>

<h1>Update Protocolo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>