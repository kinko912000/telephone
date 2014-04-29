<?php
include "global.php";
require ('Services/Twilio.php');

$choices = array(
    '1' => 'yes',
    '2' => 'no',
    '3' => 'again',
);

// check if valuse have been entered
// $_REQUEST['Digits'] = 1,2,3,4 ... 
$digit = isset($_REQUEST['Digits']) ? $_REQUEST['Digits'] : null;

if (isset($choice[$digit])){
    // mysql_query("INSERT INT `results`(`". $choices[$digit] . "`) VALUES ('1')");
    if($choice[$digit] == '1'){
        $say = 'you pushed number 1 button';
    }else if($choice[$digit] =='2'){
        $say = 'you pushed number 2 button';
    }
}else{
    if($choice[$digit] =='3'){
            //$say = 'you pushed number 3 button';
         echo '<form action="./call.php" method="post"> ';
    }else{
        $say = "sorry , I cannot find your number . try again.";
        $response->say($say);
        echo '<form action="./call.php" method="post"> ';
    }
}


// output

$response = new Services_Twilio_Twiml();
$response->say($say);
$response->hangup();
header('Content-Type: text/xml');
print $response;

?>
