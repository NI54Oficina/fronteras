<?php

class MailService {

   

   /* public static function sendMail($message,$destinatario) {

        $message = self::replaceMessage(MailService::$ofertaRecibidaEstablecimientoTemplate, $oferta);

        //$message = str_replace('${aceptarUrl}', Yii::app()->request->hostInfo . Yii::app()->request->baseUrl . "/ofertaItem/aceptar/" . $ofertaItem->id . "?token=" . $ofertaItem->token, $message);
		
		//$message = str_replace('{codigo}',$ofertaItem->id, $message);
        //$message = str_replace('${declinarUrl}', Yii::app()->request->hostInfo . Yii::app()->request->baseUrl . "/ofertaItem/rechazar/" . $ofertaItem->id . "?token=" . $ofertaItem->token, $message);
		
		self::sendMail($establecimiento->email, 'Nueva oferta de PoneleTuPrecio. Codigo:'.$codigo, $message, 'poneleTuPrecio@gmail.com');
    }*/

 

    public static function sendMail($email, $subject, $message, $from) {
        //$email = '=?UTF-8?B?' . base64_encode($email) . '?=';
        $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $headers = "From: $from <{$from}>\r\n" .
                "Reply-To: {$from}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=UTF-8";

        Yii::log("Mail sent to: " . var_export($email, true), CLogger::LEVEL_TRACE, __METHOD__);
        //ini_set('SMTP', 'mail.fd000473.ferozo.com');
        mail($email, $subject, $message, $headers);
    }

}

?>
