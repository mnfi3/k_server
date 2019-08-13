<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'local_id', 'user_id', 'kiosk_id', 'discount_id', 'cost', 'payment_receipt', 'local_time'
  ];

  public function content(){
    return $this->hasMany('App\OrderContent');
  }
}
