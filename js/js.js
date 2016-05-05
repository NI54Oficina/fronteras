var isHome=false;
jQuery(window).load(function () {
		CheckDevice();
		Header();
		SameHeight();
		CenterToParent()
		ResizeViewportElements();
		


		if(!isHome){
			
			$(".fadder").css('opacity',1);
			$("section").css('opacity',1);
			$(".fadder").css('animation-play-state',"running");
			$("section").css('animation-play-state',"running");
		}
		if(isMobile){
			  

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
	});


	
	$( window ).resize(function() {
		var lastOrientation= currentOrientation;
		CheckDevice();
		Header();
		if(isIOS){
			if(lastOrientation==currentOrientation){
				return;
			}
		}
		
		ResetHeight();
		SetDistanceHeader();
		ResizeViewportElements();
		setTimeout(function(){
		SameHeight()},1000);
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
	var currentOrientation="";
	
	
	function CheckDevice(){
		if(window.innerHeight > window.innerWidth){
			currentOrientation= "portrait";
			
		}else{
			currentOrientation= "landscape;"
		}
		//$("#logDiv").html("<div>"+currentOrientation+"</div>"+$("#logDiv").html());
		
		isMobile = /Android|mobi|iPad|Android|webOS|iPhone|iPod|pocket|psp|kindle|Kindle|avantgo|blazer|midori|Tablet|Palm|maemo|plucker|phone|symbian|IEMobile|mobile|ZuneWP7|Windows Phone|Opera Mini|BlackBerry/i.test(navigator.userAgent);
		if(!isMobile){
			isMobile=/iPhone|iPad|iPod/i.test(navigator.platform);
		}
		isIOS = /iPad|iPhone|iPod|Opera Mini/i.test(navigator.userAgent);
		if(!isIOS){
			isIOS=/iPhone|iPad|iPod/i.test(navigator.platform);
		}
		if(isMobile){
			$("header").addClass("headerMobile");
			$("header").removeClass("headerDesktop");
		}else{
			$("header").removeClass("headerMobile");
			$("header").addClass("headerDesktop");
		}
		/*if(isIOS){
			$("header").css("position","absolute");
		}else{
			$("header").css("position","fixed");
		}*/
		console.log(isMobile);
		console.log(isIOS);
	}
	
	function ResetHeight(){
		var id=1;
		while($( "[hid="+id+"]" ).length){
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
		while($( "[hid="+auxId+"]" ).length){
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
		console.log("entra");
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
			var rule = getStyleRule('.headerMobile .navbar-collapse.in');
			//var auxH= screen.height-$("#navbar-main").height();
			auxH= screen.height-auxH+10;
			rule.height= "auto";
			rule['min-height']= auxH+"px";
			console.log(rule.height);;
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
$("body").on("touchstart",".navbar-toggle",function(){
	$(this).click();
	
	if(isMobile){
		setTimeout(function(){
			if($("#navbarSecciones").hasClass("in")){
				scrollTop= $(document).scrollTop();
				$("header").css("position","absolute");
				//$("#navbarSecciones").css("height","auto");
				$("header").css("display","block");
				$(".fadder").hide();
				$(document).scrollTop(0);
				//$(".fadder").fadeOut(1000);
			}else{
				$("header").css("position","fixed");
				$(".fadder").css("opacity",0);
				$(".fadder").show();
				$(document).scrollTop(scrollTop);
				setTimeout(function(){ $(".fadder").css("opacity",1); },500);
				
				//$(".fadder").fadeIn(1000);
			}
			
		},500);
	}
	
});

function getStyleRule(name) {
	for(var i=0; i<document.styleSheets.length; i++) {
		var ix, sheet = document.styleSheets[i];
		for (ix=0; ix<sheet.cssRules.length; ix++) {
			if (sheet.cssRules[ix].selectorText === name)
				return sheet.cssRules[ix].style;
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


$(document).ready(function(){

	 AdaptSquare();

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
	$("body").on("touchend",".toggle-dropdown-header",function(){
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


	function AdaptSquare(){
	var ancho = $('.square').outerWidth();
  $('.square').css('height', ancho+"px");

  $(".box-producir-2 > div > div > p" ).each(function( index ) {

  	 var alto_div = ancho;
  	 var alto_parrafo = $(this).height();

  	 var alto=((alto_div/2)-(alto_parrafo/2));

  	 console.log("alto "+alto);
   	$(this).css("margin-top", alto+"px" );

  });
}

<<<<<<< HEAD
	// function AdaptHomeUbication(){
	// var pad = $('#home ').css('padding-top');
	// var alto = $('.home-upper-box').height();
	// var heightScreen = $('#home').height();
	// var alto2 =$('.home-bottom-box').height();
	// var margintop = ((heightScreen - (pad + alto))/2)- (alto2/2)

 //  $('.home-botom-box').css('margin-top', margintop+"px");

 //  };
=======
});

function CenterToParent(){
	$(".center-to-parent").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		console.log($(this).outerHeight());
		var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
		$(this).css("padding-top",paddingTop+"px");
	});
}

>>>>>>> origin/master

	function AdaptHomeUbication(){
		var pad = $('#home ').css('padding-top');
		var alto = $('.home-upper-box').height();
		var heightScreen = $('#home').height();
		var alto2 =$('.home-bottom-box').height();
		var margintop = ((heightScreen - (pad + alto))/2)- (alto2/2)

	  $('.home-botom-box').css('margin-top', margintop+"px");

	}

