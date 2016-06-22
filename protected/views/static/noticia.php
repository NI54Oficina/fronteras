<?php

//se setea el nombre de clase correspondiente a la sección
$secciones=[];
$secciones["Granos"]="noticia-tipo-7";
$secciones["Clima"]="noticia-tipo-2";
$secciones["Mercado de granos"]="noticia-tipo-7";
$secciones["Hacienda"]="noticia-tipo-1";
$secciones["Interes general"]="noticia-tipo-4";
$secciones["Insumos"]="noticia-tipo-5";
$secciones["Mercado de hacienda"]="noticia-tipo-1";
$secciones["Financiero"]="noticia-tipo-4";
$secciones["Institucionales"]="noticia-tipo-4";
$secciones["Necesidades hídricas y humedad"]="noticia-tipo-6";
$secciones["Empresas"]="noticia-tipo-4";

?>


<?php

$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$data;
				$nota = FeedNoticias::model()->find($Criteria);
$categoria=$nota["categoria"];

?>


<section  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section <?php if(isset($secciones[$nota["categoria"]])){ echo $secciones[$nota["categoria"]];} ?>">

<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-hoy titulo-mobile"> <p> Hoy </p> </div>

<div id="noticia-art" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 container-inside-noticia">


	
	<br>
	<p 	class="categoria" style="position:absolute;" style="margin-bottom:0;"><?php echo $nota->categoria; ?></p>
	<!-- sacar hora !-->
	<p 	class="fecha-not-inner" style="margin-bottom:0;"><?php echo $nota->fecha; ?></p>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 line-not" style="width:100%;"></div>
	<br>
	<h1  class="titulo"><?php echo $nota->titulo; ?></h1>

	<h3	class="bajada" style="margin-top:0px;margin-bottom:20px;font-size:1.3em;"><?php echo $nota->bajada; ?></h3>

	<p	class="cuerpo"><?php echo $nota->body; ?></p>

	<p	class="fuente"><?php echo $nota->fuente; ?></p>


<style>
#noticia-art h2{
	font-size:1.7em;
}
#noticia-art p{
	font-size:1em;
}
</style>

</div>
<?php
include("columna-noticia.php")
?>
</section>
