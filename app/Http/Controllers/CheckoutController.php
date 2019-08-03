<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $api_key = "89f02b9ef4ec9bf5da2eb3167f69ba0a";
     protected $courierList = [
    'jne'       => 'Jalur Nugraha Ekakurir (JNE)',
    'pos'       => 'POS Indonesia (POS)',
    'tiki'      => 'Citra Van Titipan Kilat (TIKI)',
  ];

     public function getProvince()
     {
       $curl = curl_init();

       curl_setopt_array($curl, array(
       CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => "",
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 30,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => "GET",
       CURLOPT_FOLLOWLOCATION => TRUE,
       CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_HTTPHEADER => array(
         "key: $this->api_key"
       ),
       ));

       $response = curl_exec($curl);
       $err = curl_error($curl);

       curl_close($curl);

       if ($err) {
       echo "cURL Error #:" . $err;
       } else {
       $data = json_decode($response, true)['rajaongkir']['results'];
       for($i=0; $i < count($data); $i++){
         Province::create([
           'id' => $data[$i]['province_id'],
           'name' => $data[$i]['province'],
         ]);
       };
       }
     }

     public function getCity()
     {
       $curl = curl_init();

       curl_setopt_array($curl, array(
       CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => "",
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 30,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => "GET",
       CURLOPT_FOLLOWLOCATION => TRUE,
       CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_HTTPHEADER => array(
         "key: $this->api_key"
       ),
       ));

       $response = curl_exec($curl);
       $err = curl_error($curl);

       curl_close($curl);

       if ($err) {
       echo "cURL Error #:" . $err;
       } else {
         $data = json_decode($response, true)['rajaongkir']['results'];
         for($i=0; $i < count($data); $i++){
           City::create([
             'id' => $data[$i]['city_id'],
             'name' => $data[$i]['city_name'],
             'province_id' => $data[$i]['province_id'],
           ]);
         };
       }
     }

     public function getOngkir($destination, $courir)
     {
       $curl = curl_init();

       curl_setopt_array($curl, array(
         CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => "origin=22&destination=$destination&weight=1000&courier=$courir",
         CURLOPT_FOLLOWLOCATION => TRUE,
         CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_HTTPHEADER => array(
           "content-type: application/x-www-form-urlencoded",
           "key: $this->api_key"
         ),
       ));

       $response = curl_exec($curl);
       $err = curl_error($curl);

       curl_close($curl);

       if ($err) {
       echo "cURL Error #:" . $err;
       } else {
       return json_decode($response, true)['rajaongkir']['results'];
       }
     }

     // public function getProvince()
     // {
     //   self::rajaOngkir("https://api.rajaongkir.com/starter/province");
     // }
    public function index()
    {
        $provinces = Province::all();
        $courierlist = $this->courierList;
        return view('checkout')->with(['provinces'=> $provinces,
        'courierlist' => $courierlist]);
    }

    public function get_province(Request $request)
    {
        $cities = self::getProvince();
        return response()->json(['success' => true, 'cities' => $cities]);
    }

    public function get_city(Request $request)
    {
        // $cities = self::getCity();
        // dd($request->province);
        $cities = City::where('province_id', '=', $request->province)->get();
        // $cities = City::all();
        return response()->json(['success' => true, 'cities' => $cities]);
    }

    public function get_ongkir(Request $request)
    {
        $ongkir = self::getOngkir($request->destination, $request->courir);
        return response()->json(['success' => true, 'ongkir' => $ongkir]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
