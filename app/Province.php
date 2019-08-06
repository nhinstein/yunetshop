<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  protected $table="province";
  protected $fillable = [
  'id',
  'name',
  ];

  public function cities()
  {
      return $this->hasMany(City::class);
  }

  public function orders()
  {
      return $this->hasMany(Order::class);
  }
}
