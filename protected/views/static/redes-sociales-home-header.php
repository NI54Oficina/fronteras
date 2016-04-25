<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row redessociales-mobile" style="width: 100%; margin-top: 5%">
	<?php if($_SESSION["lng"]=="pt"){ ?>
	<a id="fb-home" style=" margin-right: 1%" href="https://www.facebook.com/biogenesisbagobr/"  target="_blank"> <img id="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-fcbk.png" alt="" /></a>
	<?php }else{ ?>
	<a id="fb-home" style=" margin-right: 1%" href="https://www.facebook.com/BiogenesisBago/"  target="_blank"> <img id="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-fcbk.png" alt="" /></a>
	<?php } ?>
	<!--<a href=""> <img id="" src="img/icono-g.png" alt="" /></a>!-->
	<?php if($_SESSION["lng"]=="pt"){ ?>
	<a id="ytb-home" style=" margin-right: 5%" href="https://www.youtube.com/user/BiogenesisBagoBR"  target="_blank"> <img id="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ytb.png" alt="" /></a>
	<?php }else{ ?>
	<a id="ytb-home" style=" margin-right: 5%" href="https://www.youtube.com/user/BiogenesisBago"  target="_blank"> <img id="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ytb.png" alt="" /></a>
	<?php } ?>

</div>