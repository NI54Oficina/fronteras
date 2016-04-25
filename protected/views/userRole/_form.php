<?php
/* @var $this UserRoleController */
/* @var $model UserRole */
/* @var $form CActiveForm */
$auth=Yii::app()->authManager;
if(isset($model->id)){
	
	$role= $auth->getAuthItem($model->nombre);
}
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-role-form',
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
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	
	<?php
	
	foreach ($auth->operations as $op){
		?>
		<div class="form-group col-md-4" style="border:black 1px solid;height:90px;padding:5px;">
			<?php 
			if(isset($model->id)&&$auth->hasItemChild($model->nombre,$op->name)){
				?>
				<input type="checkbox" checked value="<?php echo $op->name; ?>"><label style="display:inline-block;"><?php echo $op->name; ?></label>
				<?php
			}else{
				?>
				<input type="checkbox" value="<?php echo $op->name; ?>"><label style="display:inline-block;"><?php echo $op->name; ?></label>
				<?php
			}
			?>
			<p><?php echo $op->description; ?></p>
		</div>

		<?php
	}
	?>
	<input id="operations" name="operations" type="hidden" value="">
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
	  $("#operations").val(operations);
	  $("form").submit();
  });
});
</script>

<?php $this->endWidget(); ?>

</div><!-- form -->