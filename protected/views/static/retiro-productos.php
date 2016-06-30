<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-producir titulo-mobile"> <p>Sanidad > Retiro de productos veterinarios</p> </div>

<?php


$retiros= Retiro::model()->findAll();

?>
 <section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs" >
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">


			<p class="center-to-parent color-sanidad planes-h1">

        Días de retiro de productos veterinarios
      </p>

		</div>
	</div>
</div>


<!-- <button class="boton-prueba-atras"><span class="glyphicon glyphicon-triangle-left"></span> </button>
<button class="boton-prueba"><span class="glyphicon glyphicon-triangle-right"  ></span></button> -->



	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-container-producir">
	<!-- Caja general -->
	<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">



		<!-- País -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


			<div class="hidden-lg cont-fecha-mobile color-retiro-productos">
			<button class="boton-prueba-atras boton-prueba-retiro"> <span class="glyphicon glyphicon-triangle-left"></span> </button>
			<p class="fecha-remates-mobile">
			  Argentina
			</p>
			<button class="boton-prueba boton-prueba-retiro"> <span class="glyphicon glyphicon-triangle-right"></span> </button></div>



			<!-- Titulo -->
			<div class="title-remates color-retiro-productos hidden-xs hidden-sm hidden-md"> <h2></h2></div>

			<!-- Caja país particular -->

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 square container-fecha-remates color-retiro-productos hidden-xs  hidden-sm hidden-md">

				<div class=" center-to-parent ">
					<p>Argentina</p>
				</div>


			</div>


			</div>


		</div>



		<!-- Caja general: img producto, prodcutos senasa, nombre comercial, retiro en carne,  retiro en leche -->
		<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 fade-in-mobile">

			<!-- Img producto-->

			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2></h2></div>
				<!--Contenido -->
				<?php
				$loopIndex=5;
        $contImg=1;
				foreach($retiros as $retiro){ ?>
				<div class="container-modalidad info-remates-mobile retiro-img" hid="<?php echo $loopIndex; ?>">
          <?php
     		 if($contImg != 14 && $contImg != 16 && $contImg != 23 && $contImg != 31 && $contImg != 53){
     			?>
				<img class="center-to-parent"  src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/retiro-producto/<?php echo $contImg; ?>.png">
        <?php
       }
       ?>
        </div>
				<?php $loopIndex++; $contImg++; } ?>
			</div>


			<!-- Producto Senasa-->

			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2>Producto Senasa</h2></div>
				<!--Contenido -->
				<?php
				$loopIndex=5;
				foreach($retiros as $retiro){ ?>
				<div class="container-consignatorio info-remates-mobile table-indexer" hid="<?php echo $loopIndex; ?>">

					<p class="center-to-parent "><?php echo $retiro->producto; ?></p>

				</div>
				<?php $loopIndex++; } ?>
			</div>


			<!-- Nombre Comercial Reg -->

			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2>Nombre Comercial Reg</h2></div>
				<!--Contenido -->
				<?php
				$loopIndex=5;
				foreach($retiros as $retiro){ ?>
				<div class="container-lugar info-remates-mobile" hid="<?php echo $loopIndex; ?>">

					<p class="center-to-parent" id="retiro-producto-p-1"><?php echo $retiro->nombreComercial; ?></p>

				</div>
				<?php $loopIndex++; } ?>
			</div>


			<!-- Retiro en carne -->
			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-6 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2> Retiro en carne</h2></div>
				<!--Contenido -->
				<?php
				$loopIndex=5;
				foreach($retiros as $retiro){ ?>
				<div class="container-provincia  info-remates-mobile" hid="<?php echo $loopIndex; ?>">
					<p class="center-to-parent" id="retiro-producto-p-2"><?php echo $retiro->retiroCarne; ?></p>

				</div>
				<?php $loopIndex++; } ?>

			</div>

			<!-- Retiro en leche -->

			<div class="col-lg-2-5 col-md-2-5 col-sm-2-5 col-xs-12 col-xl-5 remates-box containerColumnas">

				<!-- Titulo -->
				<div class="title-remates color-retiro-productos"><h2> Retiro en leche</h2></div>
				<!--Contenido -->
				<?php
				$loopIndex=5;
				foreach($retiros as $retiro){ ?>
				<div class="container-cabezas info-remates-mobile" hid="<?php echo $loopIndex; ?>">

					<p class="center-to-parent" id="retiro-producto-p-3"><?php echo $retiro->retiroLeche; ?></p>

				</div>
				<?php $loopIndex++; } ?>
			</div>


		</div>

	</div>
	</div>

</section>


<script>


$(document).ready(function () {
	turnOnButtonRemates();
});


</script>
