<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
        "id","productId","name","description","thumbnail","categoryId","price","sku","url","salePrice","saleStatus","active","position"
    ];
}
