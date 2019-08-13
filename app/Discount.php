<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'code', 'percent', 'count', 'started_at', 'invoked_at'
  ];


  public function orders(){
    return $this->hasMany('App\Order');
  }
}
