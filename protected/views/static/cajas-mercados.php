<?php 
$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);
$context=stream_context_create($options);

$data = @file_get_contents('http://webservice.fyo.com/PortalHaciendaHomeProcedure.svc/agrupado',false,$context);

?>
<!--MERCADOS-->

<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 box-mercado">

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h1>Mercados</h1>
		
		</div>
		
	</div>

	<?php
	
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
	
	<?php
	
	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://webservice.fyo.com/PortalIndEconomicosHomeProcedure.svc/agrupado',false,$context);

	if($data){
	 $array = json_decode($data,true);
	?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- COTIZACIÓN DE  MONEDA EXTRANJERA - </h2>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3></h3>
					</div>
			
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Día</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Compra</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Venta</h3>
					</div>
				
				</div>
				
				<?php 
				 $categorias = $array[0]['Items'];
					foreach($categorias as $c){
				?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados"><?php echo $c["Nombre"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3  class="fecha-mercados"><?php echo $c["Fecha"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Compra"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Venta"]; ?></h3>
					</div>
				
				</div>
				<?php } ?>
					
				
			</div>	
					
		</div>
		
	</div>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- Bolsa - </h2>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3></h3>
					</div>
			
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Día</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Valor</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Variación</h3>
					</div>
				
				</div>
				
				<?php 
				 $categorias = $array[2]['Items'];
					foreach($categorias as $c){
				?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados"><?php echo $c["Nombre"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3  class="fecha-mercados"><?php echo $c["Fecha"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Compra"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Variacion"]; ?></h3>
					</div>
				
				</div>
				<?php } ?>
					
				
			</div>	
					
		</div>
		
	</div>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- Commodities - </h2>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3></h3>
					</div>
			
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Día</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Valor</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Variación</h3>
					</div>
				
				</div>
				
				<?php 
				 $categorias = $array[3]['Items'];
					foreach($categorias as $c){
				?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados"><?php echo $c["Nombre"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3  class="fecha-mercados"><?php echo $c["Fecha"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Compra"]; ?></h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3><?php echo $c["Variacion"]; ?></h3>
					</div>
				
				</div>
				<?php } ?>
					
				
			</div>	
					
		</div>
		
	</div>
	
	<?php } ?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- COTIZACIÓN DE CEREALES - </h2>
		
		
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
				
				
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Novillitos</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>29,00</h3><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>+ 1,00</h3>
					</div>
				
				</div>
				
				
				<!-- Segundo item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Terneros</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3 style="color:#3F3F3F;">30,50</h3><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/igual-mercado.png" alt="Igual" />
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>0,00</h3>
					</div>
				
				</div>
				
				
				<!-- Tercer item-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Vacas</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>20,90</h3><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>0,20</h3>
					</div>
				
				</div>		

			
				<!-- Cuarto item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>Vaquillonas</h3>
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>27,50</h3><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />
					</div>
					
					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<h3>+2,50</h3>
					</div>
			
				</div>		
				
			</div>			
		</div>
		
	</div>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- MÁRGENES BRUTOS - </h2>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3></h3>
					</div>
			
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Día</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Compra</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>Venta</h3>
					</div>
				
				</div>
				
				
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados">U$ Min</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3  class="fecha-mercados">12 feb</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
				
				</div>
				
				
				<!-- Segundo item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados">U$ Itau</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="fecha-mercados">12 feb</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
				
				</div>
				
				
				<!-- Tercer item-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados">Dólar/Euro</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="fecha-mercados">12 feb</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
				
				</div>		

			
				<!-- Cuarto item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados">Dólar/Real</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="fecha-mercados">12 feb</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
			
				</div>		

			
				<!-- Quinto item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="moneda-mercados">Euro</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="fecha-mercados">12 feb</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
					
					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3>+ 1,00</h3>
					</div>
			
				</div>		
				
			</div>		
		</div>
		
	</div>

</div>