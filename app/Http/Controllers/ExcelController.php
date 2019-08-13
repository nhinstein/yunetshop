<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Product;
use App\Category;

class ExcelController extends Controller
{
    //
    public function importExportView()

    {
      $products = Product::inRandomOrder()->take(12)->paginate(12);
      $categories = Category::all();
      return view('product.import')->with(['products'=>$products,
      'categories'=>$categories]);
    }

    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));
        return back()->with([
          'success_message'=>'Berhasil menambahkan data',
      ]);
    }
}
