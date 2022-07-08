<?php

namespace Lushidev\ApiLocation;
use GuzzleHttp\Client;

class Test {
		public $ip;
	public function index (){
	$this->ip = '134.201.250.155';
        $client = new Client([
             'base_uri'  => getenv('API_URL_LOC'),
              'headers'   =>  [
                    $this->ip,
                    'access_key' => getenv('APILOC_KEY')
                ]
            ]);
        /*return response()->json($client);*/
        return json_decode($client->getBody());
	}
}