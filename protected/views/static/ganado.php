<?php
//$data="angus";
$Criteria = new CDbCriteria();
				$Criteria->condition = "raza = '".$data."'";
$ganado= EstadoCorporal::model()->findAll($Criteria);

?>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section" id="ganado">
<?php foreach($ganado as $g){ ?>

	<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-producir titulo-mobile"> <p style="text-transform:capitalize;"> <?php echo $g["raza"]; ?></p> </div>
<?php } ?>

<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
	<div class="box-manejo border-shadow">
		<div class="box-manejo-inner ">
			<p class="center-to-parent color-manejo planes-h1">Tabla estado Corporal</p>
		</div>
	</div>
</div>






<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 hidden-lg   dot-nav-slider">
	<ul>
		<li class="nav-dots">
			<?php foreach($ganado as $g){ ?>
				<label for="vaca-tipo-1" class="nav-dot" ></label>
			<?php } ?>

		</li>
</ul>
</div>


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs hidden-sm container-boton-ganado center-to-parent"  hid="1">
	<button class="boton-ganado preview-ganado" id="prev" ></button>
</div>


      <!-- Tipo de vaca 1 -->
	<?php foreach($ganado as $g){ ?>

<div  class="col-lg-10 col-md-10 col-sm-12 col-xs-12 general-container-producir " hid="1" id="vaca-tipo-1">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1 ">



		<img class="img-ganado borde-<?php echo $g["raza"]; ?> " src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/<?php echo $g["raza"]; ?>-<?php echo $g["indice"]; ?>.png">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">

		<div class="contenedor-botones-mobile col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<button class=" hidden-lg hidden-md boton-ganado-mobile-1  boton-ganado preview-ganado" id="prev" ></button>
	<h1 class="color-<?php echo $g["raza"]; ?>"><?php echo $g["estado"]; ?></h1>

				<button class=" hidden-lg hidden-md boton-ganado-mobile-2 boton-ganado next-ganado" id="next"></button>

		</div>

		<p hid="2" class="text-ganado">
			<?php echo $g["info"]; ?>
		</p>
     <?php
		 if($g->grafica== 1){
			?>
			<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/<?php echo $g["raza"]; ?>-info-<?php echo $g["indice"]; ?>.png">
			<?php
		 }
		 ?>



	</div>

</div>

	<?php } ?>


      <!-- Tipo de vaca 2 -->
<!-- <div  class="col-lg-10 col-md-10 col-sm-12 col-xs-12 general-container-producir slider-ganado" id="vaca-tipo-2">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">

		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-2.png">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>REGULAR</h1>
		<p hid="2">Cavidad menos pronunciada alrededor de la encoladura.</br>
		Presencia de algo de tejido adiposo. Extremos de costillas algo redondeados. Insuficientes reservas corporales. Luego del parto bajará su estado corporal y se comprometeras su performance reproductiva y lactancia. Anestro superficial.
		</p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-info-2.png">


	</div>

</div> -->

		<!-- Tipo de vaca 3 -->

<!-- <div  class="col-lg-10 col-md-10 col-sm-12 col-xs-12 general-container-producir  slider-ganado" id="vaca-tipo-3">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">

		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-3.png">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>IDEAL AL PARTO</h1>
		<p hid="2">Desaparece cavidad alderedor de la cola. Presencia de tejido adiposo no exagerado en esa superficie. </br>
		Extremos de costillas cortas cubiertas, aunque palpables con leve presión.</p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-info-3.png">


	</div>

</div> -->

		<!-- Tipo de vaca 4 -->
<!--
<div  class="col-lg-10 col-md-10 col-sm-12 col-xs-12 general-container-producir  slider-ganado" id="vaca-tipo-4">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">

		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-4.png">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>SOBREPESO</h1>
		<p hid="2">Aparicion de mayor tejido cubriendo la pelvis, costillas cortas invisibles y dificiles de palpar. Estado ideal aunque seria antieconomico. Vacas cíclicas. Excelente lactancia. Buenos indices de preñez pero es indicativo de baja carga por hectárea.</p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-info-4.png">


	</div>

</div> -->


		<!-- Tipo de vaca 5 -->

<!-- <div  class="col-lg-10 col-md-10 col-sm-12 col-xs-12 general-container-producir  slider-ganado" id="vaca-tipo-5">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">

		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-5.png">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>OBESA</h1>
		<p hid="2" >Engrasamiento exagerado. Desaparece toda la forma de la pelvis. Costillas cortas no palpables. Totalmente exedida de gordura. Antieconómica e incluso con reisgos reproductivos por esceso de grasa.</p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/estado-corporal/angus-info-5.png">


	</div>


</div> -->

<!-- TERMINA TIPO VACA 5 -->


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs hidden-sm center-to-parent container-boton-ganado"  hid="1">
	<button class="boton-ganado next-ganado" id="next"></button>
</div>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  hidden-xs hidden-sm hidden-md  dot-nav-slider">
	<ul>
		<li class="nav-dots">
			<?php foreach($ganado as $g){ ?>
				<label for="vaca-tipo-1" class="nav-dot" ></label>
			<?php } ?>
		</li>
</ul>
</div>


</section>
