<?php
require  'Services/Twilio.php';

$response = new Services_Twilio_Twiml();
$response->say("push a number as you want");
$response->hangup();

header('Content-Type:text/xml');
print $response;

?>

