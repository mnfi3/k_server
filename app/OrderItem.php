<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'order_id', 'product_id', 'count', 'cost',
  ];

  public function product(){
    return $this->belongsTo('App\Product');
  }

}
