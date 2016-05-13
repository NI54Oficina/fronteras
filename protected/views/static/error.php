<?php
if($code=500){
	$code=404;
}
$auxError= ErrorMsg::model()->findByAttributes(array("codigo"=>$code,"idoma"=>$_SESSION["lng"]));
if($auxError){
	$message= $auxError->texto;
}

?>
<div id="container-error" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<h1>Error</h1>
	
	
</div>