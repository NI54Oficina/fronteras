<?php 

$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$data;
				$nota = FeedNoticias::model()->find($Criteria);
$categoria=$nota["categoria"];
?>
<section  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">

<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-hoy titulo-mobile"> <p> Hoy </p> </div>

<div id="noticia-art" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 container-inside-noticia">

	
	
	<p 	class="fecha-not-inner"><?php echo $nota->fecha; ?></p>
	
	
	<h1  class="titulo"><?php echo $nota->titulo; ?></h1>
	
	<p 	class="categoria"><?php echo $nota->categoria; ?></p>
	
	<h3	class="bajada"><?php echo $nota->bajada; ?></h3>
	
	<p	class="cuerpo"><?php echo $nota->body; ?></p>
	
	<p	class="fuente"><?php echo $nota->fuente; ?></p>
	



</div>
<?php 
include("columna-noticia.php")
?>	
</section>



	