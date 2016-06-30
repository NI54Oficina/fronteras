<script>
$("body").on("tap",".navbar-toggle2",function(){
	//console.log("touch start");
	if(!menuReady){
		return;
	}
	$(".navbar-toggle").click();
	if(isMobile){
		AdaptMenuContent();
	}
});
$("body").on("mousedown",".navbar-toggle",function(){

});

function AdaptMenuContent(){
	menuReady=false;
	setTimeout(function(){
		ResetHeight();
		SameHeight();
		AdaptSquare();
		CenterToParent();
		$(".header-mobb").css("opacity",1);
	},100);

	setTimeout(function(){

			if($("#inner-header").hasClass("in")){

				$("#back-header2").css("display","none");
				$(".icon-logout").css("display","block");
				$("header .glyphicon").removeClass("glyphicon-th-large").addClass("glyphicon-remove");

				scrollTop= $(document).scrollTop();
				$("header").css("position","absolute");
				//$("#navbarSecciones").css("height","auto");
				$("header").css("display","block");
				$("#inner-header").css("position","initial");
				$(".fadder").hide();
				$("section").hide();
				$(document).scrollTop(0);

				$(".header-mobb").css("opacity",1);
				menuReady=true;
				//setTimeout(function(){
					//$(".header-mobb").css("opacity",1);
				//},500);
				//$(".fadder").fadeOut(1000);
			}else{

				$("header .glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-th-large");
				$("#back-header2").css("display","block");
				$(".icon-logout").css("display","none");
				$("header").css("position","fixed");
				$("#inner-header").css("position","static");
				$(".fadder").css("opacity",0);
				$("section").css("opacity",0);
				$(".fadder").show();
				$("section").show();
				$(document).scrollTop(scrollTop);
				ResetHeight();
				SetDistanceHeader();
				ResizeViewportElements();

				setTimeout(function(){

					ResetHeight();

					SameHeight();
					AdaptSquare();

					$(".header-mobb").css("opacity",0);
					$(".fadder").css("opacity",1); $("section").css("opacity",1);
					menuReady=true;
				},500);

				//$(".fadder").fadeIn(1000);
			}

		},500);
}

function AdaptMenuContentApp(){
	setTimeout(function(){

			if($("#inner-header").hasClass("in")){
				$("header .glyphicon").removeClass("glyphicon-th-large").addClass("glyphicon-remove");
				$("#back-header2").css("display","none");
				scrollTop= $(document).scrollTop();
				$("header").css("position","absolute");
				//$("#navbarSecciones").css("height","auto");
				$("header").css("display","block");
				$("#inner-header").css("position","initial");
				$(document).scrollTop(0);
				//ResetHeight();
				//SameHeight()
			}else{
				$("header .glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-th-large");
				$("#back-header2").css("display","block");
				$("header").css("position","fixed");
				$("#inner-header").css("position","static");
				$(document).scrollTop(scrollTop);
				$(".header-mobb").css("opacity",1);
				ResetHeight();
				SameHeight();
				AdaptSquare();
				//$(".fadder").fadeIn(1000);
			}

		},500);
}

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



	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xs boton-volver-header hidden-lg hidden-md hidden-sm"  style="height:100%;">

	 <button class="boton-header"  id="back-header2" style="display:inline-block;overflow:hidden;" type="button"></button>
	 <i class="demo-icon icon-logout" style="font-size:1.5em;color:white;"></i>
	  	</div>

<span  class="hidden-lg hidden-sm hidden-md glyphicon glyphicon-th-large navbar-toggle2 collapsed" ></span>

<span  class="navbar-toggle" data-toggle="collapse" data-target="#inner-header" aria-expanded="false" aria-controls="navbar" style="position:absolute;"></span>



<div id="inner-header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse header-palabras-menu" data-toggle="collapse">





		<ul class="ul-nav col-lg-12 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal">


			<div class="home-upper-box col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-fronteras.png" alt="Logo Fronteras">
					<img class="" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/logo-bago.png" alt="Logo Bago " />
				</div>
			</div>



						<!-- Header que se muestra solamente en pc - XL - MD -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-menu-mob hidden-xs">

						<!-- BOTON VOLVER -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hidden-xs boton-volver-header" style="margin-top:.3%">
							<button class="boton-header  col-lg-1 col-md-1 col-sm-1 col-xs-1"  id="back-header" style="" type="button"></button><p class="back-p col-lg-1 col-md-1 col-sm-1 col-xs-1 center-to-parent" style="" >Volver</p>
						</div>

						<!-- TERMINA BOTON VOLVER -->







						<li id="hoy-header-m" class=" col-lg-1 col-md-1 col-sm-1 col-xs-6 col-lan-xs-3 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/hoy" class="link-menu">

								<div class="home-box col-lg-3 ">

									<div class="hoy-box square nav-pc" onlymobile="true" >
										<!-- <div  class="cont-section-mobile square">
											<img class="img-menu-header" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-hoy.svg" alt="Hoy" />
										</div> -->
										<p class="p-header-mobile center-to-parent p-header-hoy">Hoy</p>
									</div>
								</div>
							</a>

						</li>

						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>


						<li  id="mes-header-m" class=" col-lg-1 col-md-1  col-sm-3 col-xs-6 col-lan-xs-3 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/estemes"  class="link-menu">

								<div  class="home-box col-lg-3">
									<div class="estemes-box square nav-pc" onlymobile="true">
										<!-- <div  class="cont-section-mobile square">
											<img  class="img-menu-header" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-este-mes.svg" alt="Este Mes" />
										</div> -->
										<p class="p-header-mobile center-to-parent p-header-estemes">Este mes</p>
									</div>

								</div>
							</a>
						</li>


						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>


						<li  id="producir-header-m" class=" col-lg-1 col-md-1  col-sm-3 col-xs-6 col-lan-xs-3 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/producir" class="link-menu">
								<div  class="home-box col-lg-3">
									<div class="producir-box square nav-pc" onlymobile="true">
										<!-- <div  class="cont-section-mobile square"> -->
											<!-- <img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-producir.png" alt="Chat" /> -->
										<!-- </div> -->
										<p class="p-header-mobile center-to-parent p-header-producir">Producir +</p>
									</div>
								</div>
							</a>
						</li>


						<div class="square-separador center-to-parent"><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/cuadrados-separadores.svg" alt="cuadrado-separador" /></div>


						<li  id="ayuda-header-m" class="  col-lg-1 col-md-1  col-sm-3 col-xs-6  col-lan-xs-3 center-to-parent">
							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/ayuda" class="link-menu">
								<div  class="home-box col-lg-3">
									<div class="ayuda-box square nav-pc" onlymobile="true">
										<!-- <div class="cont-section-mobile square" onlymobile="true">
											<img  class="img-menu-header" src="<?php echo Yii::app()->getBaseUrl(true) ?>/img/icono-chat.svg" alt="Chat" />
										</div> -->
										<p class="p-header-mobile center-to-parent p-header-ayuda">Ayuda</p>
									</div>

								</div>
							</a>
						</li>


					</div>



					<!-- Header que se muestra solamente en SM , XS -->

				<div class="home-bottom-box col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-xl  hidden-md header-mobb hidden-sm">

						<a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/hoy">

							<div class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">


							<div class="hoy-box square"  >
								<div hid="18">



									<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-hoy.svg" alt="Hoy" />
								</div>
								<p class="p-header-mobb p-header-hoy">Hoy</p>
							</div>
						</div>
						</a>

					<a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/estemes">

							<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">

								<div class="estemes-box square">
									<div hid="18">

										<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-este-mes.svg" alt="Este Mes" />
									</div>
									<p class="p-header-mobb p-header-estemes " >Este mes</p>
								</div>
						</div>
					</a>

					<a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/producir">
						<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">

								<div class="producir-box square" >
									<div hid="18">

										<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-producir.png" alt="Chat" /> -->
									</div>
								<p class="p-header-mobb p-header-producir">Producir +</p>
								</div>

						</div>

					</a>

					<a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/ayuda">
						<div  class="home-box col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xl-4 col-lan-xs-3">

							<div class="ayuda-box square" >
								<div hid="18">

									<img class="center-to-parent-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-chat.svg" alt="Chat" />
								</div>
								<p class="p-header-mobb p-header-ayuda">Ayuda</p>
							</div>

						</div>
					</a>

			</div>




		</ul>
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="bg-square"></div>
</header>
	<?php include('loading.php'); ?>
