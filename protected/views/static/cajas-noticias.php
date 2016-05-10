<?php 
//se setea el nombre de clase correspondiente a la sección
$secciones=[];
$secciones["Granos"]="noticia-tipo-1";
$secciones["Clima"]="noticia-tipo-2";
$secciones["Mercado de granos"]="noticia-tipo-3";
$secciones["Hacienda"]="noticia-tipo-1";
$secciones["Interes general"]="noticia-tipo-4";
$secciones["Insumos"]="noticia-tipo-5";
$secciones["Mercado de hacienda"]="noticia-tipo-5";
$secciones["Financiero"]="noticia-tipo-5";
$secciones["Institucionales"]="noticia-tipo-5";

?>
 <!-- LINEAS DE CODIGO EN CSS 1175 -->

<!-- General cajas noticias-->
<div class="box-noticias col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<!-- TÍTULO NOTICIAS DEL SECTOR -->
	<div class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12" id="noticia-box" hid="1">
	<div class="noticia-box-2">
		<div id="noticia-box-inner">
		<h1 id="noticia-box-title">Noticias del sector</h1>
		</div>
	</div>	
	</div>

	<?php 
	$options = array(
	'http'=>array(
	'method'=>"GET",
	'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	)
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://www.fyo.com/json/noticias',false,$context);

	if($data){
		$array = json_decode($data,true);
		$fecha = $array;
		foreach($fecha as $f){
	?>
	<!-- Noticia 2-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12" hid="1">
		<div class="<?php if(isset($secciones[$f["categoria"]])){ echo $secciones[$f["categoria"]];} ?>">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r">
				</div>
				<h1><?php echo $f["categoria"]; ?></h1>
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
					<p><?php echo $f["publicacion"]; ?></p>
				</div>
				
			</div>
			
		</div>
	</div>	
	<?php } } ?>
	




<!-- 	TEXTO COMENTADO  -->

	<?php if(false){ ?>
	<!-- Noticia 3-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		
	<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Granos</h1><div class="border-noticias-h1 b-l"></div>
			</div>
		
			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-1 square">
				<h2>Fondos especulativos volvieron a apostar fuerte contra la soja</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
	</div>
		
	</div>	
	
	<!-- Noticia 4-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
			
		</div>
		
	</div>	

	
	<!-- Noticia 5-->
		<div class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		  <div>
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>
			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		 </div>
			
		</div>

	
	
		<!-- Noticia 6-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
		</div>
	
	
		<!-- Noticia 7-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>
	
	
	<!-- Noticia 8-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Hacienda</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-1">
				<h2>Lechería: afirman que la industria no cumple con los valores</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>	
		
	
	
	<!-- Noticia 9-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
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
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
	</div>	

	
	<!-- Noticia 11-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Clima</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-2">
				<h2>Precipitaciones pueden regresar mañana</h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>	
		</div>
	</div>	
	
		
	
		<!-- Noticia 12-->
	<div  class="col-lg-2-5 col-md-2-5 col-sm-4 col-xs-12">
		<div class="">
		
			<!--Título de sección -->
			<div  class="">
				<div class="border-noticias-h1 b-r"></div><h1>Mercado</h1><div class="border-noticias-h1 b-l"></div>
			</div>

			
			<!-- Texto noticia -->
			<div  class="container-texto-noticias noticia-tipo-3">
				<h2>Por la suba en el precio de la carne, aumenta el consumo de pollo </h2>
				<p>Los administradores de fondos especulativos que operan en el mercado de Chicago comenzaron nuevamente a realizar apuestas bajistas en soja al tiempo que...</p>
				
				<!-- Fecha -->
				<div class="">
					<p>15-02-16 I 07:50</p>
				</div>
				
			</div>
		
			
		</div>
		</div>
	<?php } ?>
	
	
</div>	

	