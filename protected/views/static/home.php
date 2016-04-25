<?php include('head-index.php'); ?>

<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); ?>


<body id="skrollable" style="width:100%;overflow-x:hidden;">
<?php include_once("analytics.php") ?>
<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	
<!--COMENTARIO DE LINEA TEST -->


	<!-- VIDEO DE FONDO -->
	<?php include('video.php'); ?>
		


	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" style="opacity:1;">

			<!--CURVA-->
		
			<img id="curvaSuperiorInsti" style="width: 100%;margin-bottom:-1px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-arriba-home.png" alt="" /><section class="special" data-scrollax-parent="true" style="background:white;width:100%;text-align:center;">
		
			<div id="iconos-institucional" style="display:inline-block;background:white;width:98%;padding-top:0px;">
					
					<!-- CUATRO ICONOS -->
						
								<!-- 	QUIÉNES SOMOS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1" id="inst-quienes">
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/quienes-somos " >	
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-quienes.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home"><?php echo Textos::model()->GetText(6); ?></h1>
										<p class="p-in-h"><?php echo Textos::model()->GetText(7); ?></p>
									</a>
								</div>


								<!--  -->
								
								<!--	MISIÓN, VISIÓN Y VALORES -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1" id="inst-mision">
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/mision-vision" >
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-mision.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>									
										<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(8); ?></h1>		
										<p class="p-in-h"><?php echo Textos::model()->GetText(9); ?></p>	
									</a>	
								</div>
								
								<!--	LUCHA CONTRA AFTOSA -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1">
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/lucha-contra-aftosa" >
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-aftosa.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(10); ?></h1>
										<p class="p-in-h"> <?php echo Textos::model()->GetText(11); ?></p>		
									</a>
								</div>
								
								<!--	TRAYECTORIA - HITOS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1">
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/trayectoria-hitos">
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-trayectoria.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home tray"><?php echo Textos::model()->GetText(12); ?></h1>		
										<p class="p-in-h"><?php echo Textos::model()->GetText(13); ?></p>
									</a>
								</div>
						
						
						<!-- CUATRO ICONOS -->
						
						
								<!--	NUESTRAS PLANTAS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1" >
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nuestras-plantas" >
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-plantas.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home"><?php echo Textos::model()->GetText(14); ?></h1>
										<p class="p-in-h"><?php echo Textos::model()->GetText(15); ?></p>
									</a>
								</div>
								
								<?php if($_SESSION["lng"]!="pt"){ ?>
								<!--	RSE - SUSTENTABILIDAD -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1" >
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/rse" >
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-rse.png" />	
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>									
										<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(16); ?></h1>			
										<p class="p-in-h"><?php echo Textos::model()->GetText(17); ?></p>			
									</a>
								</div>
								<?php } ?>
								
								<?php if($_SESSION["lng"]=="es"){ ?>
								<!-- 	INFO PARA PROVEEDORES -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1" >
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/proveedores">
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-proveedores.png" />
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(18); ?></h1>			
										<p class="p-in-h"><?php echo Textos::model()->GetText(19); ?></p>	
									</a>
								</div>
								<?php } ?>
								
								<!--	PRENSA -->
								<?php if($_SESSION["lng"]=="es"){ ?>
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" hid="1">
									<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/prensa">
										<canvas class="" id="myCanvas" height="90px" width="100%"></canvas>
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-prensa.png" />	
										<div class="plus-container"><span  class=" glyphicon glyphicon-plus"></span></div>
										<h1 class="h1-1-home mis pren"><?php echo Textos::model()->GetText(20); ?></h1>			
										<p class="p-in-h"><?php echo Textos::model()->GetText(21); ?></p>				
									</a>
								</div>
								<?php } ?>
						
				
			</div>

		</section>
		
		
		</div>
		
		<!--CURVA-->
		<img id="curvaInferiorInsti"class="fadder" style="opacity:1; width: 100%;position:relative;margin-top:-4px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-home-abajo.png" alt="" style="" />	

		<section class="special fadder" data-scrollax-parent="true" style="opacity:1;background:transparent;width:100%;overflow-x:hidden;" id="mapa-filiales">
		<!------------------------------------------------------------------ SECCION 2: FILIALES ------------------------------------------------------------------>			
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:30px;padding-left:2%;" id="map">
    	
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="mapa-total">
    	 
							<!----- TITULO MAPA -->
							<div id="titulo-mapa">
         		
								<h1 id="t-filiales"><?php echo Textos::model()->GetText(503); ?></h1>
                
							</div> <!-- Termina titulo-mapa -->
 
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm " id="mapa" style="position:relative;z-index:5;">
						
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mapa-png.png" usemap="#img-mapaMap" id="img-mapa" />
						
							<!------- MAPA ----------->
							<map name="img-mapaMap">
								<area class="btn-mapa" info="infoMexico" shape="rect" coords="140,190,195,209" href="javascript:void(0);">
								<area class="btn-mapa" info="infoCenAm" shape="rect" coords="220,195,298,228" href="javascript:void(0);">
								<area class="btn-mapa" info="infoBrasil" shape="rect" coords="288,250,315,281" href="javascript:void(0);">
								<area class="btn-mapa" info="infoBolivia" shape="rect" coords="220,276,268,293" href="javascript:void(0);">
								<area class="btn-mapa" info="infoParaguay" shape="rect" coords="280,290,336,308" href="javascript:void(0);">
								<area class="btn-mapa" info="infoUruguay" shape="rect" coords="280,310,336,328" href="javascript:void(0);">
								<area class="btn-mapa" info="infoArgentina" shape="rect" coords="260,336,320,355" href="javascript:void(0);">
							</map>
						
						</div> 
              
						<!------ SCRIPT MAPA ----->
						<?php include('script-mapa.php');?>
             
					<!-- Termina mapa -->

			
			<!---------- REFERENCIAS ------------------>
				<div id="referencias" class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="cursor:default;position:relative;z-index:1; margin: auto;">
					
				
					<!--- REFERENCIA -->	
					 
					<div id="ref-unica" >
					
						<img class="icn-ubicacion" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icn-casa-matriz.png">
					
						<p id="nom-ref"> <?php echo Textos::model()->GetText(459); ?> </p>
						
					</div> <!-- Termina cada referencia -->
					
					
					
					<!--- REFERENCIA -->
					<div id="ref-unica" >
					
						<img class="icn-ubicacion" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icn-filiales.png">
					
						<p id="nom-ref"> <?php echo Textos::model()->GetText(460); ?> </p>
						
					</div> <!-- Termina cada referencia -->
				
				
						
					<!--- REFERENCIA -->
					<div id="ref-unica" >
					
						<img class="icn-ubicacion" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-naranja-distribuidoras.png">
					
						<p id="nom-ref">Distribuidoras </p>
						
					</div> <!-- Termina cada referencia -->
				
				   
					
					<!--- REFERENCIA -->	
							
					<div id="ref-unica" >
					
						<img class="icn-ubicacion" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icn-vacunas.png">
					
						<p style="margin-bottom:0;" id="nom-ref"><?php echo Textos::model()->GetText(504); ?>  </p>  <p style="font-size: 10px; padding-left: 18px;margin-bottom: 0px;"><?php echo Textos::model()->GetText(462); ?>  </p>  

						<p class="hidden-lg hidden-md" style="padding-left: 18px;">Canadá</p>
						<p class="hidden-lg hidden-md" style="padding-left: 18px;">Estados Unidos</p>
						
					</div> <!-- Termina cada referencia -->
					
					
					<!--- REFERENCIA -->				
					<div id="ref-unica" >
					
						<img class="icn-ubicacion" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icn-janh.png">
					
						<p id="nom-ref"> Jinhai Biotechnology Co., Ltd. </p>
						<p class="hidden-lg hidden-md" style="padding-left: 18px;">China</p>
						
					</div> <!-- Termina cada referencia -->
					
					
				</div> <!-- Termina total referencias -->
				<div  > <!-- comienza mobile -->
				<ul id="ul-filiales-paises">
					
					<li class="c btn-mapa"  info="infoArgentina" id="casamatriz-mobile"><a href="javascript:void(0);" ><?php echo Textos::model()->GetText(410); ?> </li></a>

					<li class=" btn-mapa"  info="infoParaguay" id="distribuidoras-mobile"><a href="javascript:void(0);" > <?php echo Textos::model()->GetText(421); ?> </li></a>

					<li class="btn-mapa"  info="infoBolivia" id="filial-mobile"><a href="javascript:void(0);" > <?php echo Textos::model()->GetText(411); ?> </li></a>
					<li class=" btn-mapa"  info="infoCenAm" id="distribuidoras-mobile"><a href="javascript:void(0);" > <?php echo Textos::model()->GetText(463); ?> </li></a>
					<li class=" btn-mapa"  info="infoBrasil" id="filial-mobile"><a href="javascript:void(0);" > <?php echo Textos::model()->GetText(412); ?> </li></a>
					<li class="btn-mapa"  info="infoMexico" id="banco-y-filiales"><a href="javascript:void(0);" ><?php echo Textos::model()->GetText(418); ?> </li></a>
					<li class="btn-mapa"  info="infoUruguay" id="filial-mobile"><a href="javascript:void(0);" > <?php echo Textos::model()->GetText(424); ?> </li></a>

				<!-- 	<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-mapa"  info="#" id="banco-mobile"><a href="javascript:void(0);" > Canadá </li></a>
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-mapa"  info="#" id="banco-china"><a href="javascript:void(0);" > China </li></a>
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-mapa"  info="#" id="banco-mobile"><a href="javascript:void(0);" > Estados Unidos </li></a> -->
				
				</ul>
				</div> <!-- cosas mobiles -->
			
            
			</div> <!-- Termina mapa-total -->
        
				



		<!--------------------------- INFORMACIÓN PAÍSES -------------------------------->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="info-mapa">
			
			
				<!--********** MÉXICO **********-->
				<div id="infoMexico" class="info-mapa">
				
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="<?php echo Yii::app()->request->baseUrl; ?>/img/banderitas-09.png"/> <?php echo Textos::model()->GetText(418); ?>  </h2>
			
						<p id="sub-filiales"  class="h4-fil bio" > <?php echo Textos::model()->GetText(464); ?>  </p>
						<p  id="sub-filiales" style="margin-top: 0;" class="h4-fil">
						<?php echo Textos::model()->GetText(465); ?> </p>
					
						<!-- LINEA SEPARADORA-->
						<div id="separador"></div>
					
						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(466); ?> </h3> 
						
						<p> <?php echo Textos::model()->GetText(467); ?></p>
				
						<h3 id="titulo-dist" class="dist"><?php echo Textos::model()->GetText(468); ?> </h3>
			
							<h4> <span id="sub-filiales" class="bold-fil"> <?php echo Textos::model()->GetText(418); ?>  </h4>
							
							<p id="sub-filiales"  class="bold-fil mar"> <?php echo Textos::model()->GetText(469); ?>  </p>
							<p class="mar"> <?php echo Textos::model()->GetText(470); ?> </p>
					
						<!-- LINEA SEPARADORA-->					
						<!-- <div id="separador"></div>
					
						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?> </h3> 
				
						<p>+52 (33) 3819-5552</p> -->
						
						<!-- LINEA SEPARADORA-->					
					<!-- 	<div id="separador"></div>
				
						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(113); ?></h3> 
						<p>ALONDRA PARTIDA</p> -->
					
						<!-- LINEA SEPARADORA-->					
						<!-- <div id="separador"></div>
				
						<h3  id="titulo-cont">  E-MAIL </h3> 
						<p>mx_servicio_elanco@lilly.com</p> -->
				
				</div> <!-- Termina info-México-->
		
		
	
				<!--********** CENTRO AMÉRICA **********-->
				
				<div class="info-mapa" id="infoCenAm"> 

					<!--<div style="width:300px;height:100px;background: red;" class="btn-mapa" info="infoArgentina"></div>!-->
					
						<h2 id="titulo-info-mapa"><?php echo Textos::model()->GetText(463); ?></h2>
					
						<!--<p id="sub-filiales"  class="h4-fil bio" ><?php echo Textos::model()->GetText(471); ?></p>
						
						<p id="sub-filiales"  class="h4-fil bio" ><?php echo Textos::model()->GetText(472); ?></p>
	
						<p><?php echo Textos::model()->GetText(473); ?></p>
			
						<!-- LINEA SEPARADORA
						<div id="separador"></div>
			
						<h3  id="titulo-cont">   <?php echo Textos::model()->GetText(466); ?> </h3> 
						<p>507-4337600/ 212 5513</p>

			
			
						<!-- LINEA SEPARADORA						
						<div id="separador"></div>
			
						<h3  id="titulo-cont"><?php echo Textos::model()->GetText(113); ?></h3> 			
						<p>Rocío Ortega</p>
			
						
						<!-- LINEA SEPARADORA					
						<div id="separador"></div>
			

						<h3  id="titulo-cont"> E-MAIL</h3> 			
						<p> crocio.ortega@reimar.net </p>
			
			
			
						<h3 id="titulo-dist" class="dist"><?php echo Textos::model()->GetText(468); ?>  </h3>
							
							<h4> <span id="sub-filiales" class="bold-fil"> <?php echo Textos::model()->GetText(420); ?> </h4>
				
							<p id="sub-filiales"  class="bold-fil mar"> <?php echo Textos::model()->GetText(474); ?> </p>
							
							<p class="mar"> <?php echo Textos::model()->GetText(475); ?>  </p>	-->
							
							
					<ul class="paises-centroamerica" style="padding:0">
					
						<li style="padding-top:20px;font-size: 14px;"  class="btn-mapa" info="infoCostarica"><a style="color:white;" href=""> Costa Rica</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px;font-size: 14px;"  class="btn-mapa" info="infoEcuador"><a style="color:white;" href=""> Ecuador</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px; font-size: 14px;"  class="btn-mapa" info="infoElSalvador"><a style="color:white;" href=""> El Salvador</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px; font-size: 14px;"  class="btn-mapa" info="infoGuatemala"><a style="color:white;" href=""> Guatemala</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px; font-size: 14px;"  class="btn-mapa" info="infoHonduras"><a style="color:white;" href=""> Honduras</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px;font-size: 14px;"  class="btn-mapa" info="infoNicaragua"><a style="color:white;" href=""> Nicaragua</a></li>
						<div id="separador"></div>
						
						
						<li style="padding-top:20px; font-size: 14px;"  class="btn-mapa" info="infoPanama"><a style="color:white;" href=""> Panamá</a></li>
						<div id="separador"></div>
					
					</ul>
				
				
		
			</div> <!-- Termina info-Centro América-->	
			
					<!--********** COSTA RICA**********-->
		
						<div class="info-mapa" id="infoCostarica">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png"/> Costa Rica</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >Representaciones Cadelga S.A. </p>
							<p  id="sub-filiales" class="h4-fil">Casa 399, Av. 5ta. y Calle 26 Barrio México, San José, Costa Rica</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>506-2221-0104  / 0084</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(113); ?> </h3> 	
						<p> David Mora / Silvia Aguilar</p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>  david.mora@cadelga.com</p>														
				
				</div> <!-- Termina info-costa rica-->

				
				
				<!--********** ECUADOR**********-->
		
				<div class="info-mapa" id="infoEcuador">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png"/>Ecuador  </h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >QUIMICA SUIZA INDUSTRIAL DEL ECUADOR QSI S.A. </p>
							<p  id="sub-filiales" class="h4-fil">Av. Galo Plaza Lasso 10640 y Manuel Zambrano <br />Quito - ECUADOR  <br /> RUC - 1792373255001</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>593 2 3961200</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(113); ?>  </h3> 	
						<p>Sandra Collahuazo</p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> Sandra.Collahuazo@quifatex.com</p>														
				
				</div> <!-- Termina info-ecuador-->
				
				
			
				<!--**********EL SALVADOR**********-->
				
		
				<div class="info-mapa" id="infoElSalvador">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png"/>El Salvador</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >DUWEST EL SALVADOR </p>
							<p  id="sub-filiales" class="h4-fil">Calle El Progreso frente a Ex Hospital de ANTEL, Colonia Roma, San Salvador, El Salvador.</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>(503) 2245-3388</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> FAX </h3> 	
						<p>(503) 2223-6234</p>														
				
				</div> <!-- Termina info-el salvador-->
				
			
				
				<!--********** GUATEMALA**********-->
		
				<div class="info-mapa" id="infoGuatemala">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png"/>Guatemala</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >Tecnología Pecuaria, S.A</p>
							<p  id="sub-filiales" class="h4-fil">3ra. Calle 3-17, Zona 9 <br />Guatemala<br /> RUC 2312990-5</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>2329-5660 /2329-5643/ 2329-5642</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(113); ?>  </h3> 	
						<p>Silvia Fuentes  </p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>silvia@tecnopec.com</p>														
				
				</div> <!-- Termina info-guatemala-->
				
				
				<!--********** HONDURAS**********-->
		
				<div class="info-mapa" id="infoHonduras">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png"/>Honduras</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >EYL Comercial S.A.</p>
							<p  id="sub-filiales" class="h4-fil">Callejón "El Carmen", Barrio San Rafael Frente al Hospital El Carmen, Tegucigalpa, Honduras</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>504-232-3389/504-231-0850</p>		
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  FAX  </h3> 	
						<p>504-239-5634</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(113); ?>   </h3> 	
						<p>Ing.Curt Eyl</p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>curt@eylcomercial.com</p>														
				
				</div> <!-- Termina info-honduras-->
				
				
				
				<!--********** NICARAGUA**********-->
		
				<div class="info-mapa" id="infoNicaragua">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png"/>Nicaragua</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >Agrocampos, S.A.</p>
							<p  id="sub-filiales" class="h4-fil">Semáforos de la Subasta 800 MT <br /> Al Sur frente a Remasa</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>   </h3> 	
						<p>2252-3073/1131/1046</p>				
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(113); ?>  </h3> 	
						<p>Mauricio Salgado/Arlen Torres  </p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>mauricio.salgado@agromesa.com.ni   </p>
						<p>agromesa@gmail.com  </p>														
				
				</div> <!-- Termina info-nicaragua-->
				
				
				
				
				<!--********** PANAMÁ**********-->
		
				<div class="info-mapa" id="infoPanama">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png"/>Panamá</h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >Filial Biogénesis Bagó de Panamá S.A.</p>
							<p  id="sub-filiales" class="h4-fil">Beatriz M. de Cabal y 51. Ciudad de Panamá</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"><?php echo Textos::model()->GetText(466); ?> </h3> 	
						<p>507- 212 5512</p>				
				
				</div> <!-- Termina info-panama-->
					
			
			
				<!--********** BRASIL**********-->
				
				<div class="info-mapa" id="infoBrasil">
					
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="<?php echo Yii::app()->request->baseUrl; ?>/img/banderitas-03.png"/> <?php echo Textos::model()->GetText(412); ?>  </h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >BIOGÉNESIS BAGÓ SAÚDE ANIMAL LTDA.</p>
							<p  id="sub-filiales" class="h4-fil">Av. Manoel Ribas 985 Conj 58 5° Andar <br /> Bairro Mercês <br /> Curitiba. Paraná. Brasil </p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> vendas@biogenesisbago.com</p>	

				
				</div> <!-- Termina info-brasil-->
			
			
			
				<!--********** BOLIVIA**********-->		
				
				<div class="info-mapa" id="infoBolivia">
			
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="<?php echo Yii::app()->request->baseUrl; ?>/img/banderitas-10.png"/> <?php echo Textos::model()->GetText(411); ?>  </h2>
					
						<p id="sub-filiales"  class="h4-fil bio" >Biogénesis Bagó Bolivia S.A.</p>
	
						<p  id="sub-filiales" class="h4-fil">Barrio Equipetrol, Calle 8 Este La Plata nº 3. Santa Cruz de la Sierra – Bolivia. </p>

			
						<!-- LINEA SEPARADORA-->							
						<div id="separador"></div>
						
						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?></h3> 
						<p>591 33453017 – 33419806</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(113); ?></h3> 			
						<p>Rossy Frías</p>
						
			
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>Rossy.frias@biogenesisbago.com</p>								
		
				</div> <!-- Termina info-bolivia-->
		
		
		
				<!--********** URUGUAY**********-->		
				
				<div class="info-mapa" id="infoUruguay"> 
					
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="<?php echo Yii::app()->request->baseUrl; ?>/img/banderitas-17.png"/> <?php echo Textos::model()->GetText(424); ?> </h2>
	
						<p id="sub-filiales"  class="h4-fil bio" >Biogénesis Bagó Uruguay S.A.</p>	
						
						<p  id="sub-filiales" class="h4-fil">Francisco Acuña de Figueroa 2119 (detrás del Anexo del Palacio Legislativo), Montevideo, Uruguay. </p>
			
			
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
						
						<h3  id="titulo-cont">   <?php echo Textos::model()->GetText(466); ?> </h3> 
						<p>(59) (82) 924 - 9878 / 0800 8263</p>			
			
			
						<!-- LINEA SEPARADORA-->		
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> infouruguay@biogenesisbago.com </p>									
		
				</div> <!-- Termina info-uruguay-->
		
		
		
				<!--********** ARGENTINA **********-->		
			
				<div class="info-mapa" id="infoArgentina">
			
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="<?php echo Yii::app()->request->baseUrl; ?>/img/banderitas-01.png"/> Argentina </h2>
	
						<p id="sub-filiales"  class="h4-fil bio" ><?php echo Textos::model()->GetText(505); ?></p>	
						
						<p  id="sub-filiales" class="h4-fil">Ruta Panamericana Km 38,5, Garín <br />Prov. de Bs. As. Argentina </p>
						
						
						
						<!-- LINEA SEPARADORA-->	 
						<div id="separador"></div>
			
						
						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?></h3> 
						<p>03327-448300 | 0800-555-5678</p>			
			
						
						<!-- LINEA SEPARADORA-->	        
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> info@biogenesisbago.com  </p>								
				
				</div> <!-- Termina info-argentina-->
		
			<!--------- PARAGUAY ------>
				<div class="info-mapa" id="infoParaguay">
					
					<h2 id="titulo-info-mapa"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png"/>Paraguay</h2>
	
							<p id="sub-filiales"  class="h4-fil bio">Ciavet S.R.L.</p>
							<p  id="sub-filiales" class="h4-fil">Capitán Cañiza 1202 y Teodoro S. Mongelos, Asunción, Paraguay</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(466); ?>  </h3> 	
						<p>00595-21-201-893</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"> <?php echo Textos::model()->GetText(113); ?>  </h3> 	
						<p>Dr. Silvio Moro, Giannina Moro </p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">E-MAIL</h3> 	
						<p>gmoro@ciavet.com.py</p>				

						<!-- LINEA SEPARADORA-->						
						<div id="separador-mayor"></div>
						<p id="sub-filiales"  class="h4-fil bio" >Agroveterinaria Consult-Pec S.R.L.</p>
						<p  id="sub-filiales" class="h4-fil">José D. López 200 c/teófilo Del Puerto, Asunción, Paraguay</p>				

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont"><?php echo Textos::model()->GetText(466); ?> </h3> 	
						<p>595-21-520-600</p>		
						
					<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">  <?php echo Textos::model()->GetText(113); ?>   </h3> 	
						<p> Marcelo Serrati/ Sergio Zalazar</p>		

						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p>semcon@consultpec.com.py</p>										
				
				</div> <!-- Termina info-paraguay-->

				</div> <!-- Termina info-mapa -->
			
			</div>     
			<?php 
			$shortToId=
			[
				"ar" => "infoArgentina",
				"br" => "infoBrasil",
				"bo" => "infoBolivia",
				"mx" => "infoMexico",
				"uy" => "infoUruguay",
				"cr" => "infoCostarica",
				"ec" => "infoEcuador",
				"sv" => "infoElSalvador",
				"gt" => "infoGuatemala",
				"hn" => "infoHonduras",
				"ni" => "infoNicaragua",
				"pa" => "infoPanama",
				"en" => "infoArgentina",
				"py" => "infoParaguay",
				"pe" => "infoArgentina",
				"do" => "infoArgentina",
				"ve" => "infoArgentina",
			];
			if(array_key_exists($_SESSION['short'],$shortToId)){
			?>
			<script>
			
			$("#<?php echo $shortToId[$_SESSION['short']]; ?>").show();
			</script>
			<?php 
			}
			?>
	</section>
	
	
	
	<?php if($_SESSION["lng"]=="es"){ ?>
	
	<img class="fadder" style="width: 100%;position:relative;margin-bottom:-1px;opacity:1;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-celeste.png" alt="" />	
	
	<section class="special fadder" data-scrollax-parent="true" style="opacity:1;background: rgb(129, 206, 231);width:100%;overflow-x:hidden;position:relative;" id="inform-tec">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="info-tec" style="overflow:hidden;padding-bottom:30px;">

				<!--////// TITULO /////-->
				<div id="titulo-info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
					<h2 id="titulo"><img class="icono-menu right" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png">INFORMACIÓN TÉCNICA<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png" class="icono-menu left"></h2>
					<div class="border"></div>
				
				</div> <!--Termina titulo-info -->
        


				<!-- NO EN BASE DE DATOS -->
				<!--////// MENÚ /////-->

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="menu">
					
					<ul id="list-menu"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<li class="col-lg-1 col-md-2 col-sm-2 col-xs-3 infotec-240"><a  id="opcion1" href="javascript:void(0)">Trabajos técnicos</a></li>
						<li class="col-lg-1 col-md-2 col-sm-2 col-xs-3 infotec-240"><a  id="opcion2" href="javascript:void(0)">Planes Sanitarios</a></li>
						<li class="col-lg-1 col-md-2 col-sm-2 col-xs-3 infotec-240"><a id="opcion3" href="javascript:void(0)">Planillas<br />de trabajo</a></li>             
						<script>
						$(document).ready(function () {
							
							CheckSub();
							$("body").on("mousedown",".link-menu",function(evt){
								var attr = $(this).attr('down');
								if (typeof attr !== typeof undefined && attr !== false) {
									eval(attr);
								}
								CheckSub();
							});
						});
						function CheckSub(){
							if(sessionStorage.sub){
							if(sessionStorage.sub=="sanitarios"){
								$("#opcion2").click();
							}else if(sessionStorage.sub=="planillas"){
								$("#opcion3").click();
							}else{
								$("#opcion1").click();
							}
							sessionStorage.removeItem("sub");
							}
							
						}
						
						</script>
					</ul> 
					
					<!-- borde-->
					<div> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/linea-info-tecnica.png" alt=""  class="b-l"/> </div>
				
				</div> <!--Termina menú --> 
				
				
				<!-- /////////////////++++++  CONTENEDOR ++++++ /////////////////  -->
      			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias">
        
		
					<!-- ///////////////// TRABAJOS TÉCNICOS /////////////////  -->
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="noticias-trabajos">
						<?php 	$notas =Notas::model()->findAllByAttributes(array('seccion'=>"tecnica"),array(
						'limit' => 3,
						));
						if(count($notas)>0){  ?>
						
						<?php foreach($notas as $nota){ ?>
						<!-- ***** NOTICIA ***** -->
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" id="texto" >
							<div hid="3">
							<h4 id="fecha-info-tec"> <?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?> </h4>
                    
							<h4 id="protocolo-info-tec" > <?php echo $nota->titulo; ?></h5>
                    
							<p id="resumen-noticias"> 
							<?php $bajada= $nota->bajada; 
							$largoBajada=300;
							if(strlen ($bajada)>$largoBajada){
								$bajada= substr($bajada,0,$largoBajada);
							}
							echo $bajada."...";
							?> 
							</p>
							</div>
							<h3><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-tecnica/<?php echo $nota->id; ?>" id="leer-mas"> Leer más </a></h3>
                
						</div> <!-- Termina noticia -->      
						
						<?php 
							} 
						
						} ?>
   
					</div> <!-- Termina texto-completo -->  
            
			
			
			
			
					<!-- ///////////////// PLANES SANITARIOS /////////////////  -->
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias-planes">
        			
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="archivos-descargas">
							
							<!--***** DESCARGA ***** -->				
							<div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> CRÍA  </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planes-sanitarios/cria.pdf" download="cria"  id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                   
                       
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> FEED-LOT </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planes-sanitarios/feedlot.pdf" download="feedlot"  id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> RECRÍA </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planes-sanitarios/recria.pdf" download="recria"  id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
						</div>
					   <div>
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> TAMBO </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planes-sanitarios/tambo.pdf" download="tambo"  id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo">Ovino Central y Norte </h3>
                             
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planes-sanitarios/ovinoscentralynorte.pdf" download="ovinoscentralynorte"  id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->

							
                       </div>
                    
						</div>
  
					</div> <!-- Termina texto-completo -->  
					
					
        
				<!-- ///////////////// PLANILLAS DE TRABAJO /////////////////  -->
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias-planillas">
     
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="archivos-descargas">
							
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> Control de tacto </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planillas-de-trabajo/Agenda-16.jpg" download="Control de tacto" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                   
                       
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> Control de destete</h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planillas-de-trabajo/Agenda-17.jpg" download="Control de destete" id="descarga-link" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> Control de nacimientos </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planillas-de-trabajo/Agenda-18.jpg" download="Control de nacimientos" id="descarga-link" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> Control de mortandades </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planillas-de-trabajo/Agenda-19.jpg" download="Control de mortandades" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo">Agenda ganadera 2016 </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/planillas-de-trabajo/JPG Agenda ganadera.zip" download="Agenda ganadera 2016" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
                    
						</div>
  
				</div> <!-- Termina texto-completo -->  
			
			
			
			
					<!-- SECCION MÁS DE TRABAJOS TÉCNICOS -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="seccion-mas">
					
						<div id="btn-mas" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica" style="color:white;">
							<img id="img-btn-mas" src="<?php echo Yii::app()->request->baseUrl; ?>/img/btn-mas.png"/>
							<p id="texto-btn-mas"> Trabajos técnicos </p>
							
					
						</div> <!-- Termina btn-mas -->
					</a>
					</div> <!-- Termina seccion-mas -->      
        
				</div> <!-- Termina noticias -->

			</div> <!-- Termina contenido -->


		</section>
		<img class="fadder" style="opacity:1;width:100%;position:relative;top:-3px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-celeste-abajo.png" alt="" />	
	<?php } ?>
		<!--CURVA-->	
<!--   APLICAR LAS TRADUCCIONES AL PORTUGUES  -->
		
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" data-scrollax-parent="true" style="opacity:1;width:100%;">
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			
			<div id="contenido-vad" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
					
					<?php if($_SESSION["lng"]=="en"){ ?>
					<div id="vade" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img class="icono-menu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png"><h2 id="titulo-vad">VADEMÉCUM</h2><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png" class="icono-menu">
							<div class="border-vad"></div>
					</div> <!--Termina título vademécum-->
					<?php }else{ ?>
					<!-- /////// TITULO  /////// -->
					<div id="vade" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img class="icono-menu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png"><h2 id="titulo-vad">VADEMÉCUM</h2><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png" class="icono-menu">
							<div class="border-vad"></div>
					</div> <!--Termina título vademécum-->
					<?php } ?>
					
					<!-- /////// VADEMÉCUM  /////// -->
					<div class="col-lg-10 col-md-11 col-sm-12 col-xs-12" id="botones" >
				
						<!-- ******* AFTOSA ******** -->
						<div id="botonera-af" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
			
								<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id1">
				
									<div class="botonVademecum-Af"> 
		
											<div class="outerLine-Af">
											<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(1); ?></p>
									</div>
		
									</div>
					
								</a>          
				
						</div> <!-- Termina botonera-af-->
		
		
						<!-- ******* ANTIBIÓTICOS ******** -->		
						<div id="botonera-ant" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240"> 
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id6">
							
								<div class="botonVademecum-Ant"> 
			
									<div class="outerLine-Ant">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(6); ?></p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ant-->
		
		
						<!-- ******* ANTIPARASITÁRIOS EXTERNOS ******** -->	
						<div id="botonera-int" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id4">
							
								<div class="botonVademecum-Int"> 
			
									<div class="outerLine-Int">
										<p style="text-transform: uppercase; width: 90%;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(4); ?> </p>
									</div>
			
								</div>
								
							</a>  
			
						</div> <!-- Termina botonera-int -->
		
		
						<!-- ******* ANTIPARASITÁRIOS INTERNOS ******** -->	
						<div id="botonera-ext" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id3">
							
								<div class="botonVademecum-Ext"> 
			
									<div class="outerLine-Ext">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(3); ?></p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ext -->
		
		
						<!-- ******* BIOLÓGICOS ******** -->	
						<div id="botonera-bio" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240"> 
						
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id2">
								
								<div class="botonVademecum-Bio"> 
			
									<div class="outerLine-Bio">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(2); ?></p>
									</div>
			
								</div>
							
							</a>  
	
						</div> <!-- Termina botonera-bio -->
		
		
						<!-- ******* ENDECTOCIDAS ******** -->	
						<div id="botonera-ende" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id5">
								
								<div class="botonVademecum-Ende"> 
			
									<div class="outerLine-Ende">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(5); ?></p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ende -->
		
		
						<!-- ******* FARMACÉUTICOS ******** -->	
						<div id="botonera-farma" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id9">
								
								<div class="botonVademecum-Farma"> 
			
									<div class="outerLine-Farma">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(9); ?></p>
									</div>
			
								</div>
										
							</a>    
							
						</div> <!-- Termina botonera-farma -->
		
		
						<!-- ******* NUTRICIÓN ******** -->	
						<div id="botonera-nutri" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
						
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id11">
								
								<div class="botonVademecum-Nutri"> 
			
									<div class="outerLine-Nutri">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(11); ?></p>
									</div>
			
								</div>
								
							</a>     
	
						</div> <!-- Termina botonera-nutri -->
		
		
						<!-- ******* REPRODUCTIVOS ******** -->	
						<div id="botonera-repro" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id7">
								
								<div class="botonVademecum-Repro"> 
			
									<div class="outerLine-Repro">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(7); ?></p>
									</div>
			
								</div>
							
							</a>  
	
						</div> <!-- Termina botonera-repro -->
		
		
						<!-- ******* SALUD AMBIENTAL ******** -->	
						<div id="botonera-amb" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
							
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id10">
							
								<div class="botonVademecum-Sal-Amb"> 
				
									<div class="outerLine-Sal-Amb"style="">
										<p style="text-transform: uppercase;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(10); ?></p>
									</div>
				
								</div>
								
							</a> 
	
						</div> <!-- Termina botonera-amb -->
		
		
						<!-- ******* VITAMINAS Y MINERALES ******** -->	
						<div id="botonera-vit-min" class="col-lg-3 col-md-3 col-sm-3 col-xs-6 vademecum-240">
						
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id8">
							
								<div class="botonVademecum-Vit-Min"> 
			
									<div class="outerLine-Vit-Min"style="">
										<p style="text-transform: uppercase; margin-top: 39%;" id="nom-btn"><?php echo Yii::app()->paisChecker->getSeccion(8); ?></p>
									</div>
			
								</div>
								
							</a>
					
						</div> <!-- Termina botonera-vit-min -->
		
		
					<!-- ///////  BUSCADOR /////// -->	
						<div id="buscar" style="">
							<div id="botonera-buscar" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<span>
										<form action="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/search/" method="post">
										<input class="input-vad" type="text" name="arg" placeholder="">
									</span>	
									<span class="input-group-btn">
										<button class="btn btn-default" id="btn-buscar" type=""> </button>
									</span>
									</form>
								</div><!-- /input-group -->
							</div><!-- /.col-lg-6 -->
						</div><!-- /.row -->

					</div> <!-- Termina buscar -->

			</div> <!--Termina botones-->
			
		</div><!--Termina el row-->    
		</section>
		
		
		<!-- SCRIPT CARROUSEL -->
	
		<?php include('carrousel.php'); ?>
		
	
		<?php $revistas= Revista::model()->findAllByAttributes(array('lng'=>$_SESSION["lng"]),array('order'=>'fecha DESC','limit' => 3)); 
		if($revistas){
		
		?>
		
		
		<!--CURVA-->			
		<img class="fadder" style="opacity:1;width: 100%;position:relative;top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-home.png" alt="" />
		
		<!------------------------------------------------------------------ SECCION 5: REVISTA EL MOLINO ------------------------------------------------------------------>	
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" data-scrollax-parent="true" style="opacity:1;background: rgba(0, 0, 0, 0.62);width:100%;overflow-x:hidden;padding-bottom:30px;">

			
	
				<div class="col-lg-12 col-md-12">
					
					<!-- /////////// REVISTA EN TOTAL ///////// -->
					<div id="ver-revista" class="col-lg-12 col-md-12"  style="background:white; padding-bottom: 4%;">	
						
						
						<?php $primeraRevista=array_shift($revistas); ?>
						<!-- IMAGEN REVISTA-->
						<img class="col-lg-6 col-md-6"  id="img-rev" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/img/destacada-<?php echo $primeraRevista->numero; ?>.png"/>
		
						<!-- INFORMACIÓN REVISTA -->
						<div id="info-revista" class="col-lg-6 col-md-6">
						
							
	
							<h1 ><span class="border-tit">R</span>evista El Molino</h1>
		
							<p id="p-1"> Información calificada sobre escenarios productivos, avances tecnológicos y protagonistas destacados en el desarrollo de América Latina.</p>
		
							<p id="p-2"><?php 
												$timeStamp=strtotime($primeraRevista->fecha);												
												echo date('d',$timeStamp)." de ".$meses[date('n',$timeStamp)-1]. " de ".date('Y',$timeStamp) ; ?></p>
		
							<h2 id="h2-1">MOLINO <?php echo  $primeraRevista->numero; ?>: <?php echo  $primeraRevista->titulo; ?></h2>
		
							<p id="p-3"><?php echo  $primeraRevista->bajada; ?></p>
		
							<div class="btn-">
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/elmolino/<?php echo $primeraRevista->numero; ?>/index.html" target="_blank"><button type="button" id="btn-rev">Leer revista</button></a>
							</div> <!--Termina btn-->
		
						</div> <!--Temrina info revista -->
	
					</div> <!--Termina la vista de la revista-->
					
					
						<script type="text/javascript">
							$(document).ready(function(){
								if(!isMobile){
								$("#img-rev").boxLoader({
									direction:"x",
									position: "-50%",
									effect: "fadeIn",
									duration: "2s",
									windowarea: "50%"
								}); 
							
								
								$("#info-revista").boxLoader({
									direction:"x",
									position: "50%",
									effect: "fadeIn",
									duration: "2s",
									windowarea: "50%"
								}); 
								}
							});
						</script>
	
					<!-- //////// CARROUSEL //////// -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="slider1" class="row col-lg-12 col-xs-12"> 
							
						<!-- BOTON ANTES / IZQUIERDA /PREV -->
						<!--<a class="buttons prev" href="#">&#60;</a>!-->
						
						
						<!--******* CONTENEDOR ****** -->
						<div class="viewport">
						
							<!-- LISTA REVISTAS -->
							<!-- LISTA REVISTAS -->
							<ul class="overview" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php 
								foreach($revistas as $revista){ ?> 
								
								<!-- ITEM REVISTA-->
								<li id="revista-<?php echo $revista->id; ?>" class="col-lg-4 col-md-2 col-sm-2 col-xs-4 revista-slider-240">
									
									<a href="<?php echo Yii::app()->request->baseUrl; ?>/elmolino/<?php echo $revista->numero; ?>/index.html" target="_blank">
									<!-- img -->
									<div class="rev-30"> </div> 
								
									<!-- texto -->
									<section class="info-rev">
										<?php $fechaRevista=$revista->fecha; ?>
										<p class="fech-rev"><span class="border-2">
												<?php 
												$timeStamp=strtotime($revista->fecha);												
												echo date('d',$timeStamp)." de ".$meses[date('n',$timeStamp)-1]. " de ".date('Y',$timeStamp) ; ?>
												</p>
										<h3 class="tit-rev">MOLINO <?php echo  $revista->numero; ?> : <?php echo $revista->titulo; ?></h3>
										<p class="desc-rev"><?php echo $revista->bajada; ?></p>
									</section>
									<style>
									#revista-<?php echo $revista->id; ?> .rev-30{
										background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/img/portada-<?php echo $revista->numero; ?>-desaturada.png);
										background-size:100% auto;
										background-position:center center;
									}
									#revista-<?php echo $revista->id; ?> .rev-30:hover{
										background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/img/portada-<?php echo $revista->numero; ?>.png);
										background-size:100% auto;
										background-position:center center;
									}
									</style>
									</a>
								</li><!-- termina item -->
							
								<?php } ?>
								
								
									<li class="col-lg-4  col-md-2 col-sm-2 col-xs-4" style="border:none;">
									<div id="btn-mas" class="col-lg-12 col-md-12 col-sm-3 col-xs-3"  style="cursor:pointer; padding-top: 59px;">
										<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/revista">
											<img id="img-btn-mas" src="<?php echo Yii::app()->request->baseUrl; ?>/img/mas-ediciones-01.png" style="    position: inherit;">
											<p id="texto-btn-mas2"> Números anteriores</p>
										</a>
									</div>
								</li>
							</ul> <!-- termina listado revista -->
							
						</div> <!-- termina contenedor revista -->
						
						<!-- BOTON DESPUÉS / DERECHA /NEXT -->
						<!--<a class="buttons next" href="#">&#62;</a>!-->
						
					</div><!--termina Carousel-->
				</div>
						
				</div> <!--Termina contenido-->
				
				
			
		</section>
		
		<?php } ?>
		<!------------------------------------------------------------------ SECCION 6: RRHH ------------------------------------------------------------------>
		
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder" data-scrollax-parent="true" style="opacity:1;width:100%;background-color: white;overflow:hidden;height:auto;"  id="back-rrhh">
	
			<!--*************  CONTENEDOR PRINCIPAL *********** -->
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  "  id="header-rrhh" style="z-index:10;text-align:center;height:auto;">     	
				<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/rrhh-02.png" style="position:absolute;z-index:-2;display:inline-block;width:100vw;top:-1px;left:-1px;">!-->
				<!-- ////////////// HEADER //////////// -->
				<div id="titulo-info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-rrhh-home" style="position:relative;z-index:10;">
					
					
						
						<!-- TITULO-->
						<div class="move-x-3"><img class="icono-menu right" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png"><h2 id="titulo-vad" ><span class="border-vad-2">RRHH</span> </h2><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-rrhh.png" class="icono-menu left"></div>
	
							
							

						
				</div>  <!-- termina header -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:0;">
				
				<!--<img class="curva-rrhh" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rrhh-01.png">!-->
				</div>
				
				<div id="display-rrhh" style="width:100%;display:inline-block;text-align:center;margin-top:-2px;position:relative;background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/img/rrhh-01.png);background-size:100% auto;background-repeat:no-repeat;">
				
				<!-- TEXTO-->
				<!-- TEXTO HEADER-->
							<h3 id="text-1" class="tr move-x-1"><?php echo Textos::model()->GetText(110); ?></h3>
							<h4  id="text-2" class="tr-2  move-x-2"><?php echo Textos::model()->GetText(478); ?></h4>
							
							<a href="http://biogenesisbago.zonajobs.com.ar/" target="_blank" style="display:inline-block;"><div class="send-rrhh" style="color:white;border-radius: 5px;"><?php echo Textos::model()->GetText(111); ?></div></a>
							
				<div style="width:100%;position:relative;z-index:4;">


				<p class="p-rrhh-home" style="display:inline-block;position: relative;" ><?php echo Textos::model()->GetText(112); ?></p>


				<!-- ESTOS SON LOS TEXTOS QUE TIENE QUE APARECER Y DESAPARECCER EN RRHH DE LA HOME !-->

				<ul id="ul-rrhh-home" style="position:relative;display:inline-block;">
				
					<li ><?php echo Textos::model()->GetText(483); ?></li>
				   <li ><?php echo Textos::model()->GetText(484); ?></li>
				   <li ><?php echo Textos::model()->GetText(485); ?></li>
				   <li ><?php echo Textos::model()->GetText(486); ?></li>
				   <li ><?php echo Textos::model()->GetText(487); ?></li>
				   <li><?php echo Textos::model()->GetText(488); ?></li>
				</ul>

				<!-- HASTA ACA !-->
				</div>
				
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:15vh;background-color:white;"></div>
			</div> <!-- termina contenedor principal -->
			<!-- //////////////  IMG  DE ABAJO ////////////// -->
				<!--<img id="rrhh-img"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/rrhh-01.png" />!-->
				

</section>


		<!------------------------------------------------------------------ SECCION 7: CONTACTO ------------------------------------------------------------------>
		<section class="special fadder" data-scrollax-parent="true" style="opacity:1;width:100%;text-align:center;background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/img/fondo-contacto.png);background-size:auto 100%;float:left;overflow:hidden;position:relative;top:-2px;"   id="section-contacto" >
			<div id="contenido" style="display:inline-block;text-align:center;">
				
				<!-- ////////// TITULO ////////////// -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:inline-block;">
					<h1 id="contacto" style="margin:0;padding-top: 45px;"><div id="cont-h1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet--.png"/> <?php echo Textos::model()->GetText(113);?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet--.png" /></div></h1>
					<!--<img style="width: 100%;position:relative;" class="hidden-lg hidden-md" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-home-abajo.png" alt="" />!-->
					<img style="width: 100%;position:relative;top:-2px;" class="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-home-abajo.png" alt="" />
				</div>
      
      
			
    
					<!--********** DESCRIPCIÓN / UBICACIÓN **********  -->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="descripcion" style="float:left;" hid="2">
                        
						<p style="text-transform:uppercase;" class="ubicacion"><img class="ico-ubi" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ubicacion.png"/><?php echo Textos::model()->GetText(479); ?></p>
                        
                     
                        
                       
					
						<!-- MAPA -->
						<!--<div class="mapa"></div>!-->
						
						<!--<iframe class="" style="width:89%;height:50vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.321995531876!2d-58.47311858426047!3d-34.79784007530322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd1838f6768bf%3A0x1fe233fc9fc7b0d0!2sBiogenesis+-+Bago!5e0!3m2!1ses!2sar!4v1454509545701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>!-->
						<?php if($_SESSION["lng"]=="pt"){ ?>
						<p>Av. Manoel Ribas, 985 - Mercês</p>
                        <iframe style="width:89%;height:50vh;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.4664824665533!2d-49.29041138444461!3d-25.422663438829932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3f946aac7ff%3A0xbdbd9765e14046d2!2sAv.+Manoel+Ribas%2C+985+-+Merc%C3%AAs%2C+Curitiba+-+PR%2C+Brasil!5e0!3m2!1ses!2sar!4v1460127317366" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						<?php }else{ ?>
						   <p>Ruta Panamericana Km 38,5 Garín</p>
						<iframe  style="width:89%;height:50vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13165.129935934561!2d-58.71431924216879!3d-34.419579093363566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca1f2712699bd%3A0x3985a0fecc05b5c6!2zQmlvZ8OpbmVzaXMgQmFnw7MgU0E!5e0!3m2!1ses!2sar!4v1460127475557" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						<?php } ?>
                       
					   <!-- termina mapa-->
					   
					</div><!--termina descripcion-->
                  
				
					<!-- ////////// INFORMACIÓN ////////////// -->        
					<div id="infodcha" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display:inline-block;float:left;text-align:center;" hid="2">        
						
						<div id="container-envio" class="col-lg-12 col-md-12 col-xs-12" >
							<div id="enviando" class="">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/enviando.gif"><br>
								<div class="linea-blanca-contacto"></div>
								<p>&#8226; <?php echo Textos::model()->GetText(481); ?> &#8226;</p>
							</div>
							<div id="enviado">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/sobres-enviado-02.png"><br>
								<div class="linea-blanca-contacto"></div>
								<p>&#8226; <?php echo Textos::model()->GetText(480); ?> &#8226;</p>
							</div>
							<div id="errorEnvio">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/sobres-enviado-01.png"><br>
								<div class="linea-blanca-contacto"></div>
								<p>&#8226; <?php echo Textos::model()->GetText(482); ?> &#8226;</p>
							</div>
						</div>
						<form id="form1" class="col-lg-12 col-md-12 col-xs-12" style="float:initial;display:inline-block;text-align:center;">
							
							<!-- ******** NOMBRE ******** -->
							<div class="col-lg-6  col-md-6  col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(114); ?></p></label>
									<input class="form-inline required" name="nombre" type="text" value="">
								</div>
							</div>
				
				
							<!-- ******** APELLIDO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(115); ?></p></label>
									<input class="form-inline" name="apellido" type="text" value="">
								</div>
							</div>
						
						
							<!-- ******** EMAIL ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(116); ?></p></label>
									<input class="form-inline required" name="email" type="email" value="">
									</div>
							</div>
						
						
							<!-- ******** TELÉFONO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(117); ?></p></label>
									<input class="form-inline" name="telefono" type="text" value="">
									</div>
							</div>
					
					
							<!-- ******** EMPRESA ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(118); ?></p></label>
									<input class="form-inline" name="empresa" type="text" value="">
									</div>
							</div>
			
			
							<!-- ******** CARGO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(119); ?></p></label>
									<input class="form-inline" name="cargo" type="text" value="">
									</div>
							</div>
			
						
							<!-- ******** DIRECCIÓN ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(120); ?></p></label>
									<input class="form-inline" name="direccion" type="text" value="">
								</div>
							</div>
					
					
							<!-- ******** DEPARTAMENTO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(121); ?></p></label>
										<input class="form-inline" name="departamento" type="text" value="">
										</div>
							</div>
			
			
							<!-- ******** MENSAJE ******** -->
							<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
								<div class="textarea-contacto">
								<label id="textarea-label" for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(122); ?></p></label> 
									<textarea rows="3" id="textarea" name="mensaje" class="required"></textarea>
									</div>
							</div>  <!--termina form textarea-->
					
					
							<!-- ******** BOTÓN ENVIAR ******** -->
							<div class="col-lg-12 col-md-12 col-xs-12" > 
									<div class="input-contacto" style="text-align:right;">
									<button id="enviar" name="ENVIAR" type="submit" class="pull-right"><?php echo Textos::model()->GetText(123); ?></button>
									</div>
							</div>  <!--termina form btn enviar-->
	
						</form> <!--termina info dcha-->
						<style>
						
						</style>
						<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
						<script>
						 $("#form1").validate({
							submitHandler: function(form) {
								
							$.post( "http://<?php echo $_SERVER['SERVER_NAME']; ?>/br/web/contacto/", $( "#form1" ).serialize() ).done(function(data){
								//console.log("exito!");
								$("#enviando").fadeOut(100);
								$("#enviado").fadeIn(100);
								$("#errorEnvio").hide();
							}).fail(function(){
								$("#enviando").fadeOut(100);
								$("#enviado").hide();
								$("#errorEnvio").fadeIn();
							});
							$("#form1").fadeOut(500);
							$("#container-envio").fadeIn(500);
							$("#enviando").fadeIn(500);
							$("#enviado").hide();
							$("#errorEnvio").hide();
							
						  },
							errorElement: 'div',
							messages: {
								nombre: {
									required: "*Debe completar su nombre.",
								},
								email: {
									required: "*Debe proporcionar un mail de contacto válido.",
								},
								mensaje: {
									required: "*Debe ingresar un mensaje.",
								},
							},
							
						 });
						 
						$(document).ready(function () {

							$('#contactform').validate({
								errorElement: 'span',
								rules: {
									first: {
										required: true,
										minlength: [2],
									}
								},
								
								
							});

						});
						</script>
					</div> <!--termina info-->
			
			
					<!-- /////////////// REDES SOCIALES  ///////////////  -->
					<div style="text-align:center; background: transparent;" class="hidden-lg hidden-md">
						
						<?php include('redes-sociales-home-mobile.php');?>
					
					</div>

				
				<!-- /////////////// REDES SOCIALES  ///////////////  -->
				<div style="text-align:center;" class="hidden-sm hidden-xs">
					<?php include('redes-sociales-home-pc.php');?>
				</div>	
	<!-- SCRIPT PARALLAX -->
	<?php include('parallax.php'); ?>
	<!-- FOOTER-->
	<?php  include('footer-home.php');?>


		
	
			
			</div>
		
		</section>
	

	<script>
	$(document).ready(function(){
		//console.log("ready para arreglo rrhh");
		/*$("#curva-rrhh").height();
		$("#whiteFiller").css("top",$("#curva-rrhh").height());*/
		
		var textFade= $("#textoFade").text();
		textFade= textFade.split("/");
		$("#textoFade").text("");
		var indextText=0;
		$("#textoFade").text(textFade[indextText]);
		setInterval(function(){
			indextText++;
			if(indextText>=textFade.length){
				indextText=0;
			}
			$("#textoFade").fadeOut(500);
			setTimeout(function(){
				$("#textoFade").text(textFade[indextText]);
				$("#textoFade").fadeIn(500);
			},600);
			
			
		},6000);
	});

	</script>
    
	<script type="text/javascript">
		$(document).ready(function(){
			if(!isMobile){
		$("#mapa").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "50%"
		}); 
		
		$(".move-x-1").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "6s",
			windowarea: "100%"
		}); 
		
		$(".move-x-2").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "8s",
			windowarea: "100%"
		}); 
		
		
		$(".move-x-3").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "100%"
		}); 
		
		
		$("#cont-h1").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "100%"
		}); 
		
		$("#t-filiales").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "100%"
		}); 
		
		$("#titulo-info").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "100%"
		}); 
		
			$("#vade").boxLoader({
			direction:"y",
			position: "-100%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "100%"
		}); 	
		
		$("#descripcion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "50%"
		}); 
		
		
		$("#infodcha").boxLoader({
			direction:"x",
			position: "50%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "50%"
		}); 
			}
		});
	</script>
</body>

	<!-- FOOT -->
	<?php include ('foot.php'); ?>


</html>