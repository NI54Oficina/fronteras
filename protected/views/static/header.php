<script>
$("body").on("touchstart",".navbar-toggle",function(){
	//console.log("touch start");
	$(this).click();
	if(isMobile){
		setTimeout(function(){
			if($("#inner-header").hasClass("in")){
				scrollTop= $(document).scrollTop();
				$("header").css("position","absolute");
				//$("#navbarSecciones").css("height","auto");
				$("header").css("display","block");
				$("#inner-header").css("position","initial");
				$(".fadder").hide();
				$("section").hide();
				$(document).scrollTop(0);
				//$(".fadder").fadeOut(1000);
			}else{
				$("header").css("position","fixed");
				$("#inner-header").css("position","static");
				$(".fadder").css("opacity",0);
				$("section").css("opacity",0);
				$(".fadder").show();
				$("section").show();
				$(document).scrollTop(scrollTop);
				setTimeout(function(){ $(".fadder").css("opacity",1); $("section").css("opacity",1); },500);

				//$(".fadder").fadeIn(1000);
			}

		},500);
	}
});
$("body").on("mousedown",".navbar-toggle",function(){

});
</script>
<header class="headerDesktop" >

	<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs header-logos">

		<!--Logo fronteras -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/ar/home">
			<img class="logo-fronteras" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-fronteras-horizontal.png" />

		</a>

		</div>

		<!-- Logo bagó -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<img class="logo-bago-header"  src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-BB-horizontal.png" />
		</div>

	</div>






<span  class=" glyphicon glyphicon-th-large navbar-toggle collapsed" data-toggle="collapse" data-target="#inner-header" aria-expanded="false" aria-controls="navbar" ></span>



	<div id="inner-header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse header-palabras-menu" data-toggle="collapse">





		<ul class="ul-nav col-lg-12 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal">


			<div class="home-upper-box col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-fronteras.png" alt="Logo Fronteras">
					<img class="hidden-xs" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-bago.png" alt="Logo Bago " />
				</div>
			</div>




					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-menu-mob ">

						<!-- BOTON VOLVER -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hidden-xs boton-volver-header" style="margin-top:.3%">
							<button class="boton-header  col-lg-1 col-md-1 col-sm-1 col-xs-1"  id="back-header" style="" type="button"></button><p class="back-p col-lg-1 col-md-1 col-sm-1 col-xs-1 center-to-parent" style="" >Volver</p>
						</div>

						<!-- TERMINA BOTON VOLVER -->



						<li id="hoy-header-m" class=" col-lg-1 col-md-1 col-sm-3 col-xs-6 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/hoy" class="link-menu">

								<div class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-5 col-xl-4">

									<div class="hoy-box square" onlymobile="true">
										<div  class="cont-section-mobile">
											<img  src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-hoy.svg" alt="Hoy" />
										</div>
										<p class="p-header-mobile center-to-parent">Hoy</p>
									</div>
								</div>
							</a>

						</li>

<<<<<<< HEAD
						<div class="square-separador"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
=======
						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
>>>>>>> origin/master

						<li  id="mes-header-m" class=" col-lg-1 col-md-1  col-sm-3 col-xs-6 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/estemes"  class="link-menu">

								<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-5 col-xl-4">
									<div class="estemes-box square " onlymobile="true">
										<div  class="cont-section-mobile">
											<img  src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-este-mes.svg" alt="Este Mes" />
										</div>
										<p class="p-header-mobile center-to-parent">Este mes</p>
									</div>

								</div>
							</a>
						</li>

<<<<<<< HEAD
						<div class="square-separador"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
=======
						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
>>>>>>> origin/master

						<li  id="producir-header-m" class=" col-lg-1 col-md-1  col-sm-3 col-xs-6 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/producir" class="link-menu">
								<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4">
									<div class="producir-box square" onlymobile="true">
										<div  class="cont-section-mobile">
											<!-- <img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-producir.png" alt="Chat" /> -->
										</div>
										<p class="p-header-mobile center-to-parent">Producir +</p>
									</div>
								</div>
							</a>
						</li>

<<<<<<< HEAD
						<div class="square-separador"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
=======
						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>
>>>>>>> origin/master

						<li  id="ayuda-header-m" class="  col-lg-1 col-md-1  col-sm-3 col-xs-6 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/ayuda" class="link-menu">
								<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4">
									<div class="ayuda-box square" onlymobile="true">
										<div class="cont-section-mobile" onlymobile="true">
											<img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-chat.svg" alt="Chat" />
										</div>
										<p class="p-header-mobile center-to-parent">Ayuda</p>
									</div>

								</div>
							</a>
						</li>
					</div>


		</ul>
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="bg-square"></div>
</header>
	<?php include('loading.php'); ?>
