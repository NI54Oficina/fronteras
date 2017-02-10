<?php
/*$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);
$context=stream_context_create($options);*/

$localidades=[];
$localidades["910"]="9 de Julio";$localidades["32861"]="Adelia María";$localidades["901"]="Arrecifes";$localidades["930"]="Azul";$localidades["38780"]="Bahía Blanca";$localidades["1218"]="Bandera";$localidades["39273"]="Benito Juárez";$localidades["1210"]="Bernasconi";$localidades["33113"]="Berrotarán";$localidades["39307"]="Bolívar";$localidades["1219"]="Campo Gallo";$localidades["36009"]="Cañada Rosquin";$localidades["41396"]="Cap.Fed. / Aeroparque";$localidades["39434"]="Capitán Sarmiento";$localidades["962"]="Carlos Casares";$localidades["405"]="Carlos Pellegrini";$localidades["968"]="Carlos Tejedor";$localidades["1227"]="Carmen de Areco";$localidades["987"]="Castelli";$localidades["1138"]="Catamarca";$localidades["298"]="Ceres";$localidades["1139"]="Chamical";$localidades["39637"]="Chascomús";$localidades["1025"]="Chivilcoy";$localidades["1204"]="Ciudad del L. Gral. San Martín";$localidades["1140"]="Comodoro Rivadavia";$localidades["32159"]="Concepción del Uruguay";$localidades["1141"]="Concordia";$localidades["33444"]="Córdoba";$localidades["991"]="Coronel Dorrego";$localidades["1004"]="Coronel Pringles";$localidades["39598"]="Coronel Suárez";$localidades["1053"]="Coronel Vidal";$localidades["461"]="Corral de Bustos";$localidades["1143"]="Corrientes";$localidades["1201"]="Curuzú Cuatiá";$localidades["1026"]="Daireaux";$localidades["1232"]="Dean Funes";$localidades["1027"]="Dolores";$localidades["1144"]="Esquel";$localidades["1146"]="Ezeiza";$localidades["32287"]="Federación";$localidades["1238"]="Federal";$localidades["135"]="Firmat";$localidades["1147"]="Formosa";$localidades["1211"]="General Acha";$localidades["32298"]="General Alvear";$localidades["1228"]="General Belgrano";$localidades["561"]="GENERAL DEHEZA";$localidades["1034"]="General Lamadrid";$localidades["1212"]="General Pico";$localidades["758"]="General Villegas";$localidades["1202"]="Goya";$localidades["1239"]="Gualeguay";$localidades["1148"]="Gualeguaychu";$localidades["40060"]="Guaminí";$localidades["1044"]="Henderson";$localidades["737"]="Hernando";$localidades["137"]="Hughes";$localidades["1205"]="Humahuaca";$localidades["1149"]="Iguazú";$localidades["1203"]="Ing. Guillermo Juárez";$localidades["243"]="Ituzaingó";$localidades["33902"]="Jesús María";$localidades["33902"]="Joaquín V. Gonzalez";$localidades["1220"]="Juan B. Alberdi";$localidades["1199"]="Juan José Castelli";$localidades["1150"]="Jujuy";$localidades["40270"]="Junín";$localidades["551"]="La Carlota";$localidades["1243"]="La Paz";$localidades["1151"]="La Plata";$localidades["44325"]="La Quiaca";$localidades["1152"]="La Rioja";$localidades["444"]="Laboulaye";$localidades["1153"]="Las Flores";$localidades["1154"]="Las Lomitas";$localidades["25"]="Las Rosas";$localidades["613"]="Las Varillas";$localidades["474"]="Leones";$localidades["1229"]="Lobos";$localidades["32529"]="MACIA";$localidades["40797"]="Maipú";$localidades["35635"]="Malargüe";$localidades["1156"]="Maquinchao";$localidades["1037"]="Mar del Plata";$localidades["34493"]="Marcos Juárez";$localidades["36514"]="María Teresa";$localidades["35644"]="Mendoza Aero";$localidades["1230"]="Mercedes";$localidades["1158"]="Monte Caseros";$localidades["1058"]="Necochea";$localidades["37114"]="Neuquén";$localidades["43022"]="Nogoyá";$localidades["41070"]="Olavarría";$localidades["1160"]="Oran";$localidades["32578"]="Paraná";$localidades["1214"]="Parera";$localidades["1162"]="Paso de los Libres";$localidades["41158"]="Pehuajó";$localidades["1068"]="Pellegrini";$localidades["878"]="Pergamino";$localidades["1163"]="Perito Moreno";$localidades["251"]="Pilar (obs. Prov. Cba.)";$localidades["1165"]="Posadas";$localidades["1166"]="Presidente Roque Saenz Peña";$localidades["1167"]="Puerto Deseado";$localidades["78"]="Rafaela";$localidades["1081"]="Rauch";$localidades["180"]="Reconquista";$localidades["1168"]="Resistencia";$localidades["533"]="Río Cuarto";$localidades["42951"]="Río Gallegos";$localidades["1086"]="Rivadavia";$localidades["832"]="Rojas";$localidades["1231"]="Roque Perez";$localidades["287"]="Rosario";$localidades["32702"]="ROSARIO DEL TALA";$localidades["146"]="Rufino";$localidades["1099"]="Saladillo";$localidades["41466"]="Salliqueló";$localidades["1170"]="Salta";$localidades["582"]="San Agustín";$localidades["1192"]="San Antonio";$localidades["1171"]="San Antonio Oeste";$localidades["38310"]="San Carlos";$localidades["1172"]="San Carlos de Bariloche";$localidades["36644"]="San Cristóbal";$localidades["628"]="San Francisco";$localidades["337"]="San Javier";$localidades["1247"]="San José de Feliciano";$localidades["1173"]="San Juan";$localidades["44318"]="San Julián";$localidades["1175"]="San Luis";$localidades["1176"]="San Martín";$localidades["182"]="SAN MIGUEL";$localidades["26006"]="San Miguel de Tucumán";$localidades["898"]="San Pedro";$localidades["1177"]="San Rafael";$localidades["32741"]="San Salvador de Jujuy";$localidades["226"]="Santa Fe";$localidades["1198"]="Santa María";$localidades["1178"]="Santa Rosa";$localidades["591"]="Santa Rosa de Río Primero";$localidades["1179"]="Santiago del Estero";$localidades["227"]="Santo Tome";$localidades["1223"]="Sastre";$localidades["228"]="Sauce Viejo";$localidades["1112"]="Tandil";$localidades["43836"]="Tartagal";$localidades["1116"]="Tornquist";$localidades["1184"]="Trelew";$localidades["1118"]="Trenque Lauquen";$localidades["1121"]="Tres Arroyos";$localidades["1185"]="Tucumán";$localidades["1186"]="Ushuaia";$localidades["153"]="Venado Tuerto";$localidades["1248"]="Victoria";$localidades["1187"]="Viedma";$localidades["36751"]="VILLA CAÑAS";$localidades["1189"]="Villa de María del Río Seco";$localidades["1190"]="Villa Dolores";$localidades["35190"]="Villa María";$localidades["1234"]="Villa María del Río Seco";$localidades["188"]="Villa Ocampo";$localidades["1249"]="Villa Paranacito";$localidades["1191"]="Villa Reynolds";$localidades["1250"]="Villaguay";$localidades["1065"]="Villalonga";


$localidad= "41396";
/*if(isset($_POST["localidad"])){
	$_SESSION["localidad"]= $_POST["localidad"];
}*/
if(isset($_SESSION["localidad"])){
	$localidad= $_SESSION["localidad"];
}else{
	$_SESSION["localidad"]=$localidad;
}
if(isset($data)&&!empty($data)&&!is_null($data)){
	$localidad=$data;
}

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);
$context=stream_context_create($options);

$dataClima = @file_get_contents('http://webservice.fyo.com/PortalClimaExtendidoProcedure.svc/'.$localidad,false,$context);


/*$Criteria = new CDbCriteria();
$Criteria->condition = "localidad = ".$localidad;
$auxNota = Clima::model()->find($Criteria);

if($auxNota){
	$dataClima=$auxNota->content;
}*/

?>