<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTerm extends Model
{
    protected $table="tabe_category_terms";
    protected $filltable=[
        'id_term','category_name','id_category','slug'
    ];
}
