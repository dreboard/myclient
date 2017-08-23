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

$getReq = (new MyAPI\Classes\DataGetter)->loadData();

