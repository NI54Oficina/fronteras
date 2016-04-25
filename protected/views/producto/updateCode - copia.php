<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->menu=array(
	
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Ver Producto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Producto', 'url'=>array('admin')),
);
?>

<h1>Actualizar Producto <?php echo $model->nombre; ?></h1>


<form  class="form-horizontal" id="producto-form" method="POST">
	<h4 style="padding:0 40px;"></h4>
	 <hr >
		
		<div class="form-group">
			<label for="Producto_nombre">Nombre del producto</label>
			<input type="text" class="form-control required" name="Producto[nombre]" id="Producto_nombre" placeholder="Nombre producto" value="<?php echo $model->nombre; ?>">
		</div>
		<hr>
		<div class="form-group" style="display:none;">
			<label for="Producto_nombre">Link</label>
			<input type="text" class="form-control" name="Producto[link]" id="Producto_link" placeholder="Link producto" value="<?php echo $model->link; ?>">
		</div>
		
		
		<div class="form-group">
		<label for="Producto_nombre">Seccion</label>
		<select name="Producto[seccion]" class="form-control required empty" id="producto_seccion" >
		<option value="" selected disabled>Elegí Seccion</option>
		<?php
			foreach (CHtml::listData(Seccion::model()->findAll(), 'id', 'nombre') as $value => $name) {
				if($model->seccion == $value){
					echo '<option value="' . $value . '" selected>' . $name . '</option>';
				}else{
					echo '<option value="' . $value . '">' . $name . '</option>';
				}
			}
		?>
		</select>
		</div>
		
		<hr>
		<div class="form-group">
			<label for="Producto_nombre">Tags</label>
			<textarea  class="form-control required" name="Producto[tags]" id="Producto_tags" placeholder="Tags producto" value=""><?php echo $model->tags; ?></textarea>
		</div>
		<hr>
		<input type="hidden" name="Producto[target]" value="" id="producto_target">
		<div style="width:100%;">
		
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
		<hr>
		<div class="form-group">
			<label for="Producto_nombre" id="label_imagen">Imagen</label><br>
			
			
<?php
$id= $model->id;
$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));

	?>
	<img style="max-width:400px;max-height:400px;"src="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php?r=imagen/view&id=<?php echo $imagen->id; ?>"><hr>
	<?php

?>
			
			<input type="text" class="required" name="Producto[imagen]" value="<?php echo $imagen->id; ?>" id="image_id" style="opacity:0;position:absolute;left:-999999px;">
			<div id="dropzone-example" style="width:100%;height:100px;background-color:#c4c4c4;margin:20px;padding:10px;"></div>
			
		</div>
		<hr>
		<div id="partes-contenido">
			<?php
			//aca van las secciones
			$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));
				
			foreach($contenidos as $contenido){
			
				$partePuntual=ProductoPartes::model()->findByPk($contenido->parte);
				?>
				<div class='partes-producto' parte-id='<?php echo $partePuntual->id; ?>' id='parte<?php echo $partePuntual->id; ?>'>
					<label><?php echo $partePuntual->nombre; ?></label><span style='color:red;cursor:pointer;' onclick='Remove( "<?php echo $partePuntual->id; ?>");' >x</span>
					<textarea id='parteInner<?php echo $partePuntual->id; ?>' style='width:100%;'>
						<?php echo $contenido->text; ?>
					</textarea>
				</div>
				
				<br>
				<?php
				
			}
			
			?>
		</div>
		<div class="form-group">
			<input type="hidden" name="Producto[partes]" value="" id="producto_partes">
			<input type="hidden" name="Producto[partes_contenido]" value="" id="producto_partes_contenido">
			
			<label for="Producto_nombre">Contenido</label><br>
			
			<select class="form-control empty" id="parte-actual">
			<option value="" selected disabled>Elegí Seccion</option>
			<?php
				foreach (CHtml::listData(ProductoPartes::model()->findAll(), 'id', 'nombre') as $value => $name) {
					echo '<option value="' . $value . '">' . $name . '</option>';
				}
			?>
			</select><br>
			<button type="button"onclick="AgregarSeccion()">Agregar seccion contenido +</button>
		</div>
		
		<hr>
		<div class="form-group">
			<button class="btn btn-info btn-block btn-xl"  type="button" onclick="CheckForm()">Enviar</button>
		</div>

</form>
