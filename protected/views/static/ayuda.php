<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
<<<<<<< HEAD
<?php

$conf = new PermissionChecker;
$columnChat="col-lg-12 col-md-12 col-sm-12 col-xs-12";
$admin=$conf->CheckUrl("ayuda");
if($admin ){
	$columnChat="col-lg-8 col-md-8 col-sm-12 col-xs-12";
?>
<div class="col-lg-4" style="background-color:red;color:white;">Modo Admin

<?php 

$Criteria = new CDbCriteria();
$Criteria->condition = "abierto = 1";

$chats= Chat::model()->findAll($Criteria);

	foreach($chats as $chat){
	?>
		<div class="chatSelector" idChat="#chatSession<?php echo $chat->id; ?>"><h3><?php echo $chat->nombre; ?></h3>
		<p><?php echo $chat->motivo; ?></p>
		</div>
	<?php } ?>

</div>
<?php } ?>
=======

<div class="col-xs-12 hidden-lg hidden-sm hidden-md hidden-xl titulo-mobile-ayuda titulo-mobile"> <p> Ayuda </p> </div>
>>>>>>> origin/master
	
	<div class="<?php echo $columnChat; ?>" style="text-align:center;">
	 <h1>  - AYUDA -</h1>
	 <?php include("chat-screen.php"); ?>
	 <?php 
	 if($admin){
	 foreach($chats as $chat){ ?>
			
		
			<div id="chatSession<?php echo $chat->id; ?>" class="chat">
				<div class="chatZone" name="chatZone"></div>
				<form>
					<label for="msg" style="float:left">Message:</label>
					<input type="text" class="msg" name="msg" autofocus="true" placeholder="Type Your Meassage Here" />
					<input type="submit" />
				</form>
			</div>
			<script>
			
			chatSessions.push("#chatSession<?php echo $chat->id; ?>");
			</script>
	 <?php } }else{ ?>
		 
		Ingrese sus datos para comenzar a chatear
		<form id="datosUser">
		<label>Nombre:</label>
		<input name="nombre" required /><br>
		<label>Email:</label>
		<input name="email" required /><br>
		<label>Motivo:</label>
		<textarea name="motivo" required ></textarea>
		<input type="submit" />
		</form>
		
		<div id="" class="chat chatUser" style="display:none;">
			<div class="chatZone" name="chatZone"></div>
			<form>
				<label for="msg" style="float:left">Message:</label>
				<input type="text" class="msg" name="msg" autofocus="true" placeholder="Type Your Meassage Here" />
				<input type="submit" />
			</form>
		</div>
		 
	 <?php } ?>
	 </div>
</section>