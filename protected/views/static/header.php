
<script>
$("body").on("mousedown",".navbar-toggle",function(){
	
	//$("body").css("background","red");
});
var scrollTop;
$("body").on("touchstart",".navbar-toggle",function(){
	$(this).click();
	
	if(isMobile){
		setTimeout(function(){
			if($("#navbarSecciones").hasClass("in")){
				scrollTop= $(document).scrollTop();
				$("header").css("position","absolute");
				//$("#navbarSecciones").css("height","auto");
				$("header").css("display","block");
				$(".fadder").hide();
				$(document).scrollTop(0);
				//$(".fadder").fadeOut(1000);
			}else{
				$("header").css("position","fixed");
				$(".fadder").css("opacity",0);
				$(".fadder").show();
				$(document).scrollTop(scrollTop);
				setTimeout(function(){ $(".fadder").css("opacity",1); },500);
				
				//$(".fadder").fadeIn(1000);
			}
			
		},500);
	}
	
});
</script>
<!---------------------------------------------------------------------------------------------      HEADER     --------------------------------------------------------------------------------------------->
<!--<div id='logDiv' style='background:red;width:100vw;height:50vh;color:white;position:fixed;top:0;left:0;z-index:100000;'></div>!-->

<header id="navbar-main" class="navbar navbar-inverse col-lg-12 col-md-12 col-sm-12 col-xs-12 headerDesktop" style="width:100%;padding-bottom: 10px;background: -webkit-linear-gradient(left, rgba(255,255,255,1) 17%,rgba(255,255,255,1) 18%,rgba(255,255,255,0.98) 48%,rgba(255,255,255,0.99) 100%);
    background: linear-gradient(to right, rgba(255,255,255,1) 17%,rgba(255,255,255,1) 18%,rgba(255,255,255,0.98) 48%,rgba(255,255,255,0.99) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#b3ffffff',GradientType=1 );margin-bottom:0;top:0;border-radius:0;border:none;">
		<!--+++++ LOGO BAGÓ MOBILE +++++ -->
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>"><img id="logo-bago-mobile" class="col-lg-2 col-md-2 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" /></a>		
		
	<span  class=" glyphicon glyphicon-menu-hamburger navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSecciones" aria-expanded="false" aria-controls="navbar" ></span>
	
	<div class="div-nav-2"><a href="http://www.fronterasproductivas.com/" target="_blank" style="float:left;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fronteras-50x50-01.png" /></a></div>
	<!-- ////////////////BARA DE NAVEGACIÓN //////////////////-->
	<nav  id="navbarSecciones" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse" data-toggle="collapse" style="">
		
		<div class="container-fluid" style="padding:0;">
			<div id="boxes" style="text-align:left;">
					
					<div class="box">
		
						<!-- CERRAR-->
						<p>
							<a class="closelink" href="javascript:void(0);">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-close.png" style="padding-top: 1.5%;" />
							</a>
						</p>
						
						
						<!-- LISTA DE PAÍSES-->
						<div style="">
							<ul class="ul-paises" >
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><?php echo Textos::model()->GetText(410); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/5/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><?php echo Textos::model()->GetText(411); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><?php echo Textos::model()->GetText(412); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/10/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><?php echo Textos::model()->GetText(413); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/11/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><?php echo Textos::model()->GetText(414); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/12/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><?php echo Textos::model()->GetText(415); ?></a></li>
							
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/13/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><?php echo Textos::model()->GetText(416); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/14/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><?php echo Textos::model()->GetText(417); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/6/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><?php echo Textos::model()->GetText(418); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/15/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><?php echo Textos::model()->GetText(419); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/16/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><?php echo Textos::model()->GetText(420); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/17/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><?php echo Textos::model()->GetText(421); ?></a></li>
							
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/18/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><?php echo Textos::model()->GetText(422); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/19/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><?php echo Textos::model()->GetText(423); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/20/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><?php echo Textos::model()->GetText(424); ?></a></li>
								<li class="li-paises"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/21/lng/es"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><?php echo Textos::model()->GetText(425); ?></a></li>
							</ul>
						</div>
					
					</div>
				
			</div> <!-- termina países -->
		</div>

		
		<div class="container-fluid">
		
		<!-- +++++ PAÍSES +++++ -->
			
		<!--+++++ LOGO BAGÓ +++++ -->
		<a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>"><img id="logo-bago" class="col-lg-2 col-md-2 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" /></a>
		
		<!--<div style="float:right;">
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="color:black;float:left;padding:10px;">Español</a>
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="color:black;float:left;padding:10px;">Portugues</a>
		</div>-->
		
		<!-- +++++ LISTA VERSIONES MOBILE+++++ -->
		<ul class=" col-lg-2 col-md-2 col-sm-12 col-xs-12" id="ul-nav-2-mobile" style="color:#0C6594;border-bottom: 1px solid #359fbd;">
				
				<?php if($_SESSION["lng"]!="es"){ ?>
				<li class="li-nav-2"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es"style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /></a></li>
				<?php } ?>
				<?php if($_SESSION["lng"]!="pt"){ ?>
				<li class="li-nav-2"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /></a></li>
				<?php } ?>
				<li class="li-nav-2 dropdown" data-toggle="collapse" data-target="#ul-paises-nav" aria-expanded="false" aria-controls="navbar"   ><a  href="#"    style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mas-paises.png"  /></a>
				
					
				</li>
				<ul class="dropdown-menu dropdown-menu-right lista-menu collapse" id="ul-paises-nav">
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><?php echo Textos::model()->GetText(410); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/5/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><?php echo Textos::model()->GetText(411); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><?php echo Textos::model()->GetText(412); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/10/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><?php echo Textos::model()->GetText(413); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/11/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><?php echo Textos::model()->GetText(414); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/12/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><?php echo Textos::model()->GetText(415); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/13/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><?php echo Textos::model()->GetText(416); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/14/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><?php echo Textos::model()->GetText(417); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/6/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><?php echo Textos::model()->GetText(418); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/15/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><?php echo Textos::model()->GetText(419); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/16/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><?php echo Textos::model()->GetText(420); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/17/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><?php echo Textos::model()->GetText(421); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/18/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><?php echo Textos::model()->GetText(422); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/19/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><?php echo Textos::model()->GetText(423); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/20/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><?php echo Textos::model()->GetText(424); ?></a></li>
								<li class="li-paises-nav" ><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/21/lng/es" class="a-otros-paises-mobile link-menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><?php echo Textos::model()->GetText(425); ?></a></li>
					</ul>
		</ul> <!-- termina lista versiones -->			
	

			
		<!-- +++++ LISTA VERSIONES +++++ -->
		<ul class=" col-lg-6 col-md-6 col-sm-4 col-xs-12" id="ul-nav-2" style="color:#0C6594;float:right;    text-align: right;">
				<li class="li-nav-2"><div id="links"><a class="openlink" href="javascript:void(0);"  style="float:left;padding: 10px 0px;"><?php echo Textos::model()->GetText(426); ?></a></div></li>
				<?php if($_SESSION["lng"]!="es"){ ?>
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es"style="float:left;padding: 10px 0px;"><?php echo Textos::model()->GetText(427); ?></a></li>
				<?php } ?>
				<?php if($_SESSION["lng"]!="pt"){ ?>
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/pt"style="float:left;padding: 10px 0px;"><?php echo Textos::model()->GetText(428); ?></a></li>
				<?php } ?>
				<?php if($_SESSION["lng"]!="en"){ ?>
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/9/lng/en"style="float:left;padding: 10px 0px;"><?php echo Textos::model()->GetText(454); ?></a></li>
				<?php } ?>
				<?php if($_SESSION["lng"]=="es"){ ?>
				<li class="li-nav-2">
				<a class="link-menu"  href="http://www.fronterasproductivas.com/" target="_blank" style="float:left;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fronteras-50x50-01.png" /> 
				</a>
				</li>
				<?php } ?>
		</ul> <!-- termina lista versiones -->
	
		<!-- +++++++++++ BOTONERA +++++++++++ -->
		<div id="container-ul-nav-header">
			<ul class="ul-nav col-lg-11 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal" style="">
			
			
			<!-- INSTITUCIONAL -->
			<li class="li-header " ><p  class="toggle-dropdown-header" target="#dropInsti" ><?php echo Textos::model()->GetText(347); ?> <span class="glyphicon glyphicon-chevron-down"></span></p>
				
				<ul id="dropInsti" class="dropdown-header-nav">
						<img  id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
							<li style="margin-top:-5px;"><a class="a-sub link-menu"  href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/quienes-somos"><?php echo Textos::model()->GetText(6); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/mision-vision"><?php echo Textos::model()->GetText(8); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/lucha-contra-aftosa"><?php echo Textos::model()->GetText(10); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/trayectoria-hitos"><?php echo Textos::model()->GetText(429); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nuestras-plantas"><?php echo Textos::model()->GetText(14); ?></a></li>
							<?php if($_SESSION["lng"]!="pt"){ ?>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/rse"><?php echo Textos::model()->GetText(431); ?></a></li>
							<?php } ?>
							<?php if($_SESSION["lng"]=="es"){ ?>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/proveedores"><?php echo Textos::model()->GetText(430); ?></a></li>
							<?php } ?>
							<?php if($_SESSION["lng"]=="es"){ ?>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/prensa"><?php echo Textos::model()->GetText(20); ?></a></li>
							<?php } ?>
				</ul>
				
			</li>
			
			<!-- FILIALES -->
			<li class="li-header"><p class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home/#mapa-filiales"><?php echo Textos::model()->GetText(432); ?></p></li>
			
			<?php if($_SESSION["lng"]=="es"){ ?>
			<!-- INFO TÉCNICA -->
			<li class="li-header"><p class="toggle-dropdown-header" target="#dropTecnica"  class="" ><?php echo Textos::model()->GetText(433); ?> <span class="glyphicon glyphicon-chevron-down"></span></p>
				
				<ul id="dropTecnica" class="dropdown-header-nav">
							<img id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
								<li style="margin-top:-5px;"><a class="a-sub link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home/#inform-tec" down="sessionStorage.sub='sanitarios';"><?php echo Textos::model()->GetText(434); ?></a></li>
								<li><a class="a-sub link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home/#inform-tec" down="sessionStorage.sub='planillas';"><?php echo Textos::model()->GetText(435); ?></a></li>
								<li><a class="a-sub link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home/#inform-tec" down="sessionStorage.sub='tecnico';"><?php echo Textos::model()->GetText(436); ?></a></li>
				</ul>
					
			</li>
			<?php } ?>
			
			<!-- VADEMÉCUM -->
			<li class="li-header"><p class="toggle-dropdown-header" target="#dropVedemecum"><?php echo Textos::model()->GetText(348); ?> <span class="glyphicon glyphicon-chevron-down"></span></p>
				
				<ul id="dropVedemecum" class="dropdown-header-nav">
					
					<img id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
						<?php
							$pais= Pais::model()->findByPk(Yii::app()->session['pais']);
							if($pais->catalogo==1){
								$pais=$pais->id;
							}else{
								$pais=8;
							} 
						?>
						<?php $secciones=[1,6,3,4,2,5,9,11,7,10,8];

							foreach($secciones as $value){
								$auxProducto= Producto::model()->findByAttributes(array('seccion'=>$value,"pais"=>$pais));
								if($auxProducto){
									
								
								?>
						<li style="margin-top:-5px;"><a class="a-sub link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id<?php echo $value; ?>"><?php echo Yii::app()->paisChecker->getSeccion($value); ?></a></li>
						<?php 
							} }
						?>
						<!--<li style="margin-top:-5px;"><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id1"><?php echo Yii::app()->paisChecker->getSeccion(1); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id6"><?php echo Yii::app()->paisChecker->getSeccion(6); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id4"><?php echo Yii::app()->paisChecker->getSeccion(4); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id3"><?php echo Yii::app()->paisChecker->getSeccion(3); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id2"><?php echo Yii::app()->paisChecker->getSeccion(2); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id5"><?php echo Yii::app()->paisChecker->getSeccion(5); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id9"><?php echo Yii::app()->paisChecker->getSeccion(9); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id11"><?php echo Yii::app()->paisChecker->getSeccion(11); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id7"><?php echo Yii::app()->paisChecker->getSeccion(7); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id10"><?php echo Yii::app()->paisChecker->getSeccion(10); ?></a></li>	
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id8"><?php echo Yii::app()->paisChecker->getSeccion(8); ?></a></li>!-->
						
				</ul>
				
			</li>
			
			<?php if($_SESSION["lng"]=="es"){ ?>
			<!-- REVISTA EL MOLINO  -->
			<li class="li-header"><p class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/revista"><?php echo Textos::model()->GetText(451); ?></p></li>
			<?php } ?>
		
			<!-- RRHH -->
			<li class="li-header"><p class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home#header-rrhh"><?php echo Textos::model()->GetText(449); ?></p></li>
			
			
			<!-- CONTACTO -->
			<li class="li-header"><p class="link-menu" href="<?php echo Yii::app()->request->baseUrl; ?>/home#section-contacto"><?php echo Textos::model()->GetText(450); ?></p></li>
			
		</ul> <!-- termina botonera -->
		
		</div>
		
		</div>
	</nav> <!-- TERMINA BARRA NAVEGACIÓN-->
	
</header> <!-- TERMINA HEADER -->
