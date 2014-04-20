<?php
require  'twilio-php-master/Services/Twilio.php';
include "global.php";
//header('Content-type: text/xml; charset=UTF-8');

try{
   	$say = 'hello';
	$response = new Services_Twilio($sid,$token);
	$response->say($say);
	$response->hangup();

	header('Content-Type: text/xml');
	print $response;

} catch(Exception $e){
    	echo $e;
    	echo " call.php\n";
}



?>