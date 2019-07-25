<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable {
  use HasApiTokens,Notifiable;

  protected $fillable = [
    'name', 'phone', 'address', 'image', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];


  public function kiosks(){
    return $this->belongsToMany('App\Kiosk', 'user_kiosks');
  }

  public function categories(){
    return $this->hasMany('App\Category');
  }

  public function products(){
    return $this->hasMany('App\Product');
  }

  public function discounts(){
    return $this->hasMany('App\Discount');
  }

  public function role(){
    return $this->hasOne('App\Role');
  }
}
