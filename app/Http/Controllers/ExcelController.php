<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function importExportView()

    {
      return view('import');
    }

    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));
        return back();
    }
}
