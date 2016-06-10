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
		
	}
}

?>