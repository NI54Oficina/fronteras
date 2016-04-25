<?php 
function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $string
    );
 
    /*//Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\", "¨", "º", "-", "~",
             "#", "@", "|", "!", """,
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "<code>", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             ".", " "),
        '',
        $string
    );*/
 
 
    return $string;
}
?>
<?php 
$pais= Pais::model()->findByPk(Yii::app()->session['pais']);
if($pais->catalogo==1){
	$pais=$pais->id;
}else{
	$pais=8;
}
$seccion= Seccion::model()->findByPk($data->seccion);
$idSeccion= $data->seccion;
$auxLink= $seccion->nombre;
$auxLink=  sanear_string($auxLink);
$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.

$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
$auxLink = preg_replace('/-+/', '-', $auxLink);
$auxLink= strtolower($auxLink);
$normalizado= $auxLink;
$id= $data->id;

$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));

?>
<style>body{background-color:white;}</style>
<div class="fadder" style="width:100%;">
<div  class="tabla-aftosa col-lg-12 col-md-12 col-sm-11 col-xs-11" style="margin-top:6%;margin-bottom:25vh;text-align:center;display:inline-block;float:initial;padding:0 5%;">

<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id<?php echo $seccion->id; ?>">
<div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver hidden-sm hidden-xs">
<p><?php echo Textos::model()->GetText(490); ?></p>
</div>
</a>


<h1 class="vademecum-producto"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /><?php echo Textos::model()->GetText(348);?><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" />
</h1>
<a  style="z-index:3333;"href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id<?php echo $seccion->id; ?>">
	<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6 volver-mobile hidden-lg hidden-md">
		<p id="volver-p"><?php echo Textos::model()->GetText(490); ?></p>
	</div>
</a>




<p id="barra-vademecum-<?php echo $normalizado; ?>" style="text-align:center;width:3%;margin:auto;margin-top:0%;">
</p>

<h2 class="titulo-vad-producto titulo-<?php echo $normalizado; ?>">

	<img id="gota-producto"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/gota-<?php echo $normalizado; ?>.png"  />
	<?php echo Yii::app()->paisChecker->getSeccion($seccion->id);?>
</h2>




<!-- BARRA IZQUIERDA A MODIFICAR -->

<div  class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 imagen-producto" >
		<?php if($imagen){ ?>
		<img  src="<?php echo Yii::app()->getBaseUrl(true); ?>/vademecums/<?php echo $imagen->id; ?>.png" align="center" />
	<?php } ?>
	
		<p id="compartido"><?php echo Textos::model()->GetText(452); ?></p>

 		<p style="text-align:center;width:15%;margin:auto;margin-top:-2%; margin-bottom: 5px;" >
 			
 		</p>

 		<p id="barra-superior-<?php echo $normalizado; ?>" class="hidden-xs hidden-sm" style="text-align:center;width:15%;margin:auto;">
 		</p>
  		
  		<div id="barra-xs">
			
			<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 facebook" >
				
			</a>
			
			<!--<div id="mail" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mail" >
			</div> !-->
		</div>
		
		<!--<img class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style=" width: 50%;  margin-top: 4%;float:initial;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/linea-compartir.png"/>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: auto; text-align: center; margin-top: 7%;margin-left:25%;">
			
			<a href="">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 descargar">
				</div>
			</a>
			
			<a href="">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 print">
				</div>
			</a>
		</div>!-->
		
		<!--<p id="registrado"><?php echo Textos::model()->GetText(453);?></p>
		<p id="barra-media-<?php echo $normalizado; ?>"></p>!-->
		
			<div id="targets-mobile"  class="col-sm-12 col-xs-12">
					<?php
					$target= $data->target;
					if($target[0]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/caballo.png">';
					}else{
						//echo '<img src="images/caballo.png" style="opacity:0.2;">';
					}
					if($target[1]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/cabra.png">';
					}else{
						//echo '<img src="images/cabra.png" style="opacity:0.2;">';
					}
					if($target[2]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/chancho.png">';
					}else{
						//echo '<img src="images/chancho.png" style="opacity:0.2;">';
					}
					if($target[3]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/conejo.png">';
					}else{
						//echo '<img src="images/conejo.png" style="opacity:0.2;">';
					}
					if($target[4]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gallina.png">';
					}else{
						//echo '<img src="images/gallina.png" style="opacity:0.2;">';
					}
					if($target[5]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/perro.png">';
					}else{
						//echo '<img src="images/perro.png" style="opacity:0.2;">';
					}
					if($target[6]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gato.png">';
					}else{
						//echo '<img src="images/gato.png" style="opacity:0.2;">';
					}
					if($target[7]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/oveja.png">';
					}else{
						//echo '<img src="images/oveja.png" style="opacity:0.2;">';
					}
					if($target[8]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/pez.png">';
					}else{
						//echo '<img src="images/pez.png" style="opacity:0.2;">';
					}
					if($target[9]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/vaca.png">';
					}else{
						//echo '<img src="images/vaca.png" style="opacity:0.2;">';
					}
					
					?>
					</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 paises-registrados" style="display:none;" >

			<div style=" width: 130px; ">
			
			<?php 
				$registros= RelRegistros::model()->findAllByAttributes(array('idProducto'=>$data->id));
				if($registros){
				foreach($registros as $registro){
				$nombrePais=Pais::model()->findByPk($registro->idPais)->nombre; 
			?>
				<div >
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/<?php echo $nombrePais; ?>.png" class="imagen-pais" align="left" />
				<p class="nombre-pais" align="center;" ><?php echo $nombrePais; ?></p>
              </div>
			<?php
				}
			}
			?>
              </div>
              <!--<div >
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/argentina.png" class="imagen-pais" align="left" />
              <p class="nombre-pais" align="center;" >Argentina</p>
              </div>
              </div>

			<p class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="barra-paises"></p>
			

			  <div style="  width: 130px; height: auto;">
			  <div   >
			 <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/brasil.png" class="imagen-pais" align="left" />
             <p class="nombre-pais">Brasil	</p>		
             </div>

			 </div>!-->




		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contacto-mobile" style="padding-top:10px; z-index: 1">
			
			<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" class="facebook"  style="width:40px;height:40px;">
				
			</a>
			
			<!--<div id="mail-mobile" class="mail" style="width:40px;height:40px;">
			</div> !-->
			
		</div>






	</div>


<!-- BARRA IZQUIERDA A MODIFICAR -->




	<div  class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 cuerpo-producto" style="overflow:hidden;">
		 <div id="targets-inner">
					<?php
					$target= $data->target;
					if($target[0]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/caballo.png">';
					}else{
						//echo '<img src="images/caballo.png" style="opacity:0.2;">';
					}
					if($target[1]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/cabra.png">';
					}else{
						//echo '<img src="images/cabra.png" style="opacity:0.2;">';
					}
					if($target[2]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/chancho.png">';
					}else{
						//echo '<img src="images/chancho.png" style="opacity:0.2;">';
					}
					if($target[3]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/conejo.png">';
					}else{
						//echo '<img src="images/conejo.png" style="opacity:0.2;">';
					}
					if($target[4]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gallina.png">';
					}else{
						//echo '<img src="images/gallina.png" style="opacity:0.2;">';
					}
					if($target[5]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/perro.png">';
					}else{
						//echo '<img src="images/perro.png" style="opacity:0.2;">';
					}
					if($target[6]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/gato.png">';
					}else{
						//echo '<img src="images/gato.png" style="opacity:0.2;">';
					}
					if($target[7]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/oveja.png">';
					}else{
						//echo '<img src="images/oveja.png" style="opacity:0.2;">';
					}
					if($target[8]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/pez.png">';
					}else{
						//echo '<img src="images/pez.png" style="opacity:0.2;">';
					}
					if($target[9]!=0){
						echo '<img src="'.Yii::app()->getBaseUrl(true).'/images/vaca.png">';
					}else{
						//echo '<img src="images/vaca.png" style="opacity:0.2;">';
					}
					
					?>
					</div>
		 
		 <h3 style="margin-top:10%;font-family:'arialregular'; font-weight: bolder; color: #424242;text-align:left;"><?php echo $data->nombre; ?> </h3>
		 
		 <div style="margin-top:4%;text-align:left;" class="contenido-producto">
		 
			<?php

			$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));

			foreach($contenidos as $contenido){
				?><div>
				<h4 class="h4-vad h4-<?php echo $normalizado; ?>"><?php echo Yii::app()->paisChecker->getTitles($contenido->parte);?></h4>
				<p class="p-vad"><?php echo $contenido->text; ?></p>
				</div>
				<?php
			}

			?>
			<!--<h4 class="h4-vad h4-aftosa">INDICACIONES</h4>
			<p class="p-vad">Vacuna inactivada para la inmunización contra la Fiebre Aftosa. </p>
		 
			<h4 class="h4-vad h4-aftosa">COMPOSICIÓN</h4>
			<p class="p-vad">Vacuna oleosa con virus de la Fiebre Aftosa tipo O1 Campos, A24 Cruzeiro, A2001 y C3 Indaial, obtenidos en cultivo de células BHK, inactivados con B.E.I.</p>
		 
			<h4 class="h4-vad h4-aftosa">DÓSIS Y VÍA DE ADMINISTRACIÓN</h4>
			<p class="p-vad"><strong>Bovinos:</strong> 2 mL por vía intramuscular profunda o subcutánea</p>
			
			<h4 class="h4-vad h4-aftosa">ESQUEMA SUGERIDO</h4>
			<p class="p-vad">Deberá administrarse siguiendo los lineamientos del Plan Nacional de Erradicación de la Fiebre Aftosa, diseñado por el SENASA.</p>
			
			<h4 class="h4-vad h4-aftosa">CONSERVACIÓN</h4>
			<p class="p-vad">Mantener entre 2 ºC y 8 ºC, al resguardo de la luz. No congelar</p>
			
			<h4 class="h4-vad h4-aftosa">PRESENTACIÓN</h4>
			<p class="p-vad">Frascos por 60 y 125 dosis de 2 mL.</p>!-->
		</div>
	</div>





<?php include('modal.php'); ?>
<?php include('widget-vademecum.php'); ?>
</div>
</div>
