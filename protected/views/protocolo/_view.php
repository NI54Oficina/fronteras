<?php
/* @var $this ProtocoloController */
/* @var $data Protocolo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia0')); ?>:</b>
	<?php echo CHtml::encode($data->dia0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia7')); ?>:</b>
	<?php echo CHtml::encode($data->dia7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia8')); ?>:</b>
	<?php echo CHtml::encode($data->dia8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia9')); ?>:</b>
	<?php echo CHtml::encode($data->dia9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia10')); ?>:</b>
	<?php echo CHtml::encode($data->dia10); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />

	*/ ?>

</div>