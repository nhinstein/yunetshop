<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequests;
use App\Http\Requests\CheckOutPaidRequests;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ApiController;
use App\User;
use App\Province;
use App\Invoice;
use App\City;
use App\Order;
use App\OrderProduct;
use App\TypePayment;
use App\BuktiTransfer;
use App\Transaction;
use App\Product;
use Mail;
use DB;
use App\Mail\EmailOrder;
use App\Mail\RegisterGuestMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Notifications\OrderAccept;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class CheckoutController extends ApiController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public $order_obj;
    protected $courierList = [
    'jne'       => 'Jalur Nugraha Ekakurir (JNE)',
    'pos'       => 'POS Indonesia (POS)',
    'tiki'      => 'Citra Van Titipan Kilat (TIKI)',
    ];
    protected $api_key;

    public function __construct()
    {
      parent::__construct();
      $this->api_key = config('services.raja_ongkir.key');
    }
    public function index()
    {
        $provinces = Province::all();
        $courierlist = $this->courierList;
        $type_payment = TypePayment::all();
        return view('checkout')->with(['provinces'=> $provinces,
        'courierlist' => $courierlist,
        'type_payment'=>$type_payment]);
    }

    public function get_city(Request $request)
    {
        $cities = City::where('province_id', '=', $request->province)->get();
        return response()->json(['success' => true, 'cities' => $cities]);
    }

    public function get_ongkir(Request $request)
    {
        $data_ongkir = self::getCost($request->destination, $request->courir);
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
      // dd($request->get('btnSubmit'));
      DB::beginTransaction();
      try {
        if($request->get('btnSubmit') == 'btn1') {
        
          $email_exists = User::where('email', $request->email)->exists();
          if(!auth()->user() and $email_exists){
            Session::put('redirect_url', $request->url());
            Session::put('alamat', $request->alamat);
            Session::put('zip', $request->zip);
            Session::put('number', $request->number);
            Session::put('courir', $request->courir);
            Session::put('province', $request->province);
            Session::put('city', $request->city);
            Input::flash();
            // $request->flash('request',$request);
            return redirect('login')
            ->with('alert','Email sudah terdaftar silahkan login untuk melanjutkan !')
            ->with('email_account',$request->email);
  
          } else{
            // $this->order_obj = $order;
            $order = $this->addOrderTable($request);
            // auth()->user()->notify(new OrderAccept($order));
            $kode_inv = 'INV-'.str_random(20);
  
            Invoice::create([
              'kode'=>$kode_inv,
              'order_id'=>$order->id,
              'status'=>'pending'
            ]);
  
          }
      
        } else if($request->get('btnSubmit') == 'btn2') {
          $order = $this->addTransaction($request);
        }
        $this->updateStock();
        Cart::instance('default')->destroy();
        DB::commit();
        Mail::send(new EmailOrder($order));
        return redirect()->route('confirmation');
      } catch (\Exception $e) {
        DB::rollback();
        return $e->getMessage();
      }

      

    }

    public function addTransaction($request)
    {
        $order = $this->addOrderTable($request);
        $file = $request->file('t_file');
        $extension = $file->getClientOriginalExtension();
        $filename = 'IMG-'.$order->order_code.'.'.$extension;
        $path = 'img/img/'.$filename;
        $file->move('img/img/',$filename);
        // $save = file_put_contents($path, $file);
        $bukti = BuktiTransfer::create(['order_id' => $order->id, 'src'=>$path]);
        Transaction::create([
          'order_id'=>$order->id,
          'type_id'=>1,
          'name'=>$request->t_name,
          'no_rekening'=>$request->t_norek,
          'total'=>$request->t_total,
          'bukti_id'=>$bukti->id,
          'status_id'=>1,
        ]);
        
        $kode_inv = 'INV-'.str_random(20);

        Invoice::create([
          'kode'=>$kode_inv,
          'order_id'=>$order->id,
          'status'=>'pending'
        ]);
  
        // Mail::send(new EmailOrder($order));
        // $this->updateStock();
        // Cart::instance('default')->destroy();
        // return redirect()->route('confirmation');
        return $order;
    }

    public function addOrderTable($request){

      $contents = Cart::content()->map(function($item){
        return $item->model->slug.','.$item->qty;
      })->values()->toJson();
      $data_ongkir = self::getCost($request->city, $request->courir);
      $email_exists = User::where('email', $request->email)->exists();
      
      
      if(!auth()->user() and !$email_exists){
        $data = self::registerGuest($request);
        $user = $data['user'];
        $password = $data['password'];
        auth()->login($user);
        // Session::put('name',$user->email);
        // Session::put('email',$user->email);
        // Session::put('login',TRUE);
        Mail::send(new RegisterGuestMail($user, $password));
      }
      if(!auth()->user() and $email_exists){
        // dd($email_exists);
        // Session::put('redirect_url', $request->url());
        Session::put('redirect_url', $request->url());
        return redirect('login')->with('alert','Email sudah terdaftar silahkan login untuk melanjutkan !');
      }
      else{
        $user = auth()->user();
      }
      // dd($user);

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

    public function updateStock()
    {
      foreach(Cart::content() as $item){
        $product = Product::where('id', $item->model->id)->first();
        $product->update([
          'stock' => $product->stock - $item->qty
        ]);
      }
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
