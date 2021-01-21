<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class demo extends Model
{
      protected $table = 'demo';
       protected $fillable = ['name','email','mobile_number','password','dob','gander'];
}
