<?php

namespace App;
use App\City;
use App\Province;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'billing_email',
    'billing_name', 'city_id', 'province_id',
    'courier', 'ongkir','billing_phone',
    'postalcode', 'subtotal', 'total',
    'shipped', 'error', 'address', 'invoice'];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function products(){
      return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function city(){
      return $this->belongsTo(City::class);
    }

    public function province(){
      return $this->belongsTo(Province::class);
    }
}
