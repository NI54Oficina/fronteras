
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 header-infotec-revista" >
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="display:inline-block;z-index:3;padding-top:4%;">
					
					<a class="volver-infotec-revista" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica"><div></div><p>Volver</p></a>
				
				</div>
				
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 container-title-info-revista" >
					<div class="dot-infotec-noticias" style="margin-right: 1%;"></div>
			
					<h1 class="h1-infotec-noticias2">INFORMACIÓN TÉCNICA</h1>	

					<div class="dot-infotec-noticias" style="margin-left: 1%;"></div>
			
					<div class="border-infotec-noticias"></div>
			
				</div>
				
			</div>
	
	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0 5%;">
<?php
$nota = Notas::model()->findByAttributes(array("id"=>$data,"seccion"=>"tecnica"));
if($nota && $nota->seccion=="tecnica"){
?>

<div class="div-texto-aftosa col-lg-9 col-md-9 col-sm-12 col-xs-12 nota-tecnica-container" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div  class="tr col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
			<h5 style="color: #6D6D6D; padding-top: 0.5vh; padding-bottom: 0.5vh;margin: 0;"><?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?></h5>
			<div class="line2-infotec-noticias"></div>
			<h1 style="margin-left: 0;padding-bottom:6px;color: #66CCED;font-size:22px;line-height: 30px;"><?php echo $nota->titulo; ?></h1>
			<p style="font-size: 14px;"><?php echo $nota->texto; ?></p>






		</div>
		
	</div>
</div>
	<?php if(isset($nota->extra)&&$nota->extra!=""){ ?>
		<div class="div-texto-aftosa col-lg-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left; padding-top: 142px;">
			<p class="pinside-infotec-noticias" style="font-size: 13px; line-height: 20px;padding-top: 3%;padding-bottom: 3%;"><?php echo $nota->extra; ?></p>
		</div>
	<?php 
	}

}
?>
</div>
<style>
.inner-text img{
	max-width: 100%;
}
</style>
<script>
$(document).ready(function(){
	$(".imagen-nota-tecnica").each(function(){
		var startSrc=$(this).attr("src");
		startSrc="<?php echo Yii::app()->getBaseUrl(true); ?>"+startSrc;
		$(this).attr("src",startSrc);
	});	
});
</script>