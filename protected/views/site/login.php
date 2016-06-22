
<div class="col-md-6 fadder" style="height:100vh;display:inline-block;text-align:center;"><img style="display:inline-block;width:300px; max-width:80%;" class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png"  /></div>

<div class="col-md-6 fadder" style="height:100vh;display:inline-block;text-align:center;">

<div class="col-md-12 center-to-parent" style="border-left:solid gray 1px;" >
<div class="col-md-6" style="display:inline-block;float:initial;text-align:left;">
<h1 style="color:white;font-size:24px;"><span class="glyphicon glyphicon-play" style="font-size:20px;color:#5998cb;"></span>Iniciar Sesión</h1>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<div class="row">
		<!--<label>Usuario</label>!-->
		<?php echo $form->textField($model,'username',array("placeholder"=>"Usuario")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<!--<label>Contraseña</label>!-->
		<?php echo $form->passwordField($model,'password',array("placeholder"=>"Password")); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<br>
	
	<?php //if(CCaptcha::checkRequirements()): ?>
	<?php if(false): ?>
	<div class="row">
		<label>Código de seguridad</label>
		<div id="codeCaptcha">
		<?php
		$this->widget( 'CCaptcha', [
			'buttonLabel'   => '<span class="glyphicon glyphicon-refresh"></span>',
			'buttonOptions' => [
				'class' => 'btn-refresh-captcha',
				'style' => 'text-decoration: none; text-weight: bold;',
				'title' => Yii::t( 'zr', 'Get new code' ),
			]
		] );
		?>
		<?php 
		// click refresh button on page load
		Yii::app()->clientScript->registerScript( 'refresh-captcha', 
		'$(document).ready(function(){$(".btn-refresh-captcha").click();});' ); 
		?><br>
		<?php echo $form->textField($model,'verifyCode',array("placeholder"=>"Ingrese el código","style"=>"padding-top:10px;")); ?>
		</div>
		
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	
	<br>
	
	<div class="rememberMe" style="display:inline-block;margin-right:20px;">
		<?php echo $form->checkBox($model,'rememberMe',array("style"=>"width:auto;")); ?>
		<label style="display:inline;color:white;">Recordarme</label>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	

	<div class="buttons " style="display:inline-block;">
		<button class="btn-info btn-md btn-block" style="padding:7px 50px;background:#65cced;border:none;border-radius:5px;">Entrar</button>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div><!-- form -->
</div>
</div>

<style>
div.form div.success input,div.form div.error input,div.form input{color:white;border:none;width:100%;border-bottom:2px solid #176289;background:transparent !important;}
div.form label{color:white;}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    rgba(255,255,255,0.5);
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
  color:    rgba(255,255,255,0.5);
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    rgba(255,255,255,0.5);
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color:    rgba(255,255,255,0.5);
}
#codeCaptcha{
	width:100%;
}
#codeCaptcha .glyphicon{
	padding-left:15px;
	display:inline-block;
}
#codeCaptcha img{
	width:80%;
}
.fadder{
	opacity:0;
	transition:0.5s;
}
</style>