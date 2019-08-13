<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $api_key;
    public function __construct()
    {
      $this->api_key = config('services.raja_ongkir.key');
    }
    public function getOngkir2()

    {
        $headers = [
            // 'Content-Type' => 'application/json',
            // 'AccessToken' => $this->api_key,
            // 'Authorization' => $this->api_key,
           "content-type: application/x-www-form-urlencoded",
           "key: $this->api_key"
        ];
        $client = new Client(['verify' => false,
        'headers' => $headers]);
        // $request = $client->get('https://api.rajaongkir.com/starter/cost');
        $request = $client->get('https://api.rajaongkir.com/starter/cost', [
            'form_params' => ['origin' => '22',
            'destination'=>21,
            'weight'=>1000,
            'courier'=>'jne']]);
        $response = $request->getBody();
        dd($response);
    }

    private function http($type, $path,$params){
		$client = new Client();
		$headers = array('headers'=>array('key'=>$this->api_key));
		if($type=='post'){
			$url = $this->endpoint.$path;
			$headers['form_params'] = $params;
			$response = $client->post($url,$headers);
		}
		else{
			$url = $this->endpoint.$path.$this->query($params);
			$response = $client->get($url,$headers);
		}
		return json_encode(json_decode($response->getBody()));
    }
    private function query($params){
		return $query = is_array($params)?'?'.http_build_query($params):'';
	}
}
