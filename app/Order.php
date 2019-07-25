<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'discount_code', 'cost', 'payment_receipt', 'local_time'
  ];

  public function content(){
    return $this->hasMany('App\OrderContent');
  }
}
