var isHome=false;
var isApp=false;
var importantMobile=false;

var menuReady=true;

$(window).on("load",function () {
	LoaderGif();
	LoadFunction();
});

// LOADING GIF FUNCTION
function LoaderGif() {
	$(".loader").fadeOut("slow");
}

// ENDS LOADING GIF FUNCTION

var loadHome=false;
function LoadFunction(){
	if(!readyExecuted){
		ReadyFunction();
	}
	console.log("entra load");
		if(isHome&&isMobile){
			$("header").hide();
		}else{
			$("header").show();
		}
		CheckDevice();
		Header();
		ResetHeight();
		SameHeight();
		AdaptSquare();
		FillParent();
		ResizeViewportElements();
		CenterToParent();
		ScrollHome();
		slider();


		if(!isHome || !isMobile){
			
			if(isApp){
				ResetHeight();
				SameHeight();
				AdaptSquare();
			}
			$(".fadder").css('opacity',1);
			$("section").css('opacity',1);
			$(".fadder").css('animation-play-state',"running");
			$("section").css('animation-play-state',"running");
		}else{
			$("header").hide();
			loadHome=true;
			FadeHome();
		}
		if(isMobile){
			lengthRemates=    $('.table-indexer').length;
			initializeRemates();
			$('#iconos-institucional div').each(function(i) {
				$(this).addClass('notransition');


			});

			$('#info-tec #texto').each(function(i) {
				$(this).addClass('notransition');

			})

			$('#botones div').each(function(i) {
				$(this).addClass('notransition');

			})

			$('#nom-btn').addClass('notransition');

			$('.item.i01').addClass('notransition');
			$('.item.i02').addClass('notransition');
			$('.item.i03').addClass('notransition');
			$('.item.i04').addClass('notransition');
			$('.item.i05').addClass('notransition');
			$('.item.i06').addClass('notransition');
			$('.item.i07').addClass('notransition');
			$('.item.i08').addClass('notransition');

		}

		$("#vademecum-loading").hide();
		$("#vademecum-loading").css('right','initial');
		$.each($("#vademecum-loading .div-img-aft img"), function(index,value){

			var rightOffset = 100 + index *10;

			$("#vademecum-loading .div-img-aft").css('right', rightOffset + 'vw' );

		});
		$("#vademecum-loading .div-img-aft").css('position','relative');
		$("#vademecum-loading .div-img-aft").css('transition','all 0.8s ease');
		$("#vademecum-loading").show();

		setTimeout(function(){

			$("#vademecum-loading .div-img-aft").css('right', '0');

		},500);
		//$("#vademecum-loading").fadeIn(1000);
}




	$( window ).resize(function() {

		initializeRemates();
		var lastOrientation= currentOrientation;
		var prevHeight= viewportHeight;
		var prevWidth= viewportWidth;
		CheckDevice();
		Header();
		//if(isIOS){
			if(isIOS&&lastOrientation==currentOrientation){
				return;
			}
			if(prevHeight<viewportHeight){
				prevHeight= viewportHeight-prevHeight;
			}else{
				prevHeight= prevHeight-viewportHeight;
			}

			if(prevWidth<viewportWidth){
				prevWidth= viewportWidth-prevWidth;
			}else{
				prevWidth= prevWidth-viewportWidth;
			}


			if(prevHeight<30||prevWidth<30){
				return;
			}

			$(".fadder").css('transition',"0s");
			$("section").css('transition',"0s");
			$(".fadder").css('opacity',0);
			$("section").css('opacity',0);

		//}

		ResetHeight();
		SetDistanceHeader();
		ResizeViewportElements();

		setTimeout(function(){
			Header();
			fitBackground();
			$(".fadder").css('transition',"0.5s");
			$("section").css('transition',"0.5s");
			SameHeight();
			AdaptSquare();
			$(".fadder").css('opacity',1);
			$("section").css('opacity',1);
		},1000);

		fitBackground();
	});

	function ResizeViewportElements(){
		//if(isMobile){
			$("[vpelement=1]").each(function(){
				var vph=parseInt($(this).attr("vphelement"))/100;
				$(this).height(screen.height*vph);
			});

		//}
	}

	var isMobile=false;
	var isIOS=false;
	var isIpad=false;
	var currentOrientation="";
	var viewportHeight=0;
	var viewportWidth=0;

	function CheckDevice(){
		if(window.innerHeight > window.innerWidth){
			currentOrientation= "portrait";

		}else{
			currentOrientation= "landscape;"
		}

		viewportHeight=window.innerHeight;
		viewportWidth=window.innerWidth;

		//$("#logDiv").html("<div>"+currentOrientation+"</div>"+$("#logDiv").html());
		if(!importantMobile){
		isMobile = /Android|mobi|iPad|Android|webOS|iPhone|iPod|pocket|psp|kindle|Kindle|avantgo|blazer|midori|Tablet|Palm|maemo|plucker|phone|symbian|IEMobile|mobile|ZuneWP7|Windows Phone|Opera Mini|BlackBerry/i.test(navigator.userAgent);
		if(!isMobile){
			isMobile=/iPhone|iPad|iPod/i.test(navigator.platform);
		}
		isIOS = /iPad|iPhone|iPod|Opera Mini/i.test(navigator.userAgent);
		isIpad = /iPad/i.test(navigator.userAgent);
		if(!isIOS){
			isIOS=/iPhone|iPad|iPod/i.test(navigator.platform);
		}
		}else{
			isMobile=true;
		}
		if(isMobile){
			$("header").addClass("headermobile");
			$("header").removeClass("headerDesktop");
		}else{
			$("header").removeClass("headermobile");
			$("header").addClass("headerDesktop");
		}
		/*if(isIOS){
			$("header").css("position","absolute");
		}else{
			$("header").css("position","fixed");
		}*/
		//console.log(isMobile);
		//console.log(isIOS);
	}

	function ResetHeight(){
		var id=1;
		while($( "[hid="+id+"]" ).length||id<20){

			$("[hid="+id+"]").css("height","auto");
			id++;
		}
	}

	var headerHeight=0;
	var distanceHeader=0;
	SetDistanceHeader();

	function SameHeight(){
		//console.log("entra same height");

		var auxId=1;
		while($( "[hid="+auxId+"]" ).length||auxId<20){
			var hidHeight=0;
			//ResetHeight();
			$("[hid="+auxId+"]").each(function(){
				if($(this).innerHeight()>hidHeight){
					hidHeight= $(this).innerHeight();
				}

			});
			//console.log(hidHeight);
			$("[hid="+auxId+"]").css("height",hidHeight+"px");
			auxId++;
		}
	}


	function Header(){
		//console.log("entra");
		var auxH=$("#logo-bago-mobile").outerHeight()+10;
		if(!isHome){

			//$("body").css("padding-top",$("#navbar-main").height()+"px");
			if(isMobile){
				$("body").css("padding-top",auxH+"px");
			}else{
				$("body").css("padding-top",$("header").height()+"px");
			}
		}
		if(isMobile){
			if(!$("#inner-header").hasClass("in")){
				$("#inner-header").height(0);
			}
			var rule = getStyleRule('.headermobile .navbar-collapse.in');
			auxH= screen.height;
			console.log("entra screen height "+screen.height);
			if(rule){
				console.log("entra rule");
			//var auxH= screen.height-$("#navbar-main").height();
			//auxH= screen.height-auxH+10;
			auxH= screen.height;
			rule.height= "auto";
			rule['min-height']= auxH+"px";
			//console.log(rule.height);;
			}else{
				console.log("no entró rule");
				$("body").append("<style>.headermobile .navbar-collapse.in{height:auto;min-height:"+auxH+"px;}</style>");
			}
			if(isIpad){
				
				$(".cont-menu-mob").removeClass("hidden-xs");
				$(".cont-menu-mob").css("display","inline-block");
			}
		}

	}

	function SetDistanceHeader(){
		distanceHeader= $(window).height()*0.85;

		//console.log(distanceHeader);
	}


$("body").on("mousedown",".navbar-toggle",function(){

	//$("body").css("background","red");
});
var scrollTop;


function getStyleRule(name) {
	for(var i=0; i<document.styleSheets.length; i++) {
		var ix, sheet = document.styleSheets[i];
		if(sheet.cssRules){
		for (ix=0; ix<sheet.cssRules.length; ix++) {
			if (sheet.cssRules[ix].selectorText === name)
				return sheet.cssRules[ix].style;
		}
		}
	}
	return null;
}

function checkVisible( elm, evalType ) {

	if (typeof elm === "undefined"|| typeof $(elm) === "undefined"|| $(elm).length<=0) {

		return false;
	}



	evalType = evalType || "visible";

	var vpH = $(window).height(), // Viewport Height
		st = $(window).scrollTop(), // Scroll Top
		y = $(elm).offset().top,
		elementHeight = $(elm).height();

	if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
	if (evalType === "above") return ((y < (vpH + st)));
}




var indexRemates=0;
var lengthRemates = 0;
var readyExecuted=false;

$(document).on("ready",function(){
	ReadyFunction();

});


function ReadyFunction(){
	readyExecuted=true;
	CheckDevice();
	//console.log("entra ready jsjs");
	if(isMobile){
		splash();
	}
		 AdaptSquare();
		 fillBackground();
		 changeContent();
		 slider();
		 backButton();
		 limited();
		 fitBackground();





	$("body").on("mousedown",".toggle-dropdown-header",function(){
		if(isMobile){
			/*var target= $(this).attr("target");
			console.log($(this).attr("target"));
			console.log($(target));
			if(!$(target).hasClass("opened")){
				$(target).addClass("opened");
			}else{
				$(target).removeClass("opened");
			}*/
			//$(target).css("max-height","10000000px");
		}
	});
	$("body").on("tap",".toggle-dropdown-header",function(){
		//$(this).click();
		var target= $(this).attr("target");
			console.log($(this).attr("target"));
			console.log($(target));
			if(!$(target).hasClass("opened")){
				$(target).addClass("opened");
			}else{
				$(target).removeClass("opened");
			}
	});



	// function AdaptHomeUbication(){
	// var pad = $('#home ').css('padding-top');
	// var alto = $('.home-upper-box').height();
	// var heightScreen = $('#home').height();
	// var alto2 =$('.home-bottom-box').height();
	// var margintop = ((heightScreen - (pad + alto))/2)- (alto2/2)

 //  $('.home-botom-box').css('margin-top', margintop+"px");

 //  };

}

function CenterToParent(){
	$(".center-to-parent").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		//console.log($(this).outerHeight());
		if($(this).outerHeight()>0){
			var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
			$(this).css("padding-top",paddingTop+"px");
		}
	});

	$(".center-to-parent-d").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		//console.log($(this).outerHeight());
		if($(this).outerHeight()>0){
			var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
			paddingTop= paddingTop/2;
			$(this).css("padding-top",paddingTop+"px");
		}
	});

	$(".center-to-parent-m").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		console.log($(this).outerHeight());
		var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
		$(this).css("display","inline-block");
		$(this).css("position","relative");

		$(this).css("top",'-'+paddingTop+"px");
	});
	$(".center-to-parent-t").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		console.log($(this).outerHeight());
		var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
		$(this).css("display","inline-block");
		$(this).css("position","relative");

		$(this).css("top",paddingTop+"px");
	});
}



	function AdaptHomeUbication(){
		var pad = $('#home ').css('padding-top');
		var alto = $('.home-upper-box').height();
		var heightScreen = $('#home').height();
		var alto2 =$('.home-bottom-box').height();
		var margintop = ((heightScreen - (pad + alto))/2)- (alto2/2)

	  $('.home-botom-box').css('margin-top', margintop+"px");

	}


function AdaptSquare(){
	//edit by fran, preguntar porque
	$(".square").each(function(){
		if($(this).attr("onlymobile")=="true"&&!isMobile){
			//console.log("entra poyo");
			 $(this).css('height', "auto");
		}else{
		var ancho = $(this).outerWidth();
		//console.log("ancho "+ancho);
	  $(this).css('height', ancho+"px");

/*
	   $(".box-producir-2 > div > div > p" ).each(function( index ) {

		 var alto_div = ancho;
		 var alto_parrafo = $(this).height();

		 var alto=((alto_div/2)-(alto_parrafo/2));

		 console.log("alto "+alto);
		$(this).css("margin-top", alto+"px" );

	  });
	  */


	}
	});


}

var delaySplash=3000;

function splash() {

     $(".splash").delay(delaySplash).queue(function(){

     	finishDelayHome=true;
 		FadeHome();
 		 });
     //console.log("Entro delay");

}

var finishDelayHome=false;
function FadeHome(){
	if(loadHome&&finishDelayHome){
		$(".fadder").css('opacity',1);
		$("section").css('opacity',1);
		$(".fadder").css('animation-play-state',"running");
		$("section").css('animation-play-state',"running");
		 $(".loader-home").css('display',"none");
		console.log("TEST1");
	}else if(finishDelayHome && !loadHome){
		 $(".loader-home").css('display',"block");
		console.log("TEST2");
	}
}
function FillParent(){
	$(".fill-element").each(function(){
		var heightOccupied=0;
		$(this).children(".fixedChildren").each(function(){
			heightOccupied+= $(this).outerHeight(true);
		});

		var parentHeight= parseInt($(this).innerHeight());
		var fillerHeight= parentHeight-heightOccupied-10;
		console.log("filler"+fillerHeight);
		$(this).children(".fillerChildren").css("height",fillerHeight+"px");
	});
}

// FUNCION QUE HACE DESAPARECER EL BOTON SIGUIENTE O ATRAS DE ACUERDO SI QUEDAN ITEM

function checkNavigationButton(){

	if( indexRemates <= 0){
    		$(".boton-prueba-atras").css("display", "none");
    		$(".boton-prueba").css("display", "block");
    	}else if( indexRemates >= lengthRemates -1){
    		$(".boton-prueba").css("display", "none");
    		$(".boton-prueba-atras").css("display", "block");

    	}else{
    		$(".boton-prueba-atras").css("display", "block");
			$(".boton-prueba").css("display", "block");
		}  	;



}

// FIN FUNCION QUE HACE DESAPARECER EL BOTON SIGUIENTE O ATRAS DE ACUERDO SI QUEDAN ITEM

// MANTIENE UNA SOLA FILA DE DATOS EN MOBILE


function initializeRemates(){

	checkNavigationButton();

    $(".containerColumnas").find('.info-remates-mobile').css("display","none");
		$(".mes-remates").css("display","none");
		$(".date-remates").css("display", "none");


 $(".containerColumnas").each(function(){

 	$(this).find('.info-remates-mobile').eq(indexRemates).css("display","block");
	$(".mes-remates").css("display","block");
	$(".date-remates").css("display", "block");
	
 	checkNavigationButton();

 	//console.log("esto funciona");


 });
	setTimeout(function(){CenterToParent()},100);
}

// FIN MANTIENE UNA SOLA FILA DE DATOS EN MOBILE

// FUNCION ITERATIVA QUE MUESTRA LA COLA DE ITEMS

var tableAnimating = false;

function turnOnButtonRemates(){



    $(".boton-prueba").click(function(){


    	if(!tableAnimating){
    		tableAnimating=true;
			$(".fade-in-mobile").fadeOut(400);
			//$(".mes-remates").fadeOut(400);
			//$(".date-remates").fadeOut(400);

			setTimeout(function(){

				$(".containerColumnas").find('.info-remates-mobile').css("display","none");
				//$(".mes-remates").css("display","none");
				$(".date-remates").css("display", "none");


				++indexRemates;
				 $(".containerColumnas").each(function(){
					//console.log("entra indicie"+indexRemates);
					$(this).find('.info-remates-mobile').eq(indexRemates).css("display","block");
					CenterToParent();
					//$(".mes-remates").css("display","block");
					//$(".date-remates").css("display", "block");
					$(".fade-in-mobile").fadeIn(400);
					//$(".mes-remates").fadeIn(400);
					//$(".date-remates").fadeIn(400);
					checkNavigationButton();

					//console.log("esto funciona");
				 });

				setTimeout(function(){

					tableAnimating=false;
				},400);

			}, 400);

			// console.log("lengthRemates "+lengthRemates);
			 checkNavigationButton();



    	}
	});


	$(".boton-prueba-atras").click(function(){

		if(!tableAnimating){
			tableAnimating=true;

	    	$(".fade-in-mobile").fadeOut(400);
				//$(".mes-remates").fadeOut(400);
				//$(".date-remates").fadeOut(400);
				// $(".mes-remates")
				// $("date-remates")

	    	setTimeout(function(){
	    		$(".containerColumnas").find('.info-remates-mobile').css("display","none");
					//$(".mes-remates").css("display","none");
					//$(".date-remates").css("display", "none");
		    	--indexRemates;
		    	 $(".containerColumnas").each(function(){
		    	 	//console.log("entra indicie"+indexRemates);
				 	$(this).find('.info-remates-mobile').eq(indexRemates).css("display","block");
					CenterToParent();
					//$(".mes-remates").css("display","block");
					//$(".date-remates").css("display", "block");
				 	$(".fade-in-mobile").fadeIn(400);
					//$(".mes-remates").fadeIn(400);
					//$(".date-remates").fadeIn(400);

				 	//console.log("esto funciona");
				 	checkNavigationButton();

				 });

			 	setTimeout(function(){
				 	tableAnimating=false;
		 		},400);

	    	},400);
			checkNavigationButton();


    	}


	});
}


// FIN FUNCION ITERATIVA QUE MUESTRA LA COLA DE ITEMS


// FUNCION QUE  AJUSTA EL FONDO CON EL ESPACIO SOBRANTE DEL PADRE


function fillBackground(){

	var selfheigth= $(".fill-heigth").outerHeight();
	var pheigth= $(".fill-heigth").parent().outerHeight();
	var bgheigth= pheigth - selfheigth;

	//console.log("check-point-1; " + pheigth);
	//console.log("check-point-2; " + selfheigth);
	//console.log("check-point-2; " + bgheigth);

	$(".fill-heigth").each(function(){

	$(".fill-heigth").parent().css("background-size", "100%" + bgheigth + "px");

	//console.log("check-point-3" );

	});

}

// FIN FUNCION QUE AJUSTA EL FONDO CON EL ESPACIO SOBRANTE DEL PADRE



//FUNCION QUE AJUSTA EL SELECT DEPENDIENDO DE LO QUE SE ELIJA
function changeContent(){

	var id=5;

    $('#enfermedades-selector').change(function(){
			$('.relleno-enfermedad').hide();

        $('.enfermedades-infecciosas').hide();
        $('#' + $(this).val()).show();

    });
	//console.log("salida enfermedades");
    $('#parext-selector').change(function(){
			$('.relleno-enfermedad').hide();
        $('.parasitos-externos').hide();
				// var test = $(this)
        $('#' + $(this).val()).show();
				// var selector = test.index();;

				// $(".changed-name li").hide(); //aca se eliminana los datos que aparecen enel cuadrado de la info

				// var selectId = selector.
				// console.log(selector);
				//
				// $(".changed-name li").eq(selector).css("display", "block");

				 //aca se eliminana los datos que aparecen enel cuadrado de la info
    });
	//console.log("salida enfermedades");

}

// FIN FUNCION QUE AJUSTA EL SELECT DEPENDIENDO DE LO QUE SE ELIJA

// VERSION GENERALIZADA DE AJUSTE DEL BACKGROUND

function fitBackgroundtest(){

	var img = new Image ;
	img.src = $('#home').css('background-image').replace("url(", "").replace(")", "").replace("\"", "").replace("\"", "");
	$(img).load(function() {
    var bgWidth = img.width;
    var bgHeight = img.height;

    console.log("wbg:"+bgWidth+"  hbg:"+bgHeight) ;

    var wdHeight = $(window).height();
	var wdWidth = $(window).width();

	console.log("wWd:"+wdWidth+"  hWd:"+wdHeight ) ;

if( (wdWidth-wdHeight) > 0 ){
     // if que determina si la pantalla es mas ancha que alta
    console.log("pantalla mas ancha que alta");

    if( wdHeight > bgHeight){
         var aux = ((100/wdHeight) * bgHeight)+100;

         $("body").css("background-size", aux+"% auto");

         console.log(aux);

     }else{
         var aux = ((100/bgHeight) * wdHeight)+100;

         $("body").css("background-size", aux+"% auto");

     };

   }else{
       console.log("pantalla mas alta que ancha");

        if( wdWidth > bgWidth){
         var aux = ((100/wdWidth) * bgWidth)+100;
         $('body').css("background-size", "auto"+ aux + "%" );
         console.log("se ajusto alto1");

         }else{
         var aux = ((100/bgWidth) * wdWidth)+100;
         $('body').css("background-size", "auto"+ aux +"%" );
         console.log("se ajusto alto2");
     };
   }

   }) ;


 };


// TERMINA VERSION GENERALIZADA DE AJUSTE DEL BACKGROUND

// FUNCION QUE AJUSTA EL ANCHO DEL BACKGROUND SIN DEFORMAR
function fitBackground(){
	console.log("entra fit");
	var img = new Image ;
	try{
		img.src = $('.bg-fit').css('background-image').replace("url(", "").replace(")", "").replace("\"", "").replace("\"", "");
	}catch(err){

	}
	$(img).load(function() {
    var bgWidth = img.width;
    var bgHeight = img.height;

    console.log("wbg:"+bgWidth+"  hbg:"+bgHeight) ;

    var wdHeight = $(window).height();
	var wdWidth = $(window).width();
	var docHeight = $(document).height();
	var docWidth = $(document).width();

	console.log("WdWin:"+wdWidth+"  heiWin:"+wdHeight ) ;
	console.log("WdDoc:"+docWidth+"  heiDoc:"+docHeight ) ;

if( (wdWidth-wdHeight) > 0 ){

     // if que determina si la pantalla es mas ancha que alta
    console.log("pantalla mas ancha que alta");

  if( (wdWidth- wdHeight) > (bgWidth-bgHeight)){


					if(docHeight > wdHeight){

						if(bgHeight < wdHeight){
							$(".bg-fit").css("background-size","auto 100%  ");
							console.log("pantalla0");
						}else{
							$(".bg-fit").css("background-size","100% auto ");
							console.log("pantalla 0.5");
						}
					}else {
								$(".bg-fit").css("background-size","100% auto");
								console.log("DOCUMENTO IGUAL");
					};


    }else{

			// LA PARTE APAISADA TIENE QUE ENTRAR ACA

			 		if(docHeight > wdHeight) {

						if(bgHeight < wdHeight){
							$(".bg-fit").css("background-size","auto 100%  ");
							console.log("pantalla1");
						}else{
							$(".bg-fit").css("background-size","100% auto ");
							console.log("pantalla 2");
						}
										// $("#home").css("background-size","auto 100% ");
										// console.log("pantalla1");


					}else{

						if(docHeight > bgHeight){
								$(".bg-fit").css("background-size","auto  100% ");
								console.log("pantalla3");
						}else{
								if(bgHeight < wdHeight){
									$(".bg-fit").css("background-size","auto 100%  ");
									console.log("pantalla4");
								}else{
									$(".bg-fit").css("background-size","130% auto ");
									console.log("pantalla 5");

								}

						};

				 };
	};

//  ELSE QUE CALCULA EL ALTO


   }else{
       console.log("pantalla mas alta que ancha");

       if( (wdHeight- wdWidth) > (bgHeight-bgWidth) ){


    	$(".bg-fit").css("background-size"," auto 100%");

     }else{


         $(".bg-fit").css("background-size","100%  auto");

     };

   }

   }) ;


 };

// TERMINA FUNCION

// FUNCION QUE MUESTRA ITEM EN UNA COLA ITERATIVA


function slider(){
	//console.log("entra slider");

var currentIndex = 0,
  items = $('.general-container-producir');
  itemAmt = items.length;
	items.css("display","none");
	items.eq(currentIndex).css("display", "block");
	// multiplicateDotNav(itemAmt);


	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "rgba(0, 106, 160, 0.6)");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "rgba(0,0,0,.8)");
	});

function cycleItems() {

  var item = $('.general-container-producir').eq(currentIndex);
  items.hide();
  item.fadeIn("slow");
}


$('.next-ganado').click(function() {

	currentIndex += 1;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "rgba(0, 106, 160, 0.6)");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "rgba(0,0,0,.8)");
	});

  if (currentIndex > itemAmt - 1) {

    currentIndex = 0;
		$(".nav-dots").each(function(){
			$(this).find(".nav-dot").css("background-color", "rgba(0, 106, 160, 0.6)");
			$(this).find(".nav-dot").eq(currentIndex).css("background-color", "rgba(0,0,0,.8)");
		});
  }
  cycleItems();
});

$('.preview-ganado').click(function() {

  currentIndex -= 1;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "rgba(0, 106, 160, 0.6)");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "rgba(0,0,0,.8)");
	});

  if (currentIndex < 0) {

    currentIndex = itemAmt - 1;
  }
  cycleItems();
});

$('.nav-dot').click(function() {

	//console.log("entro dot Slider");
	var dotIndex = $(this).index();
	$(".general-container-producir").hide();
	$('.general-container-producir').eq(dotIndex).fadeIn("slow");

	currentIndex = dotIndex;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "rgba(0, 106, 160, 0.6)");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "rgba(0,0,0,.8)");
	});
});



// console.log("sale slider");
}

// FIN FUNCION QUE MUESTRA ITEM EN UNA COLA ITERATIVA + dot nav

// FUNCION QUE VUELVE A LA PAGINA ANTERIOR (HISTORY BACK)
function backButton(){
	if (typeof BackApp == 'function'){

	}else{
		$('.boton-volver-header').click(function(){
			history.back();
		});
	}
	//console.log("volver");
}

// FIN FUNCION QUE VUELVE A LA PAGINA ANTERIOR (HISTORY BACK)

function ScrollHome(){
	if(isHome){
		if ($("body").height() > $(window).height()) {
			$("section").css("padding-bottom","0");
		}
	}
}



// FUNCION EN TESTEO DE LIMITAR PALABRAS

function limited(){
	var id;
	var text= []
	var text= $(".ganado").text().split(" ");
	var n=2;
	var i=0;

	//console.log("test limited ");
	//console.log(text[2]);


  // PUEDE NO IR PORQUE VA COMO PARAMETROS
  var heightFont =  $(".ganado").css("font-size");
  var heightMargins = $(".ganado").css("margin-top") + $(".ganado").css("margin-top");
  var totalHeight = parseInt( heightFont + heightMargins);

	//console.log(totalHeight);

	var altoDiv = $(".ganado").height();

	//console.log(altoDiv);
 if(altoDiv > n*totalHeight){
  // $(".ganado").text([1]).css("display","none");
	var nuevoAlto= $(".ganado").height();

	//  while( nuevoAlto <= n*totalHeight){
	// 	 		console.log(text[i++]);
	// 		 $(".ganado").text(text[i++]);
	// 		 var nuevoAlto= $(".ganado").height();
	 //
	 //
	//  };
 }


};


// FIN FUNCION DE TESTEO


////funcion que multiplica los dot nav del slider

//NO ESTA EN USO

function multiplicateDotNav(quantity){
		$(".nav-dot").clone().insertAfter(".nav-dot");

for(var i=0; i < 9; i++ ){
			 $(".nav-dot").clone().insertAfter(".nav-dot");
	 }
}


//// fin funcion que multiplica los dot nav del slider


function ContentFadeIn(){
	//fader y section mostrar (show), poner height y square y luego opacity 1

}

function ContentFadeOut(){

}

function ContentOpacitySet(toSet){

}
