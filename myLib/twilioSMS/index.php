<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC63c3b5ff91761b090f57e687af96c471';
$token = '18cf78cd28def443f4992fb9de62267f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message = $client->messages->create(
    // the number you'd like to send the message to
    '+91 92893 67384',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14635837636',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    ]
);

if ($message) {
    echo "Message sent!";
}else{
    echo "something Wrong!";
}
