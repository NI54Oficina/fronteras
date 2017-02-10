<?php

/*FeedNoticias::model()->CheckFeed();
$provincia= new Provincia();
$provincia->nombre="poyo2";
$provincia->save();*/

if(true){
FeedNoticias::model()->CheckFeed();
//
ClimaMapas::model()->CheckFeed();
HidricaMapa::model()->CheckFeed();
//Clima::model()->CheckFeed();
}

if(false){
	$Criteria = new CDbCriteria();
				$Criteria->condition = "nid > "."159412";
$notas= FeedNoticias::model()->findAll($Criteria);
//158908.jpg
$webroot = Yii::getPathOfAlias('webroot');
foreach($notas as $nota){
	
	if(!file_exists ($webroot .'/uploads/noticias/'. $nota["nid"].".jpg")){
		if(!@copy($nota["foto"], $webroot .'/uploads/noticias/'. $nota["nid"].".jpg")){
			
		}
	}
}
}
if(false){
	$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = "."158651";
				$auxNota = FeedNoticias::model()->find($Criteria);
			if(!@copy($nota["foto"], $webroot .'/uploads/noticias/'. $nota["nid"].".jpg")){
			
			}
}

if(false){
	//$Criteria = new CDbCriteria();
		//		$Criteria->condition = "nid > "."159412";
	//$notas= FeedNoticias::model()->findAll($Criteria);
	$notas= HidricaMapa::model()->findAll();
	//158908.jpg
	$webroot = Yii::getPathOfAlias('webroot');
	foreach($notas as $nota){
	
		
		$nota= json_decode($nota->content,true);
						$webroot = Yii::getPathOfAlias('webroot');
				if(!file_exists ($webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-def.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_hydric_deficit_map']["und"][0]["uri"]), $webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-def.jpg")){
						
					}
				}
				if(!file_exists ($webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-nec.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_hydric_deficit_map']["und"][0]["uri"]), $webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-nec.jpg")){
						
					}
				}
				if(!file_exists ($webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-redf.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_hydric_deficit_map']["und"][0]["uri"]), $webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-rdef.jpg")){
					
				}
				}
	}
}

if(false){
	//$Criteria = new CDbCriteria();
		//		$Criteria->condition = "nid > "."159412";
	//$notas= FeedNoticias::model()->findAll($Criteria);
	$notas= ClimaMapas::model()->findAll();
	//158908.jpg
	$webroot = Yii::getPathOfAlias('webroot');
	foreach($notas as $nota){
	
		
		$nota= json_decode($nota->content,true);
						$webroot = Yii::getPathOfAlias('webroot');
				if(!file_exists ($webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-def.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_hydric_deficit_map']["und"][0]["uri"]), $webroot .'/uploads/mapa-hidrica/'. $nota["nid"]."-def.jpg")){
						
					}
				}
				$webroot = Yii::getPathOfAlias('webroot');
				if(!file_exists ($webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-max.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_map_max_temperature']["und"][0]["uri"]), $webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-max.jpg")){
						
					}
				}
				if(!file_exists ($webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-min.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_map_min_temperature']["und"][0]["uri"]), $webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-min.jpg")){
						
					}
				}
				if(!file_exists ($webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-lluvia.jpg")){
					if(!@copy(str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$nota['field_rain_map']["und"][0]["uri"]), $webroot .'/uploads/mapa-temperaturas/'. $nota["nid"]."-lluvia.jpg")){
						
					}
				}
	}
}

?>