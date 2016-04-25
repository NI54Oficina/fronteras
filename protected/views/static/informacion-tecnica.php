<?php if($_SESSION["lng"]=="es"){ ?>

			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 header-infotec-revista" >
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="display:inline-block;z-index:3;padding-top:4%;">
					
					<a class="volver-infotec-revista" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home/#inform-tec"><div></div><p>Volver</p></a>
				
				</div>
				
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 container-title-info-revista">
					<div class="dot-infotec-noticias" style="margin-right: 1%;"></div>
			
					<h1 class="h1-infotec-noticias2">INFORMACIÓN TÉCNICA</h1>	

					<div class="dot-infotec-noticias" style="margin-left: 1%;"></div>
			
					<div class="border-infotec-noticias"></div>
			
				</div>
				
			</div>
	
	
	
		
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left; margin-right: auto;padding:0 15px;">
	

				<?php 
				

					$notas =Notas::model()->findAllByAttributes(array('seccion'=>"tecnica"));
					if(count($notas)>0){
					foreach($notas as $nota){
						
					?>
	<a style="color:#666;" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-tecnica/<?php echo $nota->id; ?>">	
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "  style="display:inline-block;text-align: center;" >				
			<div class="container-infotec-noticias  container-nota-revista" style="width: 98%; display:inline-block;text-align: left;margin-bottom: 20px;">
				<div style="margin-top:0;padding:28px; padding-bottom: 12px;padding-top: 7px;"  hid="1">
					<p><?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?></p>
					<div class="line-infotec-noticias"></div>
					<h1 class="h1-noticias-rse" id="titulo-infotec-noticias"><?php echo $nota->titulo; ?> </h1>
					<p style="line-height: 19px;font-size: 13px;"><?php echo $nota->bajada; ?></p>
				</div>
			
				<div class="col-lg-12 col-md-12 col-sm-12" style="background:#66CCED;padding-top: 2%; padding-bottom: 2%;">
					<a class="leer-infotec-noticias" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-tecnica/<?php echo $nota->id; ?>">Leer  más</a>
				</div>
			</div>
		</div>		
	</a>
					<?php } 
					} ?>
			
					
			

	</div>

<?php }else{ ?>
<?php include("block.php"); ?>
<?php } ?>