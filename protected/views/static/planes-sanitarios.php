<section id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
	<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-producir titulo-mobile"> <p>Sanidad > Planes Sanitarios</p> </div>


<div class="box-producir-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
	<div class="box-sanidad border-shadow">
		<div class="box-sanidad-inner ">
			<p class="center-to-parent color-sanidad planes-h1">Planes Sanitarios</p>
		</div>
	</div>
</div>




	<!-- DESCARGAS -->
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" align="center">

		<!-- Cría -->


		<div class="col-lg-2-5 col-sm-4 col-md-2-5 col-xs-6 col-xl-5 col-lan-xs-4 max-box-planes download-link" href="planes-sanitarios;cria.pdf" ios="cria.pdf" download="cria">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes box-sanidad">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  square planes-box">

					<p>Cría</p>
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 planes-descarga" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga.svg" />
					<div class="border-planes"></div>
				</div>
			</div>
		</div>




		<!-- Tambo -->
		
			<div class="col-lg-2-5 col-sm-4 col-md-2-5 col-xs-6 col-xl-5 col-lan-xs-4  max-box-planes download-link"  href="planes-sanitarios;tambo.pdf" ios="tambo.pdf" download="cria">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes box-sanidad">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes-box">

					<p>Tambo</p>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 planes-descarga" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga.svg" />
					<div class="border-planes"></div>
				</div>
			</div>
		</div>
		



		<!-- Feed-lot -->
		
			<div class="col-lg-2-5 col-sm-4 col-md-2-5 col-xs-6 col-xl-5 col-lan-xs-4  max-box-planes download-link"  href="planes-sanitarios;feedlot.pdf" ios="feedlot.pdf" download="cria"  >
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes box-sanidad">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  square planes-box">

					<p>Feed-lot</p>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 planes-descarga" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga.svg" />
					<div class="border-planes"></div>
				</div>
			</div>
		</div>
		



		<!-- Ovino central y norte -->
		
			<div class="col-lg-2-5 col-sm-4 col-md-2-5 col-xs-6 col-xl-5 col-lan-xs-4  max-box-planes download-link"  href="planes-sanitarios;ovinoscentralynorte.pdf" ios="ovinoscentralynorte.pdf" download="cria" >
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes box-sanidad">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  square planes-box">

					<p>Ovino central y norte</p>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 planes-descarga" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga.svg" />
					<div class="border-planes"></div>
				</div>
			</div>
		</div>
		



		<!-- Recría -->
		
		<div class="col-lg-2-5 col-sm-4 col-md-2-5 col-xs-6 col-xl-5 col-lan-xs-4  max-box-planes download-link"  href="planes-sanitarios;recria.pdf" ios="recria.pdf" download="cria" >
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 square planes box-sanidad">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  square planes-box">

					<p>Recría</p>

				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 planes-descarga" >
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/descarga.svg" />
					<div class="border-planes"></div>
				</div>
			</div>
		</div>
		


	</div>

</section>
<script type="text/javascript">

var store;

var $status;

var assetURL = "http://fronteras.testni54.com/uploads/planes-sanitarios/";

var fileName = "";


function populateIframe(id,path) 
{
    var ifrm = document.getElementById(id);
    ifrm.src = "http://fronteras.testni54.com/ar/download/link/"+path;
}
$("body").on("click",".download-link",function(e){
	if(isIOS&&isApp){
		window.open("http://fronteras.testni54.com/uploads/planes-sanitarios/"+$(this).attr("ios"), '_blank', 'location=no,closebuttoncaption=Close,enableViewportScale=yes');
		//fileName=$(this).attr("download")+".pdf";
		//checkDownload();
	}else{
		if(isIOS){
			window.open("http://fronteras.testni54.com/uploads/planes-sanitarios/"+$(this).attr("ios"));
		}else{
			populateIframe("frame1",$(this).attr("href"));
		}
	}
});


function checkDownload() {
	if(isIOS){
    store = cordova.file.dataDirectory ;
	}else{
		store = cordova.file.externalDataDirectory ;
	}
	
    window.resolveLocalFileSystemURL(store + fileName, appStart, downloadAsset);
}

function downloadAsset() {
    var fileTransfer = new FileTransfer();
    console.log("About to start transfer");
    fileTransfer.download(assetURL, store + fileName, 
        function(entry) {
            console.log("Success!");
            appStart();
        }, 
        function(err) {
            console.log("Error");
            console.dir(err);
        });
}

function appStart() {  
	if(isIOS){
	 window.resolveLocalFileSystemURL(cordova.file.dataDirectory  + fileName, gotFile, fail);
	}else{
		window.resolveLocalFileSystemURL(cordova.file.externalDataDirectory  + fileName, gotFile, fail);
	}
}

function fail(e) {
    console.log("FileSystem Error");
    console.dir(e);
}

function gotFile(fileEntry) {
	$("body").append("<a style='display:block;' href='"+fileEntry.toURL()+"'>Abrir</a>");
	// document.getElementById("smallImage").href = fileEntry.toURL();   
   //document.getElementById("iframePDF").src = fileEntry.toURL();   
    
}

</script>
<iframe id="frame1" style="display:none"></iframe>
<style>
.download-link{cursor:pointer;}</style>