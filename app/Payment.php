<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillabe = ['item_number','transaction_id',
    'currency_code','payment_status'];
}
