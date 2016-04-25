<?php
/* @var $this PpartesRegionalizacionController */
/* @var $model PpartesRegionalizacion */

$this->menu=array(
	array('label'=>'List Partes Regionalizacion', 'url'=>array('index')),
	array('label'=>'Create Partes Regionalizacion', 'url'=>array('create')),
	array('label'=>'Update Partes Regionalizacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Partes Regionalizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partes Regionalizacion', 'url'=>array('admin')),
);
?>
<style>
.odd,.even{
	padding:5px;
}
.odd{
	background-color:#EFFDFF;
}

.even{
	background-color:#B7D6E7;
}
</style>

<h1>View Regionalizacion Partes #<?php echo $model->id; ?></h1>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idParte',
		'pais',
		'nombre',
	),
)); */ ?>
<div class="odd"><strong>ID:</strong> <?php echo $model->id ?></div>
<div class="even"><strong>Nombre:</strong> <?php echo $model->nombre; ?></div>
<div class="odd"><strong>País:</strong> <?php echo Pais::model()->findByPk($model->pais)->nombre; ?></div>
<div class="even"><strong>Parte:</strong> <?php echo ProductoPartes::model()->findByPk($model->idParte)->nombre; ?></div>
