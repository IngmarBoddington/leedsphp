<?php

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client();
$repositories = $client->api('user')->repositories('ornicar');