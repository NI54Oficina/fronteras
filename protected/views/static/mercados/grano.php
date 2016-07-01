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
		$data= str_replace("Variacion","Variación",$data);
	 $array = json_decode($data,true);

	?>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados" hid="1">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<h3>- Granos - </h3>

			<div class="col-lg-12 col-md-12 col-sm-12 subtablesNav" id="navGranos" >

				<button type="button" class="btn-indicadores btn-default subtablesButton defaultSubtable" target="tablaGranos0">Girasol</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaGranos1">Maíz</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaGranos2">Soja</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaGranos3">Sorgo</button>
				<button type="button" class="btn-indicadores btn-default subtablesButton" target="tablaGranos4">Trigo</button>
			</div>

			<?php
			$idLoop=0;
			 foreach($array[0]["Productos"] as $item){
			 if(strpos($item["Producto"],'art.') ){return;}
			 ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados" id="tablaGranos<?php echo $idLoop; ?>">

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
							<p class="center-to-parent"><?php echo $key; ?></p>
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
										<p class="moneda-mercados center-to-parent"><?php if($key=="Indicador"){

										$variacion=$c[$key];
										if($variacion=="<"){
											echo $iconDown;
										}else if($variacion>0){
											echo $iconUp;
										}else{
											echo $iconEqual;
										}

										}else{
											echo $c[$key];
										} ?></p>
									</div>
								<?php }
							} ?>
						</div>
					<?php } } ?>

				</div>

			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">

				<p >Actualizado:
				<?php
					echo $array[0]["FechaCarga"];


				?>
				</p>

			</div>
			<?php $idLoop++; } ?>
		</div>

	</div>


<?php  } ?>
