<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'billing_email',
    'billing_name', 'billing_city', 'billing_province',
    'billing_courier', 'billing_ongkir','billing_phone',
    'billing_postalcode', 'billing_subtotal', 'billing_total',
    'billing_shipped', 'error', 'alamat'];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function products(){
      return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
