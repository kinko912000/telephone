<?php
require  ('Services/Twilio.php');
include "global.php";

$response = new Services_Twilio_Twiml();
/*

$gather = $response->gather(array(
    'action' => $host.'/process_call.php',
    'method' => 'GET',
    'numDigits' => '1'
));

$gather->say("push number you like");
*/
$response->say('こんにちは');
$response->hangup();

header('Content-type: text/xml; charset=UTF-8');
print $response;

?>
