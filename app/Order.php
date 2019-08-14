<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'local_id', 'user_id', 'kiosk_id', 'discount_id', 'cost', 'd_cost', 'payment_receipt', 'local_time'
  ];

  public function content(){
    return $this->hasMany('App\OrderContent');
  }
  public function discount(){
    return $this->belongsTo('App\Dessert');
  }
}
