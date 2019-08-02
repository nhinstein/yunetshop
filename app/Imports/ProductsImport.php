<?php

namespace App\Imports;

use App\Product;
use App\ProductImage;
use DB;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row){

    //   $opts = array(
    //   'http'=>array(
    //     'method'=>"GET",
    //     'header'=>"Accept-language: en\r\n" .
    //         "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:23.0) Gecko/20100101 Firefox/23.0\r\n" .
    //     "Referer: http://www.funnyjunk.com\r\n"
    //     )
    //   );
    //
    // foreach ($rows as $row) {
    //    $extension = pathinfo($row[6], PATHINFO_EXTENSION);
    //    $filename = str_random(4).'-'.str_slug($row[5]).'.'. $extension;
    //    $file = file_get_contents($row[6], false, stream_context_create($opts));
    //    $save = file_put_contents('img/img/'.$filename, $file);
         // dd($row);
         $product = New Product([
             'name' => $row[0],
             'description' => $row[3],
             'price' => $row[1],
             'weight' => $row[2],
             'slug' => $row[5],
             'image_src' => $row[4],
         ]);

    // }
    // {
    //
    //    //
    //    // // $product->save();
    //    // ProductImage::create([
    //    //   'product_id' => $product->id,
    //    //   'src' => $row[4],
    //    // ]);
    //    //
    //    // $images = $product->images()->ProductImage::create([
    //    //   'src' => $row[4],
    //    // ]);
       return $product;
    }
}
