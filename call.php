<?php
require  'twilio-php-master/Services/Twilio.php';
include "global.php";
//header('Content-type: text/xml; charset=UTF-8');

try{
   	$say = 'こんにちは';
	$response = new Services_Twilio_Twiml();
	$response->say($say);
//	$response->hangup();	

//	header('Content-type: text/xml; charset=UTF-8');
	print $response;

} catch(Exception $e){
    	echo $e;
}



?>
