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