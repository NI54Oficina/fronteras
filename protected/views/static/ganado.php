<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section" id="ganado">


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="box-manejo border-shadow">
		<div class="box-manejo-inner ">
			<p class="center-to-parent color-manejo planes-h1">Tabla estado Corporal</p>
		</div>
	</div>
</div>

	<button class="boton-ganado-prev" ><</button>
	<button class="boton-ganado-next">></button>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cubicacion-container" style="display:none;">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">
		
		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/img-test.jpg">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>ASDASKDNASKD</h1>
		<p>HOLA hola hola hola hola hola hola hola hola hola HOLA hola hola hola hola hola hola hola hola hola HOLA hola hola hola hola hola hola hola hola hola </p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/img-test.jpg">

		
	</div>

</div>


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cubicacion-container" style="display:none;">



	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-1">
		
		<img class="img-ganado" src="<?php echo Yii::app()->request->baseUrl; ?>/img/img-test.jpg">
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ganado-col-2">
		<h1>ASDASKDNASKD</h1>
		<p>HOLA hola hola hola hola hola hola hola hola hola HOLA hola hola hola hola hola hola hola hola hola HOLA hola hola hola hola hola hola hola hola hola </p>

		<img class="img-ganado-info" src="<?php echo Yii::app()->request->baseUrl; ?>/img/img-test.jpg">

		
	</div>

</div>


<script >

$(document).on("ready", function(){
	slide();
	console.log("test-slider");
});


function slide(){

var currentIndex = 0,
  items = $('.cubicacion-container'),
  itemAmt = items.length;

	function cycleItems() {
  var item = $('.cubicacion-container').eq(currentIndex);
  items.hide();
  item.fadeIn("slow");
}

var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 3000);

$('#boton-ganado-next').click(function() {
  clearInterval(autoSlide);
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});

$('#boton-ganado-prev').click(function() {
  clearInterval(autoSlide);
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});

 

}


</script>	

</section>