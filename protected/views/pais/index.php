<?php
/* @var $this PaisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paises',
);

$this->menu=array(
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>Paises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
