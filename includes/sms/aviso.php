<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/Twilio/autoload.php';


// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC24e4f8c3214bb9ecbbbf0282f0232ae3';
$token = '201078c6dedf291f50dd8a5777447908';
$client = new Client($sid, $token);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+598092763897',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12064893627',
        // the body of the text message you'd like to send
        'body' => "Nuevo Registro:  Nombre: $nombre $apellido celular: $celular email: $usuario Usuario Tipo : $tipo "
    )
);
 ?>