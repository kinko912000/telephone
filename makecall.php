<?php
include "global.php";
require 'twilio-php-master/Services/Twilio.php';
require 'twilio-php-master/Services/*';
$numbers = array('+818054823305');
// Instntiate a client to Twilio's REST API;

$client = new Services_Twilio($sid,$token);





foreach ($numbers as $number){
    try{

        $call = $client->account->calls->create(
            $my_number, // Caller ID
            $number,    // Your friend's number
            $host.'/call.php'
        );


        echo "start call\n";
        echo "<a href='./index.php'> back to top page </a>";
    } catch(Exception $e){
        echo $e;
        echo " Error starting phone call\n";
    }


}
?>
