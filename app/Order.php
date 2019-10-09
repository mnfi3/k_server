<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'local_id', 'user_id', 'kiosk_id', 'order_number', 'is_delivered', 'is_out', 'discount_id', 'cost', 'd_cost', 'local_time',
    'pan', 'req_id', 'serial_transaction', 'terminal_no', 'trace_number', 'transaction_date', 'transaction_time'
  ];

  public function content(){
    return $this->hasMany('App\OrderContent');
  }
  public function discount(){
    return $this->belongsTo('App\Dessert');
  }
}
