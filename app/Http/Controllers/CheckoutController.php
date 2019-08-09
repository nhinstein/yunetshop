<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use App\Province;
use App\Invoice;
use App\City;
use App\Order;
use App\OrderProduct;
use App\TypePayment;
use App\BuktiTrasfer;
use Mail;
use App\Mail\EmailOrder;
use App\Mail\RegisterGuestMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Notifications\OrderAccept;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // private $api_key = Config::get('services.raja_ongkir.key');
     // private $api_key = config('services.raja_ongkir.key');
     public $order_obj;
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
        $type_payment = TypePayment::all();
        return view('checkout')->with(['provinces'=> $provinces,
        'courierlist' => $courierlist,
        'type_payment'=>$type_payment]);
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
        $this->order_obj = $order;
        // auth()->user()->notify(new OrderAccept($order));
        $kode_inv = 'INV-'.str_random(20);

        Invoice::create([
          'kode'=>$kode_inv,
          'order_id'=>$order->id,
          'status'=>'pending'
        ]);

        Mail::send(new EmailOrder($order));
        Cart::instance('default')->destroy();
        return redirect()->route('confirmation');

    }

    public function addTransaction(Request $request, Order $order)
    {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName().'.'.$extension;
        $path = 'img/img/'.$filename;
        $save = file_put_contents($path, $file);
        $bukti = BuktiTrasfer::create(['order_id' => $order->id, 'src'=>$path]);
        Transaction::create([
          'order_id'=>$order->id,
          'type_id'=>1,
          'name'=>$request->name,
          'no_rekening'=>$request->no_rekening,
          'total'=>$request->total,
          'bukti_id'
        ]);
  
        Mail::send(new EmailOrder($order));
        Cart::instance('default')->destroy();
        return redirect()->route('confirmation');

      

    }

    public function addOrderTable($request){

      $contents = Cart::content()->map(function($item){
        return $item->model->slug.','.$item->qty;
      })->values()->toJson();
      $data_ongkir = self::getOngkir($request->city, $request->courir);
      
      if(!auth()->user()){
        $data = self::registerGuest($request);
        $user = $data['user'];
        $password = $data['password'];
        Mail::send(new RegisterGuestMail($user, $password));
      }
      else{
        $user = auth()->user();
      }
      
      // auth()->login($user);
      // Session::put('name',$user->email);
      // Session::put('email',$user->email);
      // Session::put('login',TRUE);

      $order = Order::create([
        'order_code'=>str_random(20),
        'user_id'=>$user->id,
        'billing_email'=> $request->email,
        'billing_name'=> $request->name,
        'city_id'=> $request->city,
        'province_id'=> $request->province,
        'courier' => $this->courierList[$request->courir],
        'ongkir'=> $data_ongkir,
        'billing_phone' => $request->number,
        'postalcode' => $request->zip,
        'subtotal' => Cart::subtotal(),
        'total' => Cart::total(),
        'address' => $request->alamat,
        'error' => null,
        // 'invoice' => 'INV-'.str_random(20),
        'status_id' => 1,
        'total_order' => Cart::total()+$data_ongkir,   
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
    
  public function registerGuest($request)
  {
      $this->validate(request(), [
          'email' => 'required|email|unique:users',
          'name' => 'required|',
      ]);
      $password = str_random(5);
      $name = $request->name;
      $email = $request->email;

      $user = User::create([
        'name'=> $name, 
        'email'=>$email, 
        'password'=>$password]);
      $user->role ='customer';
      $user->save();

      return ['user' =>$user,
        'password'=>$password];
  }
}
