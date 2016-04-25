<?php if($_SESSION["lng"]!="es"){ ?>

<?php include("block.php"); ?>


<?php }else{ ?>
<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	


			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 fadder">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(18); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/info-proveedores-oscura-01.png" style="width:100vw;" />	
			</div>
	
<div id="proveedores-transicion" class="fadder">
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

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">		

			<!--PC-->
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="">
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Constancia-de-Inscripcion.pdf" download="Constancia de Inscripción AFIP (CUIT)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png" class="img-proveedores-download" /><p class="p-proveedores-download" style="color: #337ab7; font-size: 13px;"><?php echo Textos::model()->GetText(380); ?></p></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;"  href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Impuesto-sobre-los-Ingresos.pdf" download="Impuesto sobre los Ingresos Brutos"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png" class="img-proveedores-download" /><p class="p-proveedores-download"  style="color: #337ab7; font-size: 13px;"><?php echo Textos::model()->GetText(381); ?></p></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Constancia-de-Inscripcion-IIBB.pdf" download="Constancia de Inscripción IIBB"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  class="img-proveedores-download" /><p class="p-proveedores-download"  style="color: #337ab7; font-size: 13px;"><?php echo Textos::model()->GetText(382); ?></p></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Convenio-Multilateral.pdf" download="Convenio Multilateral"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  class="img-proveedores-download" /><p class="p-proveedores-download"  style="color: #337ab7; font-size: 13px;"><?php echo Textos::model()->GetText(383); ?></p></a></li>

					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Formulario-alta-proveedores.xlsx" download="Formulario Alta proveedores"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  class="img-proveedores-download" /><p class="p-proveedores-download"  style="color: #337ab7; font-size: 13px;"><?php echo Textos::model()->GetText(511); ?></p></a></li>
				</ul>		



				<p id="texto-proveedores">
					Estimado proveedor: </br>

					A través del sitio <a href="https://www.cobranzas.com/">www.cobranzas.com.ar</a> usted podrá mantenerse informado sobre sus pago y el estado de sus facturas, adicionalmente por esta vía puede hacernos llegar fácilmente sus comprobantes electrónicos. </br>

					Antes del primer ingreso deberá solicitar su password vía mail a <b>consultaproveedores@biogenesisbago.com</b>, posteriormente ingresar al link <a href="https://www.cobranzas.com/login.asp?idioma=es&CodigoEmpresa=BIB&error="> https://www.cobranzas.com/login.asp?idioma=es&CodigoEmpresa=BIB&error= </a> y seguir los pasos para habilitar su usuario.

				</p>
	</div>
	</div>
	
</div>

</div>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#proveedores-transicion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "50%"
		}); 
		
		});
	</script>
<?php include('widget.php'); ?>

<?php } ?>

