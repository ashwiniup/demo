<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     protected $table = 'categories';
     protected $fillable = [
       'categories', 'title', 'slug', 'm_keywords', 'm_description','p_data',
    ];
}
