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
    'cover',
    'slug',
    'category_id',
    'stock'
  ];

    public function formatPrice(){
      return "Rp. " . number_format($this->price,0,',','.');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
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

    public function scopeSearch($query)
    {
        return $query->where('votes', '>', 100);
    }
}
