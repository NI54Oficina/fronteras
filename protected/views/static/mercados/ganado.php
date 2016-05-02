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
			
	<?php if($categorias[0]["Precios"][0]["PrecioLiniers"]!="0"&&$categorias[0]["Precios"][0]["PrecioLiniers"]!="0.00"&&$categorias[0]["Precios"][0]["PrecioLiniers"]!="0,00"){ ?>
	
	<!-- liniers-->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h3>- Ganado -</h3>
		
			<div class="col-lg-12 col-md-12 col-sm-12">
			
				<button type="button" class="btn btn-default">Liniers</button>
				<button type="button" class="btn btn-default">Rosario</button>
			
			</div>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  columna-ganado">
						<p>Categoría</p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4  columna-ganado">
						<p>Precio $ </p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4  columna-ganado">
						<p>Var Día $</p>
					</div>
				
				</div>
				
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Nombre"]; ?></p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Precios"][0]["PrecioLiniers"]; ?></p><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Precios"][0]["VariacionLiniers"]; ?></p>
					</div>
				
				</div>
				<?php } ?>
					
				
			</div>		
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">
			
				<p>Actualizado: 12-02-2016</p>
			
			</div>
			
			
		</div>
		
	</div>
		
	<?php } ?>
	
	<!-- rosario-->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados square">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square">
		
			<h3>- Mercado de Rosario - </h3>

		
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p>Categoría</p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p>Precio $</p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p>Var Día $</p>
					</div>
				
				</div>
				
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Nombre"]; ?></p>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="precio-ganado">
						<p><?php echo $c["Precios"][0]["PrecioRosario"]; ?></p><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Precios"][0]["VariacionRosario"]; ?></p>
					</div>
				
				</div>
				<?php } ?>
				
				
			</div>	
			
		</div>
		
	</div>
	<?php } ?>