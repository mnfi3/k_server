<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable {
  use HasApiTokens,Notifiable;

  protected $fillable = [
    'type', 'role', 'name', 'phone', 'address', 'image', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];



  //public functions
  public function kiosks(){
    return $this->belongsToMany('App\Kiosk', 'user_kiosks');
  }

  public function discounts(){
    return $this->hasMany('App\Discount');
  }

  public function validDiscounts(){
    $now = date('Y-m-d H:i:s');
    return $this->hasMany('App\Discount')->where('started_at', '<=', $now)
      ->where('invoked_at', '>=', $now)
      ->where('count', '>', 0);
  }



  //restaurant functions

  public function restaurantOrders(){
    return $this->hasMany('App\Order');
  }

  public function categories(){
    return $this->hasMany('App\Category');
  }

  public function products(){
    return $this->hasMany('App\Product');
  }

  public function desserts(){
    return $this->hasMany('App\Dessert');
  }
}
