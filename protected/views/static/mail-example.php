asdasdas
<?php 

Yii::import('application.extensions.phpmailer.JPhpMailer');
$mail = new JPhpMailer;
$mail->SetFrom('test@testni54.com', 'yourname');
$mail->Subject = 'PHPMailer Test Subject via smtp, basic with authentication';
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
$mail->MsgHTML('<h1>JUST A TEST!</h1>');
$mail->AddAddress('fran@ni54.com', 'Fran');
$mail->Send();

?>