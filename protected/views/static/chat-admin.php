<style>
section,html,body{background-color:#ebebeb;}
</style>
<script>
if (Notification.permission !== 'denied') {
 Notification.requestPermission(function (permission) {

        // Whatever the user answers, we make sure Chrome stores the information
        if(!('permission' in Notification)) {
          Notification.permission = permission;
        }
 });
}

</script>
<div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 adminLateral" >
	<div class="info-ayuda-admin">
		<h1>ADMIN AYUDA</h1>
		<p>
			<a href="<?php echo Yii::app()->getBaseUrl(true)."/ar/chat/admin/"; ?>">Historial</a>
		</div>
		</p>

<?php

$Criteria = new CDbCriteria();
$Criteria->condition = "abierto = 1";

$chats= Chat::model()->findAll($Criteria);

	foreach($chats as $chat){
	?>
		<div class="chatSelector" idChat="<?php echo $chat->id; ?>"><h3><?php echo $chat->nombre; ?></h3>
		<p class="motive"><?php echo $chat->motivo; ?></p>
		<a class="details-admin" href="<?php echo Yii::app()->getBaseUrl(true)."/ar/chat/view/".$chat->id; ?>" target="_blank">Ver detalles</a>
		<button type="button" class="closeChat">Finalizar chat</button>
		<img class="icono-chat-1" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon-chat.svg" alt="chat" />
		<img class="icono-chat-2" style="display:none" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon-chat-yellow.svg" alt="chat" />
		</div>
	<?php } ?>

</div>
<style>
.sendie{background-color:#c8c8c8 !important;padding:10px !important;}
</style>