console.log("js appppppp");

lastUrl="/home";

/*ExitFunction= function(){
	console.log("poyo exitttt");
}*/

BackApp= function(){
	if($("#back-header2").is(":visible")){
	var auxGo=urlHistory.pop();
	console.log("entra hash");
	
		
		if(auxGo==null){
			if(window.location.hash == "#home"){
				console.log("exit app");
				ExitFunction();
				//return;
			}
			auxInt=0;
			window.location.hash = "home";
			console.log("entra back exit");
		}else{
			GoUrlLink(auxGo,false);
		}
	}else{
		console.log("exti desde menu");
		ExitFunction();
	}
	
}

ExitFunction= function(){
	try{
		navigator.notification.confirm(
			'¿Seguro que desea salir?', // message
			 onConfirm,            // callback to invoke with index of button pressed
			'Confirmar salir',           // title
			['Si','No']     // buttonLabels
		);
		function onConfirm(buttonIndex) {
			if (buttonIndex == 1) {
				navigator.app.exitApp();
			}
		}
	}catch(err){
		
	}
}
$("body").on("click","a",function(e){
	e.preventDefault();
	
});


GoUrlLink= function(toGo,popArray){
	isHome=false;
	if (toGo == null) {
		return;
	}
	if(toGo!="home"){
		$(".glyphicon").show();
		$(".boton-volver-header").show();
	}
	
	 if(toGo.indexOf(baseURL)>=0){
		if(popArray&&lastUrl!=""&&lastUrl!=toGo){
			urlHistory.push(lastUrl);
		}
		lastUrl=toGo;
		toGo= toGo.replace(baseURL,"");
		
		$("#containerApp").html("");
		loadPage(toGo);
		//$("header .glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-th-large");
		//$("header").css("position","fixed");
		
		if(popArray){
		hasChanged=true;
		window.location.hash = "aux"+auxInt++;
		}
	 }else if(toGo.indexOf("http")>=0){
		//window.open(toGo);
		cordova.InAppBrowser.open(toGo, '_blank', 'location=yes');
	 }else{
		if(popArray&&lastUrl!=""&&lastUrl!=toGo){
			urlHistory.push(lastUrl);
		}
		lastUrl=toGo;
		//$("header .glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-th-large");
		//$("header").css("position","fixed");
		
		$("#containerApp").html("");
		loadPage(toGo);
		if(popArray){
			hasChanged=true;
			window.location.hash = "aux"+auxInt++;
		}		
	 }
}



LoadResource= function(){
	console.log("entra load Resource");
	if (typeof LoadFunction == 'function')
	{
		auxLoadResource=0;
		$(".loading-gif").hide();
		$("#containerApp").css("opacity","1");
		console.log("entra opacity app???");
		isApp=true;
		LoadFunction();
		if(isIOS){
			$("body").append("<style>#inner-header{padding-top:0.3em;}.navbar-toggle2{padding-top:23px;}.titulo-mobile{padding-top:15px;}</style>");
			if(isIpad){
				$("body").append("<style>.section{padding-top:"+$("header").height()+"px !important;}</style>");
			}else{
				$("body").append("<style>.section{padding-top:50px !important;}.boton-volver-header{padding-top:15px;}</style>");
			}
		}
		readyExecuted=false;
	}else{
		setTimeout(function(){
		auxLoadResource++;
		if(auxLoadResource>30){
			auxLoadResource=0;
			if($("#containerErrorLoad").is(":visible")){
				return;
			}
			$("#containerExitApp").show();
		}else{
			LoadResource();
		}
		
		},1000);
	}
	
}

