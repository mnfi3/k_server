<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'category_id', 'is_side', 'name', 'price', 'discount_percent', 'description', 'image', 'is_suggest', 'is_available'
  ];



}
