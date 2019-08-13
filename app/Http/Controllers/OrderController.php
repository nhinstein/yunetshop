<?php

namespace App\Http\Controllers;
use App\Order;
use App\StatusOrder;
use App\TypePayment;
use App\BuktiTransfer;
use App\Transaction;
use Mail;
use DB;
use App\Mail\EmailOrderRejected;
use App\Mail\EmailOrderPaid;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->user()->name);
        $status_list = StatusOrder::all();
        if(auth()->user()->isAdmin()){
            $array = ['All'=>Order::take(10)->paginate(10), ];
            foreach($status_list as $status){
                $orders = Order::where('status_id', $status->id)->get();
                if($orders->count()>0){
                    $array[$status->name] = Order::where('status_id', $status->id)->
                    take(10)->paginate(10);
                }
                else{
                    
                    $array[$status->name] = $orders;
                }
            }
        }
        else if(auth()->user()->isCustomer()){
            $orders = Order::where('user_id', auth()->user()->id);
            $array = ['All'=>$orders->take(10)->paginate(10), ];
            foreach($status_list as $status){
                $stat_orders = Order::where([
                    ['user_id', '=' ,auth()->user()->id],
                    ['status_id', '=' ,$status->id],
                    ]);
                $array[$status->name] = $stat_orders->take(10)->paginate(10);
                
                
                // if($orders->count()>0){
                //     $array[$status->name] = $orders->where('status_id', $status->id)->
                //     take(10)->paginate(10);
                // }
                // else{
                    
                //     $array[$status->name] = $orders;
                // }
            }
        }
        // dd($array);
        return view('order\index')->with([
        'status_list'=>$status_list, 'array'=>$array]);
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
        $order = Order::where('id', $id)->firstOrFail();
        
        if(auth()->user()->isAdmin() or $order->user_id==auth()->user()->id){
        $status_list = StatusOrder::all();
        return view('order\detail')->with([
            'order'=> $order,
            'status_list'=> $status_list]);
        }
        abort(404);
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
        $order = Order::findOrFail($id);
        $order->update($request->all());
        $success_message="Berhasil Update Order";
        $orders = Order::all();
        return redirect()->route('order.show', $order->id)->with([
            'success_message'=>$success_message,
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $orders = Order::all();
        $success_message="Berhasil Update status";
        if($request->get('btnSubmit') == 'btnValid') {
            $order->status_id = 2;
            $order->save();
            Mail::send(new EmailOrderPaid($order));
        }else{
            Mail::send(new EmailOrderRejected($order));
        }
        return redirect()->route('order.index')->with([
            'success_message'=>$success_message,
        ]);
    }

    public function addTransactionOnly(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $order = Order::where('id', $id)->firstOrFail();
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
        DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
        
        $success_message="Berhasil upload Transaksi";
        return redirect()->route('order.index')->with([
            'success_message'=>$success_message,
        ]);
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
