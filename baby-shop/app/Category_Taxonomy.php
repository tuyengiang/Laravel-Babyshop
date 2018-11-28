<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category_Taxonomy extends Model
{
    protected $table='category_taxonomy';
    protected $filltable=[
        'id_category','name_category',
    ];
    
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_category'
            ],
        ];
    }
}
