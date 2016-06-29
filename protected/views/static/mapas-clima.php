<?php

/*$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);
$context=stream_context_create($options);

$data = @file_get_contents('http://www.fyo.com/clima/views/vista_temperaturas',false,$context);*/

$f= json_decode(ClimaMapas::model()->GetLast()[0]->content,true);

if(true){

  /*  $array = json_decode($data,true);

	$fecha = $array;
	$f=$fecha[0];*/

?>
	<div class="box-clima col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 2 box-clima-title" hid="1" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clima-title fadder">

				<h1 class="center-to-parent" id="lluvias-temperaturas-h1">Lluvias y temperaturas</h1>

		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-clima-mapa">
		<p>Fecha: <?php echo date("d-m-y | h:i:s",$f["created"]); ?></p>
		<!---->
		</div>
	</div>

	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6  mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-mapa">
			<h3>Mapa de temperaturas máximas</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mapa-img" >
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/esc-temp-max.gif' style="position:absolute;right:0;max-width:20%; left:100%"/>
					<img src="<?php $foto= $f['field_map_max_temperature']["und"][0]["uri"];
		$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>

	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de temperaturas mínimas</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12    box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-img" >
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-temp-min.gif' style="position:absolute;right:0;max-width:20%; left:100%"/>
					<img src="<?php $foto= $f['field_map_min_temperature']["und"][0]["uri"];
					$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>


	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6  mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de lluvias</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-img">
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-lluvia.gif' style="position:absolute;right:0;max-width:20%;left:100%"/>
					<img src="<?php $foto= $f['field_rain_map']["und"][0]["uri"]; $foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/lluvias-temperaturas">
    <div style="background-color:red">
      <button type="button" class="btn-mapas subtablesButton"><p class="p-button-clima" style="">
        Ver anteriores
      </p></button>
    </div>

    </a>
	</div>
<?php
}
?>
