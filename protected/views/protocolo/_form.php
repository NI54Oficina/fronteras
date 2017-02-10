<?php
/* @var $this ProtocoloController */
/* @var $model Protocolo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'protocolo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia0'); ?>
		<?php echo $form->textField($model,'dia0',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'dia0'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia7'); ?>
		<?php echo $form->textField($model,'dia7',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'dia7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia8'); ?>
		<?php echo $form->textField($model,'dia8',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'dia8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia9'); ?>
		<?php echo $form->textField($model,'dia9',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'dia9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia10'); ?>
		<?php echo $form->textField($model,'dia10',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'dia10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
<style>
div.form label{
	color:white;
}
</style>
<?php $this->endWidget(); ?>

</div><!-- form -->