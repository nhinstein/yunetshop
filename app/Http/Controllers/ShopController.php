<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class ShopController extends Controller
{
    //
    public function index()
    {
      // code...
      $products = Product::inRandomOrder()->take(12)->paginate(12);
      $dealsofweek = Product::dealsOfWeek()->get();
      $categories = Category::all();
      return view('shop/index')->with(['products'=> $products,
                                      'dealsofweek'=>$dealsofweek,
                                      'categories'=>$categories]);
    }

    public function show($slug){
      $product = Product::where('slug', $slug)->firstOrFail();
      $dealsofweek = Product::where('slug', '!=', $slug)->dealsOfWeek()->get();
      return view('shop/single_product')->with(['product'=> $product,
                                                'dealsofweek'=>$dealsofweek]);
    }
}
