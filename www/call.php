<?php

// Load the Twilio helper library and our configuration file
include __DIR__ . '/Twilio/autoload.php';
include 'config.php';

use Twilio\Rest\Client;

// Create an authenticated REST client
$client = new Client($TWILIO_ACCOUNT_SID, $TWILIO_AUTH_TOKEN);

// Make an outbound call
$call = $client->calls->create(
    $_POST['to'], 
    $TWILIO_NUMBER, 
    array('url' => 'http://twilio-elearning.herokuapp.com/starter/voice.php')
);

// Send a string reply back
echo 'Call inbound!';