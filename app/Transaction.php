<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $fillable = [
        'type_id', 'bukti_id', 'order_id', 'no_rekening',
        'name', 'total'
    ];
}
