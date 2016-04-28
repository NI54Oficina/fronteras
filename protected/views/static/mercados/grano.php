<?php
	
	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://webservice.fyo.com/PortalPizarraProcedure.svc/agrupado',false,$context);

	if($data){
	 $array = json_decode($data,true);
	 foreach($array[0]["Productos"] as $item){
	?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- <?php echo $item["Producto"]; ?> - </h2>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				<?php 
				$order=["Nombre","Indicador","Compra","Venta","Var","Precio"];
				foreach($order as $key){
					if(array_key_exists($key,$item["Mercados"][0])){ ?>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<h3><?php echo $key; ?></h3>
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
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<h3 class="moneda-mercados"><?php echo $c[$key]; ?></h3>
									</div>
								<?php } 
							} ?>
						</div>
					<?php } } ?>
					
				</div>	
				
			</div>	
					
		</div>
		
	</div>
	
	
<?php } } ?>