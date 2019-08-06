<?php

namespace App\Imports;

use App\Product;
use App\Imports\Image;
use App\ProductImage;
use App\Category;
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
            $category = Category::where('name', $row[9])->first();
            if(!$category){
                $category=Category::create([
                    'slug' =>'YS-'.str_random(15),
                    'name' => $row[9]
                ]);
            }

            $slug = 'YS-'.str_random(15);
            $product = Product::create([
             'name' => $row[0],
             'description' => $row[3],
             'price' => $row[1],
             'weight' => $row[2],
             'slug' => $slug,
             'stock'=> $row[10],
             'category_id' => $category->id
         ]);
         $product->save();

         for($i=4; $i<9; $i++){
            $count = $i-3;
            if(trim($row[$i]) != ''){
                $extension = pathinfo($row[$i], PATHINFO_EXTENSION);
                $filename = "{$slug}-{$count}.".$extension;
                $path = 'img/img/'.$filename;
                $file = file_get_contents($row[$i], false, stream_context_create($opts));
                $save = file_put_contents($path, $file);
                $image = ProductImage::create(['product_id' => $product->id, 'src'=>$path]);
                if($count===1){
                    $product->cover=$filename;
                    $product->save();
                }
                $product->images()->save($image);
            }
         }
        }
        return $rows;
    }
}
