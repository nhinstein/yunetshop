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
    'postalcode', 'subtotal', 'total', 'no_resi',
    'status_id', 'error', 'address', 'invoice', 'total_order'];

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

    public function formatPrice($nilai){
      return "Rp. " . number_format($nilai,0,',','.');
    }

    public function status(){
      return $this->belongsTo(StatusOrder::class);
    }

    public function getPdf($type = 'stream')
      {
          $pdf = app('dompdf.wrapper')->loadView('invoice', ['order' => $this]);

          if ($type == 'stream') {
              return $pdf->stream('invoice.pdf');
          }

          if ($type == 'download') {
              return $pdf->download('invoice.pdf');
          }
      }
}
