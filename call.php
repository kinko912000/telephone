<?php
require  'twilio-php-master/Services/Twilio.php';
include "global.php";
//header('Content-type: text/xml; charset=UTF-8');

$say = 'hello';
$response = new Services_Twilio($sid,$token);
$response->say($say);
$response->hangup();

header('Content-Type: text/xml');
print $response;

?>