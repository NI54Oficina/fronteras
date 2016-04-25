<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->menu=array(
	
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Ver Producto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Producto', 'url'=>array('adminPais')),
);
?>

<h1>Actualizar Producto <?php echo $model->nombre; ?></h1>


<form  class="form-horizontal" id="producto-form" method="POST">
<div class="form-group">
			<button class="btn btn-info btn-block btn-xl"  type="button" onclick="CheckForm()">Enviar</button>
		</div>
	<h4 style="padding:0 40px;"></h4>
		
		<div class="form-group">
			<label for="Producto_nombre">Nombre del producto</label>
			<input type="text" class="form-control required" name="Producto[nombre]" id="Producto_nombre" placeholder="Nombre producto" value="<?php echo $model->nombre; ?>">
		</div>
		<hr >
		
		<div class="form-group">
			<label for="Producto_nombre">Pais</label><br>
			<select id="paisList" name="" class="form-control" style="width:80%;display:inline-block;">
			<option value="" selected disabled>Elegí Pais</option>
			<?php
				foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
					echo '<option value="' . $value . '">' . $name . '</option>';
				}
			?>
			</select>
			<div id="addPais" class="btn btn-info btn-block btn-sm" style="width:15%;display:inline-block;">+</div>
			
			<div id="paises">
			<?php
				$paises="";
				foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
					if(in_array($value,$model->pais)){
						if($paises==""){
							$paises.=$value;
						}else{
							$paises.=",".$value;
						}
						?>
						<div class='paisBlock' id='<?php echo $name; ?>'><?php echo $name; ?></div>
						<?php
					}
				}
			?>
			</div>
			<input type="hidden" name="Producto[pais]" value="<?php echo $paises; ?>" id="producto_pais">
		</div>
		<hr>
		
		<div class="form-group" style="display:none;">
			<label for="Producto_nombre">Link</label>
			<input type="text" class="form-control" name="Producto[link]" id="Producto_link" placeholder="Link producto" value="">
		</div>
		
		<div class="form-group">
		<label for="Producto_nombre">Seccion</label>
		<select name="Producto[seccion]" class="form-control required empty" id="producto_seccion" >
		<option value="" selected disabled>Elegí Seccion</option>
		<?php
			foreach (CHtml::listData(Seccion::model()->findAll(), 'id', 'nombre') as $value => $name) {
				if($name!="Code"){
					if($model->seccion == $value){
						echo '<option value="' . $value . '" selected>' . $name . '</option>';
					}else{
						echo '<option value="' . $value . '">' . $name . '</option>';
					}
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
	if($imagen){
	?>
	<img style="max-width:400px;max-height:400px;"src="<?php echo Yii::app()->getBaseUrl(true); ?>/imagen/view/<?php echo $imagen->id; ?>"><hr>
	<?php
	}	
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
				foreach (CHtml::listData(ProductoPartes::model()->findAll(array('order'=>'nombre ASC')), 'id', 'nombre') as $value => $name) {
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

<script>
$(document).ready(function(){
	<?php 
	foreach($contenidos as $contenido){ 
	$partePuntual=ProductoPartes::model()->findByPk($contenido->parte);
	?>
	CKEDITOR.replace( "parteInner<?php echo $partePuntual->id; ?>" );
	<?php } ?>

	<?php 
	$targets= $model->target;
	
	if($targets[0]=='1'){
		?>
		$("#caballo").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[1]=='1'){
		?>
		$("#cabra").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[2]=='1'){
		?>
		$("#chancho").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[3]=='1'){
		?>
		$("#conejo").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[4]=='1'){
		?>
		$("#gallina").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[5]=='1'){
		?>
		$("#perro").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[6]=='1'){
		?>
		$("#gato").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[7]=='1'){
		?>
		$("#oveja").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[8]=='1'){
		?>
		$("#pez").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	if($targets[9]=='1'){
		?>
		$("#vaca").addClass("selected-target");
		console.log("caballooooo");
		<?php
	}
	?>
});
</script>