<section id="contenedor" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12"  >	
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gota-nutricion.svg" alt="Sanidad">	
	</div>
		
	
	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12">
		<div class="box-nutricion-inner squeare">
			<p>Tabla de Valores de Alimentos (NRC)</p>
		</div>
	</div>
	
	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12">	
		<div class="box-nutricion-inner squeare">
			<p>Requerimientos nutricionales por categoria</p>
		</div>
	</div>
	
	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12">	
		<div class="box-nutricion-inner squeare">
			<p>Recomendaciones de confeccion de sitio</p>
		</div>
	</div>
	
	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12">	
		<div class="box-nutricion-inner squeare">
			<p>Modelizador de tambo</p>
		</div>
	</div>

	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12">	
		<div class="box-relleno squeare" >
			<p>Relleno</p>
		</div>
	</div>
	
	
	<div class="box-producir-2 col-lg-2-5 col-md-2-5 col-sm-12 col-xs-12      ">	
		<div class="box-nutricion-inner squeare">
			<p>Modelizador de cria</p>
		</div>	
	</div>
		
<script>

$(document).ready(function(){
  
  var ancho = $('.squeare').width();
  $('.squeare').css('min-height', ancho);

});


$(.squeare).click(function() {

  $("p" ).each(function( index ) {

  	// var alto_div = $('.squeare').height();
  	// var alto_parrafo = $("p").height();

   $("p").css('padding-top', '5px');

  });
});




$( "p" ).each(function( index ) {
  console.log( index + ": " + $( this ).text() );
});
</script>

</section>


