
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(6); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/quienes-somos-oscura-01.png" style="width:100vw;" />	
			</div>
	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	


	
<div id="quienes-transicion" class="fadder" >
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>	
		<div id="barra-institucional"></div>
		</div>
	</div>
	</div>	

		
		<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
				
				
			<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- CONTENIDO -->
			<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
				<p><?php echo Textos::model()->GetText(27); ?> <?php echo Textos::model()->GetText(28); ?> <br/>
			<?php echo Textos::model()->GetText(29); ?>  </p>

				<p style="margin-top:3%;"><?php echo Textos::model()->GetText(30); ?><br />
				<?php echo Textos::model()->GetText(31); ?> <br />
				<?php echo Textos::model()->GetText(32); ?>
				</p>
		
				<p style="margin-top:1%;"><?php echo Textos::model()->GetText(350); ?></p>
			
			</div>
		
		
		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
           <!-- TITIULO SUBSECCIÓN -->
			
           <h2 class="h2-aftosa" style="color:#02204C;"><?php echo Textos::model()->GetText(38); ?></h2>
           

		   <!-- CONTENIDO -->





           <p style="margin-top:1%;"><?php echo Textos::model()->GetText(39); ?></p>
           
		   <!-- CUADRO -->

           <div class="cuadro" style="padding-left:3px; line-height:7px;margin-top: 5%; padding-bottom: 3%;">
           		
				<!-- TITULO CUADRO -->

				<h2 class="h2-aftosa-celeste" ><?php echo Textos::model()->GetText(40); ?></h2>

				<div id="contenedor-cuadro">
                 <h3 style="color: #595959; font-size: 15px; line-height: 25px; font-weight: 700;">
                 <?php echo Textos::model()->GetText(41); ?>

                 
                 </h3>
           
				<!-- ITEMS CUADRO -->
				<p style="line-height: 20px; margin-bottom: 20px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;vertical-align: text-top;" /><?php echo Textos::model()->GetText(42); ?> </p>
				<p style="line-height: 20px;margin-bottom: 20px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;vertical-align: text-top;" /><?php echo Textos::model()->GetText(43); ?> </p>
				<p style="line-height: 20px;margin-bottom: 20px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;vertical-align: text-top;" /><?php echo Textos::model()->GetText(44); ?></p>
				<p style="line-height: 20px;margin-bottom: 20px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;vertical-align: text-top;" />

					<?php echo Textos::model()->GetText(45); ?> 
				</p>

				</div>
           
           </div>
		 </div> 
		 
		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;color:#656565;">		

            <!-- TÍTIULO SUBSECCIÓN -->          
           <h2 class="h2-aftosa" style="color:#02204C;">
           <?php echo Textos::model()->GetText(46); ?></h2>
           
           <p style="margin-top:1%;">
           <?php echo Textos::model()->GetText(47); ?>
		   <br/>
			<?php echo Textos::model()->GetText(48); ?><br />
			<?php echo Textos::model()->GetText(49); ?>

			</p>
		</div>
		</div>
	</div>
	</div>
	


<?php include('widget.php'); ?>

		<script type="text/javascript">
		$(document).ready(function(){
		/*$("#quienes-transicion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "4s",
			windowarea: "50%"
		}); */

		
		});
	</script>
