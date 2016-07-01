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


	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados " hid="1">

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
							<p class="center-to-parent"><?php echo $key; ?></p>
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
										<p class="moneda-mercados"><?php if($key=="Variación"){

										$variacion=floatval(str_replace(',','.',$c[$key]));
										if($variacion<0){
											echo $iconDown;
										}else if($variacion>0){
											echo $iconUp;
										}else{
											echo $iconEqual;
										}

										} ?><span><?php if(strpos($c[$key],'-')===false){echo "&nbsp;";} echo $c[$key]; ?></span></p>
									</div>
								<?php }
							} ?>
						</div>
				<?php } ?>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">

				<p>Actualizado:
				<?php
					$auxDate=array_shift($array)["UltimaFechaActualizacion"];
					//echo $auxDate;
					//echo "<br>";
					//$utime= strtotime(array_shift($array)["UltimaFechaActualizacion"]);
					//echo date("d-m-y",$utime);
					//$t = date_create_from_format("d-m-y | H:i","22-06-16 | 10:01");
					//echo date_format($t,"d-m-y");
					echo substr($auxDate,0, strpos($auxDate,"|"));

				?>
				</p>

			</div>
			<?php
			$idLoop++;
			} ?>

		</div>

	</div>

	<?php $item=$monedas; ?>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados " hid="1">

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
							<p class="center-to-parent"><?php echo $key; ?></p>
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

										<p class="moneda-mercados" style="word-wrap: break-word;"><?php if($key=="Variación"){

										$variacion=floatval(str_replace(',','.',$c[$key]));
										if($variacion<0){
											echo $iconDown;
										}else if($variacion>0){
											echo $iconUp;
										}else{
											echo $iconEqual;
										}

									} ?><span><?php if(strpos($c[$key],'-')){echo "&nbsp;";} echo $c[$key];  ?></span></p>
									</div>
								<?php }else if($key=="Venta"){?>
									<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-<?php echo $col; ?> col-xs-<?php echo $col; ?>">	<p class="moneda-mercados">-</p></div>
								<?php } ?>
							<?php } ?>
						</div>
				<?php } ?>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">

				<p >Actualizado: <?php echo substr($item["UltimaFechaActualizacion"],0, strpos($item["UltimaFechaActualizacion"],"|")); ?></p>

			</div>


		</div>

	</div>

<?php  } ?>

<style>
.moneda-mercados .glyphicon{
	float:left;
	padding-right:20px;
}
.moneda-mercados {

}
</style>
