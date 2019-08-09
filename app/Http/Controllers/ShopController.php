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
      if(request()->category){
        $category = Category::where('slug', request()->category)->firstOrFail();
        $products = Product::where('category_id', $category->id)
        ->inRandomOrder()->take(12)->paginate(12);

    }
    else{
      $products = Product::inRandomOrder()->take(12)->paginate(12);
    }
      $categories = Category::all();
      $dealsofweek = Product::dealsOfWeek()->get();
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
