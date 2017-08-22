<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once __DIR__.'/../vendor/autoload.php';

// Configure HTMLPurifier
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

// Register Autoloader
spl_autoload_register(function($class){
	require_once __DIR__.'/..classes/'.$class.'.php';
});

// Import global settings
$config = require __DIR__ . '/../config/settings.php';
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

try {
	$client = new \GuzzleHttp\Client();

	$res = $client->request('GET', 'http://api.dev-php.site/v1/', [
		'headers' => [
			'User-Agent' => 'testing/1.0',
			'Accept'     => 'application/json',
			'Content-type'     => 'application/json',
			'X-Foo'      => ['Bar', 'Baz']
		]
	]);

	echo $res->getBody();
	$response = json_decode($res->getBody(), true);
	var_dump($response); //['version'];
} catch (RequestException $e) {
	echo $e->getMessage();
}