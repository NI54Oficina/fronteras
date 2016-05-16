<!DOCTYPE HTML>
<?php $lang="";
	if(!isset($_SESSION["lng"])){
		$lang="es";
	}else{
		$lang=  $_SESSION["lng"];
	} ?>
<html lang="<?php echo $lang; ?>">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<meta name="description" content="Biogénesis Bagó es una empresa de biotecnología que investiga, elabora y comercializa productos y servicios veterinarios, destinados a asegurar la salud y mejorar la productividad de los rodeos de carne y leche">
	
	
	<?php        
	
	$metas= MetatagPage::model()->findAllByAttributes(array('idPage'=>$data));	
	
	
	if($metas){
	foreach($metas as $m){
		$code= Metatag::model()->findByPk($m->idMetatag);
		$variable=$m->dat;
	
		$variable= Textos::model()->GetText($variable,$lang);
		if($code){
			$code=$code->code;
			$code= str_replace("[variable]",$variable,$code);
			echo $code;
		}
	}
	}
	
	?>
	

	<?php include("stylesheet-code.php"); ?>

	
