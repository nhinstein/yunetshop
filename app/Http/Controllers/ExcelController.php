<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Product;

class ExcelController extends Controller
{
    //
    public function importExportView()

    {
      $products = Product::inRandomOrder()->take(12)->paginate(12);
      return view('import')->with(['products'=>$products]);
    }

    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));
        return back();
    }
}
