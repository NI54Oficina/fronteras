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