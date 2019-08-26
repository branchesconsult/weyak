<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Portal_User extends Authenticatable
{
   use Notifiable;
    protected $table='portal_users';
    public $timestamps=false;
     protected $fillable = [
        'name', 'email', 'password',
    ];

}
