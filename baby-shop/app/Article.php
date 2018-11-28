<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
      protected $table="posts";
      protected $filltable=[
            'title','slug','content','excerpt','slug','id_category','images'
      ];
}
