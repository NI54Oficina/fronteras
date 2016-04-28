<?php
	
	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://webservice.fyo.com/PortalIndEconomicosHomeProcedure.svc/agrupado',false,$context);
	$col=0;
	if($data){
	 $array = json_decode($data,true);
	 foreach($array as $item){
	?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h2>- <?php echo $item["Nombre"]; ?> - </h2>
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				<?php 
				$order=["Nombre","Compra","Venta","Variacion"];
				$columnas=0;
				$col=0;
				foreach($order as $key){
					if($item["Items"][0][$key]&&$item["Items"][0][$key]!="s/c"){
						$columnas++;
					}
				}
				$col= floor( 12/$columnas);
				foreach($order as $key){
					if($item["Items"][0][$key]&&$item["Items"][0][$key]!="s/c"){ ?>
						<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">
							<h3><?php echo $key; ?></h3>
						</div>
				<?php 
					} 
				}
				?>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				<?php foreach($item["Items"] as $c){ ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php foreach($order as $key){ 
								if($c[$key]!="s/c"&&$c[$key]!="0"){ ?>
									<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">
										<h3 class="moneda-mercados"><?php echo $c[$key]; ?></h3>
									</div>
								<?php } 
							} ?>
						</div>
				<?php } ?>
					
				</div>	
				
			</div>	
					
		</div>
		
	</div>
	
	
<?php } } ?>