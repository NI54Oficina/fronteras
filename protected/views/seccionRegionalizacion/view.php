<?php
/* @var $this SeccionRegionalizacionController */
/* @var $model SeccionRegionalizacion */

$this->menu=array(
	array('label'=>'List Seccion Regionalizacion', 'url'=>array('index')),
	array('label'=>'Create Seccion Regionalizacion', 'url'=>array('create')),
	array('label'=>'Update Seccion Regionalizacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Seccion Regionalizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seccion Regionalizacion', 'url'=>array('admin')),
);
?>

<h1>View Seccion Regionalización #<?php echo $model->id; ?></h1>


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
<div class="even"><strong>Parte:</strong> <?php echo Seccion::model()->findByPk($model->idCategoria)->nombre; ?></div>
