<?php
/* @var $this PpartesRegionalizacionController */
/* @var $model PpartesRegionalizacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ppartes-regionalizacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="form-group">
		<label for="Producto_nombre">Parte</label>
		<select name="PpartesRegionalizacion[idParte]" class="form-control required empty">
		<option value="" selected disabled>Elegí Parte</option>
		<?php
			foreach (CHtml::listData(ProductoPartes::model()->findAll(), 'id', 'nombre') as $value => $name) {
				if($name!="Code"){
					if($model&&$model->idParte==$value){
						echo '<option selected value="' . $value . '">' . $name . '</option>';
					}else{
						echo '<option value="' . $value . '">' . $name . '</option>';
					}
				}
			}
		?>
		</select>
	</div>
	
	<div class="form-group">
		<label for="Producto_nombre">Pais</label>
		<select name="PpartesRegionalizacion[pais]" class="form-control required empty">
		<option value="" selected disabled>Elegí pais</option>
		<?php
			foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
				if($name!="Code"){
					if($model&&$model->pais==$value){
						echo '<option selected value="' . $value . '">' . $name . '</option>';
					}else{
						echo '<option value="' . $value . '">' . $name . '</option>';
					}
					
				}
			}
		?>
		</select>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->