<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       // code...
       $products = Product::inRandomOrder()->take(12)->paginate(12);
       $dealsofweek = Product::dealsOfWeek()->get();
       return view('shop/index')->with(['products'=> $products,
                                                 'dealsofweek'=>$dealsofweek]);
     }

     public function show($slug){
       $product = Product::where('slug', $slug)->firstOrFail();
       $dealsofweek = Product::where('slug', '!=', $slug)->dealsOfWeek()->get();
       return view('shop/single_product')->with(['product'=> $product,
                                                 'dealsofweek'=>$dealsofweek]);
     }
}
