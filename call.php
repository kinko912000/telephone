<?php
require  'twilio-php-master/Services/Twilio.php';
include "global.php";
//header('Content-type: text/xml; charset=UTF-8');

try{

	$response = new Services_Twilio_Twiml();
	$response->say('こんにちは', array('language' => 'ja-jp'));
	$response->hangup();	

	header('Content-type: text/xml; charset=utf-8');
	echo $response;

} catch(Exception $e){
    	echo $e;
}



?>
