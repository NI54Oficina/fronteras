<?php

$provincias= Provincia::model()->findAll();

foreach($provincias as $provincia){
	echo $provincia->nombre;
	echo "<br>";
	$Criteria = new CDbCriteria();
	$Criteria->condition = "provincia = '".$provincia->nombre."'";
	$auxNota = Veterinarias::model()->findAll($Criteria);
	if($auxNota){
		foreach($auxNota as $nota){
			
			echo $nota->ciudad;
			$Criteria = new CDbCriteria();
			$Criteria->condition = "provincia = '".$provincia->id."' and nombre = '".$nota->ciudad."'";
			$auxCiudad= Ciudad::model()->find($Criteria);
			if($auxCiudad){
				continue;
			}
			$auxCiudad= new Ciudad();
			$auxCiudad->nombre= $nota->ciudad;
			$auxCiudad->provincia= $provincia->id;
			$auxCiudad->save();
			echo "<br>";
		}
		
	}else{
		echo "no tiene nota";
	}
	echo "<hr>";
}

?>