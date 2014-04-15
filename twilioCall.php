<?php
 include "global.php";
  require("Services/Twilio.php");
 
	$tel_from = $my_number; // From a Twilio number in your account : CallerID
	$tel_to = ""; // Call any number
	 
	$client = new Services_Twilio($sid, $token);
	$call = $client->account->calls->create(
			$tel_from,
			$tel_to,
			"http://localhost/testcall.php"
	);

	echo "hello";
?>