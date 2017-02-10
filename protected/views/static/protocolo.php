<?php
$protocolos= Protocolos::model()->findAll();

?>

<!-- REMATES GENERALES -->


<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section remates">

<div class="col-xs-12 hidden-lg hidden-xl titulo-mobile-producir titulo-mobile"> <p> Genética > Protocolo de reproducción  </p> </div>


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs" style="padding:0 5px;">
	<div class="box-genetica border-shadow">
		<div class="box-genetica-inner ">
			<p class="center-to-parent color-genetica planes-h1">Protocolo de reproducción </p>
		</div>
	</div>
</div>



	<!-- Caja general -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fade-in-mobile" style="padding:10px 0px; text-align:center;">
	
	<div class="hidden-lg cont-fechas-mobile color-title-prod containerColumnas">
	<?php foreach($protocolos as $p){ ?>
	<div class="info-remates-mobile">
	<button class="boton-prueba-atras b-prot-at"><span class="glyphicon glyphicon-triangle-left"></span> </button>
	<p class=" fecha-remates-mobile ">
		<?php echo $p["protocolo"]; ?>
	</p>
	<button class="boton-prueba b-prot-ad"><span class="glyphicon glyphicon-triangle-right"></span></button>
	</div>
	<?php } ?>
	</div>
		<!-- Caja general fecha -->
		<div class="col-lg-2-7 col-md-12 col-sm-12 col-xs-12 col-xl-7 remates-box-2  containerColumnas">

			<!-- Titulo FECHA -->
			<div class="title-prot color-title-prod hidden-xs hidden-sm hidden-md"> <h2>Protocolo</h2>
			</div>

			<!-- Caja fecha particular -->

				<!--Contenido -->
				<?php foreach($protocolos as $p){ ?>
				<div class="container-prot info-remates-mobile table-indexer prioridad-prot" hid="1">
					
							<div class="number-protocolo center-to-parent prot-po">
									<span class="protocolo-nombre hidden-xs hidden-sm hidden-md"><?php echo $p["protocolo"]; ?><br></span>
									<span class="protocolo-dias"><?php echo $p["dias"]; ?></span>
						</div>
				</div>

				<?php } ?>

		</div>

		<!-- Modalidad -->

			<div class=" col-xl-7 col-lg-2-7 col-md-6 col-sm-6 col-xs-6 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Categoría</h2></div>
				<!--Contenido -->
				<?php foreach($protocolos as $p){ ?>
				<div class="container-prot info-remates-mobile"  id="dias-prot" hid="1">
					<div class="center-to-parent prot-po">
						<?php echo $p["categorias"]; ?>
					</div>
				</div>
					<?php } ?>

			</div>


			<!-- Consignatorio-->

			<div class="col-lg-2-7  col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 0</h2></div>
				<!--Contenido -->
				<?php foreach($protocolos as $p){ ?>

				<div class="container-prot info-remates-mobile" hid="1">
					<div class="padd-prot center-to-parent prot-po">
						<?php echo $p["dias0"]; ?>
					</div>

				</div>

				<?php }?>

			</div>


			<!-- Lugar-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 7</h2></div>
				<!--Contenido -->
				<?php foreach($protocolos as $p){ ?>
				<?php if($p->id==12){ ?>
				<div class="container-prot info-remates-mobile" hid="1">
					<div class="prot-po" style="width:100%;">
					
					<?php echo $p["dias7"]; ?>
					
					</div>
				

				</div>
				<?php }else{ ?>
				<div class="container-prot info-remates-mobile" hid="1">
					<div class="padd-prot center-to-parent prot-po">
					<?php echo $p["dias7"]; ?>
					</div>
				</div>
				<?php } ?>
				<?php }?>

			</div>


			<!-- Provincia -->
			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 8</h2></div>
				<!--Contenido -->

				<?php foreach($protocolos as $p){ ?>
				<div class="container-prot info-remates-mobile" hid="1">
					<div class="center-to-parent prot-po">
						<?php echo $p["dias8"]; ?>
				 </div>

				</div>
					<?php }?>


			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 9</h2></div>
				<!--Contenido -->

					<?php foreach($protocolos as $p){ ?>

				<div class="container-prot info-remates-mobile" hid="1">

					<div class="center-to-parent prot-po">
						<?php echo $p["dias9"]; ?>
					</div>

				</div>

				<?php }?>

			</div>

			<!-- Cabezas-->

			<div class="col-lg-2-7 col-md-6 col-sm-6 col-xs-6 col-xl-7 remates-box-2 containerColumnas">

				<!-- Titulo -->
				<div class="title-prot color-title-prod"><h2 class="center-to-parent">Día 10</h2></div>
				<!--Contenido -->

				<?php foreach($protocolos as $p){ ?>

				<div class="container-prot info-remates-mobile" hid="1">
					<div class="center-to-parent prot-po">
						<?php echo $p["dias10"]; ?>
					</div>

				</div>

				<?php }?>

			</div>

		<!-- </div> -->

	</div>

</section>

<script>


$(document).ready(function () {
	turnOnButtonRemates();
	setTimeout(function(){CenterToParent();},100);
});


</script>
