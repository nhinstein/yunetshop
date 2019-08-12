<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('cart');
        //
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
        $product = Product::where('id', $request->id)->firstOrFail();
        if($product->stock >= $request->qty){
            Cart::add($request->id, $request->name, $request->qty, $request->price)
            ->associate('App\Product');
            return redirect()->route('cart.index')->with(
              'success_message', 'Item berhasil ditambahkan');
        } else{
            return \Redirect::route('shop.show', [$product->slug])->with('errors', 'Stock tidak mencukupi');
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
      // Cart::update($id, ['qty' => $request->qty]);
      if($request->stock >= $request->qty){
        Cart::update($id, $request->qty);
        return response()->json(['success' => true]);
      }
      else{
        session()->flash('errors', collect(['stok tidak mencukupi']));
        return response()->json(['success' => false], 400);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item berhasil dihapus');
    }
}
