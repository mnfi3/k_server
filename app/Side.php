<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Side extends Model
{
  use SoftDeletes;

  protected $fillable = ['uesr_id', 'name', 'type', 'price_small', 'price_medium', 'price_large', 'image'];
}
