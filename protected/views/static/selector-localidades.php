<?php include("session-clima.php"); ?>

<select id="localidad-clima" name="localidad" class="selectLoc">
	<?php foreach($localidades as $key=>$value){ 
	if($key==$localidad){
	?>
	<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
	<?php 
	}else{
	?>
	<option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
	<?php } } ?>
</select>
<script>
$( "#localidad-clima" ).change(function() {

		$("section").hide();
		$(".loader").show();
		$.post( "http://<?php echo $_SERVER['SERVER_NAME']; if(isset($_SESSION['webRoot'])){ echo '/'.$_SESSION['webRoot'];}else{ '/';} ?><?php echo $_SESSION["short"] ?>/setClima/id/"+$(this).val(), function( data ) {
			console.log("entra   "+data);
			if(data=="1"){
				if(isApp){
					loadPage("/clima");
				}else{
					location.reload();
				}
			}
		});
});
</script>