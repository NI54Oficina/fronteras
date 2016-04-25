	<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
	
	<img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-footer.png" style="position:relative;top:1px;"/><div class="redes-footer col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row" style="margin-bottom:3%; height: 50px;margin-right: auto; margin-left: auto;"><?php if($_SESSION["lng"]!="pt"){ ?><a   target="_blank"href="https://www.facebook.com/BiogenesisBago/"> <img id="facebook" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-fcbk.png" alt="" /></a><?php }else{ ?><a target="_blank" href="https://www.facebook.com/biogenesisbagobr/"> <img id="facebook" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/icono-fcbk.png" alt="" /></a>	
	<?php } ?>
	<!--<a href=""> <img id="gmail" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-g.png" alt="" /></a>!-->

	<?php if($_SESSION["lng"]!="pt"){ ?><a  target="_blank" href="https://www.youtube.com/user/BiogenesisBago"> <img id="youtube" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ytb.png" alt="" /></a><?php }else{ ?><a  target="_blank" href="https://www.youtube.com/user/BiogenesisBagoBR"> <img id="youtube" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ytb.png" alt="" /></a><?php } ?>
 </div> 

 </div>
		<!--<div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12"><p style="display: inline-block;text-align: center;margin: auto;font-size:12px;"><?php echo Textos::model()->GetText(489); ?></p>    
	<a href="#" role="button"> <img id="btnmenu-general" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu-arriba.png"></a>
	</div> -->


	            <div class="copy col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:auto;width:100%;position:relative;background:#122551;">
					<p style="text-align:center; padding-top:1%;padding-bottom:1%;"><?php echo Textos::model()->GetText(489); ?></p>

					<a href="#" role="button" ><img id="btnmenu" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/flecha-menu-arriba.png" ></a>

               </div>
	</footer>

</body>
</html>