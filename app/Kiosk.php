<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kiosk extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'name', 'user_name', 'password', 'client_key',  'token'
  ];

  protected $hidden = [
    'password', 'token'
  ];

  public function users(){
    return $this->belongsToMany('App\User', 'user_kiosks');
  }
}
