
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-desktop hidden-sm hidden-xs fadder" id="table" style="text-align:left;padding-left:0;">
	<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" style="float:right;">
	
	
	<div  id="widget-animacion">
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12 item i01"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/quienes-somos"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" >
	<div class="img-widget icono-quienes"></div></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/quienes-somos"><p class="p-widget"><?php echo Textos::model()->GetText(6); ?></p></div></a></div>
	

	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item i02"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/mision-vision"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-mision"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><p class="p-widget"><?php echo Textos::model()->GetText(8); ?></p></div></a></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i03"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/trayectoria-hitos"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-trayectoria"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><p class="p-widget">	<?php echo Textos::model()->GetText(12); ?></p></div></a></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i04"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/lucha-contra-aftosa"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-aftosa"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> <p class="p-widget"><?php echo Textos::model()->GetText(10); ?></p></div></a></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i05"> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nuestras-plantas"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-plantas"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><p class="p-widget"><?php echo Textos::model()->GetText(14); ?></p></div></a></div>
	
	<?php if($_SESSION["lng"]!="pt"){ ?>
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i06" ><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/rse"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-rse"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> <p class="p-widget"><?php echo Textos::model()->GetText(16); ?></p></div></a></div>
	<?php } ?>
	<?php if($_SESSION["lng"]=="es"){ ?>
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i07"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/proveedores"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-proveedores"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><p class="p-widget"><?php echo Textos::model()->GetText(430); ?></p></div></a></div>
	<?php } ?>
	<?php if($_SESSION["lng"]=="es"){ ?>
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12  item  i08"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/prensa"><div class="td-widget  col-lg-2 col-md-2 col-sm-2 col-xs-2" ><div class="img-widget icono-prensa"></div></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><p class="p-widget"><?php echo Textos::model()->GetText(20); ?></p></div></a></div>
	
	<?php } ?>
	</div>
	</div>

</div>


	<script type="text/javascript">

$(window).scroll(function() {

if ($(this).scrollTop() >100){  

	$('#widget-animacion div').each(function(i) {
	$(this).delay((i++) * 200).fadeTo(1000, 1); })


}});
</script>