<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pais-form',
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
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>130)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="form-group">
			<label for="Producto_nombre" id="label_imagen">Imagen</label><br>
			<input type="text" class="required" name="Pais[icon]" value="" id="image_id" style="opacity:0;position:absolute;left:-999999px;">
			<div id="dropzone-example" style="width:90%;height:100px;background-color:#c4c4c4;margin:20px;padding:10px;"></div>
			<div id="previewImage"></div>
		</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
	
<script>
$(document).ready(function(){
	$("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/producto/upload",
			success: function(data,response){ 
				
				$("#image_id").val(response);
				$("#label_imagen").css("color","lime");
				
			
			} 
			,uploadprogress: function(file){
				$("#previewImage").append("<img src='"+$("div#dropzone-example .previewImage").attr('src')+"' onload='$(\"#dropzone-example\").hide();'>");
				
			}
	});
});
</script>
<?php $this->endWidget(); ?>

</div><!-- form -->