<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Producto', 'url'=>array('adminPais')),
);
?>

<h1>Create Producto</h1>


<form  class="form-horizontal" id="producto-form" method="POST">
<div class="form-group">
			<button class="btn btn-info btn-block btn-xl"  type="button" onclick="CheckForm()">Enviar</button>
		</div>
	<h4 style="padding:0 40px;"></h4>
	 <hr >
		
		<div class="form-group">
			<label for="Producto_nombre">Nombre del producto</label>
			<input type="text" class="form-control required" name="Producto[nombre]" id="Producto_nombre" placeholder="Nombre producto" value="">
		</div>
		<hr>
		
		<div class="form-group">
			<label for="Producto_nombre">Pais</label><br>
			<select id="paisList" name="" class="form-control empty" style="width:80%;display:inline-block;">
			<option value="" selected disabled>Elegí Pais</option>
			<?php
				foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
					echo '<option value="' . $value . '">' . $name . '</option>';
				}
			?>
			</select>
			<div id="addPais" class="btn btn-info btn-block btn-sm" style="width:15%;display:inline-block;">+</div>
			<input type="hidden" name="Producto[pais]" class="required" value="" id="producto_pais">
			<div id="paises"></div>
		</div>
		<hr>
		
		
		<input type="hidden" name="Producto[seccion]" class="form-control" value=12>
		
		
		<input type="hidden" name="Producto[target]" value="" id="producto_target">
		<div style="width:100%;display:none;">
		
		<div class="boton-target" id="caballo"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/caballo.png"></div>
		<div class="boton-target" id="cabra"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/cabra.png"></div>
		<div class="boton-target" id="chancho"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/chancho.png"></div>
		<div class="boton-target" id="conejo"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/conejo.png"></div>
		<div class="boton-target" id="gallina"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/gallina.png"></div>
		<div class="boton-target" id="perro"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/perro.png"></div>
		<div class="boton-target" id="gato"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/gato.png"></div>
		<div class="boton-target" id="oveja"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/oveja.png"></div>
		<div class="boton-target" id="pez"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/pez.png"></div>
		<div class="boton-target" id="vaca"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/vaca.png"></div>
		
		</div>
		<input type="text" class="" name="Producto[imagen]" value="-1" id="image_id" style="opacity:0;position:absolute;left:-999999px;">
	
	
			<div id="partes-contenido-code" ></div>
		
		<div class="form-group">
			<input type="hidden" name="Producto[partes]" value="" id="producto_partes">
			<input type="hidden" name="Producto[partes_contenido]" value="" id="producto_partes_contenido">
			
			<label for="Producto_nombre">Contenido</label><br>
				<input type="hidden" name="Producto[codeContent]" value=1 />
			<input type="checkbox" id="isCode" name="Producto[codeContent]" checked hidden><br>
			
			
			<button type="button"onclick="AgregarSeccion()">Agregar seccion contenido +</button>
		</div>
		
		
		<hr>
		<div class="form-group">
			<button class="btn btn-info btn-block btn-xl"  type="button" onclick="CheckForm()">Enviar</button>
		</div>
		
		<script src="<?php echo Yii::app()->getBaseUrl(true);?>/src/ace.js" type="text/javascript" charset="utf-8"></script>
</form>

