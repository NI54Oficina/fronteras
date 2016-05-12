<?php 

include("clases-noticias.php");

?>


<div id="noticia-col" class="col-lg-3 col-md-3 col-sm-4 hidden-xs  noticia-columna">
 
<p class="titulo-seccion-columna">MÁS NOTICIAS</p>

<?php 
	if(!isset($categoria)){
		$categoria="all";
	}
	$notas=FeedNoticias::model()->GetLast(2,$categoria);
	
	if($notas){
		
		foreach($notas as $f){
			
	?>
	<!-- Noticia 2-->
	<a href="/<?php if(isset($_SESSION['webRoot'])){echo $_SESSION['webRoot'];} ?>noticia/<?php echo $f["nid"]; ?>"> 
	<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12" hid="1">
		<div class="<?php if(isset($secciones[$f["categoria"]])){ echo $secciones[$f["categoria"]];} ?>">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r">
				</div>
				<div class="container-h1-noticias">
					<h1><?php echo $f["categoria"]; ?></h1>
				</div>
				<div class="border-noticias-h1 b-l"></div>
			</div>
		
			<div class="container-imagen-nota square" style="background-image:url('<?php echo $f["foto"]; ?>');">
			</div>
			
			<!-- Texto noticia -->
			<div  class=" container-texto-noticias " >
				
				<h2 hid="2"><?php echo $f["titulo"]; ?></h2>
				<p><?php echo $f["bajada"]; ?></p>
				
				<!-- Fecha -->
				<div class="fecha">
					<p><?php echo $f["fecha"]; ?></p>
					
				</div>
				
			</div>
			
		</div>
	</div>

	</a>	
		<?php }  }?>
	



</div>