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


$idSeccion=-1;
$pais= Pais::model()->findByPk(Yii::app()->session['pais']);
$isParaguay=false;
if($pais->id==17){
	$isParaguay=true;
}
if($pais->catalogo==1){
	$pais=$pais->id;
}else{
	$pais=8;
}
//echo "<div style='width:100%;min-height:100px;background-color:red; color:black;position:fixed;z-index:1000000;'>";
//echo count($productos);
//echo Yii::app()->session['pais'];

if(isset($_POST["arg"])){
	//echo $_POST["arg"];
	
//	$arg= str_replace(" ",',',$_POST["arg"]);
$productos=Producto::model()->taggedWith($_POST["arg"])->findAll();	
}

//f(isset($productos)){
//echo count($productos);
//}
//echo "</div>";
$nombre="Búsqueda";
//$data->nombre="Busqueda";

//$productos =Producto::model()->findAllByAttributes(array('seccion'=>$data->id,"pais"=>Yii::app()->session['pais']));;
$auxLink= "busqueda";
$auxLink=  sanear_string($auxLink);
$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.

$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
$auxLink = preg_replace('/-+/', '-', $auxLink);
$auxLink= strtolower($auxLink);
$normalizado= $auxLink;
$auxId=0;
?>
<style>body{background-color:white;}</style>
<div style="width:100%;">
<div  class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" style="margin-top:4%; margin-bottom:25vh;padding:0 5%;"> 

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver-mobile hidden-lg hidden-md">
<p id="volver-p"><?php echo Textos::model()->GetText(490); ?></p>
</div></a>

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" >
<div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver hidden-sm hidden-xs">
<p><?php echo Textos::model()->GetText(490); ?></p>
</div>
</a>


<div id="titulo-vademecum" class="hidden-lg hidden-md">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /> <?php echo Textos::model()->GetText(348); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p  style="text-align:center;border-bottom:1px solid #0082C8;width:3%;margin:auto;margin-top:0%;"></p>
</div>

<div class="hidden-xs hidden-sm">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /> <?php echo Textos::model()->GetText(348); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p  style="text-align:center;border-bottom:1px solid #0082C8;width:3%;margin:auto;margin-top:0%;"></p>
</div>


<h2 class="titulo-vad titulo-<?php echo $normalizado; ?>"><?php echo Textos::model()->GetText(506); ?></h2>




<div  class=" col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display:inline-block;text-align:center;"  id="vademecum-loading">
	<div style="width:90%;display:inline-block;overflow:hidden;">
	
	<?php $auxIndex=0; ?>
	
	<?php if(isset($productos)){ foreach($productos as $producto){
		
	if(($producto->pais==$pais||($producto->pais==17&&$isParaguay))&&!($isParaguay&&$producto->id==279)){
		$auxIndex++;
	$id= $producto->id;
	$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
	?>
	<div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 div-img-aft same-height" hid="1" style="">
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/productos/id<?php echo $producto->id; ?>" style="background-color:#f5f5f5;display:inline-block;width:96%;height:96%;margin:2%;">
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
	
	<?php } } } ?>
	<?php if(!isset($productos)|| count($productos)==0||$auxIndex==0){ ?>
		<h5> <?php echo Textos::model()->GetText(349); ?></h5>
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

	<script>
function goBack() {
    window.history.back();
}
</script>
	
</div>

<?php include('widget-vademecum.php'); ?>

</div>
</div>