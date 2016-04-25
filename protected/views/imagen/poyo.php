<?php

$imagenes= Imagen::model()->findAll(array("condition"=>"id > 5"));

$path= $_SERVER['DOCUMENT_ROOT']."webBago/vademecums";

$auxaux=0;
foreach($imagenes as $imagen) {
	$auxaux++;
	if($auxaux>5){
		return;
	}
   $image = $imagen["imagen"];
   $name = $imagen["id"].".png";

   // option 1
   $file = fopen($path."/".$name,"wr");
   echo "File name: ".$path."$name\n";
   fwrite($file, $image);
   fclose($file);

   // option 2 (oneliner)
   // file_put_contents($path."/".$name, base64_decode($image));
}

?>