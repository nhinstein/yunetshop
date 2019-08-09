<?php

namespace App;
use App\City;
use App\Invoice;
use App\Province;
use App\Transaction;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_code', 'user_id', 'billing_email',
    'billing_name', 'city_id', 'province_id',
    'courier', 'ongkir','billing_phone',
    'postalcode', 'subtotal', 'total', 'no_resi',
    'status_id', 'error', 'address', 'total_order'];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function invoice(){
      return $this->hasOne(Invoice::class);
    }

    public function transaction(){
      return $this->hasOne(Transaction::class);
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

    public function formatPrice($nilai){
      return "Rp. " . number_format($nilai,0,',','.');
    }

    public function status(){
      return $this->belongsTo(StatusOrder::class);
    }
}
