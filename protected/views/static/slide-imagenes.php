<div style="padding-top:30vh;width:100%;"></div>
<?php 
$productos= Producto::model()->findAllByAttributes(array("pais"=>1));
$previous=null;
$next=null;
$found=null;
$productos=Producto::model()->taggedWith("aftosa")->findAll();	
echo count($productos);
/*foreach($productos as $p){
	$seccion= Seccion::model()->findByPk($p->seccion);
	if($p->hasTag($seccion->nombre)){
		//echo "tiene";
	}else{
		echo "no tiene";
	}
}*/
//$producto= Producto::model()->findByPk(1);
//echo $producto->nombre;
//echo $producto->addTag("poyo")->save();
?>
