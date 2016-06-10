<?php

$options = array(
  'http'=>array(
    'method'=>"GET"
  )
);
$context=stream_context_create($options);

$data = @file_get_contents('http://www.entresurcosycorrales.com/app/estructura_db.php?tabla=cartelera_cabanias',false,$context);

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
		$Criteria->condition = "id_cabanias = ".$cartelera["id_cabanias"];
		$remate= Cabanas::model()->find($Criteria);
		if(!$remate){
			$remate= new Cabanas();
		}
		
		
		$remate->id_cabanias= $cartelera["id_cabanias"];
		$remate->fecha= $cartelera["fecha"];
		$remate->provincia= $cartelera["provincia"];
		$remate->ciudad= $cartelera["ciudad"];
		$remate->consignatario= $cartelera["consignatario"];
		$remate->cabania= $cartelera["cabania"];
		$remate->zona= $cartelera["zona"];
		$remate->raza= $cartelera["raza"];
		$remate->cantidad= $cartelera["cantidad"];
		$remate->detalle= $cartelera["detalle"];
		$remate->tipo_remate= $cartelera["tipo_remate"];
		$remate->cate_remate= $cartelera["cate_remate"];
		$remate->suspendido= $cartelera["suspendido"];
		$remate->id_asociacion_1= $cartelera["id_asociacion_1"];
		$remate->id_asociacion_2= $cartelera["id_asociacion_2"];
		$remate->id_asociacion_3= $cartelera["id_asociacion_3"];
		$remate->id_asociacion_4= $cartelera["id_asociacion_4"];
		$remate->id_asociacion_5= $cartelera["id_asociacion_5"];
		
		$remate->save();
		//echo "<br>";
		//echo "<hr>";
		//return;
	}
}

?>