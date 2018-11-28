<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductWeight extends Model
{
    protected $table="product_weight";
    protected $filltable=[
        'age','height','size','weight'
    ];
    
}
