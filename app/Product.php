<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'category_id', 'name', 'price', 'd_price', 'description', 'image'
  ];


  public function sides(){
    return $this->belongsToMany('App\Side', 'product_sides');
  }
}
