<?php
$dias=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sabado"];
$mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
//$imagen-modalidad[0] = "modalidades-internet";
//$imagen-modalidad[1] = "modalidades-presencial";
//$imagen-modalidad[2] = "modalidades-televisado";

//$imagen-provincia[0] = "provincias-buenos-aires";
//$imagen-provincia[1] = "provincias-la-pampa";

//las imagenes estan en la carpeta publica.

$Criteria = new CDbCriteria();
$Criteria->condition = "fecha BETWEEN NOW() AND CAST('2016/".date("m",strtotime('+2 month'))."/01' AS DATE)";
$Criteria->order = "fecha";

$remates= Cabanas::model()->findAll($Criteria);
/*echo "<div style='width:100%;background-color:red;'>".count($remates)."</div>";*/

$auxLastFecha="1";
$newDate=false;

function ResetFecha(){
	$auxLastFecha="";
	$newDate=false;
}

function CheckFecha($remate,&$auxLastFecha,&$newDate){

	if($auxLastFecha!=""&&$auxLastFecha==$remate->fecha) {
		$newDate=false;
	}else {

		$newDate=true;
		$auxLastFecha=$remate->fecha;

	}


}
?>





<!-- REMATES CABAÑAS-->
<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-estemes titulo-mobile"> <p> Este mes > Remates Cabañas </p> </div>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<h1 class="hidden-xs hidden-md hidden-sm">Remates cabañas</h1>

	<!-- Caja general -->
	<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">



		<!-- Caja general fecha -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columna-fecha containerColumnas">

			<?php if(false){ ?>
			<p class="hidden-lg fecha-remates-mobile color-cabanias">
			<button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span></button>
			<span>Miercoles 18 Mayo del 2016</span>
			<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"></span></button></p>
			


			<!-- Titulo FECHA -->
			<div class="title-remates color-cabanias hidden-xs hidden-sm hidden-md"> <h2 class="center-to-parent">Fecha</h2></div>

			<!-- Caja fecha particular -->

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-cabanias hidden-xs hidden-sm hidden-md">

				<div class=" center-to-parent ">

					<p>Miércoles</p>
					<p>18</p>
					<p>Mayo del 2016</p>
				</div>


			</div>

			<?php } ?>
			
			<div class="title-remates color-cabanias hidden-xs hidden-sm hidden-md col-lg-12 col-md-12" hid="2"> <h2 class="center-to-parent">Fecha</h2></div>
					<!-- Caja fecha particular -->

					<?php
					ResetFecha();

					foreach($remates as $remate){
						CheckFecha($remate,$auxLastFecha,$newDate);
						if(!$newDate){
							?>
							<div class='col-lg-12 col-md-12 hidden-xs hidden-sm' hid='1' ></div>
							<div class="info-remates-mobile hidden-lg hidden-md">
							<div class="mes-remates hidden-lg hidden-sm hidden-md color-cabanias" hid="2">	<h2 class="center-to-parent"> <?php echo $mes[date("n",strtotime($remate->fecha))-1]; ?> <?php echo date("Y",strtotime($remate->fecha)); ?> </h2></div>
							<div class="hidden-lg cont-fecha-mobile color-cabanias ">
							<button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span> </button>
							<p class="fecha-remates-mobile date-remate ">
									<?php echo $dias[date("w",strtotime($remate->fecha))]; ?> <?php echo date("d",strtotime($remate->fecha)); ?>
							</p>
							<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"></span></button></div>
							</div>
							<?php
						}else{
							?>
							<div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
							<div class="mes-remates hidden-xs col-lg-12 col-md-12 color-cabanias" hid="2">	<h2 class="center-to-parent"> <?php echo $mes[date("n",strtotime($remate->fecha))]; ?> <?php echo date("Y",strtotime($remate->fecha)); ?> </h2></div>
							

							<div class="info-remates-mobile">
							<div class="mes-remates hidden-lg hidden-sm hidden-md color-cabanias" hid="2">	<h2 class="center-to-parent"> <?php echo $mes[date("n",strtotime($remate->fecha))-1]; ?> <?php echo date("Y",strtotime($remate->fecha)); ?> </h2></div>
							<div class="hidden-lg cont-fecha-mobile color-cabanias ">
							<button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span> </button>
							<p class="fecha-remates-mobile date-remate ">
									<?php echo $dias[date("w",strtotime($remate->fecha))]; ?> <?php echo date("d",strtotime($remate->fecha)); ?>
							</p>
							<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"></span></button></div>
							</div>

							<?php
						}
					?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-celda" <?php if(!$newDate){ ?> style="display:none;" <?php } ?>>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-fecha-remates color-cabanias hidden-xs hidden-md hidden-sm" hid="1" >

						<div class=" center-to-parent" >

							<p><?php echo $dias[date("w",strtotime($remate->fecha))]; ?></p>
							<p><?php echo date("d",strtotime($remate->fecha)); ?></p>


						</div>


					</div>
					</div>
					<?php
						if($newDate){
							?>
							<div class='col-lg-12 col-md-12 hidden-xs hidden-sm' hid='1' ></div>
							<?php
						}
					} ?>

					</div>
			
			
		</div>


	</div>



		<!-- Caja general: modalidad, consignatorio, lugar, provincia, cabezas -->
		<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 fade-in-mobile">

			<!-- Modalidad -->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-cabanias" hid="2"><h2 class="center-to-parent">Modalidad</h2></div>
				<!--Contenido -->
				<?php
				ResetFecha();
				foreach($remates as $remate){
				CheckFecha($remate,$auxLastFecha,$newDate);
				if($newDate){
					?><div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
					<div class="mes-remates color-cabanias hidden-xs col-lg-12 col-md-12" hid="2">	<h2 class="center-to-parent">  </h2></div>
					<?php
				}
				?>
				<div class="container-modalidad info-remates-mobile col-lg-12 col-md-12" hid="1">
				
				<?php if($remate["cate_remate"]=="Físico"){ ?>
							<img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/modalidades-presencial.svg">
						<?php }else if($remate["cate_remate"]=="Televisado"){
							?><img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/modalidades-televisado.svg"><?php
						}else if($remate["cate_remate"]=="Internet"){
							?><img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/modalidades-internet.svg"><?php
						}else{
							echo $remate["cate_remate"];
						} ?>
				</div>
				<?php } ?>
			</div>


			<!-- Consignatorio-->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-cabanias" hid="2"><h2 class="center-to-parent">Consignatario</h2></div>
				<!--Contenido -->
				<?php
				ResetFecha();
				foreach($remates as $remate){
				CheckFecha($remate,$auxLastFecha,$newDate);
				if($newDate){
					?><div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
					<div class="mes-remates color-cabanias hidden-xs col-lg-12 col-md-12" hid="2">	<h2 class="center-to-parent">  </h2></div>
					<?php
				}
				?>
				<div class="container-consignatorio info-remates-mobile col-lg-12 col-md-12" hid="1">
					<p class=" "><?php echo $remate["consignatario"]; ?></p>
				</div>
				<?php } ?>
			</div>


			<!-- Lugar-->

			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-cabanias" hid="2"><h2 class="center-to-parent">Lugar</h2></div>
				<!--Contenido -->
				<?php
				ResetFecha();
				foreach($remates as $remate){
				CheckFecha($remate,$auxLastFecha,$newDate);
				if($newDate){
					?><div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
					<div class="mes-remates color-cabanias hidden-xs col-lg-12 col-md-12" hid="2">	<h2 class="center-to-parent">  </h2></div>
					<?php
				}
				?>
				<div class="container-lugar info-remates-mobile col-lg-12 col-md-12" hid="1">
					<p class=""><?php echo $remate["ciudad"]; ?></p>
					<p class=""><?php echo $remate["detalle"]; ?></p>
				</div>
				<?php } ?>
			</div>


			<!-- Provincia -->
			<div class="col-lg-2-5 col-md-6 col-sm-6 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-cabanias" hid="2"><h2 class="center-to-parent">Provincia</h2></div>
				<!--Contenido -->
				<?php
				ResetFecha();
				foreach($remates as $remate){
				CheckFecha($remate,$auxLastFecha,$newDate);
				if($newDate){
					?><div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
					<div class="mes-remates color-cabanias hidden-xs col-lg-12 col-md-12" hid="2">	<h2 class="center-to-parent">  </h2></div>
					<?php
				}
				?>
				<div class="container-provincia  info-remates-mobile col-lg-12 col-md-12" hid="1">
				<?php 
				$provincia= $remate["provincia"]; 
				$provincia=strtolower ($remate["provincia"]);
				$provincia=str_replace(".","",$provincia);
				$provincia=str_replace(" ","-",$provincia);
				$provincia=str_replace("á","a",$provincia);
				$provincia=str_replace("é","e",$provincia);
				$provincia=str_replace("è","e",$provincia);
				$provincia=str_replace("í","i",$provincia);
				$provincia=str_replace("ó","o",$provincia);
				$provincia=str_replace("ú","u",$provincia);
				?>
				<img class="center-to-parent" src="<?php echo Yii::app()->request->baseUrl; ?>/img/provincias/provincias-<?php echo $provincia; ?>.svg"></div>

				<?php } ?>
			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-5 col-md-12 col-sm-12 col-xs-12 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-cabanias" hid="2"><h2 class="center-to-parent">Cabezas</h2></div>
				<!--Contenido -->
				<?php
				ResetFecha();
				foreach($remates as $remate){
				CheckFecha($remate,$auxLastFecha,$newDate);
				if($newDate){
					?><div class='col-lg-12 col-md-12 hidden-xs hidden-sm separator-table' ></div>
					<div class="mes-remates color-cabanias hidden-xs col-lg-12 col-md-12" hid="2">	<h2 class="center-to-parent">  </h2></div>
					<?php
				}
				?>
				<div class="container-cabezas info-remates-mobile table-indexer col-lg-12 col-md-12" hid="1">
					<p class=""><?php echo $remate["cantidad"]; ?></p>
				</div>
				<?php } ?>
			</div>


		</div>

	</div>

</section>

<script>


$(document).ready(function () {
	turnOnButtonRemates();
	setTimeout(function(){CenterToParent();},100);
});


</script>
<style>
.container-fecha-remates{
	position:absolute;
	z-index:3;
	left:0;
	margin:0;
}
.separator-table{
	border-top-color:transparent;display:inline-block;
	margin:0;
	height:60px;
	display:inline-block;
	background-color:transparent;
}
.container-celda{
	min-height:0;
}

.columna-fecha [hid='1']{
	width:100%;
	display:inline-block;
	border-bottom: 1px solid transparent;
	min-height:70px;
}
</style>