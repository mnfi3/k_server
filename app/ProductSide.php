<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSide extends Model
{
  use SoftDeletes;

  protected $fillable = ['product_id', 'side_id'];
}
