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
      $products = Product::all();
      return view('import')->with(['products'=>$products]);
    }

    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));
        return back();
    }
}
