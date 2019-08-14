<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\StatusTransaksi;


use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_list = StatusTransaksi::all();
        if(auth()->user()->isAdmin()){
            $array = ['All'=>Transaction::take(10)->paginate(10), ];
            foreach($status_list as $status){
                $transaksi_qset = Transaction::where('status_id', $status->id)->get();
                if($transaksi_qset->count()>0){
                    $array[$status->name] = Transaction::where('status_id', $status->id)->
                    take(10)->paginate(10);
                }
                else{
                    
                    $array[$status->name] = $transaksi_qset;
                }
            }
        }
        else if(auth()->user()->isCustomer()){
            $transaksi_qset = Transaction::all();
            $array = ['All'=>$transaksi_qset, ];
            foreach($status_list as $status){
                $stat_transaksi = Transaction::where([
                    ['status_id', '=' ,$status->id],
                    ]);
                $array[$status->name] = $stat_transaksi;
            }
        }
        // dd($array);
        return view('transaksi', compact('status_list', 'array'));
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
