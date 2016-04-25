<?php


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<h1>Crear Operacion</h1>

	

	<div class="row">
		<label>Nombre</label>
		<input name="Operation[name]" placeholder="Nombre operacion">
	</div>
	
	
	<input id="operations" name="operations" type="hidden" value="">
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