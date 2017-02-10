<div style="padding-top:20vh;width:100%;"></div>
<div sclass="col-lg-8 col-md-8 col-sm-12 col-xs-12"><form action="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/registros/" method="post" 	>

	<input type="text" class="buscador" name="arg" style="width:88%;" />

	<button  id="btn-buscador-vademecum" style="width:10%;margin-left:1%;background-size:90% auto; background-position:right; margin-top: -5px;">
		
	</button>
	</form></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php 

$word = "Aciendel";

if(isset($_POST["arg"])){
	//echo $_POST["arg"];
	
//	$arg= str_replace(" ",',',$_POST["arg"]);
$word=$_POST["arg"];
}
$list= Yii::app()->db->createCommand("SELECT * FROM `tbl_registros` WHERE `senasa` LIKE '%".$word."%'")->queryAll();

$rs=array();
foreach($list as $item){
    //process each item here
	?>
	<div style="width:100%;">
		<strong>Nombre:</strong> <?php echo $item["senasa"]; ?><br>
		<!--<strong>id:</strong> <?php echo $item["id"]; ?><br>!-->
		<strong>Pais:</strong> <?php echo $item["pais"]; ?>
		<?php if(Pais::model()->findByAttributes(array("nombre"=>$item["pais"]))){ ?>
		<strong>Id:</strong> <?php echo Pais::model()->findByAttributes(array("nombre"=>$item["pais"]))->id; ?>
		<?php } ?>
		
	</div>
	<hr>
	<?php
	//echo $item['id'];
    //$rs[]=$item['id'];

}
//return $rs;

?>
<hr>
<!--
<?php 

$list= Yii::app()->db->createCommand("SELECT * FROM `tbl_producto` WHERE `nombre` LIKE '%".$word."%'")->queryAll();

$rs=array();
foreach($list as $item){
    //process each item here
	echo $item['id'];
    $rs[]=$item['id'];

}
//return $rs;

?>
!-->

</div >