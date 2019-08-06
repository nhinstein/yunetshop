<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Order;
use App\OrderProduct;
use Mail;
use App\Mail\EmailOrder;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // private $api_key = Config::get('services.raja_ongkir.key');
     // private $api_key = config('services.raja_ongkir.key');
     protected $courierList = [
    'jne'       => 'Jalur Nugraha Ekakurir (JNE)',
    'pos'       => 'POS Indonesia (POS)',
    'tiki'      => 'Citra Van Titipan Kilat (TIKI)',
    ];
      protected $api_key;

      public function __construct()
      {
        $this->api_key = config('services.raja_ongkir.key');
      }

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
       return json_decode($response, true)['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
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
        $data_ongkir = self::getOngkir($request->destination, $request->courir);
        // $rep = number_format($ongkir,0,',','.');
        $sum = Cart::total() + $data_ongkir;
        $ongkir = "Rp. " . number_format($data_ongkir,0,',','.');
        $total = "Rp. " . number_format($sum,0,',','.');
        return response()->json(['success' => true, 'ongkir' => $ongkir,
        'sum'=>$total]);

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
        
        $order = $this->addOrderTable($request);
        Mail::send(new EmailOrder($order));
        Cart::instance('default')->destroy();
        return redirect()->route('confirmation');

    }

    public function addOrderTable($request){

      $contents = Cart::content()->map(function($item){
        return $item->model->slug.','.$item->qty;
      })->values()->toJson();
      $data_ongkir = self::getOngkir($request->city, $request->courir);

      $order = Order::create([
        'user_id'=> auth()->user() ? auth()->user()->id : null,
        'billing_email'=> $request->email,
        'billing_name'=> $request->name,
        'city_id'=> $request->city,
        'province_id'=> $request->province,
        'courier' => $request->courir,
        'ongkir'=> $data_ongkir,
        'billing_phone' => $request->number,
        'postalcode' => $request->zip,
        'subtotal' => Cart::subtotal(),
        'total' => Cart::total(),
        'shipped' => false,
        'address' => $request->alamat,
        'error' => null,
        'invoice' => 'INV-{str_random(20)}',
        
      ]);

      foreach(Cart::content() as $item){
        // OrderProduct::create([
        //   'order_id'=>$order->id,
        //   'product_id'=>$item->model->id,
        //   'quantity'=>$item->qty
        // ]);
        
      $order->products()->attach([
        $item->model->id => ['quantity' => $item->qty]
    ]);
      }

      return $order;

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
