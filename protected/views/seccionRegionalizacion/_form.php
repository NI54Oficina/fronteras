<?php
/* @var $this SeccionRegionalizacionController */
/* @var $model SeccionRegionalizacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seccion-regionalizacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	
	<div class="form-group">
		<label for="Producto_nombre">Categoria</label>
		<select name="SeccionRegionalizacion[idCategoria]" class="form-control required empty">
		<option value="" selected disabled>Elegí categoria</option>
		<?php
			foreach (CHtml::listData(Seccion::model()->findAll(), 'id', 'nombre') as $value => $name) {
				if($name!="Code"){
					if($model&&$model->idCategoria==$value){
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
		<select name="SeccionRegionalizacion[pais]" class="form-control required empty">
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