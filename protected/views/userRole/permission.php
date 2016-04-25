<?php

$auth=Yii::app()->authManager;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permission-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<h1>Crear Permiso</h1>

	

	<div class="row">
		<label>Operation</label>
		<select name="Permission[operation]" placeholder="Nombre operacion">
		<?php
		
		foreach ($auth->operations as $op){
		?>
		<option value="<?php echo $op->name; ?>"><?php echo $op->name; ?></option>
		<?php } ?>
		</select>
	</div>
	
	<div class="row">
		<label>Url</label>
		<input name="Permission[url]" placeholder="URL afectada">
	</div>
	
	
	
	<div class="row buttons">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');*/		?>
		<button type="submit" class="sendForm">Enviar</button>
	</div>
<script>
$(document).ready(function() {
  $("form").keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
 
});
</script>

<?php $this->endWidget(); ?>

</div><!-- form -->