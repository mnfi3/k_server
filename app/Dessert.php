<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dessert extends Model
{
  use SoftDeletes;

  protected $fillable = ['user_id', 'name', 'type', 'price', 'image', 'is_available'];
}
