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
		$data= str_replace("Variacion","Variación",$data);
	 $array = json_decode($data,true);
	
	?>
	<?php $monedas= array_shift($array);
			 ?>
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados " hid="1">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		
			<h3>- Indicadores - </h3>
			
			<div class="col-lg-12 col-md-12 col-sm-12 subtablesNav" id="navIndicadores">
				
				<?php
				$idLoop=0;
				$firstLoop=true;
				$array=array_reverse($array,true );
				foreach($array as $item){ ?>
				<button type="button" class="btn-indicadores btn-default subtablesButton <?php if($firstLoop){echo  'defaultSubtable';$firstLoop=false;} ?>" target="tablaIndicadores<?php echo $idLoop; ?>"><?php echo $item["Nombre"]; ?></button>
				<?php $idLoop++; } ?>
				
				<!--<button type="button" class="btn-indicadores btn-default subtablesButton defaultSubtable" target="tablaIndicadores1">Bolsas</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaIndicadores0">Tasas</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaIndicadores2">Commodities</button>!-->
			
			</div>
			<?php 
			$idLoop=0;
			foreach($array as $item){ ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados" id="tablaIndicadores<?php echo $idLoop; ?>">
				
				<!-- cabecera-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				<?php 
				$order=["Nombre","Compra","Venta","Variación"];
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
						<!--nombre de columna-->
						<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?> columna-indicadores">
							<p><?php echo $key; ?></p>
						</div>
				<?php 
					} 
				}
				?>
				</div>
				
				<!-- contenido-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				<?php foreach($item["Items"] as $c){ ?>
				<!--fila-->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php foreach($order as $key){ 
								if($c[$key]!="s/c"&&$c[$key]!="0"){ ?>
								<!--columnas-->
									<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">
										<p class="moneda-mercados"><?php echo $c[$key]; ?> <?php if($key=="Variación"){
															
										$variacion=floatval(str_replace(',','.',$c[$key]));
										if($variacion<0){
											echo $iconDown;
										}else if($variacion>0){
											echo $iconUp;
										}else{ 
											echo $iconEqual;
										}
											
										} ?></p>
									</div>
								<?php } 
							} ?>
						</div>
				<?php } ?>
					
				</div>	
				
			</div>	
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">
			
				<p >Actualizado: <?php echo array_shift($array)["UltimaFechaActualizacion"]; ?></p>
			
			</div>	
			<?php 
			$idLoop++;
			} ?>
			
		</div>
		
	</div>
	
	<?php $item=$monedas; ?>
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-items-mercados " hid="1">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		
			<h3>- <?php echo $item["Nombre"]; ?> - </h3>
			
			<br>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				
				<!-- cabecera-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">
				<?php 
				$order=["Nombre","Compra","Venta","Variación"];
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
						<!--nombre de columna-->
						<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?> columna-indicadores">
							<p><?php echo $key; ?></p>
						</div>
				<?php 
					} 
				}
				?>
				</div>
				
				<!-- contenido-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">
				<?php foreach($item["Items"] as $c){ ?>
				<!--fila-->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php foreach($order as $key){ 
								if($c[$key]!="s/c"&&$c[$key]!="0"){ ?>
								<!--columnas-->
									<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">
										
										<p class="moneda-mercados"><?php echo $c[$key]; ?> <?php if($key=="Variación"){
															
										$variacion=floatval(str_replace(',','.',$c[$key]));
										if($variacion<0){
											echo $iconDown;
										}else if($variacion>0){
											echo $iconUp;
										}else{ 
											echo $iconEqual;
										}
											
										} ?></p>
									</div>
								<?php } 
							} ?>
						</div>
				<?php } ?>
					
				</div>	
				
			</div>	
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">
			
				<p >Actualizado: <?php echo $item["UltimaFechaActualizacion"]; ?></p>
			
			</div>	
			
			
		</div>
		
	</div>
	
<?php  } ?>