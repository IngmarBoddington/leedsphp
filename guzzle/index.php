<?php
// composer require guzzlehttp/guzzle
require "vendor/autoload.php";

$client = new GuzzleHttp\Client(["base_uri" => "https://api.github.com/"]);

try {
    //$response = $client->get("/users/ingmarboddington/repos");

    $request = new \GuzzleHttp\Psr7\Request('GET', 'users/ingmarboddington/repos?per_page=3');
    $opts = [
        'headers' => [
            'Accept' => 'application/vnd.github.nebula=preview+json'
        ]
    ];
    $response = $client->send($request, $opts);

    if ($response->getStatusCode() == 200) {
        $json = $response->getBody();
        $data = json_decode((string)$json, true);
        print_r($data);
    }

} catch (Exception $e) {
    print_r($e);
}