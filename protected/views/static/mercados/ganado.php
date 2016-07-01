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
		$data= str_replace("Variacion","Variación",$data);
		//echo $data;
		$array = json_decode($data,true);

		$entrada_liniers = $array[0]['EntradaLiniers'];
		$entrada_rosario = $array[0]['EntradaRosario'];

		$fecha = $array[0]['FechaActualizacion'];

		$categorias = $array[0]['Categorias'];


			?>

	<?php// if($categorias[0]["Precios"][0]["PrecioLiniers"]!="0"&&$categorias[0]["Precios"][0]["PrecioLiniers"]!="0.00"&&$categorias[0]["Precios"][0]["PrecioLiniers"]!="0,00"){ ?>

	<!-- liniers-->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados " hid="1">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<h3>- Ganado -</h3>

			<div class="col-lg-12 col-md-12 col-sm-12 subtablesNav" id="navMercados">

				<button type="button" class="btn btn-default subtablesButton defaultSubtable" target="tablaLiniers">Liniers</button>
				<button type="button" class="btn btn-default subtablesButton" target="tablaRosario">Rosario</button>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  columna-ganado">
						<p class="center-to-parent">Categoría</p>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3   columna-ganado">
						<p class="center-to-parent">Precio $ </p>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 columna-ganado">
					<p>&nbsp;</p>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3   columna-ganado">
						<p class="center-to-parent">Var Día $</p>
					</div>

				</div>

				<div id="tablaLiniers" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">



					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Nombre"]; ?></p>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<p><?php echo $c["Precios"][0]["PrecioLiniers"]; ?></p><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<?php $variacion=floatval(str_replace(',','.',$c["Precios"][0]["VariaciónLiniers"]));
						 if($variacion<0){
							echo $iconDown;
						}else if($variacion>0){
							echo $iconUp;
						}else{
							echo $iconEqual;
						} ?>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<p><?php echo $c["Precios"][0]["VariaciónLiniers"]; ?></p>
					</div>

				</div>

				<?php } ?>
				</div>
				<div id="tablaRosario" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php foreach($categorias as $c){ ?>
				<!-- Primer item -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<p><?php echo $c["Nombre"]; ?></p>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="precio-ganado">
						<p><?php echo $c["Precios"][0]["PrecioRosario"]; ?></p><!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-mercado.png" alt="Flecha arriba" />!-->
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<?php $variacion=floatval(str_replace(',','.',$c["Precios"][0]["VariaciónRosario"]));
						 if($variacion<0){
							echo $iconDown;
						}else if($variacion>0){
							echo $iconUp;
						}else{
							echo $iconEqual;
						} ?>
					</div>

					<div  class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<p><?php echo $c["Precios"][0]["VariaciónRosario"]; ?></p>
					</div>

				</div>
				<?php } ?>
				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">

				<p>Actualizado:
				<?php echo $categorias[0]["FechaActualizacion"]; ?></p>

			</div>


		</div>

	</div>

	<?php //} ?>

	<?php if(false){ ?>
	<!-- rosario-->
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados" hid="1">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<h3>- Mercado de Rosario - </h3>



			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados">
				<!-- Tabla ( Categoría, Precio, Var día)-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p class="center-to-parent">Categoría</p>
					</div>

					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p class="center-to-parent">Precio $</p>
					</div>

					<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 columna-ganado">
						<p class="center-to-parent">Var Día $</p>
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
						<p><?php echo $c["Precios"][0]["VariaciónRosario"]; ?></p>
					</div>

				</div>
				<?php } ?>


			</div>

		</div>

	</div>
	<?php } ?>
	<?php } ?>
