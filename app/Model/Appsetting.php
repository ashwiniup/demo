<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appsetting extends Model
{
      protected $table = 'appsetting';
       protected $fillable = ['logo','small_logo','favicon'];
}
