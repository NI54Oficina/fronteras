<?php

/*$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
  )
);*/
//$context=stream_context_create($options);

//$dataH = @file_get_contents('http://www.fyo.com/clima/views/vista_necesidades_hidricas',false,$context);

/*$dahtaH= HidricaMapa::model()->GetLast()->content;

if($dataH){

    $array = json_decode($dataH,true);

	$fecha = $array;
	$f=$fecha[0];*/
	//$f=HidricaMapa::model()->GetLast()->content;
	$f= json_decode(HidricaMapa::model()->GetLast()[0]->content,true);
	if(true){
?>
	<div class="box-clima col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 2 box-clima-title" hid="1" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clima-title fadder">

				<h1 class="center-to-parent" id="lluvias-temperaturas-h1">Necesidades hídricas</h1>

		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-clima-mapa">
		<p>Fecha: <?php echo date("d-m-y | h:i:s",$f["created"]); ?></p>
		<!--<button type="button" class="btn-mapas subtablesButton">Ver más</button>-->
		</div>
	</div>

	<?php if(isset($f['field_hydric_deficit_map'])){?>
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6  mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de deficit</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small-boxes-mercado" style="background-color:white; text-align:center;">
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/referencia-deficit.png' style="position:absolute;right:0;max-width:20%;"/>
					<img src="<?php $foto= $f['field_hydric_deficit_map']["und"][0]["uri"];
		$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>
	<?php }  ?>

	<?php if(isset($f['field_hydric_rainy_necessary_map'])){?>
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa" >
			<h3>Mapa posibilidad de lluvias</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small-boxes-mercado" style="background-color:white; text-align:center;">
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-probabilidad-lluvias.jpg' style="position:absolute;right:0;max-width:20%;"/>
					<img src="<?php $foto= $f['field_hydric_rainy_necessary_map']["und"][0]["uri"];
					$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>
	<?php } ?>

	<?php if(isset($f['field_hydric_reverse_deficit_map'])){?>
	<div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de necesidades</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small-boxes-mercado" style="background-color:white; text-align:center;">
					<img src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-lluvia-nec.jpg' style="position:absolute;right:0;max-width:20%;"/>
					<img src="<?php $foto= $f['field_hydric_reverse_deficit_map']["und"][0]["uri"];
		$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>" alt="Imágen Clima" style="width:80%;"/>

				</div>

			</div>


		</div>
	</div>
	<?php } ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/hidricas"><button type="button" class="btn-mapas subtablesButton"><p class="p-button-clima">
	Ver anteriores
	</p></button></a>
	</div>
<?php
}
?>
