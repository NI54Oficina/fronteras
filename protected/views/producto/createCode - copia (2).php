<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Producto', 'url'=>array('admin')),
);
?>

<h1>Create Producto</h1>


<form  class="form-horizontal" id="producto-form" method="POST">
	<h4 style="padding:0 40px;"></h4>
	 <hr >
		
		<div class="form-group">
			<label for="Producto_nombre">Nombre del code</label>
			<input type="text" class="form-control required" name="Producto[nombre]" id="Producto_nombre" placeholder="Nombre producto" value="">
		</div>
		<hr>
		<div class="form-group">
			<label for="Producto_nombre">Pais</label><br>
			<select id="paisList" name="" class="form-control required empty" style="width:80%;display:inline-block;">
			<option value="" selected disabled>Elegí Pais</option>
			<?php
				foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
					echo '<option value="' . $value . '">' . $name . '</option>';
				}
			?>
			</select>
			<div id="addPais" class="btn btn-info btn-block btn-sm" style="width:15%;display:inline-block;">+</div>
			<input type="hidden" name="Producto[pais]" value="" id="producto_pais">
			<div id="paises"></div>
		</div>
		<hr>
		
		<input type="hidden" name="Producto[seccion]" class="form-control" value=12>
		<input type="text" class="" name="Producto[imagen]" value="" id="image_id" style="opacity:0;position:absolute;left:-999999px;">
		
	
		<input type="hidden" name="Producto[target]" value="000000001" id="producto_target">
		
		
		<hr>
		
		<div id="partes-contenido-code" ></div>
		
		<div class="form-group">
			<input type="hidden" name="Producto[partes]" value="" id="producto_partes">
			<input type="hidden" name="Producto[partes_contenido]" value="" id="producto_partes_contenido">
			
			<label for="Producto_nombre">Contenido</label><br>
				<input type="hidden" name="Producto[codeContent]" value="0" />
			<input type="checkbox" id="isCode" name="Producto[codeContent]" checked hidden><br>
			
			
			<button type="button"onclick="AgregarSeccion()">Agregar seccion contenido +</button>
		</div>
		
		<hr>
		<div class="form-group">
			<button class="btn btn-info btn-block btn-xl"  type="button" onclick="CheckForm()">Enviar</button>
		</div>
		
		<script src="<?php echo Yii::app()->getBaseUrl(true);?>/src/ace.js" type="text/javascript" charset="utf-8"></script>
</form>
