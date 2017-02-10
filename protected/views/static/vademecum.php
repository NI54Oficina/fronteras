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
$isException=false;
if($pais->catalogo==1){
	$pais=$pais->id;
}else if($pais->catalogo==2){
	$isException=true;
	$pais=$pais->id;
}else{
	$pais=8;
}

$idSeccion= $data->id;

$productos = Producto::model()->findAllByAttributes(array('seccion'=>$data->id,"pais"=>$pais));
if($isException&&!$productos&&count($productos)<=0){
	Producto::model()->findAllByAttributes(array('seccion'=>$data->id,"pais"=>8));
}

if($isException){
	$pais=8;
}

$auxLink= $data->nombre;
$auxLink=  sanear_string($auxLink);
$auxLink = str_replace(' ', '-', $auxLink); 


$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink);
$auxLink = preg_replace('/-+/', '-', $auxLink);
$auxLink= strtolower($auxLink);
$normalizado= $auxLink;
$auxId=0;
?>
<style>body{background-color:white;}</style>
<div style="width:100%;">
<div  class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" style="margin-top:6%; margin-bottom:25vh;padding:0 5%;"> 

<a href="<?php echo Yii::app()->request->baseUrl;?>/home#contenido-vad">
<div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver hidden-sm hidden-xs">
<p><?php echo Textos::model()->GetText(490); ?></p>
</div>
</a>

<a  style="z-index:3333;padding-top:3%;"href="<?php echo Yii::app()->getBaseUrl(true); ?>"><div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6 volver-mobile hidden-lg hidden-md">
<p id="volver-p"><?php echo Textos::model()->GetText(490); ?></p>
</div></a>



<div id="titulo-vademecum" class="hidden-lg hidden-md">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /><?php echo Textos::model()->GetText(348); ?><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p id="barra-superior-<?php echo $normalizado; ?>" style="text-align:center;width:3%;margin:auto;margin-top:0%;"></p>
</div>

<div  class="hidden-xs hidden-sm">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /><?php echo Textos::model()->GetText(348); ?><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p id="barra-superior-<?php echo $normalizado; ?>" style="text-align:center;width:3%;margin:auto;margin-top:0%;"></p>
</div>


 <!-- ACA ESTA EL TITULO CON LA GOTA -->

<h2 class="titulo-vad titulo-<?php echo $normalizado; ?>">

<img id="gota-vademecum" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gota-<?php echo $normalizado; ?>.png"  /><?php echo Yii::app()->paisChecker->getSeccion($data->id);?></h2>

 <!-- ACA ESTA EL TITULO CON LA GOTA -->





<div  class=" col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display:inline-block;text-align:center;margin-top:30px;"  id="vademecum-loading">
	<div style="width:100%;display:inline-block;overflow:hidden;">
	<?php if(count($productos)==0){ ?>
		<h5> <?php echo Textos::model()->GetText(349); ?></h5>
	<?php } ?>
	<?php foreach($productos as $producto){ 
	$id= $producto->id;
	$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
	?>
	<div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 div-img-aft same-height" hid="1" style="">
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/productos/id<?php echo $producto->id; ?>" class="vad-prod-background">
		<figure class="snip1156 image">
			<div>
				<div class="inner-producto-vademecum">
				<div class="producto-vademecum-top">
				<?php if($imagen){ ?>
				<img style="width:40%;display:inline-block;margin-top: 5%;margin-right:0;text-align:left;" class="img-cat-aft " src="<?php echo Yii::app()->getBaseUrl(true); ?>/vademecums/<?php echo $imagen->id; ?>.png" /> 
				<?php } ?>
				<div class="targets-vademecum">
					<div class="columna-target">
					<?php
					$target= $producto->target;
					$targetImages=array('<img src="'.Yii::app()->getBaseUrl(true).'/images/caballo.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/cabra.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/chancho.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/conejo.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/gallina.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/perro.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/gato.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/oveja.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/pez.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/vaca.png">',
								);
							$auxTarget=0;
							$auxDiv=0;
					foreach(str_split($target) as $t){
						if($t==1){
							$auxDiv++;
							echo $targetImages[$auxTarget];
						}
						if($auxDiv>=2){
							echo "</div><div class='columna-target'>";
							$auxDiv=0;
						}
						$auxTarget++;
					}
					
					
					?>
					</div>
					</div>
					</div>
					<h3><?php echo $producto->nombre; ?></h3>
				</div>
				<figcaption class="fig-<?php echo $normalizado; ?>">
					<div class="d-a-2 <?php echo $normalizado; ?>">
						<h2 class="<?php echo $normalizado; ?>-h2"><span class="plus-vademecum">+</span><br><?php echo $producto->nombre; ?></h2>
					</div>
					<div>
					</div>
				</figcaption>
				
			</div>
		</figure></a>
	</div>
	
	<?php } ?>
	</div>
	<script>
	$(".hover").mouseleave(
		function () {
		$(this).removeClass("hover");
		}
	);
		$("#vademecum-loading").fadeIn();
	</script>
	
</div>

<?php include('widget-vademecum.php'); ?>

</div>
</div>