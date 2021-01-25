<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staticpages extends Model
{
     protected $table = 'static_pages';
     protected $fillable = [
        'page_name', 'slug', 'm_keywords', 'm_description','page_description',
    ];
}
