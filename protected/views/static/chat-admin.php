<div class="col-lg-4 adminLateral" >
	<div class="info-ayuda-admin">
		<h1>AYUDA</h1>
		<p>
			Modo Admin | <a href="<?php echo Yii::app()->getBaseUrl(true)."/ar/chat/admin/"; ?>">Historial</a>
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
		</div>
	<?php } ?>

</div>
