<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiTransfer extends Model
{
    public $fillable = [
        'order_id', 'src'];
}