<?php

$options = array(
  'http'=>array(
    'method'=>"GET"
  )
);
$context=stream_context_create($options);

$data = @file_get_contents('http://www.entresurcosycorrales.com/app/estructura_db.php?tabla=cartelera',false,$context);

if($data){
	//echo $data;
    $array = json_decode($data,true);
	//echo "<hr>";
	$array= $array["response"];
	foreach($array as $cartelera){
		//echo $cartelera["id_cartelera"];
		//echo "<br>";
		//echo "<br>";
		//echo $cartelera["id_cartelera"];
		//echo "<br>";
		$Criteria = new CDbCriteria();
		$Criteria->condition = "cartelera = ".$cartelera["id_cartelera"];
		$remate= Remates::model()->find($Criteria);
		if(!$remate){
			$remate= new Remates();
		}
		
		
		$remate->cartelera= $cartelera["id_cartelera"];
		$remate->fecha= $cartelera["fecha"];
		$remate->provincia= $cartelera["provincia"];
		$remate->lugar= $cartelera["ciudad"];
		$remate->categoria= $cartelera["categoria"];
		$remate->consignatario= $cartelera["consignatario"];
		$remate->zona= $cartelera["zona"];
		$remate->cabezas= $cartelera["cantidad"];;
		$remate->detalle= $cartelera["detalle"];;
		$remate->tipo= $cartelera["tipo_remate"];;
		$remate->cate= $cartelera["cate_remate"];;
		$remate->suspendido= $cartelera["suspendido"];;
		$remate->save();
		//echo "<br>";
		//echo "<hr>";
		//return;
	}
}

?>