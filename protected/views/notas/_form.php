<?php
/* @var $this NotasController */
/* @var $model Notas */
/* @var $form CActiveForm */
?>

<div class="form formCreate">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="form-group">
				<label>Fecha</label>
                <div class="input-group date form_date col-md-5" data-date="<?php echo date('d/m/Y', time()) ?>" data-date-format="dd mm yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" placeholder="Elegí Fecha" size="16" type="text" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>"  name="Notas[fecha]" /><br/>
            </div>
			
			<script>
			$('.form_date').datetimepicker({
			language:  'ar',
			weekStart: 0,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
			});
			</script>
	
	
	
	<div class="form-group" style="max-width:400px;">
			<label for="Producto_nombre">País</label>
			<select name="Notas[pais]" class="form-control required empty" value="" style="display:inline-block;">
			<option value="" selected disabled>Elegí País</option>
			<option value="es">Español</option>
			<option value="pt">Portugues</option>
			<option value="en">Ingles</option>
			<?php
				foreach (CHtml::listData(Pais::model()->findAll(), 'short', 'nombre') as $value => $name) {
					if(isset($model->pais)&&$model->pais==$value){
						echo '<option value="' . $value . '" selected>' . $name . '</option>';
					}else{
						echo '<option value="' . $value . '">' . $name . '</option>';
					}
				}
			?>
			</select>
	</div>
	
	<div class="row" style="max-width:400px;">
		<?php echo $form->labelEx($model,'seccion'); ?>
		<!--<?php echo $form->textField($model,'seccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'seccion'); ?>!-->
		<select id="seccion" name="Notas[seccion]" value="" class="form-control">
		<?php if(!isset($model->seccion)){ ?>
		<option value="" selected disabled>Elegí Sección</option>
		<?php } ?>
		<?php 
		$secciones["enfermedad"]="Enfermedad";
		foreach($secciones as $key=>$value){
			if(isset($model->seccion)&&$model->seccion==$key){
		?>
		<option value="<?php echo $key; ?>"selected><?php echo $value; ?></option>
		<?php }else{ ?>
		<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
		<?php } } ?>
		
		</select>
	</div>
	
	<div class="row" style="max-width:600px;">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>300,"class"=>"form-control","placeholder"=>"Ingrese el Titulo")); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>	

	<div class="row" style="max-width:600px;">
		<?php echo $form->labelEx($model,'bajada'); ?>
		<?php echo $form->textArea($model,'bajada',array('rows'=>6, 'cols'=>50,"class"=>"form-control")); ?>
		<?php echo $form->error($model,'bajada'); ?>
	</div>

	<div class="row" style="max-width:600px;" id="extra">
		<?php echo $form->labelEx($model,'extra'); ?>
		<?php echo $form->textArea($model,'extra',array('rows'=>6, 'cols'=>50,"class"=>"form-control")); ?>
		<?php echo $form->error($model,'extra'); ?>
	</div>

	

	
	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50,"id"=>"textArea","class"=>"summernote")); ?>
		<?php echo $form->error($model,'texto'); ?>
		
	</div>

	
	
	<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
            //    CKEDITOR.replace( 'textArea' );
		$(".summernote").summernote();
			
		$( "#seccion" ).change(function() {
			console.log($(this).val());
			if($(this).val()=="tecnica"){
				$("#extra").show();
			}else{
				$("#extra textarea").html("");
				$("#extra").hide();
			}
		});
	</script>

	<div class="row buttons">
		<button class="btn-info btn-md btn-block btn-form">Guardar</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->