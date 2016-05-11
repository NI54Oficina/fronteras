<?php 

$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$data;
				$nota = FeedNoticias::model()->find($Criteria);

?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-inside-noticia">

	<div class="border-fecha">
		<div></div>
		<p 	class="fecha"><?php echo $nota->fecha; ?></p>
	</div>
	
	<h1  class="titulo"><?php echo $nota->titulo; ?></h1>
	
	<p 	class="categoria"><?php echo $nota->categoria; ?></p>
	
	<h3	class="bajada"><?php echo $nota->bajada; ?></h3>
	
	<p	class="cuerpo"><?php echo $nota->body; ?></p>
	
	<p	class="fuente"><?php echo $nota->fuente; ?></p>
	
</div>