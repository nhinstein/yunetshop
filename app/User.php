<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    const ADMIN_TYPE = 'admin';
    const CUSTOMER_TYPE = 'customer';
    public function isAdmin(){
    return $this->role === self::ADMIN_TYPE;
    }
    public function isCustomer(){
    return $this->role === self::CUSTOMER_TYPE;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
