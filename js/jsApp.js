console.log("js appppppp");

lastUrl="/home";

/*ExitFunction= function(){
	console.log("poyo exitttt");
}*/

BackApp= function(){
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
$("body").append("<style>#inner-header{padding-top:15px;}.boton-volver-header{padding-top:15px;}.navbar-toggle2{padding-top:23px;}.titulo-mobile{padding-top:15px;}</style>");