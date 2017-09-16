<?php

// Load the Twilio helper library and our configuration file
include __DIR__ . '/Twilio/autoload.php';
include 'config.php';

use Twilio\Rest\Client;

// Create an authenticated REST client
$client = new Client($TWILIO_ACCOUNT_SID, $TWILIO_AUTH_TOKEN);


// Send a text message
$message = $client->messages->create(
    $_POST['to'], 
    array('from' => $TWILIO_NUMBER, 'body' => 'Have fun with your Twilio development!')
);

// Send a string reply back
echo 'Text message incoming!';