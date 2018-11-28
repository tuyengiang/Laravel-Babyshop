<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $filltable=[
        'id_product','name_product','count','date_add','price','price_sale','content','images',
    ];
}
