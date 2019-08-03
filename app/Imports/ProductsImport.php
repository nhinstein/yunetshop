<?php

namespace App\Imports;

use App\Product;
use App\Imports\Image;
use App\ProductImage;
use DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductsImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows){
        $opts = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"Accept-language: en\r\n" .
                "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:23.0) Gecko/20100101 Firefox/23.0\r\n" .
            "Referer: http://www.funnyjunk.com\r\n"
            )
        );
        foreach($rows as $row){
            $product = Product::create([
             'name' => $row[0],
             'description' => $row[3],
             'price' => $row[1],
             'weight' => $row[2],
             'slug' => $row[5],
             'image_src' => $row[4],
         ]);
         $product->save();
        $extension = pathinfo($row[6], PATHINFO_EXTENSION);
        $filename = $row[4];
        $path = 'img/img/'.$filename;
        $file = file_get_contents($row[6], false, stream_context_create($opts));
        $save = file_put_contents($path, $file);
        $image = ProductImage::create(['product_id' => $product->id, 'src'=>$path]);
        $product->images()->save($image);
        //  Image::make('http://f2b9x.s87.it/images/1/FR_laura-kithorizontal.gif')->save(public_path(`img/{$row[4]}`));
        }
        return $rows;
    }
}
