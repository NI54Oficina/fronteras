<?php
	
	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://webservice.fyo.com/PortalPizarraProcedure.svc/agrupado',false,$context);
	$col=0;
	if($data){
	 $array = json_decode($data,true);
	 foreach($array[0]["Productos"] as $item){
	?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados" hid="1">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h3>- <?php echo $item["Producto"]; ?> - </h3>
			
			<div class="col-lg-12 col-md-12 col-sm-12">
			
				<button type="button" class="btn-indicadores btn-default">Girasol</button>
				<button type="button" class="btn-indicadores btn-default">Maíz</button>
				<button type="button" class="btn-indicadores btn-default">Soja</button>
				<button type="button" class="btn-indicadores btn-default">Sorgo</button>
				<button type="button" class="btn-indicadores btn-default">Trigo</button>
			</div>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				<?php 
				$order=["Nombre","Indicador","Compra","Venta","Var","Precio"];
				$columnas=0;
				$col=0;
				foreach($order as $key){
					if(array_key_exists($key,$item["Mercados"][0])){
						$columnas++;
					}
				}
				$col= floor( 12/$columnas);
				foreach($order as $key){
					if(array_key_exists($key,$item["Mercados"][0])){ ?>
						<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?> columna-granos">
							<p><?php echo $key; ?></p>
						</div>
				<?php 
					} 
				}
				?>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				<?php foreach($item["Mercados"] as $c){ 
					if($c["Precio"]!="s/c"&&$c["Precio"]!="S/C"&&$c["Precio"]!="0"){
					?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php foreach($order as $key){ 
								if(array_key_exists($key,$c)){ ?>
									<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">
										<p class="moneda-mercados"><?php echo $c[$key]; ?></p>
									</div>
								<?php } 
							} ?>
						</div>
					<?php } } ?>
					
				</div>	
				
			</div>	
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">
			
				<p >Actualizado: 12-02-2016</p>
			
			</div>
		</div>
		
	</div>
	
	
<?php } } ?>