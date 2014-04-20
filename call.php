
<?php
require  'twilio-php-master/Services/Twilio.php';
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
$response->say("push a number as you want");
$response->hangup();

header('Content-Type:text/xml');
print $response;
?>


?>
