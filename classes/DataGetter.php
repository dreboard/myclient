<?php
namespace MyAPI\Classes;

use GuzzleHttp\Client;
/**
 * Class DataGetter
 * @package MyAPI\Classes
 */
class DataGetter {

	public function getPosts(  ) {
		try {
			$client = new Client();

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
			//var_dump($response); //['version'];
			return $response;
		} catch (RequestException $e) {
			echo $e->getMessage();
		}
	}


}