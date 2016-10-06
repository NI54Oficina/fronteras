<?php if($_SESSION["lng"]=="pt"){ ?>

<?php include("block.php"); ?>
<?php }else{ ?>
<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); ?>

			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=" text-transform: uppercase;"><?php echo Textos::model()->GetText(431); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-oscura-01.png" style="width:100vw;" />	
			</div>
		<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	
<div id="rse-transicion" class="fadder">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 fundaciones-imagenes">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>	
		<div id="barra-institucional"></div>
		</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-1" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-prosaia.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-2" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-garrahan.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-3" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-mundo-sano.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-4" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-misiones-rurales.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-5" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-solidagro.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-6" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-fernandez.png"  /></div>
				<div  class="imagenes-fundaciones col-lg-12 col-md-12 col-sm-6 col-xs-6"><img class="img-fundaciones-7" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-gutierrez.png"  /></div>


			</div>	
	</div>
	</div>
	
	
<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			
			<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text container-prensa" style="text-shadow:none;padding-top:0;margin: 0;">			
				<h2 class="h2-aftosa hidden-md hidden-lg h2-titulo" ><?php echo Textos::model()->GetText(347); ?><br /></h2>
					<h3 class="h3-rse" style="margin-bottom: 0%"><?php echo Textos::model()->GetText(63); ?></h3>
						<p style="margin-top:2% ;margin-bottom:3.5%;margin-left: 0px;"><?php echo Textos::model()->GetText(64); ?> </p>
				
					
				<h4  class="h3-rse" style="display:block; margin-bottom: 3%;"><?php echo Textos::model()->GetText(65); ?></h4>
				
				<!--Nuestro rol social en emergencias-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea-rse"> </div>
				
					<h4  class="h2-rse" style="display:inline-block;"> <?php echo Textos::model()->GetText(455); ?> </h4>
					
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   linea-rse"> </div>
				
				
				<p style="margin-top:2%; margin-bottom: 2%; margin-left: 0px;"><?php echo Textos::model()->GetText(66); ?> </p>
                <!--termina-->
				
				
				<!--Cuidado del medio ambiente-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea-rse"> </div>
		
					<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(456); ?></h4>
					
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea-rse"> </div>

                <p style="margin-top:2% ;margin-bottom:3.5%;margin-left: 0px;"><?php echo Textos::model()->GetText(67); ?></p>

				<!-- termina -->
				
				
				<h4  class="h3-rse" style="display:inline-block;margin-bottom: 3%;"><?php echo Textos::model()->GetText(68); ?></h4>

				
				<!--Encuentros Biosolidarios -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea-rse"> </div>
				
					<h4  class="h2-rse" style="display:block;"><?php echo Textos::model()->GetText(457); ?></h4>
					
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  linea-rse"> </div>

				<p style="margin-top:2%; margin-bottom: 2%;margin-left: 0px;"><?php echo Textos::model()->GetText(69); ?><?php echo Textos::model()->GetText(70); ?></p>

				<!--termina-->
				
				
				<!--Salud, educación y desarrollo humano-->
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linea-rse" style="" > </div>

					<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(71); ?></h4>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  linea-rse"> </div>
				
				<!-- termina-->

                
                <p style="margin-top:3% ;margin-bottom:0%;margin-left: 0px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(72); ?></p>
                
                <p style="margin-top: 3%;margin-left: 0px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(73); ?></p>
                
                <p style="margin-bottom: 5%; margin-top: 3%;margin-left: 0px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(74); ?></p>
             
                
                 </p>
				
				
				<?php 
				$year= date("Y");
				while($year>2000){ 
					$notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=".$year."");
					if(count($notas)>0){
				?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animateCollapse" style="margin-top:0;">
					<div class="btn">
						<div class="toggleIcon"></div>
							
							
							<div class="ttl"><?php echo $year; ?></div>
					</div>
					<?php 
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/<?php echo $nota->id; ?>"><p><?php 
							$timeStamp=strtotime($nota->fecha);	
							echo date('d',$timeStamp)." de ".$meses[date('n',$timeStamp)-1];
							?><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/<?php echo $nota->id; ?>" style="float: right;padding-right: 7%;" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
				</div>
				<?php } ?>
				<?php $year--; ?>
				<?php } ?>
					
					
					
				<!--PC-->
				
				
			</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#rse-transicion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "4s",
			windowarea: "50%"
		}); 
		
		});
	</script>
<?php } ?>
<?php include('widget.php'); ?>

