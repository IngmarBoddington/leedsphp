<?php
require_once __DIR__ . '/vendor/autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic('XXXXX', 'XXXXX');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
'to' => '440000000000',
'from' => 'Vonage APIs',
'text' => 'Hello from Vonage SMS API'
]);