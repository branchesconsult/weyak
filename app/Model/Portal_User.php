<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portal_User extends Model
{
    protected $table='portal_users';
    public $timestamps=false;
     protected $fillable = [
        'name', 'email', 'password',
    ];

}
