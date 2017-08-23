<?php

namespace MyAPI\Classes;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class DataGetter
 * @package MyAPI\Classes
 */
class DataGetter {

	protected $client;

	/**
	 * DataGetter constructor.
	 */
	public function __construct() {
		$this->client = new Client();
	}

	/**
	 * @return mixed
	 */
	public function getPostData() {
		try {

			$res = $this->client->request( 'GET', 'http://api.dev-php.site/v1/', [
				'headers' => [
					'User-Agent'   => 'testing/1.0',
					'Accept'       => 'application/json',
					'Content-type' => 'application/json',
					'X-Foo'        => [ 'Bar', 'Baz' ]
				]
			] );

			echo $res->getBody();
			$response = json_decode( $res->getBody(), true );

			//var_dump($response); //['version'];
			return $response;
		} catch ( RequestException $e ) {
			echo $e->getMessage();
		}
	}


	/**
	 * Basic API $_GET request
	 *
	 * @return mixed
	 */
	public function loadData() {
		try {
			try {
				$res = $this->client->request('GET', 'http://api.dev-php.site/v1/', [
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
		} catch ( RequestException $e ) {
			echo $e->getMessage();
		}
	}

	/**
	 * Basic API $_POST request
	 *
	 * Send form post to api
	 */
	public function sendPost() {
		try {
			$response = $this->client->request( 'POST', 'http://api.dev-php.site/v1/', [
				'form_params' => [
					'post_var' => $_POST['post_var']
				]
			] );
		} catch ( RequestException $e ) {
			echo $e->getMessage();
		}

	}


}