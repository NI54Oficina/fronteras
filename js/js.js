
var isHome=false;
$(function() {
    var boxClone;
	var showingBox=false;
    $(".openlink").click(function() {
		if(!showingBox){
			showingBox=true;
        //Clone Dialogbox
        boxClone = $("#boxes").find(".box:eq(0)").clone(true, true);

        var boxOffset = $("#boxes").find(".box:last").position();
        //Set Dialog Position
        if (boxOffset.top == 0) {
            boxOffset.top = 5;
        }
        if (boxOffset.left == 0) {
            boxOffset.left = 60;
        }
        $(boxClone).css('top', (boxOffset.top + 20));
        $(boxClone).css('left', (boxOffset.left + 20));
		
        $(boxClone).appendTo($("#boxes"));
        $(boxClone).show(500);
		}
    });

    //Close Dialogbox
    $(".closelink").click(function() {
		showingBox=false;
        $(this).closest(".box").fadeOut();
		
    });

	
	
});

$(function(){
    $('.animate .btn').click(function(){
			$(this).parent("div").toggleClass("after");
    });
});

(function (window, $) {
  
  $(function() {
    
    
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);

				$("#noticias-trabajos").css('display','block'); 
				$("#seccion-mas").css('display','block'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');			
				$(function() {
				$("#noticias-trabajos").css('display','block'); 
				$("#seccion-mas").css('display','block'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');
				
				
				$("#opcion1").click(function() {
				console.log ('opcion1');
				$("#noticias-trabajos").fadeIn(); 
				$("#seccion-mas").css('display','block'); 				
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');
				$("#opcion2").css('color','#2988AF;');
				$("#opcion2").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion3").css('color','#2988AF;');
				$("#opcion3").css('background','rgba(255, 255, 255, 0.3)');
});

				$("#opcion2").click(function() {
				console.log ('opcion2');
				$("#noticias-trabajos").css('display','none'); 
				$("#seccion-mas").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#noticias-planes").fadeIn();  
				$("#opcion1").css('color','#2988AF;');
				$("#opcion1").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion3").css('color','#2988AF;');
				$("#opcion3").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion2").css('background','none');
				$("#opcion2").css('color','white');
});

				$("#opcion3").click(function() {
				console.log ('opcion3');
				$("#noticias-trabajos").css('display','none'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").fadeIn(); 
				$("#seccion-mas").css('display','none'); 
				$("#opcion3").css('background','none');
				$("#opcion3").css('color','white');
				$("#opcion1").css('color','#2988AF;');
				$("#opcion1").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion2").css('color','#2988AF;');
				$("#opcion2").css('background','rgba(255, 255, 255, 0.3)');
});

});

    $(document).ready(function(){
  
        $('#btnmenu').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
		
  
    });
	jQuery(window).load(function () {
		CheckDevice();
		Header();
		SameHeight();
		ResizeViewportElements();
		if(!isHome){
			
			$(".fadder").css('opacity',1);
			$(".fadder").css('animation-play-state',"running");
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
				$("body").css("padding-top",$("#navbar-main").height()+"px");
			}
		}
		if(isMobile){
			if(!$("#navbarSecciones").hasClass("in")){
				$("#navbarSecciones").height(0);
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
	
	$(window).scroll(function() {
		if(isHome){
			if ($(window).scrollTop() >= distanceHeader) {
					$("#navbar-main").fadeIn();
					//console.log("aparece");
			   
			} else {
				if(!$("#navbarSecciones").hasClass("in")){
					$("#navbar-main").fadeOut();
					//console.log("se oculta");
				}
			}
		}
    });

   $(document).ready(function(){

   					
		$("body").on("mousedown",".btn-mapa",function(){
			console.log("entra down");
			$(".info-mapa").hide();
			var info=$(this).attr("info");
			
			$("#"+ $(this).attr("info")).show();
		});
		
		$("body").on("touchend",".btn-mapa",function(){
			console.log("entra start");
			$(this).click();
		});
		
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
	});

				
jQuery(document).ready(function($) {
	
  /*
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar-main'),
    		distance = navbar.offset().top,
        $window = $(window);
		if(distance>0){
			navbar.css("opacity",1);
			navbar.hide();
		}else{
			//$("body").css("padding-top", navbar.height()+"px");
		}

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
			if(distance>0){
				navbar.fadeIn();
			}
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	//$("body").css("padding-top", navbar.height()+"px");
        } else {
			if(distance>0){
				navbar.fadeOut();
			}
            navbar.removeClass('navbar-fixed-top');
            //	$("body").css("padding-top", "0px");
        }
    });*/
});


(function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
})();
 
function hoverElement(canvas,widthParent){
	
	this.canvas = canvas;
    this.context = this.canvas.getContext('2d');
	this.x = this.canvas.width / 2;
	this.y = this.canvas.height / 2-3;
	this.radius = widthParent;
	this.endPercent = 110;
	this.curPerc = 0;
	this.counterClockwise = false;
	this.circ = Math.PI * 2;
	this.quart = Math.PI / 2;

	this.context.lineWidth = 1;
	this.context.strokeStyle = '#666';
	this.context.shadowOffsetX = 0;
	this.context.shadowOffsetY = 0;
	this.context.shadowBlur = 0;
	this.context.shadowColor = 'transparent';

	this.direction=-1;
	this.speed=5;

};

var hover= [];

 function animate(current,id) {
		 hover[id].context.clearRect(0, 0, hover[id].canvas.width, hover[id].canvas.height);
		 hover[id].context.beginPath();
		 hover[id].context.arc(hover[id].x, hover[id].y, hover[id].radius, -(hover[id].quart), ((hover[id].circ) *current) - hover[id].quart, false);
		 hover[id].context.stroke();
		 hover[id].curPerc+=hover[id].direction;
		 if(hover[id].curPerc>100){
			hover[id].curPerc=100;
		 }else if(hover[id].curPerc<0){
			hover[id].curPerc=0;
		 }
		 if (hover[id].curPerc < hover[id].endPercent) {
			 requestAnimationFrame(function () {
				 animate(hover[id].curPerc / 100,id)
			 });
		 }
 }


$(document).ready(function(){
	var auxId=0;
	$(".item-institucional canvas").each(function(){
		
		$(this).attr("canvasid",auxId);
		hover.push(new hoverElement(this,45));
		auxId++;
	});
	
	var id=0;
	while($( "[canvasid="+id+"]" ).length){
		animate(0,id);
		id++;
	}
	
	$(".item-institucional").on("mouseover",function(){
	
		hover[$(this).find('canvas').attr("canvasid")].direction=hover[$(this).find('canvas').attr("canvasid")].speed;
		
	});
	$(".item-institucional").on("mouseout",function(){
		
		hover[$(this).find('canvas').attr("canvasid")].direction=-1*hover[$(this).find('canvas').attr("canvasid")].speed;
		
	});
});
 





//Code stolen from css-tricks for smooth scrolling:
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){
	$("body").on("mousedown",".animateCollapse .btn",function(){
		
		var hasClass=false;
		if($(this).parent().hasClass("after")){
			$(this).parent().removeClass("after");
		}else{
			$(".after").each(function(){
			if(!$(this).parent().hasClass("noRemove")){
				$(this).parent().removeClass("after");
				}
			});
			$(this).parent().addClass("after");
		}
		/*if($(this).hasClass("after")){
			hasClass=true;
		}
		$(".after").each(function(){
			if(!$(this).hasClass("noRemove")){
			$(this).removeClass("after");
			}
		});
		
		if(hasClass){
			$(this).addClass("after");
		}
		*/
	});
});

$(window).scroll(function() {
	if(!isMobile){
	if (checkVisible($("#curvaSuperiorInsti")) || checkVisible($("#curvaInferiorInsti")) ){  

		$('#iconos-institucional div').each(function(i) {
		$(this).delay((i++) * 200).fadeTo(1000, 1); });
		
	}

	if (checkVisible($("#titulo-info")) ){  
		
		$('#info-tec #texto').each(function(i) {
		$(this).delay((i++) * 400).fadeTo(1000, 1); })


	}

	if (checkVisible($("#vade")) ){  


		$('#botones div').each(function(i) {
		$(this).delay((i++) * 150).fadeTo(1000, 1); })
		
		$('#nom-btn').css('animation','fadein 2s');
		$('#nom-btn').css('animation','myfirst 3s');
		$('#nom-btn').css('animation','myfirst 3s ease-out forwards');
		
	}

	if ($(this).scrollTop() >200){  
		$('.item.i01').css('animation','fade-in-item 1s .2s ease-out forwards');
		$('.item.i02').css('animation','fade-in-item 1s .6s ease-out forwards');
		$('.item.i03').css('animation','fade-in-item 1s 1s ease-out forwards');
		$('.item.i04').css('animation','fade-in-item 1s 1.4s ease-out forwards');
		$('.item.i05').css('animation','fade-in-item 1s 1.8s ease-out forwards');
		$('.item.i06').css('animation','fade-in-item 1s 2.2s ease-out forwards');
		$('.item.i07').css('animation','fade-in-item 1s 2.6s ease-out forwards');
		$('.item.i08').css('animation','fade-in-item 1s 3s ease-out forwards');

	}

if(isHome){
	//get scroll position
  var topWindow = $(window).scrollTop();
  //multipl by 1.5 so the arrow will become transparent half-way up the page
  var topWindow = topWindow * 1.5;
  
  //get height of window
  var windowHeight = $(window).height();
      
  //set position as percentage of how far the user has scrolled 
  var position = topWindow / windowHeight;
  //invert the percentage
  position = 1 - position;

  //define arrow opacity as based on how far up the page the user has scrolled
  //no scrolling = 1, half-way up the page = 0
  $('.scroll-down').css('opacity', position);
}
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

