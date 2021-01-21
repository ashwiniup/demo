<?php

namespace App\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class Supplier extends Authenticatable
{
	 use Notifiable;

    protected $table = 'supplier';

     protected $fillable = [
        'name', 'email', 'image', 'password',
    ];


     protected $hidden = [
        'password', 'remember_token',
    ];

       public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
