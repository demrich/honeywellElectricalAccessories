<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable=[
        "categorieId","parentId","name"
    ];
}
