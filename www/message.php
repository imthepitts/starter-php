<?php

// Load the Twilio helper library and our configuration file
include 'Services/Twilio.php';
include 'config.php';

// Create an authenticated REST client
$client = new Services_Twilio($TWILIO_ACCOUNT_SID, $TWILIO_AUTH_TOKEN);

// Send a text message
$message = $client->account->sms_messages->create(
    $TWILIO_NUMBER, 
    $_POST['to'], 
    'Have fun with your Twilio development!'
);

// Send a string reply back
echo 'Text message incoming!';