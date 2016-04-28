<?php 
$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);
$context=stream_context_create($options);

$data = @file_get_contents('http://webservice.fyo.com/PortalHaciendaHomeProcedure.svc/agrupado',false,$context);

	
	if($data){
		//echo $data;
		$array = json_decode($data,true);
		
		$entrada_liniers = $array[0]['EntradaLiniers'];
		$entrada_rosario = $array[0]['EntradaRosario'];

		$fecha = $array[0]['FechaActualizacion'];
		
		$categorias = $array[0]['Categorias'];
		
		
			?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- Mercado de Liniers - </h2>
			
			
			<!-- Icono vaca y número -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon-number-mercados">
				<!--imágen-->
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/vaca-mercado.png" alt="Vaca" />
				<!-- número -->
				<p><?php echo $entrada_liniers; ?></p>
			</div>
		
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Categoría</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Precio $</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Var Día $</h3>
					</div>
				
				</div>
				
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Nombre"]; ?></h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Precios"][0]["PrecioLiniers"]; ?></h3><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Precios"][0]["VariacionLiniers"]; ?></h3>
					</div>
				
				</div>
				<?php } ?>
					
				
			</div>		
			
		</div>
		
	</div>
		
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- Mercado de Rosario - </h2>
			
			
			<!-- Icono leche y número -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon-number-mercados">
				<!--imágen-->
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/leche-mercado.png" alt="Vaca" />
				<!-- número -->
				<p><?php echo $entrada_rosario; ?></p>
			</div>
		
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Categoría</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Precio $</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Var Día $</h3>
					</div>
				
				</div>
				
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Nombre"]; ?></h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Precios"][0]["PrecioRosario"]; ?></h3><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3><?php echo $c["Precios"][0]["VariacionRosario"]; ?></h3>
					</div>
				
				</div>
				<?php } ?>
				
				
			</div>	
			
		</div>
		
	</div>
	<?php } ?>