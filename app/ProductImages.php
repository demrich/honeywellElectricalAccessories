<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
      protected $fillable = [
        'name', 'productId'
    ];
}
