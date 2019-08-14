<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BuktiTransfer;
use App\TypePayment;
use App\StatusTransaksi;
use App\Order;

class Transaction extends Model
{
    public $fillable = [
        'type_id', 'bukti_id', 'order_id', 'no_rekening',
        'name', 'total', 'status_id'
    ];

    public function type(){
      return $this->belongsTo(TypePayment::class);
    }

    public function status(){
      return $this->belongsTo(StatusTransaksi::class);
    }

    public function order(){
      return $this->belongsTo(Order::class);
    }

    public function setAccepted()
    {
        $this->attributes['status_id'] = 2;
        self::save();
    }

    public function setRejected()
    {
        $this->attributes['status_id'] = 3;
        self::save();
    }

}
