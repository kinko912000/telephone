<?php
include "global.php";
require 'twilio-php-master/Services/Twilio.php';
$numbers = array('+818054823305');
// Instntiate a client to Twilio's REST API;

$client = new Services_Twilio($sid,$token);





foreach ($numbers as $number){
    try{

        $call = $client->account->calls->create(
            $my_number,                                 // Caller ID
            $number,                                                // Your friend's number
            $host.'/call.php'    // Location of your TwiML
        );
        echo "Started call: $call->sid\n";
        echo "start call\n";
    } catch(Exception $e){
        echo $e;
        echo " Error starting phone call\n";
    }

    echo 'hello';
}
?>
