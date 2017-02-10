<html>
<head>
<meta charset="UTF-8">
</head>
<div id="demo"></div>
<style>
#demo{font-size:2em;}
</style>
<script>
function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

      // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        document.getElementById("demo").innerHTML = "Su dispositivo no es compatible con la aplicación";
    }else

    if (/android/i.test(userAgent)) {
		window.location="https://play.google.com/store/apps/details?id=com.biogenesisbago.fronteras&hl=es_419";
		document.getElementById("demo").innerHTML = "Si no es redireccionado automaticamente, haga click <a href='https://play.google.com/store/apps/details?id=com.biogenesisbago.fronteras&hl=es_419'>aquí</a>.";
		//https://play.google.com/store/apps/details?id=com.biogenesisbago.fronteras&hl=es_419
    }else

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
		//window.location="https://itunes.apple.com/ar/app/biogenesis-bago-fronteras/id1120774987?mt=8";
		window.location.assign("https://itunes.apple.com/ar/app/biogenesis-bago-fronteras/id1120774987");
		document.getElementById("demo").innerHTML = "Si no es redireccionado automaticamente, haga click <a href='https://itunes.apple.com/ar/app/biogenesis-bago-fronteras/id1120774987?mt=8'>aquí</a>.";
        console.log("ihpone");
		//https://itunes.apple.com/ar/app/biogenesis-bago-fronteras/id1120774987?mt=8
    }else{
		document.getElementById("demo").innerHTML = "Su dispositivo no es compatible con la aplicación";
	}

    
}
getMobileOperatingSystem();
</script>
</html>