<?php

namespace App;
use App\Order;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $table = 'status_order';

    public function orders()
    {
        return $this->hasMany(Order::class, 'status_id');
    }
}
