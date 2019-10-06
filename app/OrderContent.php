<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderContent extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'order_id', 'product_id', 'count', 'cost',
  ];

  public function product(){
    return $this->hasOne('App\Product');
  }


  public function desserts(){
    return $this->hasMany('App\OrderContentDessert');
  }

}
