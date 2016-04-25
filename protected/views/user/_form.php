<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

$auth=Yii::app()->authManager;
if(isset($model->id)){
	
	$role= $auth->getAuthItem($model->username);
}

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<?php
	
	foreach ($auth->roles as $op){
		?>
		<div class="form-group">
			<?php 
			if(isset($model->id)&&$auth->hasItemChild($model->username,$op->name)){
				?>
				<input type="checkbox" checked value="<?php echo $op->name; ?>"><label style="display:inline-block;"><?php echo $op->name; ?></label>
				<?php
			}else{
				?>
				<input type="checkbox" value="<?php echo $op->name; ?>"><label style="display:inline-block;"><?php echo $op->name; ?></label>
				<?php
			}
			?>
			
		</div>

		<?php
	}
	?>
	<input id="roles" name="roles" type="hidden" value="">
	<div class="row buttons">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');*/		?>
		<button type="button" class="sendForm">Enviar</button>
	</div>
	
<script>
$(document).ready(function() {
  $("form").keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
  $("body").on("click",".sendForm",function(){
	  var operations="";
	  $("input:checked").each(function(){
		// console.log($(this).val()); 
		 if(operations!=""){
			 operations+=";;;"
		 }
		 operations+=$(this).val();
	  });
	  console.log(operations);
	  $("#roles").val(operations);
	  $("form").submit();
  });
});
</script>

<?php $this->endWidget(); ?>

</div><!-- form -->