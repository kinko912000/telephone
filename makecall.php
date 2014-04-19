<?php
include "global.php";
require ("Services/Twilio.php");

//list of phone numbers imported by csv file.
/* input numbers from CSV File.

$numbers = array();
$file = 'test.csv';

$data = file_get_contents($file);
$data = mb_convert_encoding($data,'UTF-8','sjis-win');
=======
//list of phone numbers imported by csv file.


$numbers = array();
$file = 'test.csv'; 

$data = file_get_contents($file);
ta = mb=_convert_encoding($data,'UTF-8','sjis-win');
>>>>>>> 86582d2c15d0b957a9a6f0bc6e74e283db5fa6f9
$temp = tmpfile();

fwrite($temp,$data);
rewind($temp);

while(($data = fgetcsv($temp,0,",")) !== FALSE){
    $numbers[] = $data;
}
fclose($temp);
<<<<<<< HEAD
 */

// $numbers = array('xxx-xxx-xxxx','yyy-yyy-yyyy');
$numbers = array('+818054823305');
// Instntiate a client to Twilio's REST API;

$client = new Services_Twilio($sid,$token);

foreach ($numbers as $number){
    try{
        $call = $client->account->calls->create(
            $my_number,
            $number,
            $host.'/call.php'
        );
        echo "start call\n";
    } catch(Exception $e){
        echo " Error starting phone call\n";
    }

    echo 'hello';
}
?>
