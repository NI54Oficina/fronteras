<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-hoy titulo-mobile"> <p> Clima > Necesidades hídricas</p> </div>

<?php
$dias=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
$mapas= HidricaMapa::model()->GetLast(7);
 ?>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
<!-- Div contenedor -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-lluvias">
<!-- Div contenedor de primer fecha -->

<?php foreach($mapas as $f){

$f= json_decode($f->content,true);

?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 n-lluvia ">

<!-- titulo primer fecha -->
<h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-lluvia"> <?php
$currentDia= date("N",$f["created"]);
echo $dias[$currentDia]." ";
echo date("d",$f["created"]);
 ?> </h1>

<!-- tres mapas -->
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lan-xs-6 map-lluvia ">

	<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de deficit </h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12    box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
					<img class="mapa-img" src='<?php $foto= $f['field_hydric_deficit_map']["und"][0]["uri"];
		$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>' >
					<img class="escala" src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/referencia-deficit.png' />

				</div>

			</div>


		</div>
	</div>

</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lan-xs-6  map-lluvia ">

	<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de  posibilidades de lluvia</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12    box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

					<img class="mapa-img" src='<?php $foto= $f['field_hydric_rainy_necessary_map']["und"][0]["uri"];
					$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>' >
					<img class="escala" src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-probabilidad-lluvias.jpg'/>
				</div>

			</div>


		</div>
	</div>

</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lan-xs-6  map-lluvia ">

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-clima" >

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border-mapa">
			<h3>Mapa de necesidades</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12    box-clima-mapas-inner" hid="3"  >

			<!-- Clima datos & clima imágen -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<!--Clima imágen-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

					<img class="mapa-img" src='<?php $foto= $f['field_hydric_reverse_deficit_map']["und"][0]["uri"];
		$foto= str_replace("public://","http://www.agrofynews.com.ar/sites/default/files/",$foto); echo $foto; ?>'>
					<img class="escala" src='<?php echo Yii::app()->request->baseUrl; ?>/img/clima/referencias/escala-lluvia-nec.jpg' />
				</div>

			</div>


		</div>
	</div>

</div>


</div>
<?php } ?>
</div>
</section>
