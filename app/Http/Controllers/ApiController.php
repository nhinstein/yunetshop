<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $api_key;
    protected $endpoint;
    public function __construct()
    {
      $this->api_key = config('services.raja_ongkir.key');
      $this->endpoint = 'https://api.rajaongkir.com/starter/';
    }

    // fungsi untuk mengambil data provinsi

    public function getAllProvince()
     {
        $headers = [
          "key"=>''.$this->api_key
        ];
        $client = new Client(['headers'=>$headers]);
        $request = $client->get($this->endpoint.'/province');
        $status = $request->getStatusCode();
        $response = $request->getBody();
        $hasil = json_decode($response, true);
        if($status==200){
          $data= json_decode($response, true)['rajaongkir']['results'];
          /*kode dibawah dikoment, hanya untuk load semua data ke tabel province
          sekarang tidak digunakan karena menggunakan seed, hanya digunakan pertama kali saja*/
          // for($i=0; $i < count($data); $i++){
          // Province::create([
          //   'id' => $data[$i]['province_id'],
          //   'name' => $data[$i]['province'],]);
          // };
          return data;
        }
     }

    //  fungsi untuk ambil semua data city
     public function getAllCity()
      {
         $headers = [
           "key"=>''.$this->api_key
         ];
         $client = new Client(['headers'=>$headers]);
         $request = $client->get($this->endpoint.'/city');
         $status = $request->getStatusCode();
         $response = $request->getBody();
         $hasil = json_decode($response, true);
         if($status==200){
           $data = json_decode($response, true)['rajaongkir']['results'];
           /*kode dibawah dikoment, hanya untuk load semua data ke tabel city
          sekarang tidak digunakan karena menggunakan seed, hanya digunakan pertama kali saja*/
          //  for($i=0; $i < count($data); $i++){
          //   City::create([
          //     'id' => $data[$i]['city_id'],
          //     'name' => $data[$i]['city_name'],
          //     'province_id' => $data[$i]['province_id'],
          //   ]);
          //   };
           return data;
         }
      }

    // fungsi untuk kalkulasi hasil ongkir
    public function getCost($destination, $courier)
    {
        $headers = [
           "content-type"=>"application/x-www-form-urlencoded",
           "key"=>''.$this->api_key
        ];
        $client = new Client(['headers'=>$headers]);
        $params = array('origin'=>22, 'destination'=>$destination, 'weight'=>1000, 'courier'=>$courier);
        $request = $client->post($this->endpoint.'/cost', [
            'form_params' => $params]);
        $status = $request->getStatusCode();
        // dd($status);
        $response = $request->getBody();
        $hasil = json_decode($response, true);
        if($status==200){
          return json_decode($response, true)['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
        }
    }
}
