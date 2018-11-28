<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $table='category_posts';
    protected $filltable=[
        'title','content','slug'
    ];
}
