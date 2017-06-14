<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once __DIR__.'/../vendor/autoload.php';

spl_autoload_register(function($class){
    require_once __DIR__.'/..classes/'.$class.'.php';
});

$acceptable_codes = [200, 201, 202];

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = "localhost";
$config['db']['user']   = "root";
$config['db']['pass']   = "";
$config['db']['dbname'] = "api_db";


use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

try {
    $client = new \GuzzleHttp\Client();

    $res = $client->request('GET', 'http://localhost/myapi/public/v1/', [
        'headers' => [
            'User-Agent' => 'testing/1.0',
            'Accept'     => 'application/json',
            'Content-type'     => 'application/json',
            'X-Foo'      => ['Bar', 'Baz']
        ]
    ]);

    //echo $res->getBody();
    $response = json_decode($res->getBody(), true);
    echo $response['version'];
} catch (RequestException $e) {
    echo $e->getMessage();
}


