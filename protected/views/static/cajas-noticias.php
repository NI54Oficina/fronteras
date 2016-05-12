<?php 
//se setea el nombre de clase correspondiente a la sección
$secciones=[];
$secciones["Granos"]="noticia-tipo-7";
$secciones["Clima"]="noticia-tipo-2";
$secciones["Mercado de granos"]="noticia-tipo-7
";
$secciones["Hacienda"]="noticia-tipo-1";
$secciones["Interes general"]="noticia-tipo-4";
$secciones["Insumos"]="noticia-tipo-5";
$secciones["Mercado de hacienda"]="noticia-tipo-1";
$secciones["Financiero"]="noticia-tipo-4";
$secciones["Institucionales"]="noticia-tipo-4";
$secciones["Necesidades hídricas y humedad"]="noticia-tipo-6";
$secciones["Empresas"]="noticia-tipo-4";

?>
 <!-- LINEAS DE CODIGO EN CSS 1175 -->

<!-- General cajas noticias-->
<div class="box-noticias col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<!-- TÍTULO NOTICIAS DEL SECTOR -->
	<div class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12 col-xl-5" id="noticia-box" hid="1">
	<div class="noticia-box-2">
	<div hid="2"></div>
		<div id="noticia-box-inner" class="square">
		<h1 id="noticia-box-title" class="center-to-parent">Noticias del sector</h1>
		</div>
	</div>	
	</div>

	<?php 
	$notas=FeedNoticias::model()->GetLast();
	
	if($notas){
		
		foreach($notas as $f ){
	?>
	<!-- Noticia 2-->
	<a href="/<?php if(isset($_SESSION['webRoot'])){echo $_SESSION['webRoot'];} ?>noticia/<?php echo $f["nid"]; ?>"> 
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12 col-xl-5" hid="1">
		<div class="<?php if(isset($secciones[$f["categoria"]])){ echo $secciones[$f["categoria"]];} ?>">
		
			<!--Título de sección -->
			
				<div class="border-noticias-h1 b-r">
				</div>
				<div class="container-h1-noticias" hid="2">
					<h1 ><?php echo $f["categoria"]; ?></h1>
				</div>
				<div class="border-noticias-h1 b-l"></div>
			
		
			<div class="container-imagen-nota square border-shadow" style="background-image:url('<?php echo $f["foto"]; ?>');">
			</div>
			
			<!-- Texto noticia -->
			<div  class=" container-texto-noticias " hid="6" >
				
				<h2 hid="4"><?php echo $f["titulo"]; ?></h2>
				<p hid="5"><?php echo $f["bajada"]; ?></p>
					
				<!-- Fecha -->
				<div class="fecha" hid="3">
					<p><?php echo $f["fecha"]; ?></p>
					
				</div>
				
			</div>
			
		</div>
	</div>

	</a>	
	<?php } } ?>
	




<!-- 	TEXTO COMENTADO  -->

	<?php if(false){ ?>
	<!-- Noticia 3-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Granos</h1><div class="border-noticias-h1 b-l"></div>
			</div>
		
			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-1 square">
				<h2>Fondos especulativos volvieron a apostar fuerte contra la soja</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
		</div>
		
	</div>	
	
	<!-- Noticia 4-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
			
		</div>
		
	</div>	

	
	<!-- Noticia 5-->
		<div class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		  <div>
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>
			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		 </div>
			
		</div>

	
	
		<!-- Noticia 6-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>
	
	
		<!-- Noticia 7-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>
	
	
	<!-- Noticia 8-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Hacienda</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-1">
				<h2>Lechería: afirman que la industria no cumple con los valores</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>	
		
	
	
	<!-- Noticia 9-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Hacienda</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class=" container-texto-noticias noticia-tipo-1">
				<h2>Lechería: afirman que la industria no cumple con los valores</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>	
	
	
	<!-- Noticia 10-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>	

	
	<!-- Noticia 11-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>	
		</div>
	</div>	
	
		
	
		<!-- Noticia 12-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div>
		
			<!--Título de sección -->
			<div>
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div>
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>
	<?php } ?>
	
	
</div>	


 <script>
 $.post( "/<?php echo $_SESSION['webRoot'] ?>web/checkFeeds", function( data ) {
  console.log(data);
  if(data=="1"){
	  location.reload();
  }
});
 </script>