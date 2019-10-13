<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'category_id', 'name', 'price', 'discount_percent', 'description', 'image', 'is_available'
  ];


  public function desserts(){
    return $this->belongsToMany('App\Dessert', 'product_desserts');
  }
}
