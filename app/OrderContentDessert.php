<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderContentDessert extends Model
{
  use SoftDeletes;

  protected $fillable = ['order_content_id', 'dessert_id', 'price'];


  public function dessert(){
    return $this->belongsTo('App\Dessert');
  }
}
