<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    'name',
    'description',
    'price',
    'weight',
    'image_src',
    'slug'
  ];

    public function formatPrice(){
      return "Rp. " . number_format($this->price,0,',','.');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function scopedealsOfWeek($query)
    {
        return $query->inRandomOrder()->take(9);
    }

    public function formatCart($total){
      return "Rp. " . number_format($total,0,',','.');
    }

    public function totalWeight($qty){
      $totalweight = ($qty*$this->weight)/1000;
      return $totalweight;
    }
}
